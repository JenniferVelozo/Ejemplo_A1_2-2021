<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = Subject::all();
        if($subjects->isEmpty()){
            //No hay cursos
            return response()->json([], 204);
        }
        return response($subjects, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'nombre' => 'required|min:2|max:255',
            ],
            [
                'nombre.required' => 'Debes ingresar un subject',
                'nombre.min' => 'Debe ser de largo mínimo :min',
                'nombre.max' => 'Debe ser de largo máximo :max',
            ]
        );
        //Caso falla la validación
        if($validator->fails()){
            return response($validator->errors(), 400);
        }
        $newSubject = new Subject();
        $newSubject->nombre = $request->nombre;
        $newSubject->save();

        return response()->json([
            'msg' => 'New subject has been created',
            'id' => $newSubject->id,
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $subject = Subject::find($id);
        if(empty($subject)){
            return response()->json([], 204);
        }
        return response($subject, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validator = Validator::make(
            $request->only(['nombre']),
            [
                'nombre' => 'required|min:2|max:255',
            ],
            [
                'nombre.required' => 'Debes ingresar un subject',
                'nombre.min' => 'Debe ser de largo mínimo :min',
                'nombre.max' => 'Debe ser de largo máximo :max',
            ]
        );
        //Caso falla la validación
        if($validator->fails()){
            return response($validator->errors());
        }
        $subject = Subject::find($id);
        if(empty($subject)){
            return response()->json([], 204);
        }

        $subject->nombre = $request->nombre;
        $subject->save();
        return response()->json([
            'msg' => 'Subject has been edited',
            'id' => $subject->id,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $subject = Subject::find($id);
        if(empty($subject)){
            return response()->json([],204);
        }
        $subject->delete();
        return response()->json([
            'msg' => 'Subject has been deleted',
            'id' => $subject->id,
        ], 200);
    }
}