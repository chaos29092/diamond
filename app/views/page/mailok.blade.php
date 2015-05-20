@extends('master')

@section('title')
    ZENO - {{Lang::get('page.message_received')}}
@stop
@section('keywords')
    {{Lang::get('page.message_received')}}
@stop
@section('description')
    {{Lang::get('page.message_received')}}
@stop

@section('content')
    <div class="content_sec">
        <div class="cont_top">&nbsp;</div>
        <div class="cont_center">
            <h2 class="heading colr">{{Lang::get('page.message_received')}}</h2>
            <div class="static">
                <p><strong>{{Lang::get('page.message_received_1')}}</strong></p>
            </div>
            <div class="clear"></div>
        </div>
        <div class="cont_botm">&nbsp;</div>
    </div>

    <div class="clear"></div>
@stop