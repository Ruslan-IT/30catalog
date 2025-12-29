


@extends('layouts.app')

@section('title', 'Контакты')

@section('content')

    @include('partials.header')


    <div class="offcanvas-overlay"></div>

    <!-- ...:::: Start Breadcrumb Section:::... -->
    <div class="breadcrumb-section">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between justify-content-md-between  align-items-center flex-md-row flex-column">
                        <h3 class="breadcrumb-title">Contact Us</h3>
                        <div class="breadcrumb-nav">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li class="active" aria-current="page">Contact Us</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Breadcrumb Section:::... -->

    <!-- ...::::Start Map Section:::... -->
    <div class="map-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=121%20King%20St%2C%20Melbourne%20VIC%203000%2C%20Australia&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...::::End  Map Section:::... -->

    <!-- ...::::Start Contact Section:::... -->
    <div class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- Start Contact Details -->
                    <div class="contact-details-wrapper section-top-gap-100">
                        <div class="contact-details">
                            <!-- Start Contact Details Single Item -->
                            <div class="contact-details-single-item">
                                <div class="contact-details-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="contact-details-content contact-phone">
                                    <a href="tel:{{ $siteSettings-> phone}}">{{ $siteSettings-> phone}}</a>

                                </div>
                            </div> <!-- End Contact Details Single Item -->
                            <!-- Start Contact Details Single Item -->
                            <div class="contact-details-single-item">
                                <div class="contact-details-icon">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <div class="contact-details-content contact-phone">
                                    <a href="mailto:{{ $siteSettings-> email}}">{{ $siteSettings-> email}}</a>

                                </div>
                            </div> <!-- End Contact Details Single Item -->
                            <!-- Start Contact Details Single Item -->
                            <div class="contact-details-single-item">
                                <div class="contact-details-icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="contact-details-content contact-phone">
                                    <span>{{ $siteSettings-> address}}</span>

                                </div>
                            </div> <!-- End Contact Details Single Item -->
                        </div>
                        <!-- Start Contact Social Link -->
                        {{--<div class="contact-social">
                            <h4>Follow Us</h4>
                            <ul>
                                <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                <li><a href=""><i class="fa fa-youtube"></i></a></li>
                                <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                <li><a href=""><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div> <!-- End Contact Social Link -->--}}
                    </div> <!-- End Contact Details -->
                </div>
                <div class="col-lg-8">
                    <div class="contact-form section-top-gap-100">
                        <h3>Get In Touch</h3>

                        <form id="contact-form" action="{{ route('contact.send') }}" method="POST">
                            @csrf
                            <input type="hidden" name="subject" >
                            <input type="hidden" name="page" id="page">

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="default-form-box mb-20">
                                        <label for="contact-name">Name</label>
                                        <input type="text" id="contact-name" name="name" required>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="default-form-box mb-20">
                                        <label for="contact-phone">Phone Number</label>
                                        <input type="text" id="contact-phone" name="phone" required>
                                    </div>
                                </div>

                                 <div class="col-lg-12">
                                    <div class="default-form-box mb-20">
                                        <label for="contact-email">Email Address</label>
                                        <input type="email" id="contact-email" name="email" required>
                                    </div>
                                </div>

                                  <div class="col-lg-12">
                                    <div class="default-form-box mb-20">
                                        <label for="contact-message">Your Message</label>
                                        <textarea type="email" id="contact-message" name="message" required></textarea>
                                    </div>
                                </div>






                                <div class="col-lg-12">
                                    <button class="contact-submit-btn" type="submit">SEND</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ...::::ENd Contact Section:::... -->


    @include('partials.footer')

@endsection

