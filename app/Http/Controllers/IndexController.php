<?php
/**
 * App，Http，控制器，Index控制器，自己加可以删除！
 */

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Config;

class IndexController extends BaseController
{
    
	public function index() {
		echo 'Laravel Version: 7.30.7<br/>';
		echo 'PHP Version: 7.4<br/>';
		echo 'Start Date: 2025-05-21<br/>';
		echo 'Date: 2020-03-03';
	}
	
}
