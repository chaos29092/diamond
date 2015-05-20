@extends('master_side')

@section('title')
    ZENO - {{Lang::get('page.probe')}}
@stop
@section('keywords')
    {{Lang::get('page.probe')}}
@stop
@section('description')
    {{Lang::get('page.probe')}}
@stop

@section('side_content')
    <div class="col2">
        <h4 class="heading colr">{{Lang::get('page.probe')}}</h4>
        <!-- Product Detail -->
        <div class="prod_detail">
            <div class="big_thumb">
                <div id="slider2">
                    <div class="contentdiv">
                        <img src="{{asset('images\products\probes\probes_detail_1.jpg')}}" alt="{{Lang::get('page.probe')}} 1" />
                        <a rel="example_group" href="{{asset('images\products\probes\probes_1.jpg')}}" title="{{Lang::get('page.probe')}}" class="zoom">&nbsp;</a>
                    </div>
                    <div class="contentdiv">
                        <img src="{{asset('images\products\probes\probes_detail_2.jpg')}}" alt="{{Lang::get('page.probe')}} 2" />
                        <a rel="example_group" href="{{asset('images\products\probes\probes_2.jpg')}}" title="{{Lang::get('page.probe')}}" class="zoom">&nbsp;</a>
                    </div>
                    <div class="contentdiv">
                        <img src="{{asset('images\products\probes\probes_detail_3.jpg')}}" alt="{{Lang::get('page.probe')}} 3" />
                        <a rel="example_group" href="{{asset('images\products\probes\probes_3.jpg')}}" title="{{Lang::get('page.probe')}}" class="zoom">&nbsp;</a>
                    </div>

                </div>
                <a href="javascript:void(null)" class="prev"><img src="{{asset('images/prev.gif')}}" alt="" /></a>
                <div style="float:left; width:189px !important; overflow:hidden;">
                    <div class="anyClass" id="paginate-slider2">
                        <ul>
                            <li><a href="#" class="toc"><img src="{{asset('images\products\probes\probes_detail_small_1.jpg')}}" alt="{{Lang::get('page.probe')}} 1" /></a></li>
                            <li><a href="#" class="toc"><img src="{{asset('images\products\probes\probes_detail_small_2.jpg')}}" alt="{{Lang::get('page.probe')}} 2" /></a></li>
                            <li><a href="#" class="toc"><img src="{{asset('images\products\probes\probes_detail_small_3.jpg')}}" alt="{{Lang::get('page.probe')}} 3" /></a></li>
                        </ul>
                    </div>
                </div>
                <a href="javascript:void(null)" class="next"><img src="{{asset('images/next.gif')}}" alt="" /></a>
            </div>
            <div class="desc">
                <h2>{{Lang::get('page.probe')}}</h2>
                <a href="#" class="email">{{Lang::get('page.email_to_us')}}</a>
                <div class="clear"></div>
                <br/>
                <p><span class="bold">{{Lang::get('page.ava')}}:</span> {{Lang::get('page.in_stock')}}</p>
                <div class="quickreview">
                    <h6>{{Lang::get('page.now_promotion')}}</h6>
                    <p>{{Lang::get('page.now_promotion_15')}}</p>
                </div>
                <div class="addtocart">
                    <br/>
                    <ul class="inp">
                        <li><a href="{{url('contact')}}" class="simplebtn">{{Lang::get('page.contact_us')}}</a></li>
                    </ul>
                    <ul>
                        <li class="bold or">OR</li>
                        <li>
                            <a href="{{url('download')}}" class="add clear">{{Lang::get('page.down_file')}}</a>
                            <a href="{{url('service')}}" class="add clear">{{Lang::get('page.view_help')}}</a>
                        </li>
                    </ul>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="prod_desc">
                <div class="tab_menu_container">
                    <ul id="tab_menu">
                        <li><a class="" rel="tab_sidebar_recent">{{Lang::get('page.product_des')}}</a></li>
                    </ul> <!-- END -->
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
                <div class="tab_container">
                    <div class="tab_container_in">
                        <!-- Recent Articles -->
                        <div id="tab_sidebar_recent" class="tab_sidebar_list">
                            <h4>{{Lang::get('page.features')}}</h4><br />
                            <p class="des">{{Lang::get('page.probe_des')}}
                            </p>
                            <br/>
                            <a href="{{url('contact')}}" class="simplebtn">{{Lang::get('page.contact_now')}}</a>
                            <br/><br/>

                            <img src="{{asset('images\products\probes\probes_d_1.jpg')}}" alt="Convex probe (C3.5MHzR60)"/>
                            <br/><br/>
                            <img src="{{asset('images\products\probes\probes_d_2.jpg')}}" alt="Cardiac probe(C5.0MHzR20)"/>
                            <br/><br/>
                            <img src="{{asset('images\products\probes\probes_d_3.jpg')}}" alt="Linear probe(L7.5MHzL40)"/>
                            <br/><br/>
                            <img src="{{asset('images\products\probes\probes_d_4.jpg')}}" alt="Intracavity probe A(E6.5MHzR13)"/>
                            <br/><br/>
                            <img src="{{asset('images\products\probes\probes_d_5.jpg')}}" alt="Intracavity probe B(E6.5MHzR13)"/>
                        </div>
                        <!-- END -->
                        <div class="clear"></div>

                    </div>

                </div>
                <script type="text/javascript" src="{{asset('js/tabs.js')}}"></script>
            </div>
        </div>
        <div class="clear"></div>
    </div>
@stop