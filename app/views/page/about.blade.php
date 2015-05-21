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
                <p>{{Lang::get('page.ab_1')}}</p> <br/>
                <p>{{Lang::get('page.ab_2')}}</p> <br/>
                <p>{{Lang::get('page.ab_3')}}</p>
                <p>1. {{Lang::get('page.ab_4')}}</p>
                <p>2. {{Lang::get('page.ab_5')}}</p>
                <p>3. {{Lang::get('page.ab_6')}}</p>
                <p>4. {{Lang::get('page.ab_7')}}</p>
                <p>5. {{Lang::get('page.ab_8')}}</p>
                <br/>
                <p>{{Lang::get('page.ab_9')}}</p><br/>

                <p class="bord_botm">{{Lang::get('page.ab_10')}}</p>
            </div>

            <div class="clear"></div>
        </div>
        <div class="cont_botm">&nbsp;</div>
    </div>

    <div class="clear"></div>
@stop