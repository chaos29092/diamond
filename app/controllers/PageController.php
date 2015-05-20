<?php

//队列任务 函数设置
class SendEmail {

    public function sendPrice()
    {
        $date = Input::all();

        Mail::send('emails.price', array('email'=>$date['email']),function($message){
            $message->to(Input::get('email'), 'inquiry')->subject('ZENO Ultrasound Devices List');
        });

        Mail::send('emails.notice', array('email'=>$date['email']),function($message){
            $message->to('chaos29092@gmail.com', 'inquiry')->subject('ZENO - 英语 - 价格表索取提醒');
        });
    }

    public function contactForm()
    {
        $date = Input::all();

        Mail::send('emails.inquiry', array('name'=>$date['contactname'],'email'=>$date['email'],'product'=>$date['product'],'country'=>$date['country'],'phone'=>$date['phone'],'mes'=>$date['mes']),function($message){
            $message->to(array('chaos29092@gmail.com'), 'inquiry')->subject('ZENO - 英语 - 网站询盘');
        });
    }
}

//控制器本体
class PageController extends BaseController {

	public function index()
	{
		return View::make('page.index');
	}

	public function about()
	{
		return View::make('page.about');
	}

    public function contact()
	{
		return View::make('page.contact');
	}

    public function service()
	{
		return View::make('page.service');
	}

    public function colorDevice()
	{
		return View::make('products.color_device');
	}

    public function nocolorDevice()
	{
		return View::make('products.nocolor_device');
	}

    public function cooperation()
    {
        return View::make('page.cooperation');
    }

    public function download()
    {
        return View::make('page.download');
    }

    public function promotion()
    {
        return View::make('page.promotion');
    }

    public function mailok()
    {
        return View::make('page.mailok');
    }
    public function priceok()
    {
        return View::make('page.priceok');
    }

    public function contactForm()
    {
        Queue::push('SendEmail@contactForm');

        return Redirect::to('mailok');
    }

    public function getPrice()
    {
        Queue::push('SendEmail@sendPrice');

        return Redirect::to('priceok');
    }
}
