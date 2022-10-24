<div class="modal" tabindex="-1" role="dialog" id="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">SMS "Ok" to 9723</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>

        Once you subscribed to our website or service you can use for free for 3 days then will charge 1 birr per day untill you send unsubscription request .
        you can send unsubscribe request by clicking "unsubscribe" link on the home page.
        </p>
      </div>
      <div class="modal-footer">
          <a href="sms://9723&body=ok" class="btn btn-outline-primary">Send a SMS Ok
              Now</a>
      </div>
    </div>
  </div>
</div>
<!--========  header area =========-->
<header class="header-four position--absolute">

    <div class="header-bottom-area">
        <div class="container">
            <div class="header-style-center">
                <div class="logo">
                    <a href="/">
                        <img src="/assets/images/logo/logo-4.png" alt="" />
                        <p class="text-white">MT ICT Technology Plc.</p>
                    </a>
                </div>
                <div class="main-menu-area text-center">
                    <nav class="navigation-menu navigation-menu-white">
                        <ul>
                            <li class="active">
                                <a href="/"><span>{{__('Home')}}</span></a>

                            </li>
                            <li>
                                <a href="/about"><span>{{__('About')}}</span></a>
                            </li>
                            <li class="has-children"><a href="/blog"><span>{{__('Articles')}}</span></a>
                                <ul class="submenu">
                                    <li><a href="/blog"><span>{{__('All')}} {{__('Articles')}}</span></a> </li>
                                    @foreach(\App\Models\BlogCategory::allCategories() as $category)
                                    <li><a href="/category/{{$category->slug}}"><span>{{__($category->title)}}</span></a> </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="">
                                <a href="/video"><span>{{__('Videos')}}</span></a>

                            </li>
                            <li><a href="/contact"><span>{{__('Contact')}} </span></a></li>
                            <li class="has-children">
                                <a class="" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Config::get('languages')[App::getLocale()] }}
                                </a>
                                <div class="submenu"  >
                                    @foreach (Config::get('languages') as $lang => $language)
                                        @if ($lang != App::getLocale())
                                            <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"> {{__($language)}}</a>
                                        @endif
                                    @endforeach
                                </div>
                            </li>

                        </ul>
                    </nav>
                </div>
                <div class="header-four-right-side">



                    @if (Route::has('login'))

                        @auth
                            <li>
                            <a href="{{ url('/profile') }}" class="sign-up-action-button btn-medium btn">{{__('Home')
                            }}
                            </a>
                            </li>

                            <li>
                                <a href="{{ route('logout') }}" class="sign-up-action-button btn-medium btn"
                                   onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                                    <i class="fa fa-power-off"></i>  <span class="fas fa-power-off">Logout</span>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                </a>
                            </li>
                        @else
                            <a href="{{ route('login') }}" class="sign-up-action-button btn-medium btn">{{__('Login')}}</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="sign-up-action-button btn-medium btn">{{__('Register')}}</a>
                        @endif
                    @endauth

                @endif



                <!-- mobile menu -->
                    <div class="mobile-navigation-icon icon-white d-block d-lg-none" id="mobile-menu-trigger">
                        <i></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--======== End of header area  =========-->


