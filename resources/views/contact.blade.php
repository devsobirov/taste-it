@extends('layouts/main')

@section('title')
    Contact
@endsection

@section('main-content')

<section class="hero-wrap hero-wrap-2" style="background-image:url(images/xbg_5.jpg.pagespeed.ic.k95c5nPtun.jpg)" data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
<div class="row no-gutters slider-text align-items-end justify-content-center">
<div class="col-md-9 ftco-animate text-center mb-5">
<h1 class="mb-2 bread">Contact us</h1>
<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Contact us <i class="fa fa-chevron-right"></i></span></p>
</div>
</div>
</div>
</section>
<section class="ftco-section contact-section bg-light">
<div class="container">
<div class="row d-flex contact-info">
<div class="col-md-12">
<h2 class="h4 font-weight-bold">Contact Information</h2>
</div>
<div class="w-100"></div>
<div class="col-md-3 d-flex">
<div class="dbox">
<p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
</div>
</div>
<div class="col-md-3 d-flex">
<div class="dbox">
<p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
</div>
</div>
<div class="col-md-3 d-flex">
<div class="dbox">
<p><span>Email:</span> <a href="../../cdn-cgi/l/email-protection#fc95929a93bc8593898e8f958899d29f9391"><span class="__cf_email__" data-cfemail="9cf5f2faf3dce5f3e9eeeff5e8f9b2fff3f1">[email&#160;protected]</span></a></p>
</div>
</div>
<div class="col-md-3 d-flex">
<div class="dbox">
<p><span>Website</span> <a href="contact.html#">yoursite.com</a></p>
</div>
</div>
</div>
</div>
</section>
<section class="ftco-section ftco-no-pt contact-section">
<div class="container">
<div class="row d-flex align-items-stretch no-gutters">
<div class="col-md-6 p-5 order-md-last">
<h2 class="h4 mb-5 font-weight-bold">Contact Us</h2>
<form action="/contact" method="POST">
    @csrf
    <div class="form-group">
        <input type="text" class="form-control" name="name" placeholder="Your Name">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="email" placeholder="Your Email">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="subject" placeholder="Subject">
    </div>
    <div class="form-group">
        <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
    </div>
    <div class="form-group">
    <input type="submit" value="Юбориш" class="btn btn-primary py-3 px-5">
    </div>
</form>
</div>
<div class="col-md-6 d-flex align-items-stretch">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11941.728013726037!2d60.6077136!3d41.559894!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd1d67453c9117a52!2sDATA%20Innovatsion%20o&#39;quv%20markazi!5e0!3m2!1sru!2s!4v1642758559109!5m2!1sru!2s" width="100%" style="border:0;" allowfullscreen="" loading="lazy" style="width: 100%"></iframe>
</div>
</div>
</div>
</section>

@endsection
