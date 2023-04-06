<?php

namespace App\Http\Controllers;
use App\Repository\Type_handicapRepository;
use Illuminate\Http\Request;

class type_handicapController extends Controller
{
    protected $type_handicap ;

    public function __construct(Type_handicapRepository $type_handicap){
        $this->type_handicap =$type_handicap;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->type_handicap->all();
        return view('type handicap.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('type handicap.create');

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'type_handicap' => 'required|string',
            'description' => 'required|string',
        ]);

         $this->type_handicap->store([
        'nom' => $request->type_handicap,
        'description' => $request->description
        ]);
        return redirect('typeHandicap');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\type_handicap  $type_handicap
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $type_handicap =$this->type_handicap->show($id);
        return view('type handicap.view',compact('type_handicap'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\type_handicap  $type_handicap
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $type_handicap = $this->type_handicap->edit($id);
        return view('type handicap.edit',compact('type_handicap'));
    }

    /**
     * Update the specified resource in storag
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\type_handicap  $type_handicap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'type_handicap' => 'required|string',
            'description' => 'required|string',
        ]);
        $type_handicap =$this->type_handicap->update($id,
             [
            'nom' => $request->type_handicap,
            'description' => $request->description
            ]);
        return redirect('typeHandicap');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\type_handicap  $type_handicap
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete =$this->type_handicap->destroy($id);
        return redirect('typeHandicap');
    }

}
