<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\saveData;

class SaveResponse extends Controller
{
    //
    public function save(Request $request)
    {
        $saveData = new saveData();
        $saveData->storeJSON = $request->html;
        $saveData->gjs_css = $request->css;
        $saveData->save();

        return response()->json(['success' => true]);
    }
}
