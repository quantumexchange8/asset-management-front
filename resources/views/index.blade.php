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
                        <img src="img/in-lazy.gif" data-src="img/in-slideshow-image-2.jpg" alt="slideshow-image" data-uk-cover width="1920" height="700" data-uk-img>
                    </div>                
                    <span></span>
                    <div class="uk-container">
                        <div class="uk-grid" data-uk-grid>
                            <div class="uk-width-3-5@m">
                                <div class="uk-overlay">
                                    <h1>Partner with us to unlock your path to financial success</h1>
                                    <p class="uk-text-lead uk-visible@m">Empowering you to manage your assets with precision, security, and insight.</p>
                                    <a href="/about" class="uk-button uk-button-primary uk-border-rounded uk-visible@m"><i class="fas fa-scroll uk-margin-small-right"></i>Discover it now</a>
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
    <!-- Introduction -->
    <div class="uk-section uk-section-muted uk-background-contain uk-background-center in-wave-3" style="background-image: url(img/in-wave-background-1.png);" data-uk-parallax="bgy: -200">
        <div class="uk-container">
            <div class="uk-grid-large uk-flex uk-flex-middle" data-uk-grid>
                <div class="uk-width-1-2@m">
                    {{-- <img class="uk-margin-bottom" src="img/in-lazy.gif" data-src="img/in-wave-icon-5.svg" alt="wave-icon" width="64" height="64" data-uk-img> --}}
                    <h1 class="uk-margin-remove"> <span class="in-highlight">Introduction</span></h1>
                    <p>Volta Asia is a leading asset management group specializing in proprietary trading. Our team comprises experts from renowned financial institutions, bringing together extensive experience, deep expertise, and advanced trading technologies. We are committed to delivering outstanding returns while minimizing risk, providing our clients with superior investment management services and consistent, exceptional results.</p>
                    <div class="uk-grid-medium uk-child-width-1-2@s uk-child-width-1-3@m uk-text-center uk-margin-medium-top" data-uk-grid>
                        <div class="uk-width-auto">
                            <a class="uk-button uk-button-primary uk-border-rounded uk-button-center" href="/contact">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-2@m">
                    <div class="uk-inline uk-dark in-wave-video uk-margin-small-bottom">
                        <img class="uk-border-rounded uk-width-1-1" src="img/in-lazy.gif" data-src="img/in-wave-image-1.jpg" alt="wave-video" width="533" height="355" data-uk-img>
                        <div class="uk-flex-top" data-uk-modal>
                            <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical in-iframe">
                                <button class="uk-modal-close-outside" type="button" data-uk-close></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content begin -->
    <div class="uk-section in-wave-12 in-offset-bottom-60">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-3-4@m">
                    <h1 class="uk-margin-remove-bottom">Why <span class="in-highlight">Volta Asia</span>?</h1>
                </div>
            </div>
            <div class="uk-grid-large uk-child-width-1-2@s uk-child-width-1-4@m uk-margin-large-top" data-uk-grid>
                <div> 
                    <div class="in-wave-12-counter">
                        <h1 class="uk-heading-medium uk-margin-remove">
                            <span class="in-wave-12-small">Proprietary Trading Expertise</span>
                        </h1>
                        <p class="uk-margin-remove-top">We specializes in proprietary trading at the forefront of the financial industry. With experience of expertise in quantitative financial analytics and trading, our team possesses a profound understanding of the intricacies of global financial markets.</p>
                    </div>
                </div>
                <div>
                    <div class="in-wave-12-counter">
                        <h1 class="uk-heading-medium uk-margin-remove">
                            <span class="in-wave-12-small">Personalized Solution</span>
                        </h1>
                        <p class="uk-margin-remove-top">We recognize that each investor has unique needs and goals, which is why we provide customized solutions tailored to their specific investment objectives. Our personalized approach empowers us to transform our clients' investment aspirations into reality.</p>
                    </div>
                </div>
                <div>
                    <div class="in-wave-12-counter">
                        <h1 class="uk-heading-medium uk-margin-remove">
                            <span class="in-wave-12-small">Proven Track Record</span>
                        </h1>
                        <p class="uk-margin-remove-top">We have a strong track record of consistently delivering reliable returns to our clients. Our dedication to excellence ensures exceptional results, giving our clients the confidence and peace of mind that their investments are managed by skilled professionals.</p>
                    </div>
                </div>
                <div>
                    <div class="in-wave-12-counter">
                        <h1 class="uk-heading-medium uk-margin-remove">
                            <span class="in-wave-12-small">Commitment to Core Values</span>
                        </h1>
                        <p class="uk-margin-remove-top">We believe that trust, transparency, and accountability are the foundation of success. We are committed to fostering enduring relationships with our clients, guided by these core principles.</p>
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
                                <h3>Do you need a consultant?</h3>
                                <p>Please do not hesitate to contact us at [email.com] or fill up the contact form.</p>
                            </div>
                            <div class="uk-width-auto">
                                <a class="uk-button uk-button-primary uk-border-rounded" href="/contact">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
    <!-- section content begin -->
    <div class="uk-section in-wave-14">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width">                
                    <h1 class="uk-margin-remove-bottom">Explore Our <span class="in-highlight">Products & Services</span></h1>
                    <div class="uk-child-width-1-3@m uk-margin-large-top" data-uk-grid>
                        <div>
                            <img class="uk-margin-remove-bottom" src="img/in-wave-icon-11.svg" alt="wave-icon" width="42" height="42">
                            <h4 class="uk-margin-top">Fund Management Products</h4>
                            <p>Our Fund Management Products are expertly designed to accommodate investors with diverse risk preferences. Whether you're looking for stable returns or aiming for high-growth opportunities, we have the right product for you.</p>
                        </div>
                        <div>
                            <img class="uk-margin-remove-bottom" src="img/in-wave-icon-12.svg" alt="wave-icon" width="42" height="42">
                            <h4 class="uk-margin-top">Financial Planning</h4>
                            <p>Our expert financial planners deliver one-stop, full-service investment strategies and solutions. By identifying your personal or organizational needs and goals, we create customized plans to ensure your financial success.</p>
                        </div>
                        <div>
                            <img class="uk-margin-remove-bottom" src="img/in-wave-icon-13.svg" alt="wave-icon" width="42" height="42">
                            <h4 class="uk-margin-top">Personal Coaching</h4>
                            <p>We offer Personal Coaching services to empower clients with the tools and mindset needed to improve their financial habits. Achieve clarity, confidence, and control over your financial journey with our personalized coaching sessions.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- section content end -->
    </main>
@endsection