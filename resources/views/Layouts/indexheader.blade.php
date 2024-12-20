<div class="uk-section uk-padding-remove-vertical in-header-inverse ">
    <nav class="uk-navbar-container uk-navbar-transparent" data-uk-sticky="show-on-up: true; top: 80; animation: uk-animation-fade">
        <div class="uk-container" data-uk-navbar>
            <div class="uk-navbar-left uk-width-expand uk-flex uk-flex-between">
                <a class="uk-navbar-item uk-logo" href="/" data-logo-inverse="filename: header-logo-WeY2ag.svg" >
                    <img src="img/user/header-logo-EelGlt.svg" alt="logo" width="134" height="23">
                </a>
                <ul class="uk-navbar-nav uk-visible@m">
                    <li><a href="/">{{ __('public.home')}}</a></li>
                    <li><a href="/about">{{ __('public.about')}}</a></li>
                    <li><a href="/service">{{ __('public.service')}}</a></li>
                    <li><a href="/insight">{{ __('public.insight')}}</a></li>
                    <li><a href="/performance">{{ __('public.performance')}}<span data-uk-navbar-parent-icon></span></a>
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="/performance">{{ __('public.performance')}}</a></li>
                                {{-- <li><a href="/performance2">Performance 2</a></li> --}}
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
                    {{-- <li><a href="/contact">Contact</a></li> --}}
                </ul>
            </div>
            <div class="uk-navbar-right uk-width-auto">
                <ul class="uk-navbar-nav uk-visible@m">
                    <li>
                        <div class="in-optional-nav">
                            {{-- <a href="signin.html" class="uk-button uk-button-text"><i class="fas fa-user-circle uk-margin-small-right"></i>Log in</a> --}}
                            <a href="{{ route('contact', app()->getLocale()) }}" class="uk-button uk-button-primary uk-button-small uk-border-pill uk-margin-medium-left">{{ __('public.contact')}}</a>
                        </div>
                    </li>
                    <li>
                        <div class="language-dropdown">
                            <a class="fas fa-globe fa-lg uk-margin-small-left"></a>
                            <div class="uk-navbar-dropdown" uk-drop="pos: bottom; offset: 50">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="{{ route('locale', 'en') }}">English</a></li>
                                    <li><a href="{{ route('locale', 'cn') }}">Chinese</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
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
                            <a class="uk-margin-right" href="/contact"><i class="fas fa-comment-alt uk-margin-small-right"></i>{{ __('public.contact')}}</a>
                            <a href="#"><i class="fas fa-phone-alt uk-margin-small-right uk-margin-small-left"></i>1-800-123-4567</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  