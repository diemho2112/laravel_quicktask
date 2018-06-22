<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTask;
use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('locale');
    }

    public function changeLanguage($language)
    {
        Session::put('language', $language);

        return redirect()->back();
    }

    public function index()
    {
        $tasks = Task::orderBy('created_at')->get();

        return view('tasks', [
            'tasks' => $tasks
        ]);
    }

    public function store(StoreTask $request)
    {
        $task = $request->only('name');
        Task::create($task);

        return redirect()->route('home');
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('home');
    }
}
