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
        $saveData->gjs_html = $request->html;
        $saveData->gjs_css = $request->css;
        $saveData->gjs_assets = $request->assets;
        $saveData->gjs_styles = $request->styles;
        $saveData->gjs_components = $request->components;
        $saveData->save();

        return response()->json(['success' => true]);
    }
}
