<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\saveData;

class SaveResponse extends Controller
{
    //
    public function save(Request $request)
    {
        $webpageID = $request->id;

        $saveData = SaveData::find($webpageID);
        $saveData->gjs_html = $request->html;
        $saveData->gjs_css = $request->css;
        $saveData->gjs_assets = $request->assets;
        $saveData->gjs_styles = $request->styles;
        $saveData->gjs_components = $request->components;
        $saveData->save();

        return response()->json(['status'=>'success','success' => true]);
    }

    public function getName(Request $request)
    {
        $saveData = new saveData();
        $saveData->name = $request->webPageName;
        
        try {
            //code...
            $saveData->save();
            return response()->json(['status'=>'success','success' => true, 'webPageID' => $saveData->id]);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json(['success' => false]);
        }

    }
    
   
}
