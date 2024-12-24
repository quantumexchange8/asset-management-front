@extends('Layouts.master')
@section('title','Overview')
@section('header')
    @include('Layouts.header')
@endsection
@section('contents')
<main data-title="blog-single">
    <!-- blog content begin -->
    <div class="uk-section uk-margin-small-top">
        <div class="uk-container">
            <div class="uk-grid uk-flex uk-flex-center in-blog-1 in-article">
                <div class="uk-width-3-4@m">
                    <h1 class="uk-margin-medium-bottom uk-text-center"><span class="in-highlight">{{ __('public.overview')}}</span></h1>
                    <article class="uk-card uk-card-default uk-border-rounded">
                        <div class="uk-card-body">
                            <div class="uk-flex">
                                {{-- <div class="uk-margin-small-right">
                                    <img class="uk-border-pill uk-background-muted" src="../img/user/author-85z9UC.jpg" alt="author" width="32" height="32">
                                </div> --}}
                                {{-- <div class="uk-flex uk-flex-middle">
                                    <p class="uk-text-small uk-text-muted uk-margin-remove">
                                        Warren Wong
                                        <span class="uk-margin-small-left uk-margin-small-right">•</span>
                                    </p>
                                </div>
                                <div class="uk-flex uk-flex-middle">
                                    <p class="uk-text-small uk-text-muted uk-margin-remove">
                                        December 29, 2022
                                    </p>
                                </div> --}}
                            </div>
                            <h2 class="uk-margin-top uk-margin-medium-bottom">{{ __('public.overview-title')}}</h2>
                            <p>{{ __('public.overview-desc')}}</p>
                            <h4>{{ __('public.overview-subtitle')}}</h4>
                            <p>{{ __('public.overview-subdesc')}}</p>
                            <blockquote class="in-article-blockquote">
                                <p class="uk-margin-small-bottom">{{ __('public.overview-quote-1')}}</p>
                                <p class="uk-margin-small-bottom">{{ __('public.overview-quote-2')}}</p>
                                <footer><cite>{{ __('public.overview-quote-cite')}}</cite></footer>
                            </blockquote>
                            <h4>{{ __('public.overview-subtitle-2')}}</h4>
                            <p>{{ __('public.overview-subdesc-2')}}</p>
                            <p>{{ __('public.overview-subdesc-3')}}</p>
                            <p>{{ __('public.overview-subdesc-4')}}</p>
                            <p>{{ __('public.overview-subdesc-5')}}</p>
                        </div>
                        <div class="uk-card-footer uk-clearfix">
                            <div class="uk-float-left in-article-tags">
                                <i class="fas fa-tags"></i><span class="uk-margin-small-left uk-text-bold">Tags: &nbsp;</span>
                                <a href=" " class="uk-link-muted">Arbitrage</a>,&nbsp;
                                <a href=" " class="uk-link-muted">forex</a>
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