@extends('master_side')

@section('title')
    ZENO - {{Lang::get('page.coloripad')}}
@stop
@section('keywords')
    {{Lang::get('page.coloripad')}}
@stop
@section('description')
    {{Lang::get('page.coloripad')}}
@stop

@section('side_content')
    <div class="col2">
        <h4 class="heading colr">{{Lang::get('page.coloripad')}}</h4>
        <!-- Product Detail -->
        <div class="prod_detail">
            <div class="big_thumb">
                <div id="slider2">
                    <div class="contentdiv">
                        <img src="{{asset('images\products\coloripad\coloripad_detail_1.jpg')}}" alt="{{Lang::get('page.coloripad')}} 1" />
                        <a rel="example_group" href="{{asset('images\products\coloripad\coloripad_1.jpg')}}" title="{{Lang::get('page.coloripad')}}" class="zoom">&nbsp;</a>
                    </div>
                    <div class="contentdiv">
                        <img src="{{asset('images\products\coloripad\coloripad_detail_2.jpg')}}" alt="{{Lang::get('page.coloripad')}} 2" />
                        <a rel="example_group" href="{{asset('images\products\coloripad\coloripad_2.jpg')}}" title="{{Lang::get('page.coloripad')}}" class="zoom">&nbsp;</a>
                    </div>
                    <div class="contentdiv">
                        <img src="{{asset('images\products\coloripad\coloripad_detail_3.jpg')}}" alt="{{Lang::get('page.coloripad')}} 3" />
                        <a rel="example_group" href="{{asset('images\products\coloripad\coloripad_3.jpg')}}" title="{{Lang::get('page.coloripad')}}" class="zoom">&nbsp;</a>
                    </div>

                </div>
                <a href="javascript:void(null)" class="prev"><img src="{{asset('images/prev.gif')}}" alt="" /></a>
                <div style="float:left; width:189px !important; overflow:hidden;">
                    <div class="anyClass" id="paginate-slider2">
                        <ul>
                            <li><a href="#" class="toc"><img src="{{asset('images\products\coloripad\coloripad_detail_small_1.jpg')}}" alt="{{Lang::get('page.coloripad')}} 1" /></a></li>
                            <li><a href="#" class="toc"><img src="{{asset('images\products\coloripad\coloripad_detail_small_2.jpg')}}" alt="{{Lang::get('page.coloripad')}} 2" /></a></li>
                            <li><a href="#" class="toc"><img src="{{asset('images\products\coloripad\coloripad_detail_small_3.jpg')}}" alt="{{Lang::get('page.coloripad')}} 3" /></a></li>
                        </ul>
                    </div>
                </div>
                <a href="javascript:void(null)" class="next"><img src="{{asset('images/next.gif')}}" alt="" /></a>
            </div>
            <div class="desc">
                <h2>{{Lang::get('page.coloripad')}}</h2>
                <a href="mailto:info@zeno-med.com?subject={{Lang::get('page.coloripad')}}" class="email">{{Lang::get('page.email_to_us')}}</a>
                <div class="clear"></div>
                <br/>
                <p><span class="bold">{{Lang::get('page.ava')}}:</span> {{Lang::get('page.in_stock')}}</p>
                <div class="quickreview">
                    <h6>{{Lang::get('page.quick_overview')}}</h6>
                    <p>
                        {{Lang::get('page.ci_qo')}}
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
                        <div id="tab_sidebar_recent" class="tab_sidebar_list">
                            <h4>{{Lang::get('page.features')}}</h4><br />
                            <p class="des">{{Lang::get('page.ci_des')}}</p>
                            <br/>
                            <p class="des">1. {{Lang::get('page.ci_des_1')}}</p>
                            <p class="des">2. {{Lang::get('page.ci_des_2')}}</p>
                            <p class="des">3. {{Lang::get('page.ci_des_3')}}</p>
                            <p class="des">4. {{Lang::get('page.ci_des_4')}}</p>
                            <p class="des">5. {{Lang::get('page.ci_des_5')}}</p>
                            <p class="des">6. {{Lang::get('page.ci_des_6')}}</p>
                            <p class="des">7. {{Lang::get('page.ci_des_7')}}</p>
                            <p class="des">8. {{Lang::get('page.ci_des_8')}}</p>
                            <p class="des">9. {{Lang::get('page.ci_des_9')}}</p>
                            <p class="des">10. {{Lang::get('page.ci_des_10')}}</p>
                            <p class="des">11. {{Lang::get('page.ci_des_11')}}</p>
                            <p class="des">12. {{Lang::get('page.ci_des_12')}}</p>
                            <p class="des">13. {{Lang::get('page.ci_des_13')}}</p>
                            <p class="des">14. {{Lang::get('page.ci_des_14')}}</p>
                            <p class="des">15. {{Lang::get('page.ci_des_15')}}</p>
                            <p class="des">16. {{Lang::get('page.ci_des_16')}}</p>
                            <br/>
                            <img src="{{asset('images\products\coloripad\coloripad_d_1.jpg')}}" alt="{{Lang::get('page.coloripad')}} detail 1"/>
                            <br/><br/>
                            <img src="{{asset('images\products\coloripad\coloripad_d_6.jpg')}}" alt="{{Lang::get('page.coloripad')}} detail 2"/>
                            <br/><br/>
                            <img src="{{asset('images\products\coloripad\coloripad_d_7.jpg')}}" alt="{{Lang::get('page.coloripad')}} detail 3"/>
                            <br/><br/>
                            <img src="{{asset('images\products\coloripad\coloripad_d_2.jpg')}}" alt="{{Lang::get('page.coloripad')}} detail 4"/>
                            <br/><br/>
                            <img src="{{asset('images\products\coloripad\coloripad_d_3.jpg')}}" alt="{{Lang::get('page.coloripad')}} detail 5"/>
                            <br/><br/>
                            <img src="{{asset('images\products\coloripad\coloripad_d_4.jpg')}}" alt="{{Lang::get('page.coloripad')}} detail 6"/>
                            <br/><br/>
                            <img src="{{asset('images\products\coloripad\coloripad_d_5.jpg')}}" alt="{{Lang::get('page.coloripad')}} detail 7"/>
                        </div>
                        <!-- END -->



                        <!-- Recent Comments -->
                        <div id="tab_sidebar_comments" class="tab_sidebar_list">
                            <div class="aditional_info">
                                <ul>
                                    <li class="bold title">{{Lang::get('page.ci_ul_1')}}</li>
                                    <li class="desc">
                                        <p>{{Lang::get('page.ci_li_1_1')}}</p>
                                        <p>{{Lang::get('page.ci_li_1_2')}}</p>
                                        <p>{{Lang::get('page.ci_li_1_3')}}</p>
                                        <p>{{Lang::get('page.ci_li_1_4')}}</p>
                                        <p>{{Lang::get('page.ci_li_1_5')}}</p>
                                        <p>{{Lang::get('page.ci_li_1_6')}}</p>
                                        <p>{{Lang::get('page.ci_li_1_7')}}</p>
                                        <p>{{Lang::get('page.ci_li_1_8')}}</p>
                                        <p>{{Lang::get('page.ci_li_1_9')}}</p>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.ci_ul_2')}}</li>
                                    <li class="desc">{{Lang::get('page.ci_li_2')}}</li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.ci_ul_3')}}</li>
                                    <li class="desc">
                                        <p>{{Lang::get('page.ci_li_3_1')}}</p>
                                        <p>{{Lang::get('page.ci_li_3_2')}}</p>
                                        <p>{{Lang::get('page.ci_li_3_3')}}</p>
                                        <p>{{Lang::get('page.ci_li_3_4')}}</p>
                                        <p>{{Lang::get('page.ci_li_3_5')}}</p>
                                        <p>{{Lang::get('page.ci_li_3_6')}}</p>
                                        <p>{{Lang::get('page.ci_li_3_7')}}</p>
                                        <p>{{Lang::get('page.ci_li_3_8')}}</p>
                                        <p>{{Lang::get('page.ci_li_3_9')}}</p>
                                        <p>{{Lang::get('page.ci_li_3_10')}}</p>
                                        <p>{{Lang::get('page.ci_li_3_11')}}</p>
                                        <p>{{Lang::get('page.ci_li_3_12')}}</p>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.ci_ul_4')}}</li>
                                    <li class="desc">
                                        <p>{{Lang::get('page.ci_li_4_1')}}</p>
                                        <p>{{Lang::get('page.ci_li_4_2')}}</p>
                                        <p>{{Lang::get('page.ci_li_4_3')}}</p>
                                        <p>{{Lang::get('page.ci_li_4_4')}}</p>
                                        <p>{{Lang::get('page.ci_li_4_5')}}</p>
                                        <p>{{Lang::get('page.ci_li_4_6')}}</p>
                                        <p>{{Lang::get('page.ci_li_4_7')}}</p>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.ci_ul_5')}}</li>
                                    <li class="desc">
                                        <p>{{Lang::get('page.ci_li_5_1')}}</p>
                                        <p>{{Lang::get('page.ci_li_5_2')}}</p>
                                        <p>{{Lang::get('page.ci_li_5_3')}}</p>
                                        <p>{{Lang::get('page.ci_li_5_4')}}</p>
                                        <p>{{Lang::get('page.ci_li_5_5')}}</p>
                                        <p>{{Lang::get('page.ci_li_5_6')}}</p>
                                        <p>{{Lang::get('page.ci_li_5_7')}}</p>
                                        <p>{{Lang::get('page.ci_li_5_8')}}</p>
                                        <p>{{Lang::get('page.ci_li_5_9')}}</p>
                                        <p>{{Lang::get('page.ci_li_5_10')}}</p>
                                        <p>{{Lang::get('page.ci_li_5_11')}}</p>
                                        <p>{{Lang::get('page.ci_li_5_12')}}</p>
                                        <p>{{Lang::get('page.ci_li_5_13')}}</p>
                                        <p>{{Lang::get('page.ci_li_5_14')}}</p>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.ci_ul_6')}}</li>
                                    <li class="desc">{{Lang::get('page.ci_li_6')}}</li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.ci_ul_7')}}</li>
                                    <li class="desc">{{Lang::get('page.ci_li_7')}}</li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.ci_ul_8')}}</li>
                                    <li class="desc">{{Lang::get('page.ci_li_8')}}</li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.ci_ul_9')}}</li>
                                    <li class="desc">
                                        <p{{Lang::get('page.ci_li_9_1')}}></p>
                                        <p{{Lang::get('page.ci_li_9_2')}}></p>
                                        <p{{Lang::get('page.ci_li_9_3')}}></p>
                                        <p{{Lang::get('page.ci_li_9_4')}}></p>
                                    </li>
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