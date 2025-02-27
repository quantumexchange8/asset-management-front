@extends('Layouts.master')
@section('title', __('public.contact_us'))
@section('header')
    @include('Layouts.header')
@endsection
@section('contents')
    @if (session('success'))
        <div class="alert alert-success uk-alert-success uk-border-rounded uk-padding-small" role="alert">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger uk-alert-danger uk-border-rounded uk-padding-small" role="alert">
            {{ session('error') }}
        </div>
    @endif

    @if ($errors->has('captcha'))
        <div class="alert alert-danger uk-alert-danger uk-border-rounded uk-padding-small" role="alert">
            {{ $errors->first('captcha') }}
        </div>
    @endif
    <!-- section content begin -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-3-5@m">
                    <h1 class="uk-margin-remove-bottom">{{ __('public.contact_us') }}</h1>
                    <p class="uk-text-lead uk-text-muted uk-margin-small-top">{{ __('public.contact_us_description') }}</p>
                </div>
                <div class="uk-width-1-1@m uk-margin-large-top">
                    <div class="uk-grid uk-grid-large" data-uk-grid>
                        <div class="uk-width-1-3@m">
                            <h4 class="uk-margin-medium-top uk-margin-remove-bottom">{{ __('public.message_us') }}</h4>
                            <p class="uk-margin-small-top">{{ __('public.email') }}
                           
                        </div>
                        <div class="uk-width-2-3@m">
                            <div class="uk-margin-medium-left in-margin-remove-left@s">
                                <form action="{{ route('send.email') }}" method="POST" id="contact-form" class="uk-form uk-grid-small" data-uk-grid>
                                    @csrf
                                    <div class="uk-width-1-2@s uk-inline">
                                        <span class="uk-form-icon fas fa-user fa-sm"></span>
                                        <input class="uk-input uk-border-rounded" id="name" name="name" type="text" placeholder="{{ __('public.full_name') }}">
                                    </div>
                                    <div class="uk-width-1-2@s uk-inline">
                                        <span class="uk-form-icon fas fa-envelope fa-sm"></span>
                                        <input class="uk-input uk-border-rounded" id="email" name="email" type="email" placeholder="{{ __('public.email_address') }}">
                                    </div>
                                    <div class="uk-width-1-1 uk-inline">
                                        <span class="uk-form-icon fas fa-pen fa-sm"></span>
                                        <input class="uk-input uk-border-rounded" id="subject" name="subject" type="text" placeholder="{{ __('public.subject') }}">
                                    </div>
                                    <div class="uk-width-1-1">
                                        <textarea class="uk-textarea uk-border-rounded" id="message" name="message" rows="6" placeholder="{{ __('public.message') }}"></textarea>
                                    </div>
                                    <div class="uk-width uk-inline uk-flex uk-items-center">
                                        <img id="captchaImage" src="{{ captcha_src('default') }}" alt="CAPTCHA" class="uk-margin-right">
                                        <span id="refreshCaptcha" class="uk-refresh-icon fas fa-arrows-rotate fa-sm uk-text-muted" style="cursor: pointer;"></span>
                                        <input class="uk-input uk-border-rounded" type="text" id="captcha" name="captcha" placeholder="{{ __('public.captcha_code') }}" required>
                                    </div>
                                    <div class="uk-width-1-1">
                                        <button class="uk-button uk-button-primary uk-border-rounded uk-align-right" type="submit" name="submit">{{ __('public.send_message') }}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const refreshCaptchaButton = document.getElementById('refreshCaptcha');
        const captchaImage = document.getElementById('captchaImage');

        if (refreshCaptchaButton && captchaImage) {
            refreshCaptchaButton.addEventListener('click', function () {
                captchaImage.src = '/captcha/refresh?' + new Date().getTime();
            });
        }
    });
    
    document.getElementById('refreshCaptcha').addEventListener('click', function () {
        fetch("{{ route('captcha.refresh') }}")
            .then(response => response.json())
            .then(data => {
                document.getElementById('captchaImage').src = data.captcha;
            });
    });
</script>
@endsection
