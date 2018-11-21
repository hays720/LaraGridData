<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeleteDatabase extends Controller
{
    public function AjaxDelete(Request $request){
        $customer = $request->input('ChoseDelete');
        $item = $request->input('ChoseDeleteItem');

        if (isset($customer) && isset($item)) {
            DB::table('DataGrid')->where('name', $customer)->where('item',$item)->delete();
        }

    }
}
