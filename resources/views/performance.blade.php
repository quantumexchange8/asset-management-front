@extends('Layouts.master')
@section('title','Performance 1')
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
                                    <h2>Portfolio MANAGERs PERFORMANCE</h2>
                                    <p>We emphasize personal accountability in managing our clients' funds. To ensure our traders act with the utmost care and responsibility, they are required to invest their own funds alongside those of our clients. No matter which portfolio manager you choose, you can trust their dedication, vigilance, and unwavering commitment to maximizing your returns over time.</p>
                                </div>
                            </div>
                            <div class="uk-grid uk-child-width-1-1@m uk-margin-medium-top" data-uk-grid="">
                                <img src="img/performance.jpg" class="uk-align-center"  width=100% height=100%>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <div class="uk-card uk-card-primary uk-box-shadow-small uk-border-rounded uk-background-cover" style="background-image: url(img/blockit/in-card-background-1.jpg);">
                        <div class="uk-card-body">
                            <h2 class="uk-margin-remove-bottom">Want To Know More?</h2>
                            <p class="uk-margin-small-top">Please do not hesitate to contact us at [email.com] or fill up the contact form.</p>
                            <a class="uk-button uk-button-primary uk-border-rounded" href="/contact">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
</main>
@endsection