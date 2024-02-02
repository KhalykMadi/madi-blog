<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\IndexRequest;
use App\Http\Requests\Admin\WorkerRequest;
use App\Models\Worker;

class WorkerController extends Controller
{
    public function index(IndexRequest $request)
    {
        $data = $request->validated();
        $workerQuery = Worker::query();

        if (isset($data['name'])) {
            $workerQuery->where('name', 'like', "%{$data['name']}%");
        }

        if (isset($data['surname'])) {
            $workerQuery->where('surname', 'like', "%{$data['surname']}%");
        }

        if (isset($data['email'])) {
            $workerQuery->where('email', 'like', "%{$data['email']}%");
        }

        if (isset($data['from'])) {
            $workerQuery->where('age', '>', $data['from']);
        }

        if (isset($data['to'])) {
            $workerQuery->where('age', '<', $data['to']);
        }

        if (isset($data['description'])) {
            $workerQuery->where('description', 'like', "%{$data['description']}%");
        }

        if (isset($data['is_married'])) {
            $workerQuery->where('is_married', true);
        }


        $workers = $workerQuery->paginate(1);
        return view('admin.worker.index', compact('workers'));
    }

    public function create()
    {
        return view('admin.worker.create')->with('success', 'Блог успешно сохранен');
    }

    public function store(WorkerRequest $request)
    {
        $data = $request->validated();
        $data['is_married'] = isset($data['is_married']);
        Worker::query()->create($data);
        return redirect()->route('admin.blog.worker.index')->with('success', 'Блог успешно сохранен');
    }

    public function edit(Worker $worker)
    {
        return view('admin.worker.edit', compact('worker'));
    }

    public function update(Worker $worker, WorkerRequest $request)
    {
        $data = $request->validated();
        $data['is_married'] = isset($data['is_married']);
        $worker->update($data);
        return redirect()->back();
    }

    public function destroy(Worker $worker)
    {
        $worker->delete();
        return redirect()->route('admin.blog.worker.index');
    }


}
