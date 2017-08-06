<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Validation;
use Input;
use Auth;

class ResourceController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados = array(
            'objeto' => $this->model()->where('user_id','=',Auth::id())->paginate(10),
        );
        if(view::exists('admin.' . $this->model()->getTable() . '.index')){
            return View('admin.' . $this->model()->getTable() . '.index', $dados);
        }
        else{
            return view('admin.crud.index', $dados);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dados = array(
            'objeto'=> $this->model()->find(1),
            'nomeTabela'=>$this->model()->getTable(),
        );
        return view('admin.crud.create',$dados);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->merge(['user_id'=> Auth::id()]);
        $this->model()->create($request->all());
        return redirect('/admin/' . $this->model()->getTable());
    }

    /*
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dados = array(
            'objeto'=>$this->model()->find($id)
        );

        return view('admin.crud.show', $dados);
    }

    /*
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dados = array(
            'nomeTabela'=>$this->model()->getTable(),
            'objeto'=>$this->model()->find($id)
        );
        return view('admin.crud.edit',$dados);
    }

    /*
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $objeto = $this->model()->findOrFail($id);
        $objeto->fill(Input::all());
        $objeto->save();

        return redirect("/admin/" . $this->model()->getTable());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->model()->findOrFail($id)->delete();
        return redirect()->back();
    }
}
