@extends('layouts.front')

@section('header-text')
<style>
 /* The container must be positioned relative: */
 .custom-select {
  position: relative;
  font-family: Arial;
}

.custom-select select {
  display: none; /*hide original SELECT element: */
}

.select-selected {
  background-color: green;
}

/* Style the arrow inside the select element: */
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}

/* Point the arrow upwards when the select box is open (active): */
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}

/* style the items (options), including the selected item: */
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
}

/* Style items (options): */
.select-items {
  position: absolute;
  background-color: DodgerBlue;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/* Hide the items when the select box is closed: */
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
} 
</style>
    <h1 class="hidden-sm-down"><i class="icon-ribbon"></i> @lang('modules.front.homeHeader') </h1>
    <h4 class="hidden-sm-up"><i class="icon-ribbon"></i> @lang('modules.front.homeHeader') </h4>
    <div align="center"  class="container">
  <div class="card-body">
  <form class="form-inline my-2 my-lg-0 ">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <select class="form-control custom-select mr-sm-2" id="exampleFormControlSelect1">
      
    <option value="0">Select car:</option>
    <option value="1">Audi</option>
    <option value="2">BMW</option>
    <option value="3">Citroen</option>
    <option value="4">Ford</option>
    <option value="5">Honda</option>
    <option value="6">Jaguar</option>
    <option value="7">Land Rover</option>
    <option value="8">Mercedes</option>
    <option value="9">Mini</option>
    <option value="10">Nissan</option>
    <option value="11">Toyota</option>
    <option value="12">Volvo</option>
   
    </select>

      
      <select class="form-control custom-select mr-sm-2" id="exampleFormControlSelect1">

    <option value="0">Select car:</option>
    <option value="1">Audi</option>
    <option value="2">BMW</option>
    <option value="3">Citroen</option>
    <option value="4">Ford</option>
    <option value="5">Honda</option>
    <option value="6">Jaguar</option>
    <option value="7">Land Rover</option>
    <option value="8">Mercedes</option>
    <option value="9">Mini</option>
    <option value="10">Nissan</option>
    <option value="11">Toyota</option>
    <option value="12">Volvo</option>

    </select>
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search <i class="fas fa-search"></i></button>
    </form>
    <form class="form-inline my-4 my-lg-0">
    Trendings: <a style="margin-left:5px;" href=""> Automotive</a> <a style="margin-left:5px;" href=""> Construction</a> <a style="margin-left:5px;" href=""> Consultant</a> <a style="margin-left:5px;" href=""> Designer</a>
    </form>
    <form class="form-inline my-4 my-lg-0">
    
    

  <button class="btn btn-info btn-sm float-right" type="submit">  <i class="fas fa-address-card fa-2x"></i> Upload Resume </button>
  </div>

    </form>
  </div>
</div>

<style>
        .btn-outline.btn-custom {
            color: {{ $frontTheme->primary_color }};
            background-color: transparent;
            border-color: {{ $frontTheme->primary_color }};
        }

        .btn-custom:hover {
            -webkit-box-shadow: 0 2px 10px rgba(15,172,243,0.4);
            box-shadow: 0 2px 10px rgba(15,172,243,0.4);
        }
        .btn-custom, .btn-custom:hover {
            background-color: {{ $frontTheme->primary_color }};
            border-color: {{ $frontTheme->primary_color }};
            color: #fff;
        }
        .btn-custom:hover {
            color: #fff;
            background-color: {{ $frontTheme->primary_color }};
            border-color: {{ $frontTheme->primary_color }};
        }
        .btn-custom:active, .btn-custom.active, .show>.btn-custom.dropdown-toggle {
            background-color: {{ $frontTheme->primary_color }};
            border-color: {{ $frontTheme->primary_color }};
            color: #fff;
        }
    </style>
@endsection

@section('content')



    <!--
    |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
    | Working at TheThemeio
    |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
    !-->
    <section class="section bg-gray py-60">
        <div class="container">

            <div class="row gap-y align-items-center">

                <div class="col-12">
                    <h3>{{ $global->job_opening_text }}</h3>
                    <p>{{ $global->job_opening_title }}</p>

                </div>

            </div>

        </div>
    </section>





    <!--
    |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
    | Open positions
    |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
    !-->


    <section class="section">
        <div class="container">
            <header class="section-header">
                <h2>@lang('modules.front.jobOpening')</h2>
                <hr>
                
            </header>


            <div data-provide="shuffle">
                <div class="text-center gap-multiline-items-2 job-filters" data-shuffle="filter">
                    <button class="btn btn-w-md btn-outline btn-round btn-custom active"data-shuffle="button">All
                    </button>
                    @foreach($locations as $location)
                        <button class="btn btn-outline btn-round btn-custom" data-shuffle="button"
                                data-group="{{ $location->location }}">{{ ucwords($location->location) }}</button>
                    @endforeach
                    <p>&nbsp;</p>
                    @foreach($categories as $category)
                        <button class="btn btn-xs btn-outline btn-round btn-dark" data-shuffle="button"
                                data-group="{{ $category->name }}">{{ ucwords($category->name) }}</button>
                    @endforeach
                </div>

                <br><br>

                <div class="row gap-y" data-shuffle="list">

                    @foreach($jobs as $job)
                        <div class="col-12 col-md-6 col-lg-4 portfolio-2" data-shuffle="item" data-groups="{{ $job->location->location.','.$job->category->name }}">
                            <a href="{{ route('jobs.jobDetail', [$job->company->career_page_link, $job->slug]) }}" class="job-opening-card">
                            <div class="card card-bordered">
                                <div class="card-block">
                                    <h5 class="card-title">{{ ucwords($job->title) }}</h5>
                                    @if($job->company->show_in_frontend == 'true')
                                        <small class="company-title">@lang('app.by') {{ ucwords($job->company->company_name) }}</small>
                                    @endif
                                    <div class="d-flex flex-wrap justify-content-between">
                                        <span class="fw-600 fs-12 text-info">{{ ucwords($job->location->location).', '.ucwords($job->location->country->country_name) }}</span>
                                        <span class="fw-600 fs-12 text-info">{{ ucwords($job->category->name) }}</span>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                    @endforeach

                </div>

            </div>


        </div>
    </section>

@endsection