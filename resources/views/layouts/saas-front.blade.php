<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!-- Favicon icon -->
        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('favicon/apple-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('favicon/apple-icon-60x60.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicon/apple-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favicon/apple-icon-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicon/apple-icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('favicon/apple-icon-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicon/apple-icon-144x144.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('favicon/apple-icon-152x152.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-icon-180x180.png') }}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicon/android-icon-192x192.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon/favicon-96x96.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('favicon/manifest.json') }}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{ asset('favicon/ms-icon-144x144.png') }}">
        <meta name="theme-color" content="#ffffff">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @stack('meta_details')
        <link href="{{ asset('saas-front/css/iconsmind.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('saas-front/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('saas-front/css/flickity.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('saas-front/css/stack-interface.css') }}" rel="stylesheet" type="text/css" media="all" />

        <link href="{{ asset('froiden-helper/helper.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/node_modules/toast-master/css/jquery.toast.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/node_modules/sweetalert/sweetalert.css') }}" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" >

        <link href="{{ asset('saas-front/css/theme.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('saas-front/css/custom.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link rel="stylesheet" href="{{ asset('assets/node_modules/switchery/dist/switchery.min.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700" rel="stylesheet">
        <link href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" rel="stylesheet">
        <link rel='stylesheet prefetch'
              href='//cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css'>
        <link rel="stylesheet" href="{{ asset('saas-front/css/bootstrap-select.min.css') }}">
        <link rel="stylesheet" href="{{ asset('saas-front/fonts/flaticon/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('saas-front/vendor/material-design-iconic-font/css/material-design-iconic-font.min.css') }}">

        <script src="https://www.google.com/recaptcha/api.js"></script>
        <style>
/* Style The Dropdown Button */
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;

  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  margin-right: 15px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  left: 50%;
transform: translateX(-50%);
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
</style>

        <style>
            .language-switcher {
                font-size: 14px;
                text-align: center;
                padding: 5px 20px;
                font-weight: 600;
            }
            .language-switcher button {
                padding:3px !important;
                background: #fff;
            }
            .language-switcher button:hover {
                background: #fff;
                -webkit-transform: none !important;
            }
            .language-switcher.show > .btn-light.dropdown-toggle{
                background-color: #fff !important;
            }
            .bootstrap-select:not([class*=col-]):not([class*=form-control]):not(.input-group-btn) {
                width: 94px;
            }
        </style>
        @stack('header_css')
    </head>
    <body data-smooth-scroll-offset="77">


        <div class="nav-container">
            <div class="bar bar--sm visible-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-3 col-md-2">
                            <a href="index.html">
                                <img class="logo logo-dark" alt="logo" src="{{ $headerData->logo_url }}" />
                            </a>
                        </div>
                        <div class="col-9 col-md-10 text-right">
                            <a href="#" class="hamburger-toggle" data-toggle-class="#menu1;hidden-xs">
                                <i class="icon icon--sm stack-interface stack-menu"></i>
                            </a>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </div>
            <!--end bar-->
            <nav id="menu1" class="bar bar--sm bar-1 hidden-xs pos-fixed">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-1 col-md-2 hidden-xs">
                            <div class="bar__module">
                                <a href="{{ url('/')}}">
                                    <img class="logo logo-dark" alt="logo" src="{{ $headerData->logo_url }}" />
                                </a>
                            </div>
                            <!--end module-->
                        </div>
                        <div class="col-lg-11 col-md-12 text-right text-left-xs text-left-sm">
                            <div class="bar__module">
                                <ul class="menu-horizontal text-left">
                                    <li class="">
                                        <a class="inner-link" href="@if(\Request()->is('/')) #header-section @else {{ route('index') }} @endif">@lang('menu.home')</a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="inner-link" href="@if(\Request()->is('/')) #features @else {{ route('index').'#features' }} @endif">@lang('menu.features')</a>
                                        <div class="dropdown-content">
                                        <div class="" style="width:90rem;">
                                         <div class="card-body">
                                       
                                         <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col"><div class="media">
                                            <img  width="50px" src="{{asset('/assets/images/background/auth.jpg')}}" class="mr-3" alt="...">
                                            <div class="media-body">
                                                <h5 class="mt-0">ATS</h5>
                                                From sourcing applicants to placing candidates, everything at one place.
                                            </div>
                                            </div></th>
                                            <th scope="col"><div class="media">
                                            <img width="50px" src="{{asset('/assets/images/background/auth.jpg')}}" class="mr-3">
                                            <div class="media-body">
                                                <h5 class="mt-0">Advanced Search</h5>
                                                We’ve taken search to another level, from boolean to radius search, do everything at one place.
                                            </div>
                                            </div></th>
                                                </tr>
                                        </thead>
                                        </table>

                                        <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col"><div class="media">
                                            <img  width="50px" src="{{asset('/assets/images/background/auth.jpg')}}" class="mr-3" alt="...">
                                            <div class="media-body">
                                                <h5 class="mt-0">CRM</h5>
                                                Give the best customer experience to your clients.
                                            </div>
                                            </div></th>
                                            <th scope="col"><div class="media">
                                            <img width="50px" src="{{asset('/assets/images/background/auth.jpg')}}" class="mr-3">
                                            <div class="media-body">
                                                <h5 class="mt-0">Invoice Management</h5>
                                                Generate invoice and track your unpaid invoices to keep things moving smoothly.
                                            </div>
                                            </div></th>
                                            </tr>
                                        </thead>
                                        </table>
                                        <table class="table table-borderless">
                                        <thead>
                                <tr>
                                <th scope="col"><div class="media">
                            <img  width="50px" src="{{asset('/assets/images/background/auth.jpg')}}" class="mr-3" alt="...">
                            <div class="media-body">
                            <a href=""> <h5 class="mt-0">Reports & Dashboard</h5></a>
                                Go One Step Further With Our Powerful KPI Reports & Gain Meaningful Insights At Your Fingertips.
                            </div>
                            </div></th>
                        <th scope="col"><div class="media">
                        <img width="50px" src="{{asset('/assets/images/background/auth.jpg')}}" class="mr-3">
                        <div class="media-body">
                            <h5 class="mt-0">Process & Data Customizations</h5>
                            From sales pipeline to custom fields, Recruit CRM is truly 100% customizable.
                        </div>
                        </div></th>
                                </tr>
                                        </thead>
                                        </table>
                              
                                        </div>
                                        </div>
                                        </div>
                                   
                                    </li>
                                    <li class="">
                                        <a class="inner-link" href="@if(\Request()->is('/')) #pricing @else {{ route('index').'#pricing' }} @endif">@lang('menu.pricing')</a>
                                    </li>
                                    <li class="">
                                        <a class="inner-link" href="@if(\Request()->is('/')) #contact @else {{ route('index').'#contact' }} @endif">@lang('menu.contact')</a>
                                    </li>

                                </ul>
                            </div>
                            <div class="bar__module">
                                <select name="language_selecter" class=" selectpicker language-switcher" id="language_switcher">
                                    @forelse ($languages as $language)
                                    <option
                                            @if (\Cookie::has('language_code') && \Cookie::get('language_code') == $language->language_code)
                                            selected
                                            @elseif($global->locale == $language->language_code)
                                            selected
                                            @endif
                                            value="{{ $language->language_code }}" data-content=' <span class="flag-icon  @if($language->language_code == 'en') flag-icon-us @else  flag-icon-{{ $language->language_code }} @endif"></span> {{ ucfirst($language->language_code) }}'>{{ ucfirst($language->language_code) }}</option>
                                    @empty
                                    @endforelse
                                </select>
                            </div>

                            <!--end module-->
                            <div class="bar__module">

                                @if($firstHeaderData->show_login_in_menu)
                                    <a class="btn btn--sm type--uppercase" href="{{ module_enabled('Subdomain')?route('front.workspace'):route('login') }}">
                                    <span class="btn__text">
                                        @lang('app.login')
                                    </span>
                                </a>
                                @endif

                                @if($firstHeaderData->show_register_in_menu)
                                <a class="btn btn--sm btn--primary type--uppercase background-color" href="{{ route('register') }}">
                                    <span class="btn__text">
                                        @lang('app.register')
                                    </span>
                                </a>
                                @endif
                            </div>
                            <!--end module-->
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </nav>

        </div>
        <div class="main-container">
            @yield('content')
        </div>

        @include('saas-front.footer')

    <script src="{{ asset('saas-front/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('saas-front/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('saas-front/js/flickity.min.js') }}"></script>
    <script src="{{ asset('saas-front/js/parallax.js') }}"></script>
    <script src="{{ asset('saas-front/js/granim.min.js') }}"></script>
    <script src="{{ asset('saas-front/js/smooth-scroll.min.js') }}"></script>
    <script src="{{ asset('saas-front/js/scripts.js') }}"></script>
    <script src="{{ asset('froiden-helper/helper.js') }}"></script>

    <script src="{{ asset('assets/node_modules/toast-master/js/jquery.toast.js') }}"></script>
    <script src="{{ asset('assets/node_modules/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/node_modules/switchery/dist/switchery.min.js') }}"></script>
{{--        <script src="{{ asset('assets/plugins/custom-select/custom-select.js') }}"></script>--}}
    <script src="{{ asset('saas-front/js/bootstrap-select.min.js') }}"></script>
    <script>
         var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

        elems.forEach(function(html) {
        var switchery = new Switchery(html, { size: 'medium' });
        });

        $('#package-switch').change(function () {
            let checked = $(this).is(":checked");
            if(checked) {
                $('.monthly-packages').hide();
                $('.annual-packages').show();
            }
            else {
                $('.annual-packages').hide();
                $('.monthly-packages').show();
            }
        })

        $('#save-form').click(function (e) {
            @if(!is_null($global->google_recaptcha_key))
                if(grecaptcha.getResponse().length == 0){
                    e.preventDefault();
                    alert('Please click the reCAPTCHA checkbox');
                    return false;
                }
            @endif

            $.easyAjax({
                url: '{{route('contact')}}',
                container: '#createForm',
                type: "POST",
                data: $('#createForm').serialize(),
                success: function(response) {
                    $('#createForm').trigger("reset");
                    swal("Sent!", "We will contact you soon!", "success");
                },
                error: function (response) {
                    swal("Error!", "Your need to fill all the form fields!", "error");
                }
            })
        });
         $(function () {
             $('.selectpicker').selectpicker();
         });
         $('#language_switcher').change(function () {
             var code = $(this).val();
             var url = '{{ route('changeLanguage', ':code') }}';
             url = url.replace(':code', code);

             $.easyAjax({
                 url: url,
                 type: 'POST',
                 container: 'body',
                 data: {
                     _token: '{{ csrf_token() }}'
                 },
                 success: function (response) {
                     if (response.status == 'success') {
                         location.reload();
                     }
                 }
             })
         })
    </script>
</body>

</html>
