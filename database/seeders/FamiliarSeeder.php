<?php

namespace Database\Seeders;

use App\Models\Familiar;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class FamiliarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $familiar = new Familiar();    
        
        $familiar->id = 1;
        $familiar->nome = "Mario Gentil Muricy Sant'Anna";
        $familiar->apelido = "Maru";
        $familiar->profissao = null;
        $familiar->genero = "m";
        $familiar->data_nascimento = null;
        $familiar->data_falecimento = null;
        $familiar->genitor_familiar_id = null;
        $familiar->genitor_agregado_id = null;
        $familiar->is_agregado = false;
        $familiar->agregado_de_id = null;

        $familiar->nac_pais = "Brasil";
        $familiar->nac_estado = null;
        $familiar->nac_cidade = null;

        $familiar->email = null;
        $familiar->tel1 = null;
        $familiar->tel2 = null;

        $familiar->end_cep = null;
        $familiar->end_pais = null;
        $familiar->end_estado = null;
        $familiar->end_cidade = null;
        $familiar->end_bairro = null;
        $familiar->end_rua = null;
        $familiar->end_numero = null;
        $familiar->obs = null;

        $familiar->save();

        //--------------------------------------------------------------------------------------------------------------

        $familiar = new Familiar();    
        
        $familiar->id = 2;
        $familiar->nome = "Elfriades Coelho Sant'Anna";
        $familiar->apelido = "Fifide";
        $familiar->profissao = null;
        $familiar->genero = "f";
        $familiar->data_nascimento = null;
        $familiar->data_falecimento = Carbon::createFromFormat('d/m/Y',  '01/04/1978');
        $familiar->genitor_familiar_id = null;
        $familiar->genitor_agregado_id = null;
        $familiar->is_agregado = true;
        $familiar->agregado_de_id = 1;

        $familiar->nac_pais = "Brasil";
        $familiar->nac_estado = null;
        $familiar->nac_cidade = null;

        $familiar->email = null;
        $familiar->tel1 = null;
        $familiar->tel2 = null;

        $familiar->end_cep = null; 
        $familiar->end_pais = null;
        $familiar->end_estado = null; 
        $familiar->end_cidade = null;
        $familiar->end_bairro = null;
        $familiar->end_rua = null; 
        $familiar->end_numero = null; 
        $familiar->obs = null;

        $familiar->save();
        //--------------------------------------------------------------------------------------------------------------

        $familiar = new Familiar();    
        
        $familiar->id = 3;
        $familiar->nome = "Amélia Minervina Coelho Sant'Anna";
        $familiar->apelido = "Milú";
        $familiar->profissao = null;
        $familiar->genero = "f";
        $familiar->data_nascimento = Carbon::createFromFormat('d/m/Y',  '05/03/1940');
        $familiar->data_falecimento = null;
        $familiar->genitor_familiar_id = 1;
        $familiar->genitor_agregado_id = 2;
        $familiar->is_agregado = false;
        $familiar->agregado_de_id = null;

        $familiar->nac_pais = "Brasil";
        $familiar->nac_estado = null;
        $familiar->nac_cidade = null;

        $familiar->email = null;
        $familiar->tel1 = null;
        $familiar->tel2 = null;

        $familiar->end_cep = null; 
        $familiar->end_pais = null;
        $familiar->end_estado = null; 
        $familiar->end_cidade = null;
        $familiar->end_bairro = null;
        $familiar->end_rua = null; 
        $familiar->end_numero = null; 
        $familiar->obs = null;

        $familiar->save();
        //--------------------------------------------------------------------------------------------------------------

        $familiar = new Familiar();    
        
        $familiar->id = 4;
        $familiar->nome = "Clara Regina Sant'Anna Murta";
        $familiar->apelido = "Regina";
        $familiar->profissao = null;
        $familiar->genero = "f";
        $familiar->data_nascimento = Carbon::createFromFormat('d/m/Y',  '19/02/1930');
        $familiar->data_falecimento = null;
        $familiar->genitor_familiar_id = 1;
        $familiar->genitor_agregado_id = 2;
        $familiar->is_agregado = false;
        $familiar->agregado_de_id = null;

        $familiar->nac_pais = "Brasil";
        $familiar->nac_estado = null;
        $familiar->nac_cidade = null;

        $familiar->email = null;
        $familiar->tel1 = null;
        $familiar->tel2 = null;

        $familiar->end_cep = null; 
        $familiar->end_pais = null;
        $familiar->end_estado = null; 
        $familiar->end_cidade = null;
        $familiar->end_bairro = null;
        $familiar->end_rua = null; 
        $familiar->end_numero = null; 
        $familiar->obs = null;

        $familiar->save();
        //--------------------------------------------------------------------------------------------------------------

        $familiar = new Familiar();    
        
        $familiar->id = 5;
        $familiar->nome = "Delmar Sant'Anna Belo";
        $familiar->apelido = "Dedé";
        $familiar->profissao = null;
        $familiar->genero = "f";
        $familiar->data_nascimento = Carbon::createFromFormat('d/m/Y',  '06/03/1934');
        $familiar->data_falecimento = null;
        $familiar->genitor_familiar_id = 1;
        $familiar->genitor_agregado_id = 2;
        $familiar->is_agregado = false;
        $familiar->agregado_de_id = null;

        $familiar->nac_pais = "Brasil";
        $familiar->nac_estado = null;
        $familiar->nac_cidade = null;

        $familiar->email = null;
        $familiar->tel1 = null;
        $familiar->tel2 = null;

        $familiar->end_cep = null; 
        $familiar->end_pais = null;
        $familiar->end_estado = null; 
        $familiar->end_cidade = null;
        $familiar->end_bairro = null;
        $familiar->end_rua = null; 
        $familiar->end_numero = null; 
        $familiar->obs = null;

        $familiar->save();
    
        //--------------------------------------------------------------------------------------------------------------

        $familiar = new Familiar();    
        
        $familiar->id = 6;
        $familiar->nome = "Dulce Maria Sant'Anna Schaper";
        $familiar->apelido = "Dulcinha";
        $familiar->profissao = null;
        $familiar->genero = "f";
        $familiar->data_nascimento = Carbon::createFromFormat('d/m/Y',  '16/07/1923');
        $familiar->data_falecimento = null;
        $familiar->genitor_familiar_id = 1;
        $familiar->genitor_agregado_id = 2;
        $familiar->is_agregado = false;
        $familiar->agregado_de_id = null;

        $familiar->nac_pais = "Brasil";
        $familiar->nac_estado = null;
        $familiar->nac_cidade = null;

        $familiar->email = null;
        $familiar->tel1 = null;
        $familiar->tel2 = null;

        $familiar->end_cep = null; 
        $familiar->end_pais = null;
        $familiar->end_estado = null; 
        $familiar->end_cidade = null;
        $familiar->end_bairro = null;
        $familiar->end_rua = null; 
        $familiar->end_numero = null; 
        $familiar->obs = null;

        $familiar->save();
        //--------------------------------------------------------------------------------------------------------------

        $familiar = new Familiar();    
        
        $familiar->id = 7;
        $familiar->nome = "Eulina Sant'Anna Haueisen";
        $familiar->apelido = "Lelém";
        $familiar->profissao = null;
        $familiar->genero = "f";
        $familiar->data_nascimento = Carbon::createFromFormat('d/m/Y',  '01/07/1937');
        $familiar->data_falecimento = null;
        $familiar->genitor_familiar_id = 1;
        $familiar->genitor_agregado_id = 2;
        $familiar->is_agregado = false;
        $familiar->agregado_de_id = null;

        $familiar->nac_pais = "Brasil";
        $familiar->nac_estado = null;
        $familiar->nac_cidade = null;

        $familiar->email = null;
        $familiar->tel1 = null;
        $familiar->tel2 = null;

        $familiar->end_cep = null; 
        $familiar->end_pais = null;
        $familiar->end_estado = null; 
        $familiar->end_cidade = null;
        $familiar->end_bairro = null;
        $familiar->end_rua = null; 
        $familiar->end_numero = null; 
        $familiar->obs = null;

        $familiar->save();
        //--------------------------------------------------------------------------------------------------------------

        $familiar = new Familiar();    
        
        $familiar->id = 8;
        $familiar->nome = "Guiomar Sant'Anna Murta";
        $familiar->apelido = "Guigui";
        $familiar->profissao = null;
        $familiar->genero = "f";
        $familiar->data_nascimento = Carbon::createFromFormat('d/m/Y',  '03/10/1935');
        $familiar->data_falecimento = null;
        $familiar->genitor_familiar_id = 1;
        $familiar->genitor_agregado_id = 2;
        $familiar->is_agregado = false;
        $familiar->agregado_de_id = null;

        $familiar->nac_pais = "Brasil";
        $familiar->nac_estado = null;
        $familiar->nac_cidade = null;

        $familiar->email = null;
        $familiar->tel1 = null;
        $familiar->tel2 = null;

        $familiar->end_cep = null; 
        $familiar->end_pais = null;
        $familiar->end_estado = null; 
        $familiar->end_cidade = null;
        $familiar->end_bairro = null;
        $familiar->end_rua = null; 
        $familiar->end_numero = null; 
        $familiar->obs = null;

        $familiar->save();
        //--------------------------------------------------------------------------------------------------------------

        $familiar = new Familiar();    
        
        $familiar->id = 9;
        $familiar->nome = "José Coelho Sant'Anna";
        $familiar->apelido = "Zezito";
        $familiar->profissao = null;
        $familiar->genero = "m";
        $familiar->data_nascimento = Carbon::createFromFormat('d/m/Y',  '09/08/1921');
        $familiar->data_falecimento = Carbon::createFromFormat('d/m/Y',  '30/10/2008');
        $familiar->genitor_familiar_id = 1;
        $familiar->genitor_agregado_id = 2;
        $familiar->is_agregado = false;
        $familiar->agregado_de_id = null;

        $familiar->nac_pais = "Brasil";
        $familiar->nac_estado = null;
        $familiar->nac_cidade = null;

        $familiar->email = null;
        $familiar->tel1 = null;
        $familiar->tel2 = null;

        $familiar->end_cep = "30150-370"; 
        $familiar->end_pais = "Brasil";
        $familiar->end_estado = "MG"; 
        $familiar->end_cidade = "Belo Horizonte";
        $familiar->end_bairro = "Funcionários";
        $familiar->end_rua = "Professor Moraes"; 
        $familiar->end_numero = "458"; 
        $familiar->obs = null;

        $familiar->save();
        //--------------------------------------------------------------------------------------------------------------

        $familiar = new Familiar();    
        
        $familiar->id = 10;
        $familiar->nome = "Manoel Maria Coelho Sant'Anna";
        $familiar->apelido = "Mané";
        $familiar->profissao = null;
        $familiar->genero = "m";
        $familiar->data_nascimento = Carbon::createFromFormat('d/m/Y',  '10/05/1931');
        $familiar->data_falecimento = null;
        $familiar->genitor_familiar_id = 1;
        $familiar->genitor_agregado_id = 2;
        $familiar->is_agregado = false;
        $familiar->agregado_de_id = null;

        $familiar->nac_pais = "Brasil";
        $familiar->nac_estado = null;
        $familiar->nac_cidade = null;

        $familiar->email = null;
        $familiar->tel1 = null;
        $familiar->tel2 = null;

        $familiar->end_cep = null; 
        $familiar->end_pais = null;
        $familiar->end_estado = null; 
        $familiar->end_cidade = null;
        $familiar->end_bairro = null;
        $familiar->end_rua = null; 
        $familiar->end_numero = null; 
        $familiar->obs = null;

        $familiar->save();
        //--------------------------------------------------------------------------------------------------------------

        $familiar = new Familiar();    
        
        $familiar->id = 11;
        $familiar->nome = "Mario Coelho Sant'Anna";
        $familiar->apelido = "Maruzinho";
        $familiar->profissao = null;
        $familiar->genero = "m";
        $familiar->data_nascimento = Carbon::createFromFormat('d/m/Y',  '11/02/1928');
        $familiar->data_falecimento = null;
        $familiar->genitor_familiar_id = 1;
        $familiar->genitor_agregado_id = 2;
        $familiar->is_agregado = false;
        $familiar->agregado_de_id = null;

        $familiar->nac_pais = "Brasil";
        $familiar->nac_estado = null;
        $familiar->nac_cidade = null;

        $familiar->email = null;
        $familiar->tel1 = null;
        $familiar->tel2 = null;

        $familiar->end_cep = null; 
        $familiar->end_pais = null;
        $familiar->end_estado = null; 
        $familiar->end_cidade = null;
        $familiar->end_bairro = null;
        $familiar->end_rua = null; 
        $familiar->end_numero = null; 
        $familiar->obs = null;

        $familiar->save();
        //--------------------------------------------------------------------------------------------------------------

        $familiar = new Familiar();    
        
        $familiar->id = 12;
        $familiar->nome = "Maria Angélica Sant'Anna Lorentz";
        $familiar->apelido = "Milita";
        $familiar->profissao = null;
        $familiar->genero = "f";
        $familiar->data_nascimento = Carbon::createFromFormat('d/m/Y',  '22/07/1922');
        $familiar->data_falecimento = null;
        $familiar->genitor_familiar_id = 1;
        $familiar->genitor_agregado_id = 2;
        $familiar->is_agregado = false;
        $familiar->agregado_de_id = null;

        $familiar->nac_pais = "Brasil";
        $familiar->nac_estado = null;
        $familiar->nac_cidade = null;

        $familiar->email = null;
        $familiar->tel1 = null;
        $familiar->tel2 = null;

        $familiar->end_cep = null; 
        $familiar->end_pais = null;
        $familiar->end_estado = null; 
        $familiar->end_cidade = null;
        $familiar->end_bairro = null;
        $familiar->end_rua = null; 
        $familiar->end_numero = null; 
        $familiar->obs = null;

        $familiar->save();
        //--------------------------------------------------------------------------------------------------------------

        $familiar = new Familiar();    
        
        $familiar->id = 13;
        $familiar->nome = "Nestor Coelho De Sant'Anna";
        $familiar->apelido = null;
        $familiar->profissao = null;
        $familiar->genero = "m";
        $familiar->data_nascimento = Carbon::createFromFormat('d/m/Y',  '17/06/1944');
        $familiar->data_falecimento = null;
        $familiar->genitor_familiar_id = 1;
        $familiar->genitor_agregado_id = 2;
        $familiar->is_agregado = false;
        $familiar->agregado_de_id = null;

        $familiar->nac_pais = "Brasil";
        $familiar->nac_estado = null;
        $familiar->nac_cidade = null;

        $familiar->email = null;
        $familiar->tel1 = null;
        $familiar->tel2 = null;

        $familiar->end_cep = null; 
        $familiar->end_pais = null;
        $familiar->end_estado = null; 
        $familiar->end_cidade = null;
        $familiar->end_bairro = null;
        $familiar->end_rua = null; 
        $familiar->end_numero = null; 
        $familiar->obs = null;

        $familiar->save();
        //--------------------------------------------------------------------------------------------------------------

        $familiar = new Familiar();    
        
        $familiar->id = 14;
        $familiar->nome = "Yara Coelho De Sant'Anna";
        $familiar->apelido = null;
        $familiar->profissao = null;
        $familiar->genero = "f";
        $familiar->data_nascimento = Carbon::createFromFormat('d/m/Y',  '17/06/1944');
        $familiar->data_falecimento = null;
        $familiar->genitor_familiar_id = 1;
        $familiar->genitor_agregado_id = 2;
        $familiar->is_agregado = false;
        $familiar->agregado_de_id = null;

        $familiar->nac_pais = "Brasil";
        $familiar->nac_estado = null;
        $familiar->nac_cidade = null;

        $familiar->email = null;
        $familiar->tel1 = null;
        $familiar->tel2 = null;

        $familiar->end_cep = null; 
        $familiar->end_pais = null;
        $familiar->end_estado = null; 
        $familiar->end_cidade = null;
        $familiar->end_bairro = null;
        $familiar->end_rua = null; 
        $familiar->end_numero = null; 
        $familiar->obs = null;

        $familiar->save();

        //--------------------------------------------------------------------------------------------------------------

        $familiar = new Familiar();    
        
        $familiar->id = 15;
        $familiar->nome = "Virgília Leal Da Paixão Santana";
        $familiar->apelido = "Lica";
        $familiar->profissao = null;
        $familiar->genero = "f";
        $familiar->data_nascimento = Carbon::createFromFormat('d/m/Y',  '29/01/1928');
        $familiar->data_falecimento = null;
        $familiar->genitor_familiar_id = null;
        $familiar->genitor_agregado_id = null;
        $familiar->is_agregado = true;
        $familiar->agregado_de_id = 9;

        $familiar->nac_pais = "Brasil";
        $familiar->nac_estado = null;
        $familiar->nac_cidade = null;

        $familiar->email = null;
        $familiar->tel1 = '3135678921';
        $familiar->tel2 = null;

        $familiar->end_cep = "30310370"; 
        $familiar->end_pais = "Brasil";
        $familiar->end_estado = "MG"; 
        $familiar->end_cidade = "Belo Horizonte";
        $familiar->end_bairro = "Funcionários";
        $familiar->end_rua = "Montes Claros"; 
        $familiar->end_numero = "480"; 
        $familiar->obs = null;

        $familiar->save();
        //--------------------------------------------------------------------------------------------------------------

        $familiar = new Familiar();    
        
        $familiar->id = 16;
        $familiar->nome = "Ricardo Leal Santana";
        $familiar->apelido = "Bude";
        $familiar->profissao = null;
        $familiar->genero = "m";
        $familiar->data_nascimento = Carbon::createFromFormat('d/m/Y',  '18/10/1952');
        $familiar->data_falecimento = null;
        $familiar->genitor_familiar_id = 9;
        $familiar->genitor_agregado_id = 15;
        $familiar->is_agregado = false;
        $familiar->agregado_de_id = null;

        $familiar->nac_pais = "Brasil";
        $familiar->nac_estado = "MG";
        $familiar->nac_cidade = "Teófilo Otoni";

        $familiar->email = null;
        $familiar->tel1 = '31999670648';
        $familiar->tel2 = null;

        $familiar->end_cep = "30350610"; 
        $familiar->end_pais = "Brasil";
        $familiar->end_estado = "MG"; 
        $familiar->end_cidade = "Belo Horizonte";
        $familiar->end_bairro = "Santa Lúcia";
        $familiar->end_rua = "Tobias Moscoso"; 
        $familiar->end_numero = "33"; 
        $familiar->obs = null;

        $familiar->save();
        //--------------------------------------------------------------------------------------------------------------

        $familiar = new Familiar();    
        
        $familiar->id = 17;
        $familiar->nome = "Mariângela Guião Santana";
        $familiar->apelido = "Nana";
        $familiar->profissao = null;
        $familiar->genero = "f";
        $familiar->data_nascimento = Carbon::createFromFormat('d/m/Y',  '11/04/1954');
        $familiar->data_falecimento = null;
        $familiar->genitor_familiar_id = null;
        $familiar->genitor_agregado_id = null;
        $familiar->is_agregado = true;
        $familiar->agregado_de_id = 16;

        $familiar->nac_pais = "Brasil";
        $familiar->nac_estado = "GO";
        $familiar->nac_cidade = "Goiânia";

        $familiar->email = null;
        $familiar->tel1 = '31999847782';
        $familiar->tel2 = null;

        $familiar->end_cep = "30350610"; 
        $familiar->end_pais = "Brasil";
        $familiar->end_estado = "MG"; 
        $familiar->end_cidade = "Belo Horizonte";
        $familiar->end_bairro = "Santa Lúcia";
        $familiar->end_rua = "Tobias Moscoso"; 
        $familiar->end_numero = "33"; 
        $familiar->obs = null;

        $familiar->save();
        //--------------------------------------------------------------------------------------------------------------

        $familiar = new Familiar();    
        
        $familiar->id = 18;
        $familiar->nome = "Fernando Guião Santana";
        $familiar->apelido = "Nando, Dino";
        $familiar->profissao = "Programador / Dentista";
        $familiar->genero = "m";
        $familiar->data_nascimento = Carbon::createFromFormat('d/m/Y',  '06/01/1988');
        $familiar->data_falecimento = null;
        $familiar->genitor_familiar_id = 16;
        $familiar->genitor_agregado_id = 17;
        $familiar->is_agregado = false;
        $familiar->agregado_de_id = null;

        $familiar->nac_pais = "Brasil";
        $familiar->nac_estado = "MG";
        $familiar->nac_cidade = "Teoilo Otoni";

        $familiar->email = "fernando.guiao@gmail.com";
        $familiar->tel1 = '31999670648';
        $familiar->tel2 = null;

        $familiar->end_cep = "30575160"; 
        $familiar->end_pais = "Brasil";
        $familiar->end_estado = "MG"; 
        $familiar->end_cidade = "Belo Horizonte";
        $familiar->end_bairro = "Buritis";
        $familiar->end_rua = "Tereza Mota Valadares"; 
        $familiar->end_numero = "170"; 
        $familiar->obs = null;

        $familiar->save();

        //--------------------------------------------------------------------------------------------------------------

        $familiar = new Familiar();    
        
        $familiar->id = 19;
        $familiar->nome = "Júlia Maria Melo Andrade";
        $familiar->apelido = "Jú";
        $familiar->profissao = "Auditora Odontológica";
        $familiar->genero = "f";
        $familiar->data_nascimento = Carbon::createFromFormat('d/m/Y',  '06/01/1988');
        $familiar->data_falecimento = null;
        $familiar->genitor_familiar_id = null;
        $familiar->genitor_agregado_id = null;
        $familiar->is_agregado = true;
        $familiar->agregado_de_id = 18;

        $familiar->nac_pais = "Brasil";
        $familiar->nac_estado = "MG";
        $familiar->nac_cidade = "Patos de Minas";

        $familiar->email = null;
        $familiar->tel1 = null;
        $familiar->tel2 = null;

        $familiar->end_cep = "30575160"; 
        $familiar->end_pais = "Brasil";
        $familiar->end_estado = "MG"; 
        $familiar->end_cidade = "Belo Horizonte";
        $familiar->end_bairro = "Buritis";
        $familiar->end_rua = "Tereza Mota Valadares"; 
        $familiar->end_numero = "170"; 
        $familiar->obs = null;

        $familiar->save();
        //--------------------------------------------------------------------------------------------------------------

        $familiar = new Familiar();    
        
        $familiar->id = 20;
        $familiar->nome = "Diego Andrade Santana";
        $familiar->apelido = "Dom";
        $familiar->profissao = null;
        $familiar->genero = "m";
        $familiar->data_nascimento = Carbon::createFromFormat('d/m/Y',  '22/10/2021');
        $familiar->data_falecimento = null;
        $familiar->genitor_familiar_id = 18;
        $familiar->genitor_agregado_id = 19;
        $familiar->is_agregado = false;
        $familiar->agregado_de_id = null;

        $familiar->nac_pais = "Brasil";
        $familiar->nac_estado = "MG";
        $familiar->nac_cidade = "Belo Horizonte";

        $familiar->email = null;
        $familiar->tel1 = null;
        $familiar->tel2 = null;

        $familiar->end_cep = "30575160"; 
        $familiar->end_pais = "Brasil";
        $familiar->end_estado = "MG"; 
        $familiar->end_cidade = "Belo Horizonte";
        $familiar->end_bairro = "Buritis";
        $familiar->end_rua = "Tereza Mota Valadares"; 
        $familiar->end_numero = "170"; 
        $familiar->obs = null;

        $familiar->save();
    }

}
