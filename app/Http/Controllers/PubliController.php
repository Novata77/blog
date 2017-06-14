<?php

namespace App\Http\Controllers;

use App\Publi;

use Illuminate\Http\Request;
use App\Http\Requests\CreateEnviarRespuesta;

class PubliController extends Controller
{
    public function index()
    {
    	//$ver= Publi::all();
        //$ver= Publi::orderby('id','desc')->get();
        $ver= Publi::orderby('id','desc')->paginate(10);
    	return view('publi.indexp')->with(['ver'=> $ver]);
    	//return view('publi/index');
    }

   // public function show($publiId)
    public function show(Publi $puId)
    {
        //$puId=Publi::find($publiId);
    	return view('publi.showp')->with(['puId'=>$puId]);
    }
    public function create()
   {
        return view('publi.createp');
   } 

   public function store(CreateEnviarRespuesta $request)
   {
    /* $resp=new Publi;
     $resp->titulo=$request->get('titulo11');
     $resp->descripsion=$request->get('descripsion11');
     $resp->url=$request->get('url11');
     $resp->save();
     return redirect()->route('posts_path');*/

     $resp=Publi::create($request->only('titulo','descripsion','url'));

     return redirect()->route('posts_path');
     //dd($request->all());
     //return $request->get('titulo');
   }
}
