@extends('layouts.saas-front')

@push('meta_details')
<title>{{ $headerData->meta_details['title'] ?: 'Recruit' }}</title>

<meta name="title" content="{{ $headerData->meta_details['title'] ?: '' }}">
<meta name="description" content="{{ $headerData->meta_details['description'] ?: '' }}">
<meta name="keywords" content="{{ $headerData->meta_details['keywords'] ?: '' }}">
@endpush

@push('header_css')
@if($firstHeaderData->header_background_color != '')
<style>

 /* The switch - the box around the slider */
 .switch {
  position: relative;
  display: inline-block;
  width: 64px;
  height: 32px;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
} 

</style>
<style>
* {
    margin: 0;
    padding: 0;
    font-family: "Open Sans", sans-serif;
    text-decoration: none;
    list-style: none;
}

/* body{
  min-height: 100vh;
  background-image: linear-gradient(125deg,#34495e,#2ecc71);
} */

.container1 {
    max-width: 1000px;
    margin: auto;
    padding: 40px;
    display: flex;
    flex-wrap: wrap;
}

.pricing-table {
    background: #f1f1f1;
    flex: 1;
    margin: 10px;
    text-transform: uppercase;
}

.pricing-header {
    color: #fff;
    position: relative;
    margin-bottom: 20px;
}

.price {
    font-size: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 40px 0;
}

.price span {
    font-size: 30px;
}

.title {
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translate(-50%, 50%);
    width: 80%;
    max-width: 360px;
    text-align: center;
    padding: 8px 0;
    font-size: 14px;
}

.pricing-list {
    padding: 10px 20px;
}

.pricing-list li {
    margin: 8px 0;
    font-size: 14px;
    color: #344;
    text-align: center;
}

.border {
    width: 80px;
    height: 1px;
    background: #ddd;
    margin: auto;
}

.pricing-table a {
    display: block;
    width: 80%;
    margin: auto;
    margin-bottom: 20px;
    text-align: center;
    padding: 8px 0;
    font-size: 14px;
    border: 1px solid;
    max-width: 360px;
    transition: .2s linear;
}

.pricing-table a:hover {
    border-radius: 30px;
}

.table1 .pricing-header {
    background: #2980b9;
}

.table2 .pricing-header {
    background: #2c3e50;
}

.table3 .pricing-header {
    background: #c0392b;
}

.table1 .title {
    background-image: linear-gradient(125deg, #3498db, #9b59b6);
}

.table2 .title {
    background-image: linear-gradient(125deg, #34495e, #95a5a6);
}

.table3 .title {
    background-image: linear-gradient(125deg, #e74c3c, #f39c12);
}

.table1 a {
    color: #2980b9;
}

.table2 a {
    color: #2c3e50;
}

.table3 a {
    color: #c0392b;
}

.table1 a:hover {
    background: #2980b9;
    color: #fff;
}

.table2 a:hover {
    background: #2c3e50;
    color: #fff;
}

.table3 a:hover {
    background: #c0392b;
    color: #fff;
}

@media screen and (max-width:780px) {
    .pricing-table {
        flex: 100%;
    }
}





.background-color {
    border: none;

    background: {
            {
            $firstHeaderData->header_background_color
        }
    }
}

#header-section {
    background: {
            {
            $firstHeaderData->header_background_color
        }
    }
}

.feature-icon {
    color: {
            {
            $firstHeaderData->header_background_color
        }
    }
}

.required:after {
    content: " *";
    color: crimson;
}
</style>
@endif

@if($headerData->header_background_image != '')
<style>
#header-section {
    background: url("{{ $headerData->header_backround_image_url }}");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

#header-section:before {
    content: "";
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    background: rgba(0, 0, 0, .3);
}
</style>
@endif

@if($firstHeaderData->custom_css != '')
<style>
{
     ! ! $firstHeaderData->custom_css ! !
}
</style>
@endif
@endpush

@section('content')
<section class="switchable switchable--switch bg--primary" id="header-section "
    style="background-image:url(http://localhost/jobs/public/bg.png);background-size: cover; top: 10vh;">
    <div class="container">

        <div class="row justify-content-between">
            <div class="col-lg-5 col-md-7">
                <div class="mt--2">
                    <h1 style="color: black; font-weight: 700;"> {{ $headerData->title }} </h1>
                    <p style=" color: black; font-weight: 400;"> {!! $headerData->description !!} </p>

                    @if($firstHeaderData->show_register_in_header)
                    <a class="btn btn-outline-primary type--uppercase" href="{{ route('register') }}" , style="visited {color: green} :hover {background: yellow} :visited:hover {color: purple}">
                        <span class="btn__text">
                            @lang('app.register')
                        </span>
                    </a>
                    @endif



                    @if($firstHeaderData->show_login_in_header)
                    <a class="btn btn--primary type--uppercase" href="{{ route('login') }}">
                        <span class="btn__text">
                            @lang('app.login')
                        </span>
                    </a>
                    @endif

                    <span class="block type--fine-print"><br></span>
                </div>
            </div>
            <div class="col-lg-7 col-md-5 col-12">
                <!-- <img alt="Image" src="{{ $headerData->header_image_url }}">  -->
            </div>
        </div>
 </div>
</section>



<section class="text-center ">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="slider slider--inline-arrows slider--arrows-hover text-center" data-arrows="true">
                    <ul class="slides">
                        @forelse($featuredCompanies as $featuredCompany)
                        <li class="col-md-3 col-6">
                            <a href="{{ route('jobs.jobOpenings',$featuredCompany->career_page_link) }}"
                                target="_blank">
                                <img alt="Image" class="image--xs" src="{{ $featuredCompany->logo_url }}" />
                            </a>
                        </li>
                        @empty
                        @endforelse
                    </ul>
                </div>
            </div>
            <!--end of col-->
        </div>
        <!--end row-->
    </div>
    <!--end of container-->
</section>


<!-- <div id="features"> -->
<section class="text-center"
    style="background-image:url(http://localhost/jobs/public/ak.png);background-size: cover;">

    <div class="container1"> <div class="row">
    <div class="col-lg-6">
            <img src=http://localhost/jobs/public/testimoials.png alt="">
        </div>
        <div class="col-lg-6">
            <div class="testimonial-left-content">
                <h1>Applicant Tracking</h1>
                <p>Form screening to hire, view the candidate status <br>
                    throgh each stage of the recuitment process.</p>

            </div>
        </div>
       
    </div>
    <div class="row">
        <div class="col-lg-3">
            <h4>We are trusted <br> trusted by</h4>
        </div>

        <div class="col-lg-3">
            <img src=http://localhost/jobs/public/brand-1.png alt="">
        </div>
        <div class="col-lg-2">
            <img src=http://localhost/jobs/public/brand-2.png alt="">
        </div>
        <div class="col-lg-2">
            <img src=http://localhost/jobs/public/brand-3.png alt="">
        </div>
        <div class="col-lg-2">
            <img src=http://localhost/jobs/public/brand-4.png alt="">
        </div>
    </div>
    </div>

    <section class="">

        <!-- <div class="container1"> 
            <div class="row">
            <div class="col-lg-6">
                <img src=http://localhost/jobs/public/cate5.png alt="">
            </div>
            <div class="col-lg-6">
                <div class="testimonial-left-content">
                    <h1>Applicant Tracking</h1>
                    <p>Form screening to hire, view the candidate status <br>
                        throgh each stage of the recuitment process.</p>

                </div>
            </div>
        </div> -->

        <div class="col-lg-6">
                        <div class="testimonial-slider-two row">

                            <div class="col-lg-12">
                                <!-- Single Testimonial Start -->
                                <div class="single-testimonial bg-offWhite mb-30">
                                    <div class="testimonial-author">
                                        <div class="testimonial-avatar">
                                            <img src="assets/images/testimonial/testimonial-1.png" alt="">
                                        </div>
                                        <div class="testimonial-meta">
                                            <h5 class="name">Kilian Sanjeev</h5>
                                            <p class="text">
                                                <span class="position">CEO at</span>
                                                <span class="company theme-color">Alpha Investing</span>
                                            </p>
                                        </div>
                                        <span class="icon-quote theme-color">
                                        <i class="fas fa-quote-right"></i>
                                    </span>
                                    </div>
                                    <div class="testimonial-comment">
                                        <p>"I am so pleased with this product. Jopota Recruitment has completely surpassed our expectations. If you aren't sure, always go for Jopota Recruitment. Jopota Recruitment is the real deal!"</p>
                                    </div>
                                </div>
                                <!-- Single Testimonial End -->
                            </div>

                            <div class="col-lg-12">
                                <!-- Single Testimonial Start -->
                                <div class="single-testimonial bg-offWhite mb-30">
                                    <div class="testimonial-author">
                                        <div class="testimonial-avatar">
                                            <img src="assets/images/testimonial/testimonial-2.png" alt="">
                                        </div>
                                        <div class="testimonial-meta">
                                            <h5 class="name">Arina Sebastian</h5>
                                            <p class="text">
                                                <span class="position">Freelance Designer</span>
                                            </p>
                                        </div>
                                        <span class="icon-quote theme-color">
                                        <i class="fas fa-quote-right"></i>
                                    </span>
                                    </div>
                                    <div class="testimonial-comment">
                                        <p>"I am so pleased with this product. Jopota Recruitment has completely surpassed our expectations. If you aren't sure, always go for Jopota Recruitment. Jopota Recruitment is the real deal!"</p>
                                    </div>
                                </div>
                                <!-- Single Testimonial End -->
                            </div>

                            <div class="col-lg-12">
                                <!-- Single Testimonial Start -->
                                <div class="single-testimonial bg-offWhite mb-30">
                                    <div class="testimonial-author">
                                        <div class="testimonial-avatar">
                                            <img src="assets/images/testimonial/testimonial-3.jpg" alt="">
                                        </div>
                                        <div class="testimonial-meta">
                                            <h5 class="name">Kilian Sanjeev</h5>
                                            <p class="text">
                                                <span class="position">Freelance Designer at</span>
                                                <span class="company theme-color">Alpha</span>
                                            </p>
                                        </div>
                                        <span class="icon-quote theme-color">
                                        <i class="fas fa-quote-right"></i>
                                    </span>
                                    </div>
                                    <div class="testimonial-comment">
                                        <p>"I am so pleased with this product. Jopota Recruitment has completely surpassed our expectations. If you aren't sure, always go for Jopota Recruitment. Jopota Recruitment is the real deal!"</p>
                                    </div>
                                </div>
                                <!-- Single Testimonial End -->
                            </div>

                            <div class="col-lg-12">
                                <!-- Single Testimonial Start -->
                                <div class="single-testimonial bg-offWhite mb-30">
                                    <div class="testimonial-author">
                                        <div class="testimonial-avatar">
                                            <img src="assets/images/testimonial/testimonial-4.jpg" alt="">
                                        </div>
                                        <div class="testimonial-meta">
                                            <h5 class="name">Vinicius Wiesehofer</h5>
                                            <p class="text">
                                                <span class="position">Freelance Designer </span>
                                            </p>
                                        </div>
                                        <span class="icon-quote theme-color">
                                        <i class="fas fa-quote-right"></i>
                                    </span>
                                    </div>
                                    <div class="testimonial-comment">
                                        <p>"I am so pleased with this product. Jopota Recruitment has completely surpassed our expectations. If you aren't sure, always go for Jopota Recruitment. Jopota Recruitment is the real deal!"</p>
                                    </div>
                                </div>
                                <!-- Single Testimonial End -->
                            </div>

                        </div>
                    </div>

</section>


        </section>

        <!-- @if(count($iconFeatures) > 0)
<section class="text-center">
    <div class="container">
        <div class="row">
            @foreach ($iconFeatures as $item)
            <div class="col-md-6 col-lg-3">
                <div class="text-block boxed boxed--sm boxed--border"> <i
                        class="feature-icon icon--sm {{ $item->icon }} color--dark"></i>
                    <h5>{{ ucfirst($item->title) }}</h5>
                    <p>{{ ucfirst($item->description) }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
</div> -->

<section class="pricing-section-2 text-center" style="
    padding-right: 50px;
    padding-left: 150px;
    background-image:url('{{asset('/assets/images/post.jpeg')}}');background-size: cover; top: 10vh;
" id="pricing">
<div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1>Place more talent faster, for less</h1>
        <span class="meta">Simple, Transparent Pricing, Free to get started & affordable as you scale</span><br>
             <div class="col-lg-8 col-md-10 mx-auto">
              <span>
              <h3> Billed Yearly <span class="badge badge-success">Save upto 20%</span> </h3>
              </span></div>
          </div>
            <div class="container row">

    @foreach($package as $phone)
          
                <div class="pricing-table table1">
                    <div class="pricing-header">
                        <div class="price"><span>$</span>{{$phone->monthly_price}}</div>
                        <div class="title">{{$phone->name}}</div>
                    </div>
                    <ul class="pricing-list">
                        <li><strong>20GB</strong> Storage</li>
                        <div class="border"></div>
                        <li><strong>4</strong> Email Address</li>
                        <div class="border"></div>
                        <li><strong>1</strong> Domain Name</li>
                        <div class="border"></div>
                        <li><strong>24h</strong> Support</li>
                    </ul>
                    <a href="#">Order Now</a>
                </div>
@endforeach
            <div class="" style="width: 60rem">
  <div class="card-body" > 
  <div class="container">
  <div class="row">
    <div class="col">
      <h2>How does the free trial work?</h2>
      <span class="meta">Recruit CRM's Free Trial lets you experience & try all of our features.</span><br>

      <button type="button" class="btn btn--sm btn--primary type--uppercase background-color"><span class="btn_text">Try For Free</span></button>
    </div>
    <div class="col">
    <p>&#x2705;  50 Candidates</p>
    <p>&#x2705;  25 Companies & Contacts</p>
    <p>&#x2705; 2 Open Jobs</p>
    <p>&#x2705;  2 Email Templates</p>
    <p>&#x2705;  All features from website</p>
    </div>
  </div>
  </div>
</div>

<div class="" style="width: 60rem">
  <div class="card-body text-center">
    <h2><strong>FAQ'S</strong></h2>
    <span class="meta">Please use the chat provided below on your right, we are always there to help you</span>
  </div>
</div>

<div class="" style="width: 62rem;">
  <div class="card-header">
  <i class="fas fa-comment-dots"></i> Is my data secure?
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Cras justo odio</li>

  </ul>
</div>
        </section>

 
        <section class="text-center imagebg" data-gradient-bg="#4876BD,#5448BD,#8F48BD,#BD48B1">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-6">
                        <div class="cta">
                            <h2>{{ $headerData->call_to_action_title }}</h2>

                            @if($headerData->call_to_action_button == 'login')
                            <a class="btn btn--primary type--uppercase background-color" href="{{ route('login') }}">
                                <span class="btn__text">
                                    @lang('app.login')
                                </span>
                            </a>
                            @endif

                            @if($headerData->call_to_action_button == 'register')
                            <a class="btn btn--primary type--uppercase background-color" href="{{ route('register') }}">
                                <span class="btn__text">
                                    @lang('app.register')
                                </span>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="switchable" id="contact">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-5">
                        <p class="lead">{!! $headerData->contact_text !!}</p>
                    </div>
                    <div class="col-md-6 col-12">
                        <form class="ajax-form row mx-0" id="createForm">
                            @csrf
                            <div class="col-md-6 col-12">
                                <label class="required">@lang('modules.front.yourName'):</label>
                                <input type="text" name="name" class="validate-required">
                            </div>
                            <div class="col-md-6 col-12">
                                <label class="required">@lang('modules.front.emailAddress'):</label>
                                <input type="email" name="email" class="validate-required validate-email">
                            </div>
                            <div class="col-md-12 col-12">
                                <label class="required">@lang('modules.front.message'):</label>
                                <textarea rows="4" name="message" class="validate-required"></textarea>
                            </div>

                            <div class="col-md-12 col-12">
                                <div class="g-recaptcha" data-sitekey="{{ $global->google_recaptcha_key }}"></div>
                                <br>
                            </div>

                            <div class="col-md-5 col-lg-4 col-6">
                                <a href="javascript:;" id="save-form"
                                    class="btn btn--primary type--uppercase background-color">
                                    <span class="btn__text">@lang('modules.front.sendEnquiry')</span>
                                </a>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        @endsection