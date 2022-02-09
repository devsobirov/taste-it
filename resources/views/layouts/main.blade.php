
<!DOCTYPE html>
<html lang="en">
<head>
    <title> @yield('title') </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/A.animate.css+owl.carousel.min.css+owl.theme.default.min.css+magnific-popup.css+bootstrap-datepicker.css+jquery.timepicker.css+flaticon.css+style.css,Mcc.RuFz_k4bhO.css.pagespeed.cf.ESm1BFElw-.css') }}" />
</head>
<body>
<div class="wrap">
<div class="container">
<div class="row justify-content-between">
<div class="col-12 col-md d-flex align-items-center">
<p class="mb-0 phone"><span class="mailus">Phone no:</span> <a href="index.html#">+00 1234 567</a> or <span class="mailus">email us:</span> <a href="index.html#"><span class="__cf_email__" data-cfemail="dbbeb6bab2b7a8bab6abb7be9bbeb6bab2b7f5b8b4b6">[email&#160;protected]</span></a></p>
</div>
<div class="col-12 col-md d-flex justify-content-md-end">
<p class="mb-0">Mon - Fri / 9:00-21:00, Sat - Sun / 10:00-20:00</p>
<div class="social-media">
<p class="mb-0 d-flex">
<a href="index.html#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
<a href="index.html#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
<a href="index.html#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
<a href="index.html#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
</p>
</div>
</div>
</div>
</div>
</div>

@include('includes/navbar')


@yield('main-content')


@include('includes/footer')

<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" /><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/jquery-migrate-3.0.1.min.js+popper.min.js+bootstrap.min.js.pagespeed.jc.-6w41TTlbS.js') }}"></script><script>eval(mod_pagespeed_q49oLQo$KZ);</script>
<script>eval(mod_pagespeed_pZqbG0Jgl8);</script>
<script>eval(mod_pagespeed_dSDBfobq1n);</script>
<script src="{{ asset('js/jquery.easing.1.3.js+jquery.waypoints.min.js+jquery.stellar.min.js+owl.carousel.min.js.pagespeed.jc.NEztLSF23K.js') }}"></script><script>eval(mod_pagespeed_nbt4woDM4f);</script>
<script>eval(mod_pagespeed_JcmOf4OhXl);</script>
<script>eval(mod_pagespeed_CSbekBKKDr);</script>
<script>eval(mod_pagespeed_zaYVYd4vD3);</script>
<script src="{{ asset('js/jquery.magnific-popup.min.js+jquery.animateNumber.min.js+bootstrap-datepicker.js+jquery.timepicker.min.js+scrollax.min.js.pagespeed.jc.qQbLibHtsz.js') }}">
</script><script>eval(mod_pagespeed_iN8ddZFfbE);</script>
<script>eval(mod_pagespeed_W28HQ1ieBw);</script>
<script>eval(mod_pagespeed_Ec93DSl8lT);</script>
<script>eval(mod_pagespeed_QGfnxj6Smx);</script>
<script>eval(mod_pagespeed_Swzj03gqso);</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{ asset('js/google-map.js+main.js.pagespeed.jc.lZfh61_23-.js')}}" ></script>
<script>eval(mod_pagespeed_xdKY0GKK5P);</script>
<script>eval(mod_pagespeed_PpqPkiEwoF);</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-23581568-13');
		</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6c8d30e1380e166d","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>



@yield('scripts')
</body>
</html>
