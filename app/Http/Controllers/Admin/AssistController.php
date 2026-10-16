<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Https\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\VendersModal;

class SalesController extends Controller
{
   public $name, $price, $details;
   public function liveChat()
    {
        return view('admin.assistance.live-chat');
    }
    public function submit()
    {
        Validator::make(request()->all(), [
            "name" => "required",
            "price" => "required|min:5|numeric",
            "details" => "required"
        ])->validate();
        info($this->name);
    }
}

?>