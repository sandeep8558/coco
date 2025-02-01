<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ApplicationRequest;
use App\Models\Application;




class ApplicationController extends Controller
{
    public function index(Request $request)
    {

    }

    public function save(ApplicationRequest $request)
    {
        Application::create($request->all());
        return back();
    }

    public function update(ApplicationRequest $request)
    {
        $grade = Application::find($request->id);
        $grade->update($request->all());
        return redirect("/admin/grades");
    }

    public function delete(Request $request)
    {
        $grade = Application::find($request->id);
        $grade->delete();
        return redirect("/admin/grades");
    }
 
}
