@extends('master')

@section('title')
    {{Lang::get('page.name')}} - {{Lang::get('page.quality')}}
@stop
@section('keywords')
    {{Lang::get('page.quality')}}
@stop
@section('description')
    {{Lang::get('page.quality')}}
@stop

@section('content')
    <div class="content_sec">
        <div class="cont_top">&nbsp;</div>
        <div class="cont_center">
            <h2 class="heading colr">{{Lang::get('page.quality')}}</h2>
            <div class="static">
                <p>{{Lang::get('page.qua_1')}}</p> <br/>
                <p>{{Lang::get('page.qua_2')}}</p> <br/>
                <p>{{Lang::get('page.qua_3')}}</p> <br/>

                <img src="{{asset('images/quality.jpg')}}" alt="quality"/>
                <p class="bord_botm"></p>
            </div>

            <div class="clear"></div>
        </div>
        <div class="cont_botm">&nbsp;</div>
    </div>

    <div class="clear"></div>
@stop