<!DOCTYPE html><html lang="zxx" class="js"><head><meta charset="utf-8"><meta name="author" content="Softnio"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><meta name="description" content=""><!-- Fav Icon  --><link rel="shortcut icon" href="{{asset('assets/images/logo/favicon.png')}}"><!-- Site Title  --><title>{{isset($page_title) ? $page_title : ''}} | {{$basic->sitename}}</title><!-- Bundle and Base CSS --><link rel="stylesheet" href="{{asset('front-assets/css/vendor.bundle-11966.css')}}"><link rel="stylesheet" href="{{asset('front-assets/css/style-salvia-11966.css')}}" id="changeTheme">
 <link href="{{asset('assets/admin/css/sweetalert.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/css/toastr.min.css')}}" rel="stylesheet"/>

     <link href="{{asset('front-assets/css/jquery.growl.css')}}" rel="stylesheet" />

   <!-- Extra CSS --><link rel="stylesheet" href="{{asset('front-assets/css/theme-11966.css')}}"><script>(function(i, s, o, g, r, a, m) {i['GoogleAnalyticsObject'] = r;i[r] = i[r] || function() {(i[r].q = i[r].q || []).push(arguments)}, i[r].l = 1 * new Date();a = s.createElement(o),m = s.getElementsByTagName(o)[0];a.async = 1;a.src = g;m.parentNode.insertBefore(a, m)})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');ga('create', 'UA-91615293-2', 'auto');ga('send', 'pageview');</script></head>


<body class="nk-body body-wider bg-theme-grad-s2"><div class="nk-wrap ov-h"><div class="container"><main class="nk-pages nk-pages-centered tc-light px-0 text-center"><header class="pt-5"><a href="#" class="d-inline-block logo-lg"><img src="{{asset('assets/images/logo/logo.png')}}" srcset="{{asset('assets/images/logo/logo.png')}}" alt="logo"></a></header><div class="my-auto py-5"><div class="row justify-content-center"><div class="col-xl-6 col-md-7 col-sm-9"><div class="position-relative"><h2 class="title-xxl-grad">404</h2><h5 class="pb-2">Opps! Why you’re here?</h5><p class="">We are very sorry for inconvenience. It looks like you’re try to access a page that does not exist or has been deleted</p></div></div></div>  <a href="{{ url('/') }}" class="btn btn-grad btn-md btn-round">Back to home</a></div>





<footer class="text-center py-5"><ul class="social mb-4"><li><a href="#"><em class="social-icon fab fa-facebook-f"></em></a></li><li><a href="#"><em class="social-icon fab fa-twitter"></em></a></li><li><a href="#"><em class="social-icon fab fa-medium-m"></em></a></li><li><a href="#"><em class="social-icon fab fa-github"></em></a></li><li><a href="#"><em class="social-icon fab fa-bitcoin"></em></a></li></ul><p class="copyright-text copyright-text-s3">Copyright © {{date('Y')}} {{$basic->sitename}}.</p></footer><div class="bg-image"><img src="images/shape-z5.png" alt="particle"></div></main></div><div class="preloader"><span class="spinner spinner-round"></span></div>

<script src="{{asset('front-assets/js/jquery.bundle.js?ver=192')}}"></script><script src="{{asset('front-assets/js/scripts.js?ver=192')}}"></script><script src="{{asset('front-assets/js/charts.js?var=161')}}"></script>

@yield('script')
<script src="{{asset('assets/admin/js/toastr.min.js')}}"></script>
<script src="{{asset('assets/admin/js/sweetalert.js')}}"></script>

    <script src="{{asset('front-assets/js/rainbow.js')}}"></script>
	<script src="{{asset('front-assets/js/sample.js')}}"></script>
	<script src="{{asset('front-assets/js/jquery.growl.js')}}"></script>

	<script src="{{asset('front-assets/js/pace.min.js')}}"></script>

<script>
