<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Models\Vender;

class VenderController extends Controller
{
    public function index()
    {
        return view('admin.venders.index');
    }
}

?>