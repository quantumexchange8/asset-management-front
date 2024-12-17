@extends('Layouts.master')
@section('title','Performance 2')
@section('header')
    @include('Layouts.header')
@endsection
@section('contents')
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
@endsection