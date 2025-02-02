<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ApplicationRequest;
use App\Models\Application;
use App\Models\User;
use App\Models\Grade;




class ApplicationController extends Controller
{
    public function index(Request $request)
    {
        $application=null;
        if(isset($application))
        {
            $application=Application::find($request->id);
          
        }
        $applications=Application::simplepaginate(10);
        // $user=User::get();
        // $grade=Grade::get();
       // return $applications;
        return view('admin.application', compact('applications', 'application'));
    }

    public function save(ApplicationRequest $request)
    {
        Application::create($request->all());
        return back();
    }

    public function update(ApplicationRequest $request)
    {
        $application = Application::find($request->id);
        $application->update($request->all());
        return redirect("/admin/application");
    }

    public function delete(Request $request)
    {
        $application = Application::find($request->id);
        $application->delete();
        return redirect("/admin/application");
    }
 
}
