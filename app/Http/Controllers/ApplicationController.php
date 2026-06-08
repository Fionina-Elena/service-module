<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Http\Requests\ApplicationRequest;

class ApplicationController extends Controller
{
    public function index()
    {
        $applications = Application::all();

        return view('applications', compact('applications'));
    }

    public function store(ApplicationRequest $request)
    {
        Application::create($request->validated());

        return redirect('/')->with('message', 'Заявка успешно отправлена!');
    }
}
