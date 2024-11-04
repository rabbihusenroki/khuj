<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="description" content="@yield('seo_meta_description')">
        <title>@yield('seo_title')</title>

        <link rel="icon" type="image/png" href="{{ asset('uploads/'.$global_settings_data->favicon) }}" />

        @include('front.layout.styles')

        @include('front.layout.scripts')

        <link
            href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap"
            rel="stylesheet"
        />



        <style>
            .mobile-nav.mean-container .mean-nav ul li a.active,
            .main-nav nav .navbar-nav .nav-item a:hover,
            .main-nav nav .navbar-nav .nav-item a:focus,
            .main-nav nav .navbar-nav .nav-item a.active,
            .main-nav nav .navbar-nav .nav-item:hover a,
            .main-nav nav .navbar-nav .nav-item .dropdown-menu li a:hover,
            .main-nav nav .navbar-nav .nav-item .dropdown-menu li a:focus,
            .main-nav nav .navbar-nav .nav-item .dropdown-menu li a.active,
            .main-nav nav .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li a:hover,
            .main-nav nav .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li a:focus,
            .main-nav
                nav
                .navbar-nav
                .nav-item
                .dropdown-menu
                li
                .dropdown-menu
                li
                a.active,
            .main-nav nav .navbar-nav .nav-item .dropdown-menu li:hover a,
                        .dropdown-item.active,
            .dropdown-item:active,
                        .primary-color,
                        .main-nav nav .navbar-nav .nav-item.active a,
                        .main-nav nav .navbar-nav .nav-item .dropdown-menu li:hover a,
                        .mean-container a.meanmenu-reveal,
                        .search-section button[type="submit"]:hover,
                        .job-category .item .icon i,
                        .job .item .text h3 a:hover,
                        .footer ul.social li a:hover,
                        .faq .accordion-button,
                        .faq .accordion-button::after,
                        .testimonial-carousel .owl-nav .owl-prev,
            .testimonial-carousel .owl-nav .owl-next,
                        .testimonial-carousel .owl-nav .owl-prev:hover,
            .testimonial-carousel .owl-nav .owl-next:hover,
                        .pricing .card-title,
                        .user-panel .list-group-item a,
                        h4.resume,
                        ul.pagination .page-link
                        {
                            color: {{ $global_settings_data->theme_color_1 }};
                        }

                        .main-nav nav .navbar-nav .nav-item .dropdown-menu li a:hover
                        {
                            color: {{ $global_settings_data->theme_color_1 }}!important;
                        }
                        .btn-primary,.footer-bottom,
                        .nav-pills .nav-link.active, .nav-pills .show>.nav-link,
                        .mean-container a.meanmenu-reveal span,
                        .scroll-top,
                        .main-nav nav .navbar-nav .nav-item a:after,
                        .search-section button[type="submit"],
                        .job-category .item:hover,
                        .job-category .all a,
                        .job .item .text .bookmark i:hover,
                        .job .item .text .bookmark-active,
                        .job .item .text .bookmark i.active,
                        .job .all a,
                        .blog .item .text .button a,
                        .footer input[type="submit"],
                        .footer ul.social li a,
                        .page-top .button a,
                        .page-top .button a:hover,
                        .testimonial-carousel .owl-dots .owl-dot,
                        .job-filter .filter-button a,
                        .job .search-result-header,
                        .page-top-job-single .job-single .item .text .apply a,
                        .job-result .left-item .apply a,
                        .job-result .right-item .enquery-form button,
                        .pricing .buy a,
                        .user-panel .list-group-item a:hover,
                        .user-panel input[type="submit"],
                        ul.pagination .active>.page-link, ul.pagination .page-link.active
                        {
                            background-color: {{ $global_settings_data->theme_color_1 }};
                        }
                        
                        .user-panel .list-group .active,
                        .user-panel .list-group .active a,
                        .bg-website
                        {
                            background-color: {{ $global_settings_data->theme_color_1 }}!important;
                        }

                        .select2-container--bootstrap .select2-selection,
                        .search-section .inner,
                        .form-border,
                        .search-section button[type="submit"],
                        .job-category .item:hover,
                        .job .item .text .bookmark i:hover,
                        .job .item .text .bookmark-active,
                        .job .item .text .bookmark i.active,
                        ul.pagination .active>.page-link, ul.pagination .page-link.active
                        {
                            border-color: {{ $global_settings_data->theme_color_1 }};
                        }
                        
                        .btn:first-child:hover,
            :not(.btn-check) + .btn:hover {
                            background-color: {{ $global_settings_data->theme_color_2 }};
                        }

                        .btn:first-child:hover,
                        :not(.btn-check) + .btn:hover
                        {
                            border-color: {{ $global_settings_data->theme_color_2 }};
                        }

                        .select2-container--bootstrap .select2-selection {
                            background-color: #000 !important;
                            color: #FFF !important;
                        }
                        
                        .select2-results {
                            background: black;
                            color: white;
                        }

                        .select2-container--bootstrap .select2-selection--single .select2-selection__rendered {
                            color: #fff;
                        }

                        .form-group input::placeholder {
                            color: #ffffff;
                        }  
                        
        </style>
        <link rel="stylesheet" href="{{ asset('dist-front/css/preloader.css') }}">
        <script src="{{ asset('dist-front/js/preloader.js') }}"></script>
    </head>
    <body>
        <div class="preloader">
            <img src="{{ asset('uploads/preloader.gif') }}" alt="Loading...">
        </div>
        
        <div class="top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 left-side">
                        <ul>
                            <li class="phone-text">{{ $global_settings_data->top_bar_phone }}</li>
                            <li class="email-text">{{ $global_settings_data->top_bar_email }}</li>
                        </ul>
                    </div>
                    <div class="col-md-6 right-side">
                        <ul class="right">
                            @if(Auth::guard('company')->check())
                            <li class="menu">
                                <a href="{{ route('company_dashboard') }}">
                                    <i class="fas fa-home"></i> Dashboard
                                </a>
                            </li>

                            @elseif(Auth::guard('candidate')->check())
                            <li class="menu">
                                <a href="{{ route('candidate_dashboard') }}">
                                    <i class="fas fa-home"></i> Dashboard
                                </a>
                            </li>

                            @else
                            <li class="menu">
                                <a href="{{ route('login') }}">
                                    <i class="fas fa-sign-in-alt"></i> Login
                                </a>
                            </li>
                            <li class="menu">
                                <a href="{{ route('signup') }}">
                                    <i class="fas fa-user"></i> Sign Up
                                </a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
 
        @include('front.layout.nav')

        @yield('main_content')        

        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="item">
                            <h2 class="heading">For Candidates</h2>
                            <ul class="useful-links">
                                <li><a href="{{ route('job_listing') }}">Browser Jobs</a></li>
                                <li><a href="{{ route('candidate_dashboard') }}">Candidate Dashboard</a></li>
                                <li><a href="{{ route('candidate_bookmark_view') }}">Bookmarked Jobs</a></li>
                                <li><a href="{{ route('candidate_applications') }}">Applied Jobs</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="item">
                            <h2 class="heading">For Companies</h2>
                            <ul class="useful-links">
                                <li><a href="{{ route('company_listing') }}">Browse Companies</a></li>
                                <li><a href="{{ route('company_dashboard') }}">Company Dashboard</a></li>
                                <li><a href="{{ route('company_jobs_create') }}">Post New Job</a></li>
                                <li><a href="{{ route('company_candidate_applications') }}">Candidate Applications</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="item">
                            <h2 class="heading">Contact</h2>
                            <div class="list-item">
                                <div class="left">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="right">
                                    {{ $global_settings_data->footer_address }}
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="left">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="right">{{ $global_settings_data->footer_phone }}</div>
                            </div>
                            <div class="list-item">
                                <div class="left">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="right">{{ $global_settings_data->footer_email }}</div>
                            </div>
                            <ul class="social">

                                @if($global_settings_data->facebook!=null)
                                <li>
                                    <a href="{{ $global_settings_data->facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                @endif

                                @if($global_settings_data->twitter!=null)
                                <li>
                                    <a href="{{ $global_settings_data->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a>
                                </li>
                                @endif

                                @if($global_settings_data->pinterest!=null)
                                <li>
                                    <a href="{{ $global_settings_data->pinterest }}" target="_blank"><i class="fab fa-pinterest-p"></i></a>
                                </li>
                                @endif

                                @if($global_settings_data->linkedin!=null)
                                <li>
                                    <a href="{{ $global_settings_data->linkedin }}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                                @endif

                                @if($global_settings_data->instagram!=null)
                                <li>
                                    <a href="{{ $global_settings_data->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="item">
                            <h2 class="heading">Newsletter</h2>
                            <p>To get the latest news from our website, please subscribe us here:</p>
                            <form action="{{ route('subscriber_send_email') }}" method="post" class="form_subscribe_ajax">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control">
                                    <span class="text-danger error-text email_error"></span>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="Subscribe Now">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="copyright">
                            {{ $global_settings_data->copyright_text }}
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="right">
                            <ul>
                                <li><a href="{{ route('terms') }}">Terms of Use</a></li>
                                <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="scroll-top">
            <i class="fas fa-angle-up"></i>
        </div>

        @include('front.layout.scripts_bottom')

        @if($errors->any())
            @foreach($errors->all() as $error)
                <script>
                    iziToast.error({
                        title: '',
                        position: 'topRight',
                        message: '{{ $error }}',
                    });
                </script>
            @endforeach
        @endif

        @if(session()->get('error'))
            <script>
                iziToast.error({
                    title: '',
                    position: 'topRight',
                    message: '{{ session()->get('error') }}',
                });
            </script>
        @endif

        @if(session()->get('success'))
            <script>
                iziToast.success({
                    title: '',
                    position: 'topRight',
                    message: '{{ session()->get('success') }}',
                });
            </script>
        @endif
        
        <script>
        (function($){
            $(".form_subscribe_ajax").on('submit', function(e){
                e.preventDefault();
                var form = this;
                $.ajax({
                    url:$(form).attr('action'),
                    method:$(form).attr('method'),
                    data:new FormData(form),
                    processData:false,
                    dataType:'json',
                    contentType:false,
                    beforeSend:function(){
                        $(form).find('span.error-text').text('');
                    },
                    success:function(data)
                    {
                        if(data.code == 0)
                        {
                            $.each(data.error_message, function(prefix, val) {
                                $(form).find('span.'+prefix+'_error').text(val[0]);
                            });
                        }
                        else if(data.code == 2)
                        {
                            $.each(data.error_message_2, function(prefix, val) {
                                $('.email_error').text(data.error_message_2);
                            });
                        }
                        else if(data.code == 1)
                        {
                            $(form)[0].reset();
                            iziToast.success({
                                title: '',
                                position: 'topRight',
                                message: data.success_message,
                            });
                         }
        
                    }
                });
            });
        })(jQuery);
        </script>

    </body>
</html>
