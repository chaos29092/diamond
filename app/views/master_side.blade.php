@extends('master')

@section('title')
    {{Lang::get('page.name')}}
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
                        <a class="menuheader expandable">{{Lang::get('page.scs_diamond')}}</a>
                        <ul class="categoryitems">
                            <li><a href="{{url('products/diamond')}}">{{Lang::get('page.scs_diamond')}}</a></li>
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
                        {{--<p><a href="{{url('nocolordevice/ipad')}}">{{Lang::get('page.nocoloripad')}} {{Lang::get('page.now_promotion_20')}}</a></p> <br/>--}}
                        {{--<p><a href="{{url('colordevice/probes')}}">{{Lang::get('page.now_promotion_15')}}</a></p>--}}
                        </div>
                        <div class="clear"></div>
                        <div class="left_botm">&nbsp;</div>



                    <div class="category">
                        <div class="small_heading">
                            <h5 class="colr">{{Lang::get('page.quick_contact')}}</h5>
                        </div>
                        <p>
                            <span class="bold">Business Manager:</span> Lily<br />
                            <span class="bold">Phone:</span> 0371-86068808<br />
                            <span class="bold">Email:</span> info@hanvydiamond.com<br />
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