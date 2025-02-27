@extends('Layouts.master')
@section('title', __('public.title'))
@section('header')
    @include('Layouts.header')
@endsection
@section('contents')
<main>
    <!-- section content begin -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid uk-flex uk-flex-center">
                <div class="uk-width-1">
                    <h1 class="uk-margin-medium-bottom uk-text-center">{!! __('public.mission_vision') !!}</h1>
                    <div class="uk-grid uk-flex uk-flex-middle" data-uk-grid>
                        <div class="uk-width-1-2@m">
                            <div class="uk-inline uk-dark in-wave-video uk-margin-small-bottom">
                                <img class="uk-border-rounded uk-width-1-1" src="img/in-lazy.gif" data-src="img/blockit/in-gallery-image-5.jpg" alt="wave-video" width="533" height="355" data-uk-img>
                            </div>
                        </div>
                        <div class="uk-width-1-2@m">
                            <div class="uk-margin-large" data-uk-grid>
                                <div class="uk-width-expand@m">
                                    <h4>{{ __('public.our_vision') }}</h4>
                                    <p>{{ __('public.vision_text') }}</p>
                                </div>
                            </div>
                            <div class="uk-margin-large" data-uk-grid>
                                <div class="uk-width-expand@m">
                                    <h4>{{ __('public.our_mission') }}</h4>
                                    <p>{{ __('public.mission_text') }}</p>
                                </div>
                            </div>
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
                        <div class="uk-card-body">
                            <div class="uk-grid uk-flex uk-flex-center">
                                <div class="uk-width-3-4@m uk-text-center">
                                    <h1 class="uk-margin-remove-bottom">{!! __('public.our_core_values') !!}</h1>
                                    <p>{{ __('public.core_values_text') }}</p>
                                </div>
                            </div>
                            <div class="uk-grid uk-child-width-1-2@m uk-margin-medium-top" data-uk-grid="">
                                <div class="uk-flex uk-flex-left uk-first-column">
                                    <div class="uk-margin-right">
                                        <div class="in-icon-wrap">
                                          <img src="img/account.png">
                                        </div>
                                    </div>
                                    <div>
                                        <p class="uk-margin-remove-bottom">{{ __('public.core_value_1') }}</p>
                                    </div>
                                </div>
                                <div class="uk-flex uk-flex-left">
                                    <div class="uk-margin-right">
                                        <div class="in-icon-wrap">
                                            <img src="img/payment.png">
                                        </div>
                                    </div>
                                    <div>
                                        <p class="uk-margin-remove-bottom">{{ __('public.core_value_2') }}</p>
                                    </div>
                                </div>
                                <div class="uk-flex uk-flex-left">
                                    <div class="uk-margin-right">
                                        <div class="in-icon-wrap">
                                            <img src="img/orders.png">
                                        </div>
                                    </div>
                                    <div>
                                        <p class="uk-margin-remove-bottom">{{ __('public.core_value_3') }}</p>
                                    </div>
                                </div>
                                <div class="uk-flex uk-flex-left">
                                    <div class="uk-margin-right">
                                        <div class="in-icon-wrap">
                                            <img src="img/account.png">
                                        </div>
                                    </div>
                                    <div>
                                        <p class="uk-margin-remove-bottom">{{ __('public.core_value_4') }}</p>
                                    </div>
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
                <div class="uk-width-1-1 uk-text-center uk-margin-medium-bottom">
                    <h1>{!! __('public.choose_us') !!}</h1>
                </div>
                <div class="uk-grid-divider uk-child-width-1-3@m uk-child-width-1-2@s" data-uk-grid>
                    <div>
                        <h3 class="uk-margin-top">{{ __('public.professional_team') }}</h3>
                        <p>{{ __('public.professional_team_text') }}</p>
                    </div>
                    <div>
                        <h3 class="uk-margin-top">{{ __('public.multi_asset_investing') }}</h3>
                        <p>{{ __('public.multi_asset_investing_text') }}</p>
                    </div>
                    <div>
                        <h3 class="uk-margin-top">{{ __('public.client_experience') }}</h3>
                        <p>{{ __('public.client_experience_text') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
</main>
@endsection
