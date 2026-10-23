<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class InquiryController extends Controller
{
    public function index(Request $request): View
    {
        $status = $request->string('status')->toString();

        $inquiries = Inquiry::query()
            ->when(in_array($status, array_keys(Inquiry::STATUSES), true), fn ($q) => $q->where('status', $status))
            ->latest()
            ->paginate(20)
            ->withQueryString();

        $counts = [
            'all' => Inquiry::query()->count(),
            'new' => Inquiry::query()->where('status', 'new')->count(),
            'read' => Inquiry::query()->where('status', 'read')->count(),
            'archived' => Inquiry::query()->where('status', 'archived')->count(),
        ];

        return view('admin.inquiries.index', compact('inquiries', 'counts', 'status'));
    }

    public function show(Inquiry $inquiry): View
    {
        $inquiry->markRead();

        return view('admin.inquiries.show', compact('inquiry'));
    }

    public function update(Request $request, Inquiry $inquiry): RedirectResponse
    {
        $data = $request->validate([
            'status' => ['required', 'in:new,read,archived'],
        ]);

        $inquiry->status = $data['status'];
        if ($data['status'] === 'read' && ! $inquiry->read_at) {
            $inquiry->read_at = now();
        }
        if ($data['status'] === 'new') {
            $inquiry->read_at = null;
        }
        $inquiry->save();

        return back()->with('success', 'Inquiry status updated.');
    }

    public function destroy(Inquiry $inquiry): RedirectResponse
    {
        $inquiry->delete();

        return redirect()
            ->route('admin.inquiries.index')
            ->with('success', 'Inquiry deleted.');
    }
}
