<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:180'],
            'phone' => ['nullable', 'string', 'max:40'],
            'interest' => ['nullable', 'string', 'max:40'],
            'travel_date' => ['nullable', 'string', 'max:80'],
            'guests' => ['nullable', 'integer', 'min:1', 'max:100'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        Inquiry::query()->create([
            ...$data,
            'status' => 'new',
            'ip_address' => $request->ip(),
            'user_agent' => substr((string) $request->userAgent(), 0, 255),
        ]);

        return redirect()
            ->to(url('/contact').'#contact-form')
            ->with('success', 'Thank you! Your enquiry was sent. We will reply soon on WhatsApp or email.');
    }
}
