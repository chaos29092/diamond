@extends('master')

@section('title')
    {{Lang::get('page.name')}} - {{Lang::get('page.how_to_buy')}}
@stop
@section('keywords')
    {{Lang::get('page.how_to_buy')}}
@stop
@section('description')
    {{Lang::get('page.how_to_buy')}}
@stop

@section('content')
    <div class="content_sec">
        <div class="cont_top">&nbsp;</div>
        <div class="cont_center">
            <h2 class="heading colr">{{Lang::get('page.how_to_buy')}}</h2>
            <div class="static">
                <p><strong>Q: {{Lang::get('page.q1')}}</strong></p>
                <p>A:  {{Lang::get('page.a1')}}</p>
                <br/>
                <p><strong>Q: {{Lang::get('page.q2')}}</strong></p>
                <p>A:  {{Lang::get('page.a2')}}</p>
                <br/>
                <p><strong>Q: {{Lang::get('page.q3')}}</strong></p>
                <p>A:  {{Lang::get('page.a3')}}</p>
            </div>
            <div class="clear"></div>
        </div>
        <div class="cont_botm">&nbsp;</div>
    </div>

    <div class="clear"></div>
@stop