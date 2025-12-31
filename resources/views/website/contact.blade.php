@extends('layout.website.master')

@section('title',__('website.contact'))

@push('style')
    <style>
        .error-message {
            color: #ff7062;
            font-size: 0.85rem;
            margin-top: 5px;
            display: none;
        }
        .form__input.error,
        .form__textarea.error {
            border-color: #ff7062;
        }
        .response {
            margin-bottom: 20px;
            display: none;
        }
        .text-info {
            background-color: #28a745;
            color: #fff;
            padding: 15px 20px;
            border-radius: 4px;
            text-align: center;
        }
        .failed {
            background-color: #dc3545;
            color: #fff;
            padding: 15px 20px;
            border-radius: 4px;
            text-align: center;
        }
    </style>
@endpush

@section('content')
    <!-- Banner Header -->
    <section class="section section-banner">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-12 col-sm-12 col-12">
                    <h2 class="title-h2">{{ __('website.Contact Us') }}</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('website.home') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('website.Contact Us') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="section-banner__box">
            <div class="section-banner__thumb">
                <img class="section-banner__img" src="/website/img/header-img.jpg" alt="{{ __('website.Contact Us') }}">
            </div>
        </div>
    </section>

    <!-- Contact Info -->
    <section class="section section-contact">
        <div class="container">

            <p class="before-title text-center">{{ __('website.Be in touch') }}</p>
            <h2 class="title-h2 text-center">{{ __('website.CONTACT INFO') }}</h2>
            <p class="text-center after-title">{{ __('website.Contact Info Description') }}</p>

            <div class="row-contact">
                <div class="col-contact">
                    <img src="/website/img/icons/call.svg" alt="{{ __('website.Call Us') }}">
                    <h3 class="title-h3">{{ __('website.Call Us') }}</h3>
                    <ul class="col-contact__list">
                        <li class="col-contact__list-item"><span>{{ __('website.Phone') }}:</span> {{ $shareSetting->mobile ?? '' }}</li>
                    </ul>
                </div>
                <div class="col-contact">
                    <img src="/website/img/icons/speech-bubble.svg" alt="{{ __('website.Email') }}">
                    <h3 class="title-h3">{{ __('website.Email') }}</h3>
                    <ul class="col-contact__list">
                        <li class="col-contact__list-item"><span>{{ __('website.Email') }}:</span> {{ $shareSetting->email ?? '' }}</li>
                    </ul>
                </div>
                <div class="col-contact">
                    <img src="/website/img/icons/location.svg" alt="{{ __('website.Our Address') }}">
                    <h3 class="title-h3">{{ __('website.Our Address') }}</h3>
                    <ul class="col-contact__list">
                        <li class="col-contact__list-item"><span>{{ __('website.Address') }}:</span> {!! $shareSetting->address ?? '' !!}</li>
                    </ul>
                </div>
                <div class="col-contact">
                    <img src="/website/img/icons/clock.svg" alt="{{ __('website.Opening Hours') }}">
                    <h3 class="title-h3">{{ __('website.Opening Hours') }}</h3>
                    <ul class="col-contact__list">
                        <li class="col-contact__list-item"><span>{{ __('website.Working Hours') }}:</span> {{ __('website.Working Hours Time') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-map">
        {!! $shareSetting->map ?? '' !!}
    </section>

    <!-- Form -->
    <section class="section section-form" id="contact-form">
        <div class="container">

            <p class="before-title text-center">{{ __('website.let\'s talk') }}</p>
            <h2 class="title-h2 text-center">{{ __('website.Send Us a Massage') }}</h2>
            <p class="text-center after-title">{{ __('website.Contact Form Description') }}</p>

            <form method="post" action="{{ route('contact.store') }}" id="contact-form-submit">
                @csrf
                <div class="form">
                    <div class="response"></div>
                    <div class="form-item">
                        <input class="form__input" type="text" name="name" id="name" placeholder="{{ __('website.Your Name') }}" required>
                        <span class="error-message" id="name-error"></span>
                    </div>
                    <div class="form-item">
                        <input class="form__input" type="text" name="topic" id="topic" placeholder="{{ __('website.Your Topic') }}" required>
                        <span class="error-message" id="topic-error"></span>
                    </div>
                    <div class="form-item">
                        <input class="form__input" type="email" name="email" id="email" placeholder="{{ __('website.Email Address') }}" required>
                        <span class="error-message" id="email-error"></span>
                    </div>
                    <div class="form-item">
                        <input class="form__input" type="text" name="phone" id="phone" placeholder="{{ __('website.Your Phone') }}" required>
                        <span class="error-message" id="phone-error"></span>
                    </div>
                    <div class="form-item w-100">
                        <textarea class="form__textarea" name="message" id="message" rows="3" placeholder="{{ __('website.Type Your Message') }}" required></textarea>
                        <span class="error-message" id="message-error"></span>
                    </div>
                    <div class="form-item text-center">
                        <button type="submit" class="btn btn-primary" id="submit-btn">{{ __('website.Send Message') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection

@push('script')
<script>
$(document).ready(function() {
    $('#contact-form-submit').on('submit', function(e) {
        e.preventDefault();
        
        // Reset errors
        $('.error-message').text('').hide();
        $('.form__input, .form__textarea').removeClass('error');
        $('.response').html('').removeClass('text-info failed');
        
        // Disable submit button
        $('#submit-btn').prop('disabled', true).text('{{ __('website.Sending...') }}');
        
        // Get form data
        var formData = {
            name: $('#name').val(),
            topic: $('#topic').val(),
            email: $('#email').val(),
            phone: $('#phone').val(),
            message: $('#message').val(),
            _token: $('input[name="_token"]').val()
        };
        
        // Send AJAX request
        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: formData,
            success: function(response) {
                if(response.success) {
                    // Show success message
                    $('.response').html('<div class="text-info">' + response.message + '</div>').show();
                    
                    // Reset form
                    $('#contact-form-submit')[0].reset();
                    
                    // Scroll to success message
                    $('html, body').animate({
                        scrollTop: $('.response').offset().top - 100
                    }, 500);
                }
            },
            error: function(xhr) {
                if(xhr.status === 422) {
                    // Validation errors
                    var errors = xhr.responseJSON.errors;
                    $.each(errors, function(key, value) {
                        $('#' + key + '-error').text(value[0]).show();
                        $('#' + key).addClass('error');
                    });
                    
                    $('.response').html('<div class="failed">' + '{{ __('website.Please fix the errors below') }}' + '</div>').show();
                } else {
                    $('.response').html('<div class="failed">' + '{{ __('website.An error occurred. Please try again.') }}' + '</div>').show();
                }
            },
            complete: function() {
                // Re-enable submit button
                $('#submit-btn').prop('disabled', false).text('{{ __('website.Send Message') }}');
            }
        });
    });
});
</script>
@endpush