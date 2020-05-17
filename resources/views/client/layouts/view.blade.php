<?php
@extends('client.layouts.master')
@section('title')
    {{ __('message.Home') }}
@endsection
@section('slide')
    @include('client.layouts.slide')
@endsection
@section('content')
<div class="hero_bg">
    <video poster="assets/client/images/hero_poster.jpg" playsinline="" autoplay="" muted="" loop="">
        <source src="assets/client/images/hero/hero.mp4" type="video/mp4">
    </video>
</div>
@endsection
