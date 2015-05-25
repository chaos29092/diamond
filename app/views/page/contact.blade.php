@extends('master_side')

@section('title')
    {{Lang::get('page.name')}} - {{Lang::get('page.contact')}}
@stop
@section('keywords')
    {{Lang::get('page.contact')}}
@stop
@section('description')
    {{Lang::get('page.contact')}}
@stop

@section('side_content')
    <div class="col2">
        <div class="contact">
            <h3 class="heading colr">{{Lang::get('page.get_in_touch')}}</h3>
            <div class="mapsec">
                <p>{{Lang::get('page.contact_1')}}<br/><br/></p>

                <p>
                    <span class="bold">{{Lang::get('page.address')}}:</span> {{Lang::get('page.address_all')}}
                </p>
                <div class="clear"></div>
                <br />
                <p>
                    <span class="bold">Business Manager:</span> Lily<br /><br/>
                    <span class="bold">Phone:</span> 0371-86068808<br /><br/>
                    <span class="bold">Email:</span> info@hanvydiamond.com<br />
                </p>
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1638.0889298940936!2d113.5604841521149!3d34.80146690186233!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x4c2944c767ff41c9!2z6YOR5bee6auY5paw5Yy65Yib5Lia5Lit5b-D5LqU5Y-35Zut!5e0!3m2!1szh-CN!2s!4v1425903815557" width="400" height="250" frameborder="0" style="border:0"></iframe>
                </div>
            </div>
            <div class="contact_form">
                <h6 class="colr">{{Lang::get('page.fill_your_inquiry')}}</h6>
                {{ Form::open(array('url' => 'mailPost', 'class' => 'form-horizontal', 'role' => 'form' )) }}
                <ul>
                    <li>
                        <input type="text" name="contactname" id="contactname" placeholder="{{Lang::get('page.your_name')}}" class="bar required" />
                    </li>
                    <li>
                        <input type="text" name="email" id="email" placeholder="{{Lang::get('page.your_email_address')}}" class="bar required email" />
                    </li>
                    <li>
                        <input type="text" name="product"  placeholder="{{Lang::get('page.product_name')}}" id="product" class="required bar" />
                    </li>
                    <li>
                        <input type="text" name="country" placeholder="{{Lang::get('page.country_optional')}}" id="product" class="bar" />
                    </li>
                    <li>
                        <input type="text" placeholder="{{Lang::get('page.phone_number_optional')}}" name="phone" id="phone" class="bar" />
                    </li>
                    <li>
                        <textarea id="message" name="mes"  placeholder="{{Lang::get('page.message')}}" cols="50" rows="5" class="required"></textarea>
                    </li>
                    <li>
                        {{ Form::submit(Lang::get('page.send'), array('class' => 'simplebtn')) }}
                    </li>
                </ul>
                {{ Form::close() }}
            </div>

        </div>
    </div>
@stop