@extends('master')

@section('title')
    NUCL
@stop
@section('keywords')

@stop
@section('description')

@stop

@section('content')
    <div class="content_sec">
        <div class="cont_top">&nbsp;</div>
        <div class="cont_center cont_center_sh">
            <!-- Column1 Section -->
            <div class="col1">
                <!-- Categories -->
                <div class="category">
                    <div class="small_heading">
                        <h5 class="colr">{{Lang::get('page.category')}}</h5>
                    </div>
                    <div class="arrowlistmenu">
                        <a class="menuheader expandable">{{Lang::get('page.ucd')}}</a>
                        <ul class="categoryitems">
                            <li><a href="{{url('colordevice/ipad')}}">{{Lang::get('page.coloripad')}}</a></li>
                            <li><a href="{{url('colordevice/laptop')}}">{{Lang::get('page.colorlaptop')}}</a></li>
                            <li><a href="{{url('colordevice/portable')}}">{{Lang::get('page.colorportable')}}</a></li>
                        </ul>
                        <a class="menuheader expandable">{{Lang::get('page.ubs')}}</a>
                        <ul class="categoryitems">
                            <li><a href="{{url('nocolordevice/ipad')}}">{{Lang::get('page.nocoloripad')}}</a></li>
                            <li><a href="{{url('nocolordevice/laptop')}}">{{Lang::get('page.nocolorlaptop')}}</a></li>
                        </ul>
                        <a class="menuheader expandable">{{Lang::get('page.parts')}}</a>
                        <ul class="categoryitems">
                            <li><a href="{{url('colordevice/probes')}}">{{Lang::get('page.probe')}}</a></li>
                        </ul>

                    </div>
                    <div class="clear"></div>
                    <div class="left_botm">&nbsp;</div>
                </div>
                <!-- Categories -->
                    <div class="category">
                        <div class="small_heading">
                            <h5 class="colr">{{Lang::get('page.promotion')}}</h5>
                        </div>
                        <p><a href="{{url('nocolordevice/ipad')}}">{{Lang::get('page.nocoloripad')}} {{Lang::get('page.now_promotion_20')}}</a></p> <br/>
                        <p><a href="{{url('colordevice/probes')}}">{{Lang::get('page.now_promotion_15')}}</a></p>
                        </div>
                        <div class="clear"></div>
                        <div class="left_botm">&nbsp;</div>



                    <div class="category">
                        <div class="small_heading">
                            <h5 class="colr">{{Lang::get('page.quick_contact')}}</h5>
                        </div>
                        <p>
                            <span class="bold">Phone:</span> xxxxx<br />
                            <span class="bold">Email:</span> info@xxx.com<br />
                        </p>
                        </div>
                        <div class="clear"></div>
                        <div class="left_botm">&nbsp;</div>
                </div>



            <!-- Column2 Section -->
            @yield('side_content')


            <div class="clear"></div>
        </div>
        <div class="cont_botm">&nbsp;</div>
    </div>

    <div class="clear"></div>
@stop