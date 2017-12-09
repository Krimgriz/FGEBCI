<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class GraficasSexoController extends Controller
{
    public function urlGraficasSexo(Request $request){
        return redirect('estadisticas/sexo/'.$request->tiposexo.'/'.$request->yearsexo);
    }

    public function graficaSexo($tipo,$year){
    	if ($tipo=='todos') {
	        $var1='Hombres';
    		$GraficaEne1 = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 1)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','HOMBRE')
	            ->get();

	        $GraficaFeb1 = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 2)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','HOMBRE')
	            ->get();

	        $GraficaMar1 = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 3)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','HOMBRE')
	            ->get();

	        $GraficaAbr1 = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 4)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','HOMBRE')
	            ->get();

	        $GraficaMay1 = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 5)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','HOMBRE')
	            ->get();

	        $GraficaJun1 = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 6)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','HOMBRE')
	            ->get();

	        $GraficaJul1 = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 7)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','HOMBRE')
	            ->get();

	        $GraficaAgo1 = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 8)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','HOMBRE')
	            ->get();

	        $GraficaSep1 = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 9)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','HOMBRE')
	            ->get();

	        $GraficaOct1 = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 10)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','HOMBRE')
	            ->get();

	        $GraficaNov1 = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 11)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','HOMBRE')
	            ->get();

	        $GraficaDic1 = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 12)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','HOMBRE')
	            ->get();
	           
	            
	        $Ene1=count($GraficaEne1);
	        $Feb1=count($GraficaFeb1);
	        $Mar1=count($GraficaMar1);
	        $Abr1=count($GraficaAbr1);
	        $May1=count($GraficaMay1);
	        $Jun1=count($GraficaJun1);
	        $Jul1=count($GraficaJul1);
	        $Ago1=count($GraficaAgo1);
	        $Sep1=count($GraficaSep1);
	        $Oct1=count($GraficaOct1);
	        $Nov1=count($GraficaNov1);
	        $Dic1=count($GraficaDic1);
	        

	        $var2='Mujeres';
	        $GraficaEne2 = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 1)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','MUJER')
	            ->get();

	        $GraficaFeb2 = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 2)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','MUJER')
	            ->get();

	        $GraficaMar2 = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 3)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','MUJER')
	            ->get();

	        $GraficaAbr2 = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 4)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','MUJER')
	            ->get();

	        $GraficaMay2 = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 5)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','MUJER')
	            ->get();

	        $GraficaJun2 = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 6)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','MUJER')
	            ->get();

	        $GraficaJul2 = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 7)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','MUJER')
	            ->get();

	        $GraficaAgo2 = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 8)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','MUJER')
	            ->get();

	        $GraficaSep2 = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 9)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','MUJER')
	            ->get();

	        $GraficaOct2 = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 10)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','MUJER')
	            ->get();

	        $GraficaNov2 = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 11)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','MUJER')
	            ->get();

	        $GraficaDic2 = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 12)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','MUJER')
	            ->get();
	           
	            
	        $Ene2=count($GraficaEne2);
	        $Feb2=count($GraficaFeb2);
	        $Mar2=count($GraficaMar2);
	        $Abr2=count($GraficaAbr2);
	        $May2=count($GraficaMay2);
	        $Jun2=count($GraficaJun2);
	        $Jul2=count($GraficaJul2);
	        $Ago2=count($GraficaAgo2);
	        $Sep2=count($GraficaSep2);
	        $Oct2=count($GraficaOct2);
	        $Nov2=count($GraficaNov2);
	        $Dic2=count($GraficaDic2);


	        $var3='Se Desconoce';
	        $GraficaEne3 = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 1)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','SIN INFORMACION')
	            ->get();

	        $GraficaFeb3 = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 2)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','SIN INFORMACION')
	            ->get();

	        $GraficaMar3 = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 3)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','SIN INFORMACION')
	            ->get();

	        $GraficaAbr3 = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 4)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','SIN INFORMACION')
	            ->get();

	        $GraficaMay3 = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 5)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','SIN INFORMACION')
	            ->get();

	        $GraficaJun3 = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 6)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','SIN INFORMACION')
	            ->get();

	        $GraficaJul3 = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 7)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','SIN INFORMACION')
	            ->get();

	        $GraficaAgo3 = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 8)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','SIN INFORMACION')
	            ->get();

	        $GraficaSep3 = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 9)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','SIN INFORMACION')
	            ->get();

	        $GraficaOct3 = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 10)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','SIN INFORMACION')
	            ->get();

	        $GraficaNov3 = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 11)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','SIN INFORMACION')
	            ->get();

	        $GraficaDic3 = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 12)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','SIN INFORMACION')
	            ->get();
	           
	            
	        $Ene3=count($GraficaEne3);
	        $Feb3=count($GraficaFeb3);
	        $Mar3=count($GraficaMar3);
	        $Abr3=count($GraficaAbr3);
	        $May3=count($GraficaMay3);
	        $Jun3=count($GraficaJun3);
	        $Jul3=count($GraficaJul3);
	        $Ago3=count($GraficaAgo3);
	        $Sep3=count($GraficaSep3);
	        $Oct3=count($GraficaOct3);
	        $Nov3=count($GraficaNov3);
	        $Dic3=count($GraficaDic3);

	        
	        $nombre='incidencia delictiva por Sexo';
	        
	        return view('estadisticas.grafica3')
	        	->with('nombre',$nombre)
	        	->with('var1',$var1)
	            ->with('var2',$var2)
	            ->with('var3',$var3)
	            ->with('Ene1',$Ene1)
	            ->with('Feb1',$Feb1)
	            ->with('Mar1',$Mar1)
	            ->with('Abr1',$Abr1)
	            ->with('May1',$May1)
	            ->with('Jun1',$Jun1)
	            ->with('Jul1',$Jul1)
	            ->with('Ago1',$Ago1)
	            ->with('Sep1',$Sep1)
	            ->with('Oct1',$Oct1)
	            ->with('Nov1',$Nov1)
	            ->with('Dic1',$Dic1)
	            ->with('Ene2',$Ene2)
	            ->with('Feb2',$Feb2)
	            ->with('Mar2',$Mar2)
	            ->with('Abr2',$Abr2)
	            ->with('May2',$May2)
	            ->with('Jun2',$Jun2)
	            ->with('Jul2',$Jul2)
	            ->with('Ago2',$Ago2)
	            ->with('Sep2',$Sep2)
	            ->with('Oct2',$Oct2)
	            ->with('Nov2',$Nov2)
	            ->with('Dic2',$Dic2)
	            ->with('Ene3',$Ene3)
	            ->with('Feb3',$Feb3)
	            ->with('Mar3',$Mar3)
	            ->with('Abr3',$Abr3)
	            ->with('May3',$May3)
	            ->with('Jun3',$Jun3)
	            ->with('Jul3',$Jul3)
	            ->with('Ago3',$Ago3)
	            ->with('Sep3',$Sep3)
	            ->with('Oct3',$Oct3)
	            ->with('Nov3',$Nov3)
	            ->with('Dic3',$Dic3)
	            ->with('year',$year);
    	}
    	if ($tipo=='hombre') {
    		$GraficaEne = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 1)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','HOMBRE')
	            ->get();

	        $GraficaFeb = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 2)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','HOMBRE')
	            ->get();

	        $GraficaMar = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 3)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','HOMBRE')
	            ->get();

	        $GraficaAbr = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 4)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','HOMBRE')
	            ->get();

	        $GraficaMay = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 5)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','HOMBRE')
	            ->get();

	        $GraficaJun = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 6)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','HOMBRE')
	            ->get();

	        $GraficaJul = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 7)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','HOMBRE')
	            ->get();

	        $GraficaAgo = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 8)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','HOMBRE')
	            ->get();

	        $GraficaSep = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 9)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','HOMBRE')
	            ->get();

	        $GraficaOct = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 10)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','HOMBRE')
	            ->get();

	        $GraficaNov = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 11)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','HOMBRE')
	            ->get();

	        $GraficaDic = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 12)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','HOMBRE')
	            ->get();
	           
	        $tipo2='Hombres';
	        $tipo='incidencia delictiva en Hombres ';
	            
	        $Ene=count($GraficaEne);
	        $Feb=count($GraficaFeb);
	        $Mar=count($GraficaMar);
	        $Abr=count($GraficaAbr);
	        $May=count($GraficaMay);
	        $Jun=count($GraficaJun);
	        $Jul=count($GraficaJul);
	        $Ago=count($GraficaAgo);
	        $Sep=count($GraficaSep);
	        $Oct=count($GraficaOct);
	        $Nov=count($GraficaNov);
	        $Dic=count($GraficaDic);
	        
	        return view('estadisticas.grafica1')
	            ->with('Ene',$Ene)
	            ->with('Feb',$Feb)
	            ->with('Mar',$Mar)
	            ->with('Abr',$Abr)
	            ->with('May',$May)
	            ->with('Jun',$Jun)
	            ->with('Jul',$Jul)
	            ->with('Ago',$Ago)
	            ->with('Sep',$Sep)
	            ->with('Oct',$Oct)
	            ->with('Nov',$Nov)
	            ->with('Dic',$Dic)
	            ->with('tipo',$tipo)
	            ->with('year',$year)
	            ->with('tipo2',$tipo2);
    	}
    	if ($tipo=='mujer') {
    		$GraficaEne = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 1)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','MUJER')
	            ->get();

	        $GraficaFeb = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 2)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','MUJER')
	            ->get();

	        $GraficaMar = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 3)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','MUJER')
	            ->get();

	        $GraficaAbr = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 4)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','MUJER')
	            ->get();

	        $GraficaMay = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 5)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','MUJER')
	            ->get();

	        $GraficaJun = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 6)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','MUJER')
	            ->get();

	        $GraficaJul = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 7)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','MUJER')
	            ->get();

	        $GraficaAgo = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 8)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','MUJER')
	            ->get();

	        $GraficaSep = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 9)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','MUJER')
	            ->get();

	        $GraficaOct = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 10)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','MUJER')
	            ->get();

	        $GraficaNov = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 11)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','MUJER')
	            ->get();

	        $GraficaDic = DB::table('carpeta')
	        	->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
	        	->join('persona','variables_persona.idPersona','=','persona.id')
	        	->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
	        	->select('carpeta.id','carpeta.estadoCarpeta')
	            ->whereMonth('fechaInicio', '=', 12)
	            ->whereYear('fechaInicio', '=', $year)
	            ->where('persona.sexo','=','MUJER')
	            ->get();
	           
	        $tipo2='Mujeres';
	        $tipo='incidencia delictiva en Mujeres';
	            
	        $Ene=count($GraficaEne);
	        $Feb=count($GraficaFeb);
	        $Mar=count($GraficaMar);
	        $Abr=count($GraficaAbr);
	        $May=count($GraficaMay);
	        $Jun=count($GraficaJun);
	        $Jul=count($GraficaJul);
	        $Ago=count($GraficaAgo);
	        $Sep=count($GraficaSep);
	        $Oct=count($GraficaOct);
	        $Nov=count($GraficaNov);
	        $Dic=count($GraficaDic);
	        
	        return view('estadisticas.grafica1')
	            ->with('Ene',$Ene)
	            ->with('Feb',$Feb)
	            ->with('Mar',$Mar)
	            ->with('Abr',$Abr)
	            ->with('May',$May)
	            ->with('Jun',$Jun)
	            ->with('Jul',$Jul)
	            ->with('Ago',$Ago)
	            ->with('Sep',$Sep)
	            ->with('Oct',$Oct)
	            ->with('Nov',$Nov)
	            ->with('Dic',$Dic)
	            ->with('tipo',$tipo)
	            ->with('year',$year)
	            ->with('tipo2',$tipo2);
    	}


    	
    }
}
