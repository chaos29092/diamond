@extends('master_side')

@section('title')
    ZENO - {{Lang::get('page.nocoloripad')}}
@stop
@section('keywords')
    {{Lang::get('page.nocoloripad')}}
@stop
@section('description')
    {{Lang::get('page.nocoloripad')}}
@stop

@section('side_content')
    <div class="col2">
        <h4 class="heading colr">{{Lang::get('page.nocoloripad')}}</h4>
        <!-- Product Detail -->
        <div class="prod_detail">
            <div class="big_thumb">
                <div id="slider2">
                    <div class="contentdiv">
                        <img src="{{asset('images\products\nocoloripad\nocoloripad_detail_1.jpg')}}" alt="{{Lang::get('page.nocoloripad')}} 1" />
                        <a rel="example_group" href="{{asset('images\products\nocoloripad\nocoloripad_1.jpg')}}" title="{{Lang::get('page.nocoloripad')}}" class="zoom">&nbsp;</a>
                    </div>
                    <div class="contentdiv">
                        <img src="{{asset('images\products\nocoloripad\nocoloripad_detail_2.jpg')}}" alt="{{Lang::get('page.nocoloripad')}} 2" />
                        <a rel="example_group" href="{{asset('images\products\nocoloripad\nocoloripad_2.jpg')}}" title="{{Lang::get('page.nocoloripad')}}" class="zoom">&nbsp;</a>
                    </div>
                    <div class="contentdiv">
                        <img src="{{asset('images\products\nocoloripad\nocoloripad_detail_3.jpg')}}" alt="{{Lang::get('page.nocoloripad')}} 3" />
                        <a rel="example_group" href="{{asset('images\products\nocoloripad\nocoloripad_3.jpg')}}" title="{{Lang::get('page.nocoloripad')}}" class="zoom">&nbsp;</a>
                    </div>

                </div>
                <a href="javascript:void(null)" class="prev"><img src="{{asset('images/prev.gif')}}" alt="" /></a>
                <div style="float:left; width:189px !important; overflow:hidden;">
                    <div class="anyClass" id="paginate-slider2">
                        <ul>
                            <li><a href="#" class="toc"><img src="{{asset('images\products\nocoloripad\nocoloripad_detail_small_1.jpg')}}" alt="{{Lang::get('page.nocoloripad')}} 1" /></a></li>
                            <li><a href="#" class="toc"><img src="{{asset('images\products\nocoloripad\nocoloripad_detail_small_2.jpg')}}" alt="{{Lang::get('page.nocoloripad')}} 2" /></a></li>
                            <li><a href="#" class="toc"><img src="{{asset('images\products\nocoloripad\nocoloripad_detail_small_3.jpg')}}" alt="{{Lang::get('page.nocoloripad')}} 3" /></a></li>
                        </ul>
                    </div>
                </div>
                <a href="javascript:void(null)" class="next"><img src="{{asset('images/next.gif')}}" alt="" /></a>
            </div>
            <div class="desc">
                <h2>{{Lang::get('page.nocoloripad')}}</h2>
                <a href="mailto:info@zeno-med.com?subject={{Lang::get('page.nocoloripad')}}" class="email">{{Lang::get('page.email_to_us')}}</a>
                <div class="clear"></div>
                <br/>
                <p><span class="bold">{{Lang::get('page.ava')}}:</span> {{Lang::get('page.in_stock')}}</p>
                <div class="quickreview">
                    <h6>{{Lang::get('page.now_promotion')}}</h6>
                    <p>{{Lang::get('page.now_promotion_20')}}</p>
                    <br/>
                    <h6>{{Lang::get('page.quick_overview')}}</h6>
                    <p>
                        {{Lang::get('page.nci_qo')}}
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
                            <p class="des">{{Lang::get('page.nci_des')}}</p>
                            <br/>
                            <p class="des">1. {{Lang::get('page.nci_des_1')}}</p>
                            <p class="des">2. {{Lang::get('page.nci_des_2')}}</p>
                            <p class="des">3. {{Lang::get('page.nci_des_3')}}</p>
                            <p class="des">4. {{Lang::get('page.nci_des_4')}}</p>
                            <p class="des">5. {{Lang::get('page.nci_des_5')}}</p>
                            <p class="des">6. {{Lang::get('page.nci_des_6')}}</p>
                            <p class="des">7. {{Lang::get('page.nci_des_7')}}</p>
                            <p class="des">8. {{Lang::get('page.nci_des_8')}}</p>

                            <br/>
                            <img src="{{asset('images\products\nocoloripad\nocoloripad_d_1.jpg')}}" alt="{{Lang::get('page.nocoloripad')}} 1"/>
                            <br/><br/>
                            <img src="{{asset('images\products\nocoloripad\nocoloripad_d_2.jpg')}}" alt="{{Lang::get('page.nocoloripad')}} 2"/>
                            <br/><br/>
                            <img src="{{asset('images\products\nocoloripad\nocoloripad_d_3.jpg')}}" alt="{{Lang::get('page.nocoloripad')}} 3"/>
                            <br/><br/>
                            <img src="{{asset('images\products\nocoloripad\nocoloripad_d_4.jpg')}}" alt="{{Lang::get('page.nocoloripad')}} 4"/>
                            <br/><br/>
                            <img src="{{asset('images\products\nocoloripad\nocoloripad_d_5.jpg')}}" alt="{{Lang::get('page.nocoloripad')}} 5"/>
                            <br/><br/>
                        </div>
                        <!-- END -->



                        <!-- Recent Comments -->
                        <div id="tab_sidebar_comments" class="tab_sidebar_list">
                            <div class="aditional_info">
                                <ul>
                                    <li class="bold title">{{Lang::get('page.nci_ul_1')}}</li>
                                    <li class="desc">{{Lang::get('page.nci_li_1')}}</li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.nci_ul_2')}}</li>
                                    <li class="desc">{{Lang::get('page.nci_li_2')}}</li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.nci_ul_3')}}</li>
                                    <li class="desc">{{Lang::get('page.nci_li_3')}}</li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.nci_ul_4')}}</li>
                                    <li class="desc">240mm</li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.nci_ul_5')}}</li>
                                    <li class="desc">{{Lang::get('page.nci_li_5')}}</li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.nci_ul_6')}}</li>
                                    <li class="desc">2</li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.nci_ul_7')}}</li>
                                    <li class="desc">{{Lang::get('page.nci_li_7')}}</li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.nci_ul_8')}}</li>
                                    <li class="desc">USB, DICOM, VGA</li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.nci_ul_9')}}</li>
                                    <li class="desc">256</li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.nci_ul_10')}}</li>
                                    <li class="desc">{{Lang::get('page.nci_li_10')}}</li>
                                </ul>
                                <ul>
                                    <li class="bold title">TGC</li>
                                    <li class="desc">{{Lang::get('page.nci_li_11')}}</li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.nci_ul_12')}}</li>
                                    <li class="desc">{{Lang::get('page.nci_li_12')}}</li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.nci_ul_13')}}</li>
                                    <li class="desc">{{Lang::get('page.nci_li_13')}}</li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.nci_ul_14')}}</li>
                                    <li class="desc">
                                        <p>{{Lang::get('page.nci_li_14_1')}}</p>
                                        <p>{{Lang::get('page.nci_li_14_2')}}</p>
                                        <p>{{Lang::get('page.nci_li_14_3')}}</p>
                                        <p>{{Lang::get('page.nci_li_14_4')}}</p>
                                        <p>{{Lang::get('page.nci_li_14_5')}}</p>
                                        <p>{{Lang::get('page.nci_li_14_6')}}</p>
                                        <p>{{Lang::get('page.nci_li_14_7')}}</p>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.nci_ul_15')}}</li>
                                    <li class="desc">{{Lang::get('page.nci_li_15')}}</li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.nci_ul_16')}}</li>
                                    <li class="desc">{{Lang::get('page.nci_li_16')}}</li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.nci_ul_17')}}</li>
                                    <li class="desc">{{Lang::get('page.nci_li_17')}}</li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.nci_ul_18')}}</li>
                                    <li class="desc">{{Lang::get('page.nci_li_18')}}</li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.nci_ul_19')}}</li>
                                    <li class="desc">140</li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.nci_ul_20')}}</li>
                                    <li class="desc">{{Lang::get('page.nci_li_20')}}</li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.nci_ul_21')}}</li>
                                    <li class="desc">Yes</li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.nci_ul_22')}}</li>
                                    <li class="desc">{{Lang::get('page.nci_li_22')}}</li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.nci_ul_23')}}</li>
                                    <li class="desc">Yes</li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.nci_ul_24')}}</li>
                                    <li class="desc">{{Lang::get('page.nci_li_24')}}</li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.nci_ul_25')}}</li>
                                    <li class="desc">{{Lang::get('page.nci_li_25')}}</li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.nci_ul_26')}}</li>
                                    <li class="desc">{{Lang::get('page.nci_li_26')}}</li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.nci_ul_27')}}</li>
                                    <li class="desc">{{Lang::get('page.nci_li_27')}}</li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.nci_ul_28')}}</li>
                                    <li class="desc">{{Lang::get('page.nci_li_28')}}</li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.nci_ul_29')}}</li>
                                    <li class="desc">{{Lang::get('page.nci_li_29')}}</li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.nci_ul_30')}}</li>
                                    <li class="desc">{{Lang::get('page.nci_li_30')}}</li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.nci_ul_31')}}</li>
                                    <li class="desc">{{Lang::get('page.nci_li_31')}}</li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.nci_ul_32')}}</li>
                                    <li class="desc">{{Lang::get('page.nci_li_32')}}</li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.nci_ul_33')}}</li>
                                    <li class="desc">{{Lang::get('page.nci_li_33')}}</li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.nci_ul_34')}}</li>
                                    <li class="desc">{{Lang::get('page.nci_li_34')}}</li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.nci_ul_35')}}</li>
                                    <li class="desc">245mm×92mm×50mm</li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.nci_ul_36')}}</li>
                                    <li class="desc">
                                        <p>{{Lang::get('page.nci_li_36_1')}}</p>
                                        <p>{{Lang::get('page.nci_li_36_2')}}</p>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.nci_ul_37')}}</li>
                                    <li class="desc">
                                        <p>{{Lang::get('page.nci_li_37_1')}}</p>
                                        <p>{{Lang::get('page.nci_li_37_2')}}</p>
                                        <p>{{Lang::get('page.nci_li_37_3')}}</p>
                                        <p>{{Lang::get('page.nci_li_37_4')}}</p>
                                        <p>{{Lang::get('page.nci_li_37_5')}}</p>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.nci_ul_38')}}</li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.nci_ul_39')}}</li>
                                    <li class="desc">
                                        <p>{{Lang::get('page.nci_li_39_1')}}</p>
                                        <p>{{Lang::get('page.nci_li_39_2')}}</p>
                                        <p>{{Lang::get('page.nci_li_39_3')}}</p>
                                        <p>{{Lang::get('page.nci_li_39_4')}}</p>
                                        <p>{{Lang::get('page.nci_li_39_5')}}</p>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.nci_ul_40')}}</li>
                                    <li class="desc">{{Lang::get('page.nci_li_40')}}</li>
                                </ul>
                                <ul>
                                    <li class="bold title">{{Lang::get('page.nci_ul_41')}}</li>
                                    <li class="desc">{{Lang::get('page.nci_li_41')}}</li>
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