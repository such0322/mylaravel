<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller {
    public function __construct() {
    }
    
    public function index(){
        echo "Admin/admin/index";
    }
    
}
