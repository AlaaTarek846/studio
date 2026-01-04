<section class="section section-newsletter">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>{{ __('website.newsletter') }}</p>
                <h2 class="title-h2">{{ __('website.Want to Be Always Informed') }}</h2>
                <form id="newsletter-form-about" method="POST" action="{{ route('contact.subscribe') }}">
                    @csrf
                    <div class="form-newsletter">
                        <div class="form-newsletter-item form-newsletter-input">
                            <input type="email" class="form-control" id="newsletter-email-about" name="email" placeholder="{{ __('website.Enter Your Email') }}" required autocomplete="off">
                        </div>
                        <div class="form-newsletter-item">
                            <button type="submit" class="btn btn-primary" id="newsletter-submit-btn-about">
                                <span class="newsletter-btn-text">{{ __('website.Subscribe') }}</span>
                                <span class="newsletter-btn-loading d-none">
                                    <i class="zmdi zmdi-refresh zmdi-hc-spin"></i> {{ __('website.Sending...') }}
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="newsletter-response-about mt-3" id="newsletter-response-about"></div>
                </form>
            </div>
        </div>
    </div>
    <div class="box-newsletter">
        <div class="thumb-newsletter wow fadeInUp" data-wow-duration="1000ms">
            <img class="thumb-newsletter-img" src="/website/img/newsletters-bg.png" alt="Image Newsletter">
        </div>
    </div>
</section>
@push('script')
<style>
    /* Fix for Newsletter Section Title and Layout */
    .section-newsletter .container .row > div {
        position: relative;
        z-index: 2;
    }
    
    .section-newsletter .title-h2 {
        word-wrap: break-word;
        overflow-wrap: break-word;
        hyphens: auto;
        max-width: 100%;
        line-height: 1.4;
        white-space: normal;
        display: block;
    }
    
    /* Ensure proper spacing on all screen sizes */
    @media (min-width: 992px) {
        .section-newsletter .container .row > div.col-lg-6 {
            max-width: 50%;
        }
    }
    
    @media (max-width: 991.98px) {
        .section-newsletter .container .row > div {
            max-width: 100%;
        }
    }
    
    /* Padding adjustments for LTR */
    [dir="ltr"] .section-newsletter .container .row > div,
    html:not([dir="rtl"]) .section-newsletter .container .row > div {
        padding-right: 2rem;
    }
    
    /* Padding adjustments for RTL */
    [dir="rtl"] .section-newsletter .container .row > div {
        padding-left: 2rem;
    }
    
    @media (max-width: 991.98px) {
        [dir="ltr"] .section-newsletter .container .row > div,
        html:not([dir="rtl"]) .section-newsletter .container .row > div,
        [dir="rtl"] .section-newsletter .container .row > div {
            padding-right: 0;
            padding-left: 0;
        }
    }
    
    #newsletter-form-about .form-newsletter {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 0;
    }
    
    #newsletter-form-about .form-newsletter-item {
        margin: 0;
    }
    
    #newsletter-form-about .form-newsletter-input {
        flex: 0 0 440px;
        max-width: 440px;
    }
    
    #newsletter-form-about .form-newsletter-input .form-control {
        margin: 0;
        border-radius: 0;
        padding: 1.7rem 1.3rem;
        font-size: 1rem;
        background-color: #f7f7f7;
        border: 1px solid #e0e0e0;
        width: 100%;
        height: auto;
    }
    
    #newsletter-form-about .form-newsletter-item:not(.form-newsletter-input) {
        margin-left: 1.14rem;
    }
    
    #newsletter-form-about .btn-primary {
        margin: 0;
        padding: 1.7rem 2rem;
        border-radius: 0;
        white-space: nowrap;
    }
    
    #newsletter-response-about {
        min-height: 40px;
    }
    
    #newsletter-response-about .alert {
        padding: 12px 20px;
        border-radius: 4px;
        margin: 0;
        font-size: 14px;
        display: inline-block;
    }
    
    @media (max-width: 767.98px) {
        #newsletter-form-about .form-newsletter-input {
            flex: 0 0 50%;
            max-width: 50%;
        }
    }
    
    @media (max-width: 575.98px) {
        #newsletter-form-about .form-newsletter {
            flex-direction: column;
            max-width: 100%;
        }
        
        #newsletter-form-about .form-newsletter-input {
            flex: 0 0 100%;
            max-width: 100%;
            width: 100%;
            margin-bottom: 1rem;
        }
        
        #newsletter-form-about .form-newsletter-item:not(.form-newsletter-input) {
            margin-left: 0;
            width: 100%;
        }
        
        #newsletter-form-about .btn-primary {
            width: 100%;
        }
    }
    
    /* RTL Support */
    body[dir="rtl"] #newsletter-form-about .form-newsletter-item:not(.form-newsletter-input),
    html[dir="rtl"] #newsletter-form-about .form-newsletter-item:not(.form-newsletter-input) {
        margin-left: 0;
        margin-right: 1.14rem;
    }
    
    @media (max-width: 575.98px) {
        body[dir="rtl"] #newsletter-form-about .form-newsletter-item:not(.form-newsletter-input),
        html[dir="rtl"] #newsletter-form-about .form-newsletter-item:not(.form-newsletter-input) {
            margin-right: 0;
        }
    }
</style>

<script>
$(document).ready(function() {
    $('#newsletter-form-about').on('submit', function(e) {
        e.preventDefault();
        
        var $form = $(this);
        var $response = $('#newsletter-response-about');
        var $submitBtn = $('#newsletter-submit-btn-about');
        var $btnText = $submitBtn.find('.newsletter-btn-text');
        var $btnLoading = $submitBtn.find('.newsletter-btn-loading');
        var email = $('#newsletter-email-about').val();
        
        // Reset response
        $response.removeClass('alert-success alert-danger').html('');
        
        // Disable button and show loading
        $submitBtn.prop('disabled', true);
        $btnText.addClass('d-none');
        $btnLoading.removeClass('d-none');
        
        $.ajax({
            url: $form.attr('action'),
            type: 'POST',
            data: {
                email: email,
                _token: $('input[name="_token"]').val()
            },
            success: function(response) {
                if(response.success) {
                    $response.html('<div class="alert alert-success">' + response.message + '</div>').addClass('alert-success');
                    $('#newsletter-email-about').val('');
                } else {
                    $response.html('<div class="alert alert-warning">' + response.message + '</div>').addClass('alert-warning');
                }
            },
            error: function(xhr) {
                var message = '{{ __('website.An error occurred. Please try again.') }}';
                if(xhr.status === 422) {
                    var errors = xhr.responseJSON.errors;
                    if(errors && errors.email) {
                        message = errors.email[0];
                    }
                } else if(xhr.responseJSON && xhr.responseJSON.message) {
                    message = xhr.responseJSON.message;
                }
                $response.html('<div class="alert alert-danger">' + message + '</div>').addClass('alert-danger');
            },
            complete: function() {
                $submitBtn.prop('disabled', false);
                $btnText.removeClass('d-none');
                $btnLoading.addClass('d-none');
            }
        });
    });
});
</script>
@endpush