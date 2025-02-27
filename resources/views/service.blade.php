@extends('Layouts.master')
@section('title', __('public.products_services'))
@section('header')
    @include('Layouts.header')
@endsection
@section('contents')

<main>
    <!-- section content begin -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid-match uk-child-width-1-2@s uk-child-width-1-3@m in-card-10" data-uk-grid>
                <div class="uk-width-1-1">
                    <h1 class="uk-margin-remove">{!! __('public.products_services_title') !!}</h1>
                    <p class="uk-text-lead uk-text-muted">{{ __('public.products_services_text') }}</p>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-green">
                        <div class="in-icon-wrap uk-margin-bottom">
                            <i class="fas fa-handshake fa-lg"></i>
                        </div>
                        <h4 class="uk-margin-medium-top">
                            <a href="#">{{ __('public.services') }}</a>
                        </h4>
                        <hr>
                        <p>{{ __('public.services_text') }}</p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-blue">
                        <div class="in-icon-wrap uk-margin-bottom">
                            <i class="fas fa-chart-bar fa-lg"></i>
                        </div>
                        <h4 class="uk-margin-medium-top">
                            <a href="#">{{ __('public.fund_management') }}</a>
                        </h4>
                        <hr>
                        <p>{{ __('public.fund_management_text') }}</p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-purple">
                        <div class="in-icon-wrap uk-margin-bottom">
                            <i class="fas fa-chart-pie fa-lg"></i>
                        </div>
                        <h4 class="uk-margin-medium-top">
                            <a href="#">{{ __('public.investment_strategies') }}</a>
                        </h4>
                        <hr>
                        <p>{{ __('public.investment_strategies_text') }}</p>
                    </div>
                </div>
            </div>
            <div class="uk-grid-match uk-child-width-1-2@s uk-child-width-1-2@m in-card-10" data-uk-grid>
                <div>
                    <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-navy">
                        <div class="in-icon-wrap uk-margin-bottom">
                            <i class="fas fa-chalkboard-teacher fa-lg"></i>
                        </div>
                        <h4 class="uk-margin-medium-top">
                            <a href="#">{{ __('public.personal_coaching') }}</a>
                        </h4>
                        <hr>
                        <p>{{ __('public.personal_coaching_text') }}</p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-grey">
                        <div class="in-icon-wrap uk-margin-bottom">
                            <i class="fas fa-funnel-dollar fa-lg"></i>
                        </div>
                        <h4 class="uk-margin-medium-top">
                            <a href="#">{{ __('public.investment_solutions') }}</a>
                        </h4>
                        <hr>
                        <p>{{ __('public.investment_solutions_text') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->

    <!-- section content begin -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1 in-card-16">
                    <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded">
                        <div class="uk-grid uk-flex-middle" data-uk-grid>
                            <div class="uk-width-1-1 uk-width-expand@m">
                                <h3>{{ __('public.consultant_question') }}</h3>
                                <p>{{ __('public.consultant_text') }}</p>
                            </div>
                            <div class="uk-width-auto">
                                <a class="uk-button uk-button-primary uk-border-rounded" href="/contact">{{ __('public.contact_us') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
</main>
@endsection
