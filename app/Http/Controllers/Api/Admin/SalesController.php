<?php
namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Https\Request;
use App\Models\VendersModal;

class SalesController extends Controller
{
    public function index()
    {
     return view('admin.sales.index');
    }

   public function store(Request $request)
   {
       try{
            
       }catch(\Exception $e){
           $this->message = $e->getMessage('created sales');
       }        
   } 
}

?> 