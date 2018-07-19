<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use jobayerccj\Skebby\Skebby;

class HomeController extends Controller
{
    
    public function index(){
        $skebby = new Skebby;

        $recipients = array('+393478511183');
        $skebby->set_recipients($recipients);
        
        var_dump($skebby->send_sms());
    }
}
