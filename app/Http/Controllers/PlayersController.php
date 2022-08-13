<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Players;

class PlayersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
     
        $players = Players::all();
        $salary  = 'weekly salary';


        return view('player',['players'=>$players,'salary'=>$salary]);
         
    }


 
    public function update(Request $request)
    {
        $position = $request->get('position');
        $salary   = $request->get('fee');

        if($position === 'all')
        {
            $players= Players::select('age','name','team',$salary,'position')
            ->get(); 

            return view('player',['players'=>$players,'salary'=>$salary]);  
        }

           
            $players= Players::select('age','name','team',$salary,'position')
                ->where('position', $position)
                ->get();

        return view('player', ['players'=>$players,'salary'=>$salary]);
  
    }

   
 
 

}
