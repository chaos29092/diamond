@extends('master')

@section('title')
    {{Lang::get('page.name')}} - {{Lang::get('page.price_send')}}
@stop
@section('keywords')
    {{Lang::get('page.price_send')}}
@stop
@section('description')
    {{Lang::get('page.price_send')}}
@stop

@section('content')
    <div class="content_sec">
        <div class="cont_top">&nbsp;</div>
        <div class="cont_center">
            <h2 class="heading colr">{{Lang::get('page.price_send')}}</h2>
            <div class="static">
                <p><strong>{{Lang::get('page.price_send_1')}}</strong></p>
            </div>
            <div class="clear"></div>
        </div>
        <div class="cont_botm">&nbsp;</div>
    </div>

    <div class="clear"></div>
@stop