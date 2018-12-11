<?php

namespace App\Http\Controllers;


use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Http\Request;
class AdministratorController extends Controller
{
    public function autogeneratePDF(){
        $options = new Options();
        $options->setIsRemoteEnabled(true);
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml(view('pruebapdf')->render());
        $dompdf->render();
        $dompdf->stream('nombre',array('Attachment'=>false));
    }

    public function vistacuatro(Request $request){
        if($request->ajax()){
            $competencias = $request->numero;
            $vista = view('four')->with(compact('competencias'))->render();
        }
        return response()->json(array('success' => true, 'html'=>$vista));
    }

    public function vistatemas(Request $request){
        if ($request->ajax()){
            $ntemas = $request->numero;
            $vista = view('comp')->with(compact('ntemas'))->render();
        }
        return response()->json(array('success' => true, 'html'=>$vista));

    }
}
