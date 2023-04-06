<?php

namespace App\Repository;

abstract class BaseRepository{
    protected $model;

    abstract public function model(): string;

    public function __construct()
    {
        $this->makeModel();
    }

    public function makeModel()
    {
        $model = $this->model();
        return $this->model = $model;
    }


public function all(){
    return $this->model::all();
 }
 public function show($id){
    return $this->model::find($id) ;
 }
 public function edit($id){
    return $this->model::find($id) ;
 }
 public function store(array $data){
    return $this->model::create($data);
 }
 public function update($id,array $data){
    return $this->model::find($id)->update($data);
 }
 public function destroy($id){
    return $this->model::find($id)->delete();
 }



}



















?>
