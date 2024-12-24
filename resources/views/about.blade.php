
@extends('Layouts.master')
@section('title', 'About Us')
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
                    <h1 class=" ">Our <span class="in-highlight">Company</span></h1>
                    <p class="uk-text-lead uk-text-muted uk-margin-small-top">XXXXXXXXX has been a trusted partner in asset management.</p>

                    <div class="uk-grid uk-child-width-1-2@m uk-grid-match" data-uk-grid>
                        <div class="uk-width-1-3@m">
                            <div class="uk-inline uk-dark in-wave-video uk-margin-small-bottom uk-margin-small-top">
                                <img class="uk-border-rounded uk-width-1-1" src="img/in-lazy.gif" data-src="img/about-us.jpg" data-uk-img>
                                <div class="uk-flex-top" data-uk-modal>
                                    <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical in-iframe">
                                        <button class="uk-modal-close-outside" type="button" data-uk-close></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-2-3@m uk-margin-large-top">
                            <p>As a prominent leader in the wealth management industry, we recognize the critical importance of balancing professional expertise with a client-centered approach. Successful wealth management relies on seamlessly integrating and transitioning between these two perspectives. Professional expertise forms the foundation for delivering consistent, reliable advice aimed at preserving and growing our clients' wealth. Meanwhile, experiential thinking plays a vital role in implementing that advice, allowing us to better address the needs of both rational and emotional investors. Our ability to strike this balance distinguishes us as a trusted leader in the industry.
                            <br><br> Our assistance and guidance help clients embark on the path of maintaining and increasing their portfolio's value over time.</p>
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
                                <div class="uk-width-3-4@mservice uk-text-center">
                                    <h2>Few Words from Our CEO</h2>
                                    <div class="uk-margin-center">
                                        <img class="uk-align-center" src="img/user/user.png" alt="image-team" width="200">
                                    </div>
                                    <h4 class="uk-margin-small-top">Brian Saunders</h4>
                                    <div>
                                        <a class="uk-link-muted" href="#"><i class="fab fa-facebook-f uk-margin-small-right"></i></a>
                                        <a class="uk-link-muted" href="#"><i class="fab fa-twitter uk-margin-small-right"></i></a>
                                        <a class="uk-link-muted" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                    <p>{{ __('public.ceo-message-1')}}</p>
                                    <p>{{ __('public.ceo-message-2')}}</p>
                                    <p>{{ __('public.ceo-message-3')}}</p>
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