<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imovel;
use Validator;

class ImovelController extends Controller
{
    //
    protected function validarImovel($request){
        $validator = Validator::make($request->all(), [
            "descricao" => "required",
            "logradouroEndereco"=> "required",
            "bairroEndereco" => "required",
            "numeroEndereco" => "required | numeric",
            "cepEndereco" => "required",
            "cidadeEndereco" => "required",
            "preco" => "required | numeric",
            "qtdQuartos" => "required | numeric ",
            "tipo" => "required",
            "finalidade" => "required"
        ]);
        return $validator;
    }

    public function index(){

        $imoveis = Imovel::all();
        return view('imoveis.index', compact('imoveis'));
    }

    public function adicionar(){

        return view('imoveis.adicionar');
    }

  

    public function salvar(Request $request){
        Imovel::create($request->all());
        return redirect()->route('imoveis.adicionar');
    }

    public function editar($id){
        $imovel = Imovel::find($id);
        return view('imoveis.editar',compact('imovel'));
    }

    public function atualizar(Request $request, $id){
        Imovel::find($id)->update($request->all());

        return redirect()->route('imoveis.index');
    }

    public function deletar($id){
        $imovel = Imovel::find($id);
        $imovel->delete();
        return redirect()->route('imoveis.index',compact('imovel'));
    }

    public function detalhe($id){
        $imovel = imovel::find($id);
        return view('imoveis.detalhe',compact('imovel'));
    }
}
