@extends('Layouts.master')
@section('title','Our Approach')
@section('header')
    @include('Layouts.header')
@endsection
@section('contents')
<main data-title="blog-single">
    <!-- blog content begin -->
    <div class="uk-section uk-margin-small-top">
        <div class="uk-container">
            <div class="uk-grid uk-flex uk-flex-center in-blog-1 in-article">
                <div class="uk-width-1-1 in-figure-available">
                    <img class="uk-width-1-1 uk-border-rounded" src="../img/user/image-featured-cHWUtS.jpg" alt="{{ __('public.approach-desc')}}">
                </div>
                <div class="uk-width-3-4@m">
                    <article class="uk-card uk-card-default uk-border-rounded in-flat-rounded-top">
                        <div class="uk-card-body">
                            {{-- <div class="uk-flex">
                                <div class="uk-margin-small-right">
                                    <img class="uk-border-pill uk-background-muted" src="../img/user/author-85z9UC.jpg" alt="author" width="32" height="32">
                                </div>
                                <div class="uk-flex uk-flex-middle">
                                    <p class="uk-text-small uk-text-muted uk-margin-remove">
                                        Warren Wong
                                        <span class="uk-margin-small-left uk-margin-small-right">•</span>
                                    </p>
                                </div>
                                <div class="uk-flex uk-flex-middle">
                                    <p class="uk-text-small uk-text-muted uk-margin-remove">
                                        December 29, 2022
                                    </p>
                                </div>
                            </div> --}}
                            <h2 class="uk-margin-top uk-margin-medium-bottom">{{ __('public.approach-title')}}</h2>
                            <p>{{ __('public.approach-desc')}}</p>
                            <div class="step">
                                <span class="uk-label in-label-large">{{ __('public.approach-step-1')}}</span>
                                <i class="fas fa-long-arrow-alt-down fa-sm app-height" ></i>
                            </div>
                            <div class="step">
                                <span class="uk-label in-label-large">{{ __('public.approach-step-2')}}</span>
                                <i class="fas fa-long-arrow-alt-down fa-sm app-height"></i>
                            </div>
                            <div class="step">
                                <span class="uk-label in-label-large">{{ __('public.approach-step-3')}}</span>
                                <i class="fas fa-long-arrow-alt-down fa-sm app-height"></i>
                            </div>
                            <div class="step">
                                <span class="uk-label in-label-large">{{ __('public.approach-step-4')}}</span>
                                <i class="fas fa-long-arrow-alt-down fa-sm app-height"></i>
                            </div>
                            <div class="step">
                                <span class="uk-label in-label-large">{{ __('public.approach-step-5')}}</span>
                                <i class="fas fa-long-arrow-alt-down fa-sm app-height"></i>
                            </div>
                            <div class="step">
                                <span class="uk-label in-label-large">{{ __('public.approach-step-6')}}</span>
                                <i class="fas fa-long-arrow-alt-down fa-sm app-height"></i>
                            </div>
                            <div class="step">
                                <span class="uk-label in-label-large">{{ __('public.approach-step-7')}}</span>
                                <i class="fas fa-long-arrow-alt-down fa-sm app-height"></i>
                            </div>
                            <div class="step">
                                <span class="uk-label in-label-large">{{ __('public.approach-step-8')}}</span>
                            </div>
                            <h4 class="uk-margin-top uk-margin-medium-bottom">{{ __('public.approach-subtitle')}}</h4>
                            <p>{{ __('public.approach-subdesc')}}</p>
                        </div>
                        <div class="uk-card-footer uk-clearfix">
                            <div class="uk-float-left in-article-tags">
                                <i class="fas fa-tags"></i><span class="uk-margin-small-left uk-text-bold">Tags: &nbsp;</span>
                                <a href="#" class="uk-link-muted">arbitrage </a>,&nbsp;
                                <a href="#" class="uk-link-muted">forex </a>
                            </div>
                            <div class="uk-float-right in-article-share share-btn">
                                <a class="uk-label color-facebook" data-id="fb"><i class="fab fa-facebook-f"></i></a>
                                <a class="uk-label color-twitter" data-id="tw"><i class="fab fa-twitter"></i></a>
                                <a class="uk-label color-pinterest" data-id="pi"><i class="fab fa-pinterest-p"></i></a>
                                <a class="uk-label color-email" data-id="mail"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
    <!-- blog content end -->
</main>
@endsection