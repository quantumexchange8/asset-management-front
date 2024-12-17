@extends('Layouts.master')
@section('title', 'Insight')
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
                    <h1 class="uk-margin-medium-bottom uk-text-center">Our <span class="in-highlight">Mission & Vision</span></h1>
                    <div class="uk-grid uk-flex uk-flex-middle" data-uk-grid>
                        <div class="uk-width-1-2@m">
                            <div class="uk-inline uk-dark in-wave-video uk-margin-small-bottom">
                                <img class="uk-border-rounded uk-width-1-1" src="img/in-lazy.gif" data-src="img/blockit/in-gallery-image-5.jpg" alt="wave-video" width="533" height="355" data-uk-img>
                                <div class="uk-flex-top" data-uk-modal>
                                    <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical in-iframe">
                                        <button class="uk-modal-close-outside" type="button" data-uk-close></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-1-2@m">
                            <div class="uk-margin-large" data-uk-grid>
                                <div class="uk-width-expand@m">
                                    <h4>Our Vision</h4>
                                    <p>We aim to foster long-term relationships with our investors by delivering consistent returns and an outstanding investment experience. Our commitment to excellence drives us to continually enhance our products and services to surpass our investors' expectations.</p>
                                </div>
                            </div>
                            <div class="uk-margin-large" data-uk-grid>
                                
                                <div class="uk-width-expand@m">
                                    <h4>Our Mission</h4>
                                    <p>We empower our clients with the knowledge and tools they need to confidently navigate the investment market. Our goal is to foster a supportive and enriching environment, enabling clients to engage with the market and achieve their investment goals. By tailoring our approach to each client’s risk appetite, we effectively manage investment risks while maximizing potential opportunities.</p>
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
                    <div class="uk-card uk-card-default uk-border-rounded uk-background-center uk-background-contain uk-background-image@m" style="background-image: url(img/blockit/in-team-background-1.png); background-position-y: calc(50% + -7.53px);" data-uk-parallax="bgy: -100">
                        <div class="uk-card-body">
                            <div class="uk-grid uk-flex uk-flex-center">
                                <div class="uk-width-3-4@m uk-text-center">
                                    <h1 class="uk-margin-remove-bottom">Our <span class="in-highlight">Core Values</span></h1>
                                    <p>We are a group of passionate, independent thinkers who never stop exploring new ways to improve trading for the self-directed investor.</p>
                                </div>
                            </div>
                            <div class="uk-grid uk-child-width-1-2@m uk-margin-medium-top" data-uk-grid="">
                                <div class="uk-flex uk-flex-left uk-first-column">
                                    <div class="uk-margin-right">
                                        <div class="in-icon-wrap">
                                          <img src="img/account.png"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="uk-margin-remove-bottom">
                                            Building a strong foundation of investment knowledge is at the core of our service. By guiding clients through investment concepts and principles with a problem-solving approach, we empower them to take an active role in managing their investments and achieving their financial goals.
                                        </p>
                                    </div>
                                </div>
                                <div class="uk-flex uk-flex-left">
                                    <div class="uk-margin-right">
                                        <div class="in-icon-wrap">
                                            <img src="img/payment.png"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="uk-margin-remove-bottom">
                                            We prioritize understanding each client's unique investment outlook. By empathetically considering their perspectives and experiences, we deliver personalized solutions tailored to their specific needs and preferences.
                                        </p>
                                    </div>
                                </div>
                                <div class="uk-flex uk-flex-left">
                                    <div class="uk-margin-right">
                                        <div class="in-icon-wrap">
                                            <img src="img/orders.png"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="uk-margin-remove-bottom">
                                            Our success lies in our ability to seamlessly balance professional expertise with client-focused empathy. By flexibly applying these two perspectives, we deliver a comprehensive and personalized approach to wealth management that is both adaptive and highly effective.
                                        </p>
                                    </div>
                                </div>
                                <div class="uk-flex uk-flex-left">
                                    <div class="uk-margin-right">
                                        <div class="in-icon-wrap">
                                            <img src="img/account.png"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="uk-margin-remove-bottom">
                                            These principles empower us to deliver exceptional value, guiding our clients through the complexities of the investment landscape with confidence and success.
                                        </p>
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
                        <h1>Why <span class="in-highlight">Choose Us</span></h1>
                    </div>
                    <div class="uk-grid-divider uk-child-width-1-3@m uk-child-width-1-2@s" data-uk-grid>
                        <div>
                          <div class="in-icon-wrap primary-color">
                            <i class="fas fa-users fa-lg"></i>
                          </div>
                            <h3 class="uk-margin-top">Professional Team</h3>
                            <p>Our team consists of highly skilled and experienced professionals committed to helping you achieve your investment goals. Recognizing that every client is unique, we customize our strategies to suit your individual needs. With extensive market expertise, we are prepared to guide you through the challenges and opportunities of investing.</p>
                        </div>
                        <div>
                          <div class="in-icon-wrap primary-color">
                            <i class="fas fa-line-chart fa-lg"></i>
                          </div>
                            <h3 class="uk-margin-top">Multi-Asset Investing</h3>
                            <p>We provide a wide array of investment options spanning multiple asset classes, enabling us to design well-rounded, balanced portfolios tailored to your needs. Whether your interests lie in stocks, bonds, real estate, or alternative investments, our team is here to help you build a portfolio that supports your long-term financial success.</p>
                        </div>
                        <div>
                            <div class="in-icon-wrap primary-color">
                              <i class="fas fa-handshake fa-lg"></i>
                            </div>
                              <h3 class="uk-margin-top">Client-Driven Experience</h3>
                              <p>We prioritize our clients above all else, fostering long-term relationships built on trust and transparency. By taking the time to understand your needs, answer your questions, and offer tailored guidance, we empower you to make informed investment decisions. Our ultimate goal is to help you achieve your financial objectives while delivering an exceptional client experience at every step of your journey.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
    </main>
@endsection