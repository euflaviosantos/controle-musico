<?php

namespace App\Http\Controllers;

use App\Evento;
use Auth;
use Illuminate\Http\Request;
use Validator;

class EventoController extends ResourceController
{
    protected function model(){
        return new \App\Evento;
    }

    public function index(){
        $dados = array(
            'objeto' => Evento::where('user_id','=',Auth::id())->orderBy('data')->paginate(12),
        );
        return view('admin.eventos.index', $dados);
    }
    public function store(Request $request){
        $this->validate($request, [
            'data' => 'required',
            'hora' => 'required',
            'descricao' => 'required',
        ]);

        parent::store($request);
        return back();
    }

    public function create()
    {
        $dados = array(
            'objeto'=> new Evento,
        );
        return view('admin.eventos.create',$dados);
    }

    public function edit($id)
    {
        $dados = array(
            'nomeTabela'=>$this->model()->getTable(),
            'objeto'=>$this->model()->find($id)
        );
        return view('admin.eventos.edit',$dados);
    }



    public function update(Request $request, $id){
        $this->validate($request, [
            'data' => 'required',
            'hora' => 'required',
            'descricao' => 'required',
        ]);

        parent::update($request, $id);
        return redirect("/admin/" . $this->model()->getTable());
    }
}
