<?php
namespace App\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller {
  public function index () {
    return view ('Admin::admin_dashboard');
  }
}
