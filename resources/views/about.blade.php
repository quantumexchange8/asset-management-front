@extends('Layouts.master')
@section('title', __('public.about_us'))
@section('header')
    @include('Layouts.header')
@endsection
@section('contents')
<main>
    <!-- section content begin -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <h1>{{ __('public.our_company') }}</h1>
                    <p class="uk-text-lead uk-text-muted uk-margin-small-top">{{ __('public.company_intro') }}</p>

                    <div class="uk-grid uk-child-width-1-2@m uk-grid-match" data-uk-grid>
                        <div class="uk-width-1-3@m">
                            <div class="uk-inline uk-dark in-wave-video uk-margin-small-bottom uk-margin-small-top">
                                <img class="uk-border-rounded uk-width-1-1" src="img/in-lazy.gif" data-src="img/about-us.jpg" data-uk-img>
                            </div>
                        </div>
                        <div class="uk-width-2-3@m uk-margin-large-top">
                            <p>{{ __('public.company_description_1') }}</p>
                            <p>{{ __('public.company_description_2') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- section content end -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <div class="uk-card uk-card-default uk-border-rounded uk-background-center uk-background-contain uk-background-image@m" style="background-image: url(img/blockit/in-team-background-1.png);" data-uk-parallax="bgy: -100">
                     
                                    <p>{{ __('public.ceo_message_1') }}</p>
                                    <p>{{ __('public.ceo_message_2') }}</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- section content begin -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <div class="uk-card uk-card-primary uk-box-shadow-small uk-border-rounded uk-background-cover" style="background-image: url(img/blockit/in-card-background-1.jpg);">
                        <div class="uk-card-body">
                            <h2 class="uk-margin-remove-bottom">{{ __('public.want_to_know_more') }}</h2>
                            <p class="uk-margin-small-top">{{ __('public.contact_us_message') }}</p>
                            <a class="uk-button uk-button-primary uk-border-rounded" href="/contact">{{ __('public.contact_us') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
</main>
@endsection
