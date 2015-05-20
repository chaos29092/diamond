<?php

class ProductController extends BaseController {

	public function colorLaptop()
	{
		return View::make('products.color_laptop');
	}

    public function colorPortable()
	{
		return View::make('products.color_portable');
	}

    public function colorIpad()
	{
		return View::make('products.color_ipad');
	}

    public function nocolorLaptop()
	{
		return View::make('products.nocolor_laptop');
	}

    public function nocolorIpad()
	{
		return View::make('products.nocolor_ipad');
	}

    public function probes()
	{
		return View::make('products.probes');
	}

}
