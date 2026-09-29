<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Https\Request;
use App\Models\VendersModal;

class SalesController extends Controller
{
    public function index()
    {
     return view('admin.sales.index');
    }
}

?>