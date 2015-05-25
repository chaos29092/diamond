<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>@yield('title')</title>
<meta name="keywords" content="@yield('keywords')">
<meta name="description" content="@yield('description')">
<link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">
<!-- // Stylesheets // -->
<link rel="stylesheet" href="{{asset('css/style.min.css')}}" type="text/css" />
<link rel="stylesheet" href="{{asset('css/slider.min.css')}}" type="text/css" media="screen" />
<link rel="stylesheet" href="{{asset('css/default.advanced.min.css')}}" type="text/css" />
<link rel="stylesheet" href="{{asset('css/contentslider.min.css')}}" type="text/css"  />
<link rel="stylesheet" href="{{asset('css/jquery.fancybox-1.3.1.min.css')}}" type="text/css" media="screen" />
</head>

<body>
<a name="top"></a>
<div id="wrapper_sec">
	<!-- Header -->
	<div id="masthead">
    	<div class="logo">
        	<a href="{{url('/')}}"><img src="{{asset('images/logo.png')}}" alt="{{Lang::get('page.name')}}" /></a>
            <h5 class="slogn">{{Lang::get('page.slogn')}}</h5>
        </div>
        <div class="clear"></div>
        <div class="navigation">
            <ul id="nav" class="dropdown dropdown-linear dropdown-columnar">
                <li><a href="{{url('/')}}">{{Lang::get('page.index')}}</a></li>
                <li><a href="{{url('products')}}">{{Lang::get('page.products')}}</a></li>
                <li><a href="{{url('quality')}}">{{Lang::get('page.quality')}}</a></li>
                <li><a href="{{url('about')}}">{{Lang::get('page.about_us')}}</a></li>
                <li><a href="{{url('contact')}}">{{Lang::get('page.contact')}}</a></li>
                <li><a href="{{url('service')}}">{{Lang::get('page.help')}}</a></li>
            </ul>
            <ul class="lang">
            	<li>Language:</li>
                <li><a href="http://en.hanvydiamond.com">English</a></li>
                <li><a href="http://cn.hanvydiamond.com">中文</a></li>
                <li><a href="http://ru.hanvydiamond.com">русский</a></li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>

    @yield('content')

</div>
<!-- Footer Section -->
	<div id="footer">
    	<div class="foot_inr">
        <div class="topdiv">
        	<a href="#top" class="top">&nbsp;</a>
        </div>
        <div class="emailsignup">
        	<h5>{{Lang::get('page.get_prices')}}</h5>
            {{ Form::open(array('url' => 'getPrice', 'class' => 'form-horizontal', 'role' => 'form' )) }}
            <ul class="inp">
            	<li><input name="email" placeholder="    {{Lang::get('page.your_email_address')}}" type="text" class="bar" /></li>
                <li>{{ Form::submit(Lang::get('page.send'), array('class' => 'simplebtn')) }}</li>
            </ul>
            {{ Form::close() }}
            <div class="clear"></div>
            <p class="signtxt">
                {{Lang::get('page.send_prices')}}
            </p>
            <h6>{{Lang::get('page.payment')}}</h6>
            <ul class="cards">
            	<li><img src="{{asset('images/western-union.jpg')}}" alt="western union" /></li>
                <li><img src="{{asset('images/bank-transfer.jpg')}}" alt="bank transfer" /></li>
            </ul>
        </div>
        
    	<div class="partners">
        	<h5>Products</h5>
            <ul>
                <li><a href="{{url('products/diamond')}}">{{Lang::get('page.scs_diamond')}}</a></li>
                <li><a href="{{url('products/diamond')}}">{{Lang::get('page.scs_diamond')}}</a></li>
            </ul>
            <div class="clear"></div>
        </div>
        <div class="partners">
        	<h5>Support</h5>
            <ul>
                <li><a href="{{url('service')}}">{{Lang::get('page.help')}}</a></li>
                <li><a href="{{url('about')}}">{{Lang::get('page.about_us')}}</a></li>
                <li><a href="{{url('quality')}}">{{Lang::get('page.quality')}}</a></li>
                <li><a href="{{url('contact')}}">{{Lang::get('page.contact')}}</a></li>
            </ul>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
        <div class="copyrights">
        	<p>© 2010 {{Lang::get('page.name')}}. All Rights Reserved</p>
            <div class="footer_links">
            	<ul>
                	<li><a href="{{url('service')}}">{{Lang::get('page.ship_or_return')}}</a></li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
        </div>
    </div>

<!-- // Javascript // -->
<script type="text/javascript" src="{{asset('js/jquery.min14.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.easing.1.2.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.anythingslider.js')}}"></script>
<script type="text/javascript" src="{{asset('js/anything.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jcarousellite_1.0.1.js')}}"></script>
<script type="text/javascript" src="{{asset('js/scroll.js')}}"></script>
<script type="text/javascript" src="{{asset('js/ddaccordion.js')}}"></script>
<script type="text/javascript" src="{{asset('js/acordn.js')}}"></script>
<script type="text/javascript" src="{{asset('js/contentslider.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.fancybox-1.3.1.js')}}"></script>
<script type="text/javascript" src="{{asset('js/lightbox.js')}}"></script>
<script type="text/javascript" src="{{asset('js/cont_slidr.js')}}"></script>
<!--[if lte IE 7]>
<script type="text/javascript" src="{{asset('js/jquery.dropdown.js')}}"></script>
<![endif]-->
</body>
</html>
