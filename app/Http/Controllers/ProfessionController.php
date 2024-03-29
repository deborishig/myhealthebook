<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Profession;

class ProfessionController extends Controller
{
    //Get Professions List
    public function getProfessions(Request $request)
    {
      //Get professions list
      $professions = DB::table('professions')->get();
      return view('auth.professions', ['professions' => $professions]);
    }

    //Add new profession
    public function addProfessions(Request $request)
    {
      $prof = $request->input('prof_name');
      $professions = DB::table('professions')->insert(['cat_name' => $prof, 'status' => 1]);
      return redirect()->route('professions');
    }

    //Delete profession
    public function deleteProfessions(Request $request, $pid)
    {
      $professions = Profession::where('id', $pid)->delete();
      return redirect()->route('professions');
    }

    public function changeStatus(Request $request, $prof_id)
    {
      //Change profession status => Enabled/Disabled
      $prof = Profession::where('id', $prof_id)->first();
      $prof->status = !($prof->status);
      $prof->save();
      return response()->json(array('msg'=> "Status changed for profession id: ". $prof_id), 200);
    }
}
