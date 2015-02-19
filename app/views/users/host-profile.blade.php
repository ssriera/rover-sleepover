@extends('layouts.master')

@include('partials.navbar')

@section('content')
 
<!-- Page Title -->
        <div class="section section-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <h1>Host Profile</h1>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="section">
            <div class="container">
                <div class="row">

                    <!-- Start Slide Carousel -->
                    @include('partials.slide-show') 


                    <!-- Host Profile Info -->
                    <div class="col-sm-6 product-details">
                        <h2>{{{ $user->nickname }}}</h2>

                        @if (Auth::check())
                            <a href="{{{ action('ReservationsController@create', $user->id)}}}">Reserve a Sleepover!</a>
                        @endif

                        <h5>Quick Overview</h5>
                        <p>
                            I love dogs!!! 

I am a runner and would be happy to bring the pooch along on my morning runs. If they're not up to that, I will take them on extended morning and evening walks throughout Balboa Park. I will also throw around and ball to play fetch. Plus, if they love other dogs, we've got a couple of dog parks to go to. 

Wanna go to the park? 

We are a male couple who have been together for 27 years. Always had pets up until now. We are retired, so travel now. Therefore, we can focus all of our time and attention to your pooch.
                        </p>
                    </div>
                    <!-- End Product Summary & Options -->
                    
                    <!-- Full Description & Specification -->
                    <div class="col-sm-12">
                        <div class="tabbable">
                            <!-- Tabs -->
                            <ul class="nav nav-tabs product-details-nav">
                                <li class="active"><a href="#tab1" data-toggle="tab">Description</a></li>
                                <li><a href="#tab2" data-toggle="tab">Specification</a></li>
                            </ul>
                            <!-- Tab Content (Full Description) -->
                            <div class="tab-content product-detail-info">
                                <div class="tab-pane active" id="tab1">
                                    <h4>Product Description</h4>
                                    <p>
                                        Donec hendrerit massa metus, a ultrices elit iaculis eu. Pellentesque ullamcorper augue lacus. Phasellus et est quis diam iaculis fringilla id nec sapien. Sed tempor ornare felis, non vulputate dolor. Etiam ornare diam vitae ligula malesuada tempor. Vestibulum nec odio vel libero ullamcorper euismod et in sapien. Suspendisse potenti.
                                    </p>
                                    <h4>Product Highlights</h4>
                                    <ul>
                                        <li>Nullam dictum augue nec iaculis rhoncus. Aenean lobortis fringilla orci, vitae varius purus eleifend vitae.</li>
                                        <li>Nunc ornare, dolor a ultrices ultricies, magna dolor convallis enim, sed volutpat quam sem sed tellus.</li>
                                        <li>Aliquam malesuada cursus urna a rutrum. Ut ultricies facilisis suscipit.</li>
                                        <li>Duis a magna iaculis, aliquam metus in, luctus eros.</li>
                                        <li>Aenean nisi nibh, imperdiet sit amet eleifend et, gravida vitae sem.</li>
                                        <li>Donec quis nisi congue, ultricies massa ut, bibendum velit.</li>
                                    </ul>
                                    <h4>Usage Information</h4>
                                    <p>
                                        Donec hendrerit massa metus, a ultrices elit iaculis eu. Pellentesque ullamcorper augue lacus. Phasellus et est quis diam iaculis fringilla id nec sapien. Sed tempor ornare felis, non vulputate dolor. Etiam ornare diam vitae ligula malesuada tempor. Vestibulum nec odio vel libero ullamcorper euismod et in sapien. Suspendisse potenti.
                                    </p>
                                </div>
                                <!-- Tab Content (Specification) -->
                                <div class="tab-pane" id="tab2">
                                    <table>
                                        <tr>
                                            <td>Total sensor Pixels (megapixels)</td>
                                            <td>Approx. 16.7</td>
                                        </tr>
                                        <tr>
                                            <td>Effective Pixels (megapixels)</td>
                                            <td>Approx. 16.1</td>
                                        </tr>
                                        <tr>
                                            <td>Automatic White Balance</td>
                                            <td>YES</td>
                                        </tr>
                                        <tr>
                                            <td>White balance: preset selection</td>
                                            <td>Daylight, Shade, Cloudy, Incandescent, Fluorescent, Flash</td>
                                        </tr>
                                        <tr>
                                            <td>White balance: custom setting</td>
                                            <td>YES</td>
                                        </tr>
                                        <tr>
                                            <td>White balance: types of color temperature</td>
                                            <td>YES (G7 to M7,15-step) (A7 to B7,15-step)</td>
                                        </tr>
                                        <tr>
                                            <td>White balance bracketing</td>
                                            <td>NO</td>
                                        </tr>
                                        <tr>
                                            <td>ISO Sensitivity Setting</td>
                                            <td>ISO100 - 25600 equivalent</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Full Description & Specification -->
                </div>
            </div>
        </div>

  
@stop