<?php
namespace App\Modules\Index\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller {
  public function index () {
    return view ('Index::index');
  }
}
