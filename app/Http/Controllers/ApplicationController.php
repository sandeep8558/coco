<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ApplicationRequest;
use App\Models\Application;
use App\Models\User;
use App\Models\Grade;
use App\Models\AdmissionNotice;

class ApplicationController extends Controller
{
    public function index(Request $request)
    {
        $admission_notices = AdmissionNotice::orderBy('id', 'desc')->get();
        return view('admin.application', compact('admission_notices'));
    }

    public function applications($id){
        $notice = AdmissionNotice::find($id);
        return view('admin.applications', compact('notice'));
    }
    public function viewapplication($id){
        $app = Application::find($id);
        return view('admin.viewapplication', compact('app'));
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
