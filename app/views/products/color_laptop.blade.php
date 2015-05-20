@extends('master_side')

@section('title')
    NUCL - {{Lang::get('page.scs_diamond')}}
@stop
@section('keywords')
    {{Lang::get('page.scs_diamond')}}
@stop
@section('description')
    {{Lang::get('page.scs_diamond')}}
@stop

@section('side_content')
    <div class="col2">
        <h4 class="heading colr">{{Lang::get('page.scs_diamond')}}</h4>
        <!-- Product Detail -->
        <div class="prod_detail">
            <div class="big_thumb">
                <div id="slider2">
                    <div class="contentdiv">
                        <img src="{{asset('images\products\colorlaptop\colorlaptop_detail_1.jpg')}}" alt="{{Lang::get('page.colorlaptop')}} 1" />
                        <a rel="example_group" href="{{asset('images\products\colorlaptop\colorlaptop_1.jpg')}}" title="{{Lang::get('page.colorlaptop')}}" class="zoom">&nbsp;</a>
                    </div>
                    <div class="contentdiv">
                        <img src="{{asset('images\products\colorlaptop\colorlaptop_detail_2.jpg')}}" alt="{{Lang::get('page.colorlaptop')}} 2" />
                        <a rel="example_group" href="{{asset('images\products\colorlaptop\colorlaptop_2.jpg')}}" title="{{Lang::get('page.colorlaptop')}}" class="zoom">&nbsp;</a>
                    </div>
                    <div class="contentdiv">
                        <img src="{{asset('images\products\colorlaptop\colorlaptop_detail_3.jpg')}}" alt="{{Lang::get('page.colorlaptop')}} 3" />
                        <a rel="example_group" href="{{asset('images\products\colorlaptop\colorlaptop_3.jpg')}}" title="{{Lang::get('page.colorlaptop')}}" class="zoom">&nbsp;</a>
                    </div>

                </div>
                <a href="javascript:void(null)" class="prev"><img src="{{asset('images/prev.gif')}}" alt="" /></a>
                <div style="float:left; width:189px !important; overflow:hidden;">
                    <div class="anyClass" id="paginate-slider2">
                        <ul>
                            <li><a href="#" class="toc"><img src="{{asset('images\products\colorlaptop\colorlaptop_detail_small_1.jpg')}}" alt="{{Lang::get('page.colorlaptop')}} 1" /></a></li>
                            <li><a href="#" class="toc"><img src="{{asset('images\products\colorlaptop\colorlaptop_detail_small_2.jpg')}}" alt="{{Lang::get('page.colorlaptop')}} 2" /></a></li>
                            <li><a href="#" class="toc"><img src="{{asset('images\products\colorlaptop\colorlaptop_detail_small_3.jpg')}}" alt="{{Lang::get('page.colorlaptop')}} 3" /></a></li>
                        </ul>
                    </div>
                </div>
                <a href="javascript:void(null)" class="next"><img src="{{asset('images/next.gif')}}" alt="" /></a>
            </div>
            <div class="desc">
                <h2>{{Lang::get('page.scs_diamond')}}</h2>
                <a href="mailto:info@xxx.com?subject={{Lang::get('page.scs_diamond')}}" class="email">{{Lang::get('page.email_to_us')}}</a>
                <div class="clear"></div>
                <br/>
                <p><span class="bold">{{Lang::get('page.ava')}}:</span> {{Lang::get('page.in_stock')}}</p>
                <div class="quickreview">
                    <h6>{{Lang::get('page.quick_overview')}}</h6>
                    <p>
                        {{Lang::get('page.cl_qo')}}
                    </p>
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
                        <li><a class="" rel="tab_sidebar_comments">{{Lang::get('page.details_and_parameters')}}</a></li>
                    </ul> <!-- END -->
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
                <div class="tab_container">
                    <div class="tab_container_in">
                        <!-- Recent Articles -->
                        <br/>
                        <h4>{{Lang::get('page.quick_detal')}}</h4><br />
                        <div id="tab_sidebar_recent" class="tab_sidebar_list">

                            <div class="aditional_info">

                                <ul>
                                    <li class="bold title">{{Lang::get('page.dia_ul_1')}}</li>
                                    <li class="desc">{{Lang::get('page.dia_li_1')}}</li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.dia_ul_2')}}</li>
                                    <li class="desc">{{Lang::get('page.dia_li_2')}}</li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.dia_ul_3')}}</li>
                                    <li class="desc">{{Lang::get('page.dia_li_3')}}</li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.dia_ul_4')}}</li>
                                    <li class="desc">{{Lang::get('page.dia_li_4')}}</li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.dia_ul_5')}}</li>
                                    <li class="desc">{{Lang::get('page.dia_li_5')}}</li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.dia_ul_6')}}</li>
                                    <li class="desc">{{Lang::get('page.dia_li_6')}}</li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.dia_ul_7')}}</li>
                                    <li class="desc">{{Lang::get('page.dia_li_7')}}</li>
                                </ul>
                            </div>
                            <div class="clear"></div>
                            <br/><br/>
                            <h4>{{Lang::get('page.features')}}</h4><br />
                            <br/>
                            <p class="des">1. {{Lang::get('page.dia_des_1')}}</p>
                            <p class="des">2. {{Lang::get('page.dia_des_2')}}</p>
                            <p class="des">3. {{Lang::get('page.dia_des_3')}}</p>
                            <p class="des">4. {{Lang::get('page.dia_des_4')}}</p>
                            <p class="des">5. {{Lang::get('page.dia_des_5')}}</p>
                            <br/>
                            <p class="des">{{Lang::get('page.dia_des_6')}}</p>
                            <br/>
                            <img src="{{asset('images\products\colorlaptop\colorlaptop_d_1.jpg')}}" alt="{{Lang::get('page.colorlaptop')}} 1"/>
                            <br/><br/>
                            <img src="{{asset('images\products\colorlaptop\colorlaptop_d_2.jpg')}}" alt="{{Lang::get('page.colorlaptop')}} 2"/>
                            <br/><br/>
                            <img src="{{asset('images\products\colorlaptop\colorlaptop_d_3.jpg')}}" alt="{{Lang::get('page.colorlaptop')}} 3"/>
                            <br/><br/>
                        </div>
                        <!-- END -->



                        <!-- Recent Comments -->
                        <div id="tab_sidebar_comments" class="tab_sidebar_list">
                            <div class="aditional_info">

                                <ul>
                                    <li class="bold title">{{Lang::get('page.dia_ul_1')}}</li>
                                    <li class="desc">{{Lang::get('page.dia_li_1')}}</li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.dia_ul_2')}}</li>
                                    <li class="desc">{{Lang::get('page.dia_li_2')}}</li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.dia_ul_3')}}</li>
                                    <li class="desc">{{Lang::get('page.dia_li_3')}}</li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.dia_ul_4')}}</li>
                                    <li class="desc">{{Lang::get('page.dia_li_4')}}</li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.dia_ul_5')}}</li>
                                    <li class="desc">{{Lang::get('page.dia_li_5')}}</li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.dia_ul_6')}}</li>
                                    <li class="desc">{{Lang::get('page.dia_li_6')}}</li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.dia_ul_7')}}</li>
                                    <li class="desc">{{Lang::get('page.dia_li_7')}}</li>
                                </ul>
                            </div>
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