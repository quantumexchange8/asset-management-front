<div class="uk-section uk-padding-remove-vertical in-header-inner uk-background-cover uk-background-top-center" style="background-image: url(img/in-wave-background-1.png);">
    <nav class="uk-navbar-container uk-navbar-transparent" data-uk-sticky="show-on-up: true; top: 80; animation: uk-animation-fade">
        <div class="uk-container" data-uk-navbar>
            <div class="uk-navbar-left uk-width-expand uk-flex uk-flex-between">
                <a class="uk-navbar-item uk-logo" href="/"  data-logo-inverse="filename: header-logo-WeY2ag.svg; sticky-only: true">
                    <img src="img/user/header-logo-EelGlt.svg" alt="logo" width="134" height="23">
                </a>
                <ul class="uk-navbar-nav uk-visible@m">
                    <li>
                        <a href="/" class="{{ Request::is('/') ? 'active' : '' }}">Home</a>
                    </li>
                    <li>
                        <a href="/about" class="{{ Request::is('about') ? 'active' : '' }}">About</a>
                    </li>
                    <li>
                        <a href="/service" class="{{ Request::is('service') ? 'active' : '' }}">Service</a>
                    </li>
                    <li>
                        <a href="/insight" class="{{ Request::is('insight') ? 'active' : '' }}">Insight</a>
                    </li>
                    <li>
                        <a href="/performance" class="{{ Request::is('performance') || Request::is('performance2') ? 'active' : '' }}">
                            Performance<span data-uk-navbar-parent-icon></span>
                        </a>
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="/performance" class="{{ Request::is('performance') ? 'active' : '' }}">Performance 1</a></li>
                                {{-- <li><a href="/performance2" class="{{ Request::is('performance2') ? 'active' : '' }}">Performance 2</a></li> --}}
                            </ul>
                        </div>
                    </li>
                    {{-- <li><a href="/resources">Resources<span data-uk-navbar-parent-icon></span></a>
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="/faq">FAQs</a></li>
                                <li><a href="/news">News</a></li>
                            </ul>
                        </div>
                    </li> --}}
                    {{-- <li><a href="/contact" class="{{ Request::is('contact') ? 'active' : '' }}">Contact</a></li> --}}
                </ul>
            </div>
            <div class="uk-navbar-right uk-width-auto">
                <div class="uk-navbar-item uk-visible@m">
                    <div class="in-optional-nav">
                        {{-- <a href="signin.html" class="uk-button uk-button-text"><i class="fas fa-user-circle uk-margin-small-right"></i>Log in</a> --}}
                        <a href="/contact" class="uk-button uk-button-primary uk-button-small uk-border-pill uk-margin-small-left">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1">
                <div class="uk-card uk-card-secondary uk-card-small uk-card-body uk-border-rounded">
                    <div class="uk-grid uk-text-small" data-uk-grid>
                        <div class="uk-width-3-4@m uk-visible@m">
                            <p>Trading involves substantial risk and may result in the loss of your invested/greater that your invested capital, respectively.</p>
                        </div>
                        <div class="uk-width-expand@m uk-text-center uk-text-right@m">
                            <a class="uk-margin-right" href="/contact"><i class="fas fa-comment-alt uk-margin-small-right"></i>Contact Us</a>
                            <a href="#"><i class="fas fa-phone-alt uk-margin-small-right uk-margin-small-left"></i>1-800-123-4567</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- breadcrumb content begin -->
            <div class="uk-section uk-padding-remove-vertical in-wave-breadcrumb">
                <div class="uk-container">
                    <div class="uk-grid">
                        <div class="uk-width-1-1">
                            <ul class="uk-breadcrumb-1">
                                <a href="{{ route('home') }}">Home</a> 
                                <span> >></span> 
                                @if (Route::currentRouteName() == 'about')
                                    <span class="active">About</span>
                                @elseif (Route::currentRouteName() == 'service')
                                    <span class="active">Service</span>
                                @elseif (Route::currentRouteName() == 'insight')
                                    <span class="active">Insight</span>
                                @elseif (Route::currentRouteName() == 'performance')
                                    <span class="active">Performance</span> 
                                @elseif (Route::currentRouteName() == 'performance2')
                                    <span class="active">Performance 2</span> 
                                @elseif (Route::currentRouteName() == 'contact')
                                    <span class="active">Contact</span> 
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- breadcrumb content end -->
        </div>
    </div>
</div>  
