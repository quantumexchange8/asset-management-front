@extends('Layouts.master')
@section('title', 'Contact Us')
@section('header')
    @include('Layouts.header')
@endsection
@section('contents')
        <!-- Display Success Message -->
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
    <!-- section content begin -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-3-5@m">
                    <h1 class="uk-margin-remove-bottom">Contact Us</h1>
                    <p class="uk-text-lead uk-text-muted uk-margin-small-top">Do not hesitate to reach out. Just fill in the contact form here and we’ll be sure to reply as fast as possible.</p>
                </div>
                <div class="uk-width-1-1@m uk-margin-large-top">
                    <div class="uk-grid uk-grid-large" data-uk-grid>
                        <div class="uk-width-1-3@m">
                            <h4 class="uk-margin-remove-bottom">Visit our office</h4>
                            <p class="uk-margin-small-top">[address]</p>
                            <h4 class="uk-margin-medium-top uk-margin-remove-bottom">Message us</h4>
                            <p class="uk-margin-small-top">email.com<br>(888)234-5678</p>
                            <div class="uk-margin-medium-top in-wave-socials-contact">
                                <a href="#" class="fab fa-facebook-square fa-lg uk-text-decoration-none uk-margin-right"></a>
                                <a href="#" class="fab fa-twitter fa-lg uk-text-decoration-none uk-margin-right"></a>
                                <a href="#" class="fab fa-linkedin-in fa-lg uk-text-decoration-none uk-margin-right"></a>
                                <a href="#" class="fab fa-instagram fa-lg uk-text-decoration-none uk-margin-right"></a>
                                <a href="#" class="fab fa-pinterest fa-lg uk-text-decoration-none uk-margin-right"></a>
                            </div>
                        </div>
                        <div class="uk-width-2-3@m">
                            <div class="uk-margin-medium-left in-margin-remove-left@s">
                                <form action="{{ route('send.email') }}" method="POST" id="contact-form" class="uk-form uk-grid-small" data-uk-grid>
                                    @csrf
                                    <div class="uk-width-1-2@s uk-inline">
                                        <span class="uk-form-icon fas fa-user fa-sm"></span>
                                        <input class="uk-input uk-border-rounded" id="name" name="name" type="text" placeholder="Full name">
                                    </div>
                                    <div class="uk-width-1-2@s uk-inline">
                                        <span class="uk-form-icon fas fa-envelope fa-sm"></span>
                                        <input class="uk-input uk-border-rounded" id="email" name="email" type="email" placeholder="Email address">
                                    </div>
                                    <div class="uk-width-1-1 uk-inline">
                                        <span class="uk-form-icon fas fa-pen fa-sm"></span>
                                        <input class="uk-input uk-border-rounded" id="subject" name="subject" type="text" placeholder="Subject">
                                    </div>
                                    <div class="uk-width-1-1">
                                        <textarea class="uk-textarea uk-border-rounded" id="message" name="message" rows="6" placeholder="Message"></textarea>
                                    </div>

                                    <input type="hidden" id="recaptcha_token" name="recaptcha_token">

                                    <div class="uk-width-1-1">
                                        <button class="uk-button uk-button-primary uk-border-rounded uk-align-right" type="submit" name="submit">Send Message</button>
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
<script src="https://www.google.com/recaptcha/api.js?render={{env('RECAPTCHA_SITE_KEY')}}"></script>
<script>
    grecaptcha.ready(function() {
        grecaptcha.execute('{{env('RECAPTCHA_SITE_KEY')}}').then(function(token) {
            document.getElementById('recaptcha_token').value = token;
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#contact-form').on('submit', function(e) {
            e.preventDefault();
            

            $.ajax({
                url: "{{ route('send.email') }}",
                type: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    alert('Your message has been sent successfully!');
                },
                error: function(xhr) {
                    console.error('Error:', xhr.responseText);
                    alert('There was an error sending your message. Please try again.');
                }
            });
        });
    });
</script>
@endsection