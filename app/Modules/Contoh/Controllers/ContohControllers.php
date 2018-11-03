<?php
namespace App\Modules\Contoh\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContohControllers extends Controller {
  public function index () {
    return view ('Contoh::contoh');
  }
}
