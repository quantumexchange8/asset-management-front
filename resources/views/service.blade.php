@extends('Layouts.master')
@section('title', 'Products & Services')
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
                  <h1 class="uk-margin-remove">Our <span class="in-highlight">Products & Services</span></h1>
                    <p class="uk-text-lead uk-text-muted">Explore our range of tailored solutions designed to meet your unique financial needs and goals.</p>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-green">
                      <div class="in-icon-wrap uk-margin-bottom">
                        <i class="fas fa-handshake fa-lg"></i>
                        </div>
                        <h4 class="uk-margin-medium-top">
                            <a href="#">SERVICES</a>
                        </h4>
                        <hr>
                        <p>We provide a variety of investment options to match our clients' unique needs, including Fund Management Products, Financial Planning, and Personal Coaching.</p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-blue">
                      <div class="in-icon-wrap uk-margin-bottom">
                        <i class="fas fa-chart-bar fa-lg"></i>
                        </div>
                        <h4 class="uk-margin-medium-top">
                            <a href="#">FUND MANAGEMENT</a>
                        </h4>
                        <hr>
                        <p>Our Fund Management Products are professionally developed to accommodate investors with varying tolerances for risk. Our professional fund manager is always monitoring these products to ensure optimal performance and stability.</p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-purple">
                      <div class="in-icon-wrap uk-margin-bottom">
                        <i class="fas fa-chart-pie fa-lg"></i>
                        </div>
                        <h4 class="uk-margin-medium-top">
                            <a href="#">INVESTMENT STRATEGIES</a>
                        </h4>
                        <hr>
                        <p>Our expert financial planners offer comprehensive, one-stop investment strategies and solutions tailored to meet each client's personal or organizational needs and goals. With a client-focused approach, we design customized investment plans that align seamlessly with your values and objectives.</p>
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
                            <a href="#">PERSONAL COACHING</a>
                        </h4>
                        <hr>
                        <p>We provide Personal Coaching services to help clients enhance their relationship with money and stay focused on achieving their financial goals. Our experienced financial coaches offer tailored advice and support, empowering clients to attain financial success and peace of mind.</p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-grey">
                      <div class="in-icon-wrap uk-margin-bottom">
                        <i class="fas fa-funnel-dollar fa-lg"></i>
                        </div>
                        <h4 class="uk-margin-medium-top">
                            <a href="#">INVESTMENT SOLUTIONS</a>
                        </h4>
                        <hr>
                        <p>We are dedicated to providing exceptional investment solutions and services, thoughtfully tailored to meet the unique needs and preferences of each client.</p>
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
    </main>
@endsection