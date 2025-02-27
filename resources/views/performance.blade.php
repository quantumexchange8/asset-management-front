@extends('Layouts.master')
@section('title', __('public.performance_1'))
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
                    <div class="uk-card uk-card-default uk-border-rounded uk-background-center uk-background-contain uk-background-image@m" style="background-image: url(img/blockit/in-team-background-1.png); background-position-y: calc(50% + -7.53px);" data-uk-parallax="bgy: -100">
                        <div class="uk-card-body">
                            <div class="uk-grid uk-flex uk-flex-center">
                                <div class="uk-width-3-4@mservice uk-text-center">
                                    <h2>{{ __('public.portfolio_managers_performance') }}</h2>
                                    <p>{{ __('public.portfolio_performance_text') }}</p>
                                </div>
                            </div>
                            <div class="uk-grid uk-child-width-1-1@m uk-margin-medium-top" data-uk-grid="">
                                <img src="img/performance.jpg" class="uk-align-center" width="100%" height="100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Contact Section -->
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
