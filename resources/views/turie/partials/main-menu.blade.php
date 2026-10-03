                     <nav class="tp-mobile-menu-active">
                        <ul>
                           <li class="{{ request()->is('/') ? 'active' : '' }}">
                              <a href="{{ url('/') }}">Home</a>
                           </li>
                           <li class="{{ request()->is('about') ? 'active' : '' }}">
                              <a href="{{ url('/about') }}">About Us</a>
                           </li>
                           <li class="has-dropdown {{ request()->is('tours', 'tours/*', 'tour/*', 'tour-grid') ? 'active' : '' }}">
                              <a href="{{ route('tours.index') }}">Tours</a>
                              <ul class="sub-menu">
                                 <li><a href="{{ route('tours.index') }}">All Tours</a></li>
                                 @foreach (\App\Models\Tour::CATEGORIES as $menuSlug => $menuLabel)
                                    <li><a href="{{ route('tours.category', $menuSlug) }}">{{ $menuLabel }}</a></li>
                                 @endforeach
                              </ul>
                           </li>
                           <li class="{{ request()->routeIs('tours.finder') ? 'active' : '' }}">
                              <a href="{{ route('tours.finder') }}">Find Your Tour</a>
                           </li>
                           <li class="{{ request()->is('contact') ? 'active' : '' }}">
                              <a href="{{ url('/contact') }}">Contact</a>
                           </li>
                        </ul>
                     </nav>
