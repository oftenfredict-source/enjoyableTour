                     <nav class="tp-mobile-menu-active">
                        <ul>
                           <li class="{{ request()->is('/') ? 'active' : '' }}">
                              <a href="{{ url('/') }}" data-i18n="nav.home">Home</a>
                           </li>
                           <li class="{{ request()->is('about') ? 'active' : '' }}">
                              <a href="{{ url('/about') }}" data-i18n="nav.about">About Us</a>
                           </li>
                           <li class="has-dropdown {{ request()->is('tours', 'tours/*', 'tour/*', 'tour-grid') ? 'active' : '' }}">
                              <a href="{{ route('tours.index') }}" data-i18n="nav.tours">Tours</a>
                              <ul class="sub-menu">
                                 <li><a href="{{ route('tours.index') }}" data-i18n="nav.all">All Tours</a></li>
                                 @foreach (\App\Models\Tour::CATEGORIES as $menuSlug => $menuLabel)
                                    <li><a href="{{ route('tours.category', $menuSlug) }}" data-i18n="nav.{{ $menuSlug }}">{{ $menuLabel }}</a></li>
                                 @endforeach
                              </ul>
                           </li>
                           <li class="{{ request()->routeIs('tours.finder') ? 'active' : '' }}">
                              <a href="{{ route('tours.finder') }}" data-i18n="nav.find">Find Your Tour</a>
                           </li>
                           <li class="has-dropdown {{ request()->routeIs('plan.*', 'parks.*') ? 'active' : '' }}">
                              <a href="{{ route('plan.index') }}" data-i18n="nav.plan">Plan</a>
                              <ul class="sub-menu">
                                 @foreach (\App\Support\PlanningData::tools() as $planKey => $planTool)
                                    @if ($planKey !== 'hub')
                                       <li><a href="{{ $planTool['url'] }}" data-i18n="tool.{{ $planKey }}">{{ $planTool['label'] }}</a></li>
                                    @endif
                                 @endforeach
                              </ul>
                           </li>
                           <li class="{{ request()->is('contact') ? 'active' : '' }}">
                              <a href="{{ url('/contact') }}" data-i18n="nav.contact">Contact</a>
                           </li>
                        </ul>
                     </nav>
