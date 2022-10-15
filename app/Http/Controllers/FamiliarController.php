<?php

namespace App\Http\Controllers;

use App\Models\Familiar;
use Carbon\Carbon;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;

class FamiliarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $familiares = Familiar::query('id');
        
      

        if(isset(request()->OrderdenarPor)){
            $familiares = $familiares->orderBy(request()->OrderdenarPor, 'asc');
        } else{
            $familiares = $familiares->orderBy('data_nascimento', 'asc');
        }

        $familiares = $familiares->get();

        $perm = auth()->user()->familiaresPermitidos();

        return view('lista',[
            'user' => Auth::user(), 
            'familiares' => $familiares,
            'perm' => $perm,
        ]);
    }

    public function arvore()
    {
        $familiares = Familiar::with(['genitorFamiliar','genitorAgregado'])->orderby('id')->get();
        $array = [];

        foreach ($familiares as $familiar) {

            $fam = (object)[];
            $data = (object)[];
            $rels = (object)[];

            $fam->id = $familiar->id;

            $bday = $familiar->data_nascimento ? "✩ " . Carbon::parse($familiar->data_nascimento)->format('d/m/Y') : '';
            $bday_falecimento = $familiar->data_falecimento ? "✞ " . Carbon::parse($familiar->data_falecimento)->format('d/m/Y') : null;
            $bday = $bday_falecimento ? $bday . " " . $bday_falecimento : $bday;

            $data = [
                'gender' => strtoupper($familiar->genero),
                'first name' => $familiar->nome,
                'last name' => $familiar->apelido ? ' (' .$familiar->apelido . ')' : "",
                'birthday' =>  $bday,
                'deceased' =>  $bday_falecimento ? '1' : '0',
            ];

            $rels = [
                'children' => [],
                'spouses' => [] , 
                'mother' => "",
                'father' =>  "",
            ];

            if (isset($familiar->genitorFamiliar)) {
                if ($familiar->genitorFamiliar->genero == 'm') {
                    $rels['father'] = $familiar->genitorFamiliar->id;
                } else {
                    $rels['father'] = $familiar->genitorAgregado->id;
                } 
            }

            if (isset($familiar->genitorAgregado)) {
                if ($familiar->genitorAgregado->genero == 'f') {
                    $rels['mother'] = $familiar->genitorAgregado->id;
                } else {
                    $rels['mother'] = $familiar->genitorFamiliar->id;
                } 
            }

            if ($familiar->agregado_de_id != null) {
                $rels['spouses'] = [$familiar->agregado_de_id];
            } else {
                $spouses = Familiar::where('agregado_de_id', $familiar->id)->get();
                foreach ($spouses as $spouse) {
                    array_push($rels['spouses'], $spouse->id);
                }                
            }

            $children = Familiar::where('genitor_familiar_id', $familiar->id)->orWhere('genitor_agregado_id', $familiar->id)->get();
            foreach ($children as $child) {
                array_push($rels['children'], $child->id);
            }                

            $fam->data = $data;
            $fam->rels = $rels;
            array_push($array, $fam);  
            

        }

        return view('arvore',[
            'user' => Auth::user(), 
            'familiares' => $familiares,
            'arvore' => json_encode($array),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $familiares = Familiar::where('is_agregado', '!=' , true)->get();
        $agregados = Familiar::where('is_agregado', "=", true)->get();
        $isAgregado =  request()->isAgregado;
        return view('familiar-form',[
            'user' => Auth::user(), 
            'familiares' => $familiares,
            'agregados' => $agregados,
            'isAgregado' => $isAgregado
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HttpRequest $request)
    {
        if (!auth()->user()->hasRole('admin')) {
            //validar genitores
            $id_perm = auth()->user()->familiaresPermitidos();

            if ($request->is_agregado == "1" || $request->is_agregado == "true") {
                
                Validator::make($request->all(), [
                    'agregado_de_id' => ['required',
                        Rule::in($id_perm)
                    ],                
                ],
                [
                    'agregado_de_id.required' => 'O campo Agregado de é obrigatório',
                    'agregado_de_id.in' => 'Você não tem permissão para utilizar esse "Agredado de"',
                ])->validate();

            } else {

                Validator::make($request->all(), [
                    'genitor_familiar_id' => [
                        'required', 
                        Rule::in($id_perm),
                    ],
                    'genitor_agregado_id' => [
                        'required', 
                        Rule::in($id_perm),
                    ],
                    
                ],
                [
                    'genitor_familiar_id.required' => 'O campo genitor familiar é obrigatório',
                    'genitor_familiar_id.in' => 'Você não tem permissão para utilizar esse "Genitor Familiar"',
                    'genitor_agregado_id.required' => 'O campo genitor agregado é obrigatório',
                    'genitor_agregado_id.in' => 'Você não tem permissão para utilizar esse "Genitor Agregado"',
                ])->validate();

            }
        }


        $familiar = new Familiar();
        $familiar->store($request);
        return redirect()->route('lista')->with('mensagem', $familiar->nome . ' foi incluído com sucesso!');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Familiar  $familiar
     * @return \Illuminate\Http\Response
     */
    public function showAjax(Familiar $familiar)
    {
        $familiar = Familiar::with(['genitorFamiliar','genitorAgregado','agregado','filhos'])->find($familiar->id);
        return response()->json($familiar);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Familiar  $familiar
     * @return \Illuminate\Http\Response
     */
    public function edit(Familiar $familiar)
    {
        $familiares = Familiar::where('is_agregado', '!=' , true)->get();
        $agregados = Familiar::where('is_agregado', "=", true)->get();
        $isAgregado =  (bool)$familiar->is_agregado;

        return view('familiar-form',[
            'user' => Auth::user(), 
            'familiares' => $familiares,
            'agregados' => $agregados,
            'isAgregado' => $isAgregado,
            'familiarEdit' => $familiar
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Familiar  $familiar
     * @return \Illuminate\Http\Response
     */
    public function update(HttpRequest $request, Familiar $familiar)
    {
        //validar genitores

        if ($familiar->is_agregado == "1" || $familiar->is_agregado == "true") {
    
        Validator::make($request->all(), [
            'agregado_de_id' => 'required',
        ])->validate();

        } else {

            Validator::make($request->all(), [
                'genitor_familiar_id' => 'required',
                'genitor_agregado_id' => 'required',
            ])->validate();

        }

        $familiar->patch($request,$familiar);
        return redirect()->route('lista')->with('mensagem', $familiar->nome . ' foi modificado com sucesso!');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Familiar  $familiar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Familiar $familiar)
    {
        try{
            $familiar->delete();
            return redirect()->route('lista')->with('mensagem', $familiar->nome . ' foi excluído com sucesso!');
        } catch (\Exception $e) {
            return redirect()->route('lista')->with('mensagem', 'Não foi possível excluir o cadastro: '. $familiar->nome . '. Verifique se há algum familiar vinculado a este!');
        }
    }
}
