<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/9
 * Time: 14:01
 */

namespace App\Http\Controllers\admin;


use App\Notifications\InvoicePaid;
use Illuminate\Notifications\Notifiable;

class IndexController extends BaseController
{
    use Notifiable;

    public function __construct()
    {
        parent::__construct();
    }



    public function index(){

        $actions = $this->getAction();
        return view('admin.index.index', [
            'menu'=> $actions
        ]);
    }

    public function welcome()
    {
        return view('admin.index.welcome');

    }
}