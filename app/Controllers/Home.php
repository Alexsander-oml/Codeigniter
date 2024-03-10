<?php


namespace App\Controllers;

class Home extends BaseController
{
    public function inicio(): string
    {
        return view('welcome_message');
    }
    public function processarFormulario(){
        $nome = $this->request->getPost('nome');
        $ano_nascimento = $this->request->getPost('ano_nascimento');
        $salario = $this->request->getPost('salario');

        $dados['nome'] = $nome;
        $dados['ano_nascimento'] = $ano_nascimento;
        $dados['salario'] = $salario;   
        
        return view('welcome_message', $dados);
    }
}



