@extends('master')

@section('title')
    NUCL - {{Lang::get('page.diamond')}}
@stop
@section('keywords')
    {{Lang::get('page.diamond')}}
@stop
@section('description')
    {{Lang::get('page.diamond')}}
@stop

@section('content')
    <!-- Scroolling Products -->
    <div class="content_sec">
        <div class="cont_top">&nbsp;</div>
        <div class="cont_center">
            <h3 class="heading colr">{{Lang::get('page.scs_diamond')}}</h3>
            <div class="categories">
                <div class="cats">
                    <a href="{{url('products/diamond')}}"><img src="images/products_1.jpg" alt="{{Lang::get('page.scs_diamond')}}" /></a>
                </div>
                <div class="cats_big">
                    <a href="{{url('products/diamond')}}"><img src="images/products_2.jpg" alt="{{Lang::get('page.scs_diamond')}}" /></a>
                </div>
            </div>


            <div class="clear"></div>
        </div>
        <div class="cont_botm">&nbsp;</div>
    </div>

    <div class="clear"></div>
@stop