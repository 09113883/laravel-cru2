<?php
namespace App\Http\Controllers\Administrativo;
use App\Http\Controllers\Controller;
use App\Models\Clientes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Session;

class ClientesController extends Controller
{
    public function index(){

        $clientes = Clientes::where('status','=',1)->get();

        return view('administrativo.clientes.index',compact('clientes'));
    }

    public function cadastro($id=null){

        if($id){

            $cliente = Clientes::findOrFail($id);
        }else{

            $cliente = null;
        }



        return view('administrativo.clientes.cadastro',compact('cliente'));
    }

    public function salvar(Request $req){


        $request = $req->all();



        if($request['id']){
            $resultado = Clientes::findOrFail($request['id']);
        }else{
            $resultado = new Clientes();
        }


        $resultado->nome = $request['nome'];
        $resultado->email = $request['email'];
        $resultado->senha = $request['senha'];

        $resultado->save();


        Session::flash('mensagem', 'Cadastro salvo com sucesso!');
        return redirect()->back();
    }

    public function remover($id=null){

        $resultado = Clientes::findOrFail($id);
        $resultado->delete();
        Session::flash('mensagem', 'Cadastro removido com sucesso!');
        return redirect()->back();
	}

}
