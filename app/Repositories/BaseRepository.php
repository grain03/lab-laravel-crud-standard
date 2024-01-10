<?php 
namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository {
    protected $model;

    public function __construct(Model $model){
        $this->model = $model;
    }
    abstract function getFieldData():array;
    abstract function model():string;

    public function index(){
       return $this->model->paginate(5);
    }

    public function show($id){
        return $this->model->findOrFail($id);
    }
}