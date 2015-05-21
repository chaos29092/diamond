@extends('master')

@section('title')
    NUCL - {{Lang::get('page.index')}}
@stop
@section('keywords')
    {{Lang::get('page.nocoloripad')}}, {{Lang::get('page.coloripad')}}, {{Lang::get('page.colorlaptop')}}, {{Lang::get('page.nocolorlaptop')}}, {{Lang::get('page.colorportable')}}.
@stop
@section('description')
    {{Lang::get('page.nocoloripad')}}, {{Lang::get('page.coloripad')}}, {{Lang::get('page.colorlaptop')}}, {{Lang::get('page.nocolorlaptop')}}, {{Lang::get('page.colorportable')}} Manufacturers.
@stop

@section('content')
<!-- Banner Section -->
<div id="banner">
    <div class="anythingSlider">

        <div class="wrapper">
            <ul>
                <li><img src="{{asset('images/banner_1.jpg')}}" alt="{{Lang::get('page.nocoloripad')}}" /></li>
                <li><img src="{{asset('images/banner_2.jpg')}}" alt="{{Lang::get('page.coloripad')}}" /></li>
                <li><img src="{{asset('images/banner_3.jpg')}}" alt="{{Lang::get('page.colorlaptop')}}" /></li>
            </ul>
        </div>

    </div>
</div>

<div class="clear"></div>



<div class="content_sec">
    <div class="cont_top">&nbsp;</div>
    <div class="cont_center">
        <!-- Advertise Section -->
        <div class="adv">
            <ul>
                <li><a href="{{url('products/diamond')}}"><img src="{{asset('images/ab_1.jpg')}}" alt="{{Lang::get('page.promotion')}} Device" /></a></li>
                <li><a href="{{url('contact')}}"><img src="{{asset('images/ab_2.jpg')}}" alt="{{Lang::get('page.promotion')}} {{Lang::get('page.probe')}}" /></a></li>
            </ul>
        </div>
        <div class="clear"></div>
        <div class="clear"></div>
    </div>
    <div class="cont_botm">&nbsp;</div>
</div>
<div class="clear"></div>
@stop