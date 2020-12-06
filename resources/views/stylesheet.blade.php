<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="{{ $allsettings->site_desc }}">
<meta name="keywords" content="{{ $allsettings->site_keywords }}">

@if($allsettings->site_favicon != '')
<link rel="apple-touch-icon" href="{{ url('/') }}/public/storage/settings/{{ $allsettings->site_favicon }}">
<link rel="shortcut icon" href="{{ url('/') }}/public/storage/settings/{{ $allsettings->site_favicon }}">
@endif

<link rel="stylesheet" href="{{ asset('public/assets/css/animate.css') }}">
<link rel="stylesheet" href="{{ asset('public/assets/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/assets/css/jquery-ui.css') }}">
<link rel="stylesheet" href="{{ asset('public/assets/css/linear-icon.css') }}">
<link rel="stylesheet" href="{{ asset('public/assets/css/fonts.css') }}">
<link rel="stylesheet" href="{{ asset('public/assets/css/slick-slider.css') }}">
<link rel="stylesheet" href="{{ asset('public/assets/css/editor.min.css') }}">
<link rel="stylesheet" href="{{ asset('resources/views/static-style.css') }}">
<link rel="stylesheet" href="{{ asset('public/assets/theme/validate/themes/red/red.css') }}" />
<link rel="stylesheet" href="{{ asset('public/assets/theme/pagination/pagination.css') }}">

<link rel="stylesheet" media="screen" href="{{ asset('public/assets/theme/css/vendor.min.css') }}">
<link rel="stylesheet" media="screen" href="{{ asset('public/assets/theme/css/theme.min.css') }}">

<link rel="stylesheet" href="{{ asset('public/assets/theme/plugins/owl-carousel/owl.carousel.css') }}">
<link rel="stylesheet" href="{{ asset('public/assets/filter/jplist.core.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/assets/filter/jplist.jquery-ui-bundle.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/assets/filter/jquery-ui.css') }}" />
@include('dynamic-style')
<link rel="stylesheet" media="screen" href="{{ asset('public/assets/theme/countdown/jquery.countdown.css?v=1.0.0.0') }}">

@if($translate == 'ar')
<link rel="stylesheet" href="{{ asset('public/assets/css/rtl.css') }}" />
@endif




