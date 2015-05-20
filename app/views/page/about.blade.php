@extends('master')

@section('title')
    ZENO - {{Lang::get('page.about_us')}}
@stop
@section('keywords')
    {{Lang::get('page.about_us')}}
@stop
@section('description')
    {{Lang::get('page.about_us')}}
@stop

@section('content')
    <div class="content_sec">
        <div class="cont_top">&nbsp;</div>
        <div class="cont_center">
            <h2 class="heading colr">{{Lang::get('page.about_us')}}</h2>
            <div class="static">
                <p class="bord_botm">{{Lang::get('page.about_us_1')}} <br/><br/>{{Lang::get('page.about_us_2')}}</p>
            </div>

            <div class="clear"></div>
        </div>
        <div class="cont_botm">&nbsp;</div>
    </div>

    <div class="clear"></div>
@stop