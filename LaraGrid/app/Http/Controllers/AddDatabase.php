<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AddDatabase extends Controller
{
    public function AjaxAdd(Request $request){
        $customer = $request->input('customer');
        $item = $request->input('item');
        $amount = $request->input('amount');

        if (isset($customer) && isset($item) && isset($amount)) {
            $AddArr = array(
                'name' => $customer,
                'item' => $item,
                'amount' => $amount);
            DB::table('DataGrid')->insert($AddArr);
        }

    }
}
