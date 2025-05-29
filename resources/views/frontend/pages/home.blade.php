@extends('frontend.layouts.master')
@section('title', 'Home')

@section('content')
<!-- Banner-Area-Start -->
<!-- include header -->
@include('frontend.pages.widgets.hero')
<!-- Service-Area-Start -->
@include('frontend.pages.widgets.service')
<!-- Service-Area-End -->

<!-- About-Area-Start -->

<!-- About-Area-End -->

<!-- Portfolio-Area-Start -->
@include('frontend.pages.widgets.portfolio')
<!-- Portfolio-Area-End -->

<!-- Skills-Area-Start -->
 <!--
@include('frontend.pages.widgets.skills')
-->

<!-- Experience-Area-Start -->

<!-- Experience-Area-End -->


<!-- Testimonial-Area-Start -->

<!-- Testimonial-Area-End -->
 

<!-- Blog-Area-Start -->
@include('frontend.pages.widgets.blog')
<!-- Blog-Area-End -->

@include('frontend.pages.widgets.about')

<!-- Contact-Area-Start -->
@include('frontend.pages.widgets.contact')
<!-- Contact-Area-End -->

@endsection