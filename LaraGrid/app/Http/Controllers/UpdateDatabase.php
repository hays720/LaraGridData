<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UpdateDatabase extends Controller
{
    public function AjaxUpdate(Request $request){

        $customer = $request->input('ChoseEdit');
        $NewCustomer = $request->input('ChangeCustomer');
        $item = $request->input('ChangeItem');
        $amount = $request->input('ChangeAmount');

        if (isset($customer) && isset($NewCustomer) && isset($item) && isset($amount) ){
            $AddArr = array(
                'name' => $NewCustomer,
                'item' => $item,
                'amount' => $amount);
            DB::table('DataGrid')->where('name', $customer)->update($AddArr);
        }

    }
}
