@extends('master_side')

@section('title')
    ZENO - {{Lang::get('page.promotion')}}
@stop
@section('keywords')
    {{Lang::get('page.promotion')}}
@stop
@section('description')
    {{Lang::get('page.promotion')}}
@stop

@section('side_content')
    <div class="col2">
        <div class="contact">
            <h3 class="heading colr">{{Lang::get('page.promotion')}}</h3>
            <div class="mapsec">
                <p>{{Lang::get('page.promotion_content_1')}}<br/><br/>{{Lang::get('page.promotion_content_1')}}</p>


                <div class="clear"></div>
                <br />
                <p>
                    <span class="bold">Phone:</span> 18538153651<br />
                    <span class="bold">Email:</span> info@zeno-med.com<br />
                </p>

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