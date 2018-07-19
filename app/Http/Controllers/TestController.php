<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class TestController extends Controller
{
    public function testfunction()
    {
    	$name=Input::get('testname');
 
    	if ($name=='laravel') {
    		echo "Success";

    		$notification = array(
    			'message' => 'successfully get laravel data!!',
    			'alert-type' => 'success' 
    		);

    	} elseif ($name=='found') {
    		echo "info";

    		$notification = array(
    			'message' => 'info found data!!',
    			'alert-type' => 'info' 
    		);

    	} elseif ($name=='notfound') {
    		echo "warning";

    		$notification = array(
    			'message' => 'warning get not found data!!',
    			'alert-type' => 'warning' 
    		);

    	} else {
    		echo "error";

    		$notification = array(
    			'message' => 'Error! Input is emty!!',
    			'alert-type' => 'success' 
    		);
    	}

    	return back()->with($notification);
    }
}
