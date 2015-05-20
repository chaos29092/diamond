@extends('master')

@section('title')
    ZENO - {{Lang::get('page.ubs')}}
@stop
@section('keywords')
    {{Lang::get('page.ubs')}}
@stop
@section('description')
    {{Lang::get('page.ubs')}}
@stop

@section('content')
    <!-- Scroolling Products -->
    <div class="content_sec">
        <div class="cont_top">&nbsp;</div>
        <div class="cont_center">
            <h3 class="heading colr">{{Lang::get('page.ubs')}}</h3>
            <div class="categories">
                <div class="cats">
                    <a href="{{url('nocolordevice/laptop')}}"><img src="images/products_4.jpg" alt="{{Lang::get('page.nocolorlaptop')}}" /></a>
                </div>
                <div class="cats_big">
                    <a href="{{url('nocolordevice/ipad')}}"><img src="images/products_5.jpg" alt="{{Lang::get('page.nocoloripad')}}" /></a>
                </div>
            </div>


            <div class="clear"></div>
        </div>
        <div class="cont_botm">&nbsp;</div>
    </div>

    <div class="clear"></div>
@stop