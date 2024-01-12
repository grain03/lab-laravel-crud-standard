<?php

namespace App\Repositories;

use App\Http\Requests\StoreTaskRequest;
use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }
    abstract function getFieldData(): array;
    abstract function model(): string;

    public function index()
    {
        return $this->model->paginate(3);
    }
    public function find($projectId)
    {
        return $this->model->findOrFail($projectId);
    }
    public function show($id)
    {
        return $this->model->findOrFail($id);
    }

    // update
    public function update(array $validatedData, $id)
    {

        $data = $this->model->find($id);

        if (!$data) {
            return abort(404, "task not found");
        }

        return $data->update($validatedData);
    }


    //   delete
    public function delete($id)
    {
        $data = $this->model->find($id);

        if (!$data) {
            return abort(404);
        }
        $data->delete();
    }
}
