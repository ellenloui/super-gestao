<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = [
            0=>['nome'=>'Fornecedor 1', 'status'=>'N', 'cnpj'=>'', 'ddd'=>'011', 'telefone'=> '400208922'],
            1=>['nome'=>'Fornecedor 2', 'status'=>'S', 'ddd'=>'032', 'telefone'=> '400208922'],
            2=>['nome'=>'Fornecedor 3', 'status'=>'S', 'ddd'=>'38', 'telefone'=> '400208922'],
        ];

    
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
