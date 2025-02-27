@extends('Layouts.master')
@section('title', 'Homepage')
@section('header')
    @include('Layouts.indexheader')
@endsection
@section('contents')

<main>
   <!-- slideshow content begin -->
<div class="uk-section uk-padding-remove-vertical in-slideshow-gradient">
    <div class="in-slideshow" data-uk-slideshow>
        <ul class="uk-slideshow-items uk-light">
            <li>
                <div class="uk-position-cover">
                    <img src="img/in-lazy.gif" 
                         data-src="img/in-slideshow-image-2.jpg" 
                         alt="slideshow-image" 
                         data-uk-cover width="1920" height="700" data-uk-img>
                </div>                
                <span></span>
                <div class="uk-container">
                    <div class="uk-grid" data-uk-grid>
                        <div class="uk-width-3-5@m">
                            <div class="uk-overlay">
                                <h1>{{ __('public.slideshow_title') }}</h1>
                                <p class="uk-text-lead uk-visible@m">{{ __('public.slideshow_text') }}</p>
                                <a href="/about" class="uk-button uk-button-primary uk-border-rounded uk-visible@m">
                                    <i class="fas fa-scroll uk-margin-small-right"></i>
                                    {{ __('public.discover_now') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="uk-container uk-light">
            <ul class="uk-slideshow-nav uk-dotnav uk-position-bottom-center"></ul>
        </div>
    </div>
</div>
<!-- slideshow content end -->

    <!-- section content begin -->
    <div class="uk-section uk-section-muted uk-section-xsmall in-wave-11">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <div data-uk-slider="autoplay: true; autoplay-interval: 5000">
                        <ul class="uk-grid-divider uk-child-width-1-3@s uk-child-width-1-5@m uk-slider-items" data-uk-grid>
                            <li>
                                <div class="uk-grid uk-grid-small">
                                    <div class="uk-width-1-1 uk-text-center">
                                        <h5>XAU/USD</h5>
                                    </div>
                                    <div class="uk-width-1-2">
                                        <p class="uk-text-small uk-text-uppercase uk-margin-remove">Bid</p>
                                        <span class="uk-label in-label-small uk-label-success">1730.69</span>
                                    </div>
                                    <div class="uk-width-1-2 uk-text-right">
                                        <p class="uk-text-small uk-text-uppercase uk-margin-remove">Ask</p>
                                        <span class="uk-label in-label-small uk-label-danger">1731.44</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="uk-grid uk-grid-small">
                                    <div class="uk-width-1-1 uk-text-center">
                                        <h5>GBP/USD</h5>
                                    </div>
                                    <div class="uk-width-1-2">
                                        <p class="uk-text-small uk-text-uppercase uk-margin-remove">Bid</p>
                                        <span class="uk-label in-label-small uk-label-danger">1.2382</span>
                                    </div>
                                    <div class="uk-width-1-2 uk-text-right">
                                        <p class="uk-text-small uk-text-uppercase uk-margin-remove">Ask</p>
                                        <span class="uk-label in-label-small uk-label-danger">1.2383</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="uk-grid uk-grid-small">
                                    <div class="uk-width-1-1 uk-text-center">
                                        <h5>EUR/USD</h5>
                                    </div>
                                    <div class="uk-width-1-2">
                                        <p class="uk-text-small uk-text-uppercase uk-margin-remove">Bid</p>
                                        <span class="uk-label in-label-small uk-label-danger">1.1240</span>
                                    </div>
                                    <div class="uk-width-1-2 uk-text-right">
                                        <p class="uk-text-small uk-text-uppercase uk-margin-remove">Ask</p>
                                        <span class="uk-label in-label-small uk-label-success">1.1245</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="uk-grid uk-grid-small">
                                    <div class="uk-width-1-1 uk-text-center">
                                        <h5>USD/JPY</h5>
                                    </div>
                                    <div class="uk-width-1-2">
                                        <p class="uk-text-small uk-text-uppercase uk-margin-remove">Bid</p>
                                        <span class="uk-label in-label-small uk-label-success">106.915</span>
                                    </div>
                                    <div class="uk-width-1-2 uk-text-right">
                                        <p class="uk-text-small uk-text-uppercase uk-margin-remove">Ask</p>
                                        <span class="uk-label in-label-small uk-label-success">106.924</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="uk-grid uk-grid-small">
                                    <div class="uk-width-1-1 uk-text-center">
                                        <h5>USD/CAD</h5>
                                    </div>
                                    <div class="uk-width-1-2">
                                        <p class="uk-text-small uk-text-uppercase uk-margin-remove">Bid</p>
                                        <span class="uk-label in-label-small uk-label-danger">1.3591</span>
                                    </div>
                                    <div class="uk-width-1-2 uk-text-right">
                                        <p class="uk-text-small uk-text-uppercase uk-margin-remove">Ask</p>
                                        <span class="uk-label in-label-small uk-label-success">1.3593</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="uk-grid uk-grid-small">
                                    <div class="uk-width-1-1 uk-text-center">
                                        <h5>USD/CHF</h5>
                                    </div>
                                    <div class="uk-width-1-2">
                                        <p class="uk-text-small uk-text-uppercase uk-margin-remove">Bid</p>
                                        <span class="uk-label in-label-small uk-label-danger">0.9506</span>
                                    </div>
                                    <div class="uk-width-1-2 uk-text-right">
                                        <p class="uk-text-small uk-text-uppercase uk-margin-remove">Ask</p>
                                        <span class="uk-label in-label-small uk-label-success">0.9508</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="uk-grid uk-grid-small">
                                    <div class="uk-width-1-1 uk-text-center">
                                        <h5>AUD/USD</h5>
                                    </div>
                                    <div class="uk-width-1-2">
                                        <p class="uk-text-small uk-text-uppercase uk-margin-remove">Bid</p>
                                        <span class="uk-label in-label-small uk-label-success">0.6868</span>
                                    </div>
                                    <div class="uk-width-1-2 uk-text-right">
                                        <p class="uk-text-small uk-text-uppercase uk-margin-remove">Ask</p>
                                        <span class="uk-label in-label-small uk-label-danger">0.6869</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
    <!-- Introduction Section -->
<div class="uk-section uk-section-muted uk-background-contain uk-background-center in-wave-3" 
style="background-image: url(img/in-wave-background-1.png);" data-uk-parallax="bgy: -200">
<div class="uk-container">
   <div class="uk-grid-large uk-flex uk-flex-middle" data-uk-grid>
       <div class="uk-width-1-2@m">
           <h1 class="uk-margin-remove"><span class="in-highlight">{{ __('public.introduction') }}</span></h1>
           <p>{{ __('public.introduction_text') }}</p>
           <div class="uk-grid-medium uk-child-width-1-2@s uk-child-width-1-3@m uk-text-center uk-margin-medium-top" data-uk-grid>
               <div class="uk-width-auto">
                   <a class="uk-button uk-button-primary uk-border-rounded uk-button-center" href="/contact">
                       {{ __('public.contact_us') }}
                   </a>
               </div>
           </div>
       </div>
       <div class="uk-width-1-2@m">
           <div class="uk-inline uk-dark in-wave-video uk-margin-small-bottom">
               <img class="uk-border-rounded uk-width-1-1" src="img/in-lazy.gif" 
                    data-src="img/in-wave-image-1.jpg" alt="wave-video" width="533" height="355" data-uk-img>
           </div>
       </div>
   </div>
</div>
</div>

<!-- Why Choose Us Section -->
<div class="uk-section in-wave-12 in-offset-bottom-60">
<div class="uk-container">
   <div class="uk-grid">
       <div class="uk-width-3-4@m">
           <h1 class="uk-margin-remove-bottom">{{ __('public.why_choose') }}</h1>
       </div>
   </div>
   <div class="uk-grid-large uk-child-width-1-2@s uk-child-width-1-4@m uk-margin-large-top" data-uk-grid>
       <div>
           <div class="in-wave-12-counter">
               <h1 class="uk-heading-medium uk-margin-remove">
                   <span class="in-wave-12-small">{{ __('public.proprietary_trading') }}</span>
               </h1>
               <p class="uk-margin-remove-top">{{ __('public.proprietary_trading_text') }}</p>
           </div>
       </div>
       <div>
           <div class="in-wave-12-counter">
               <h1 class="uk-heading-medium uk-margin-remove">
                   <span class="in-wave-12-small">{{ __('public.personalized_solution') }}</span>
               </h1>
               <p class="uk-margin-remove-top">{{ __('public.personalized_solution_text') }}</p>
           </div>
       </div>
       <div>
           <div class="in-wave-12-counter">
               <h1 class="uk-heading-medium uk-margin-remove">
                   <span class="in-wave-12-small">{{ __('public.proven_track_record') }}</span>
               </h1>
               <p class="uk-margin-remove-top">{{ __('public.proven_track_record_text') }}</p>
           </div>
       </div>
       <div>
           <div class="in-wave-12-counter">
               <h1 class="uk-heading-medium uk-margin-remove">
                   <span class="in-wave-12-small">{{ __('public.commitment_values') }}</span>
               </h1>
               <p class="uk-margin-remove-top">{{ __('public.commitment_values_text') }}</p>
           </div>
       </div>
   </div>
</div>
</div>

<!-- Consultant Call-To-Action -->
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
                       <a class="uk-button uk-button-primary uk-border-rounded" href="/contact">
                           {{ __('public.contact_us') }}
                       </a>
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>
</div>

<!-- Products & Services Section -->
<div class="uk-section in-wave-14">
<div class="uk-container">
   <div class="uk-grid">
       <div class="uk-width">
           <h1 class="uk-margin-remove-bottom">{{ __('public.explore_products') }}</h1>
           <div class="uk-child-width-1-3@m uk-margin-large-top" data-uk-grid>
               <div>
                   <img class="uk-margin-remove-bottom" src="img/in-wave-icon-11.svg" alt="wave-icon" width="42" height="42">
                   <h4 class="uk-margin-top">{{ __('public.fund_management') }}</h4>
                   <p>{{ __('public.fund_management_text') }}</p>
               </div>
               <div>
                   <img class="uk-margin-remove-bottom" src="img/in-wave-icon-12.svg" alt="wave-icon" width="42" height="42">
                   <h4 class="uk-margin-top">{{ __('public.financial_planning') }}</h4>
                   <p>{{ __('public.financial_planning_text') }}</p>
               </div>
               <div>
                   <img class="uk-margin-remove-bottom" src="img/in-wave-icon-13.svg" alt="wave-icon" width="42" height="42">
                   <h4 class="uk-margin-top">{{ __('public.personal_coaching') }}</h4>
                   <p>{{ __('public.personal_coaching_text') }}</p>
               </div>
           </div>
       </div>
   </div>
</div>
</div>

    <!-- section content end -->
    </main>
@endsection