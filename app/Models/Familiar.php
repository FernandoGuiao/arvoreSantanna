<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Request;
use Korridor\LaravelHasManyMerged\HasManyMerged;
use Korridor\LaravelHasManyMerged\HasManyMergedRelation;

class Familiar extends Model
{
    use HasFactory;
    use HasManyMergedRelation;

    protected $table = 'familiares';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function genitorFamiliar()
    {
        return $this->belongsTo(Familiar::class, 'genitor_familiar_id');
    }

    public function genitorAgregado()
    {
        return $this->belongsTo(Familiar::class, 'genitor_agregado_id');
    }

    public function agregado()
    {
        return $this->belongsTo(Familiar::class, 'agregado_de_id');
    }

    public function filhosDiretos()
    {
        return $this->hasMany(Familiar::class, 'genitor_familiar_id');
    }
    public function filhosAgregados()
    {
        return $this->hasMany(Familiar::class, 'genitor_agregado_id');
    }
    
    public function filhos()
    {
        return $this->hasManyMerged(Familiar::class, ['genitor_agregado_id', 'genitor_familiar_id']);
    }

    public static function contaGeracao()
    {
        $familiarIni = Familiar::find(1);

        $contaGeracao = [];

        $geracao = 0;

        $essaGeracao = [];
        $essaGeracao[] = $familiarIni;

        $proximaGeracao = [];

        while (true){

            if (count($essaGeracao) == 0) {
                break;
            }
            foreach ($essaGeracao as $familiar) {

                $contaGeracao[$geracao][] = $familiar->filhosDiretos->count();

                foreach ($familiar->filhosDiretos as $filho) {
                    $proximaGeracao[] = $filho;
                }

            }
            $geracao++;
            $essaGeracao = $proximaGeracao;
            $proximaGeracao = [];
        }      

        return $contaGeracao;
    }

    public function store(HttpRequest $request)
    {
        $max_id = Familiar::max('id');
        $this->id = $max_id + 1;

        $this->nome = $request->nome;
        $this->apelido = $request->apelido;
        $this->profissao = $request->profissao;
        $this->genero = $request->genero;
        $this->data_nascimento = $request->data_nascimento;
        $this->data_falecimento = $request->data_falecimento;
        $this->genitor_familiar_id = $request->genitor_familiar_id;
        $this->genitor_agregado_id = $request->genitor_agregado_id;
        $this->agregado_de_id = $request->agregado_de_id;
        $this->is_agregado = $request->is_agregado;
        $this->is_adotado = $request->is_adotado == 'on' ? true : false;

        $this->nac_pais = $request->nac_pais;
        $this->nac_estado = $request->nac_estado;
        $this->nac_cidade = $request->nac_cidade;

        $this->email = $request->email;
        $this->tel1 = $request->tel1;
        $this->tel2 = $request->tel2;

        $this->end_cep = $request->end_cep;
        $this->end_pais = $request->end_pais;
        $this->end_estado = $request->end_estado;
        $this->end_cidade = $request->end_cidade;
        $this->end_bairro = $request->end_bairro;
        $this->end_rua = $request->end_rua;
        $this->end_numero = $request->end_numero;

        $this->obs = $request->obs;

        $this->save();

        return $this;
    }

    public function patch(HttpRequest $request, Familiar $familiar)
    { 
        $familiar->nome = $request->nome;
        $familiar->apelido = $request->apelido;
        $familiar->profissao = $request->profissao;
        $familiar->genero = $request->genero;
        $familiar->data_nascimento = $request->data_nascimento;
        $familiar->data_falecimento = $request->data_falecimento;
        $familiar->genitor_familiar_id = $request->genitor_familiar_id;
        $familiar->genitor_agregado_id = $request->genitor_agregado_id;
        $familiar->agregado_de_id = $request->agregado_de_id;
        $familiar->is_agregado = $request->is_agregado;
        $familiar->is_adotado = $request->is_adotado == 'on' ? true : false;

        $familiar->nac_pais = $request->nac_pais;
        $familiar->nac_estado = $request->nac_estado;
        $familiar->nac_cidade = $request->nac_cidade;

        $familiar->email = $request->email;
        $familiar->tel1 = $request->tel1;
        $familiar->tel2 = $request->tel2;

        $familiar->end_cep = $request->end_cep;
        $familiar->end_pais = $request->end_pais;
        $familiar->end_estado = $request->end_estado;
        $familiar->end_cidade = $request->end_cidade;
        $familiar->end_bairro = $request->end_bairro;
        $familiar->end_rua = $request->end_rua;
        $familiar->end_numero = $request->end_numero;

        $familiar->obs = $request->obs;

        $familiar->save();

        return $this;
    }

  
}
