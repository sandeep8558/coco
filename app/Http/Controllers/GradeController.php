<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\GradeRequest;
use App\Models\Grade;

class GradeController extends Controller
{

    public function index(Request $request){
        $grade = null;
        if(isset($request->id)){
            $grade = Grade::find($request->id);
        }
        $grades = Grade::simplePaginate(10);
        return view('admin.grades', compact('grades', 'grade'));
    }

    public function save(GradeRequest $request){
        Grade::create($request->all());
        return back();
    }

    public function update(GradeRequest $request){
        $grade = Grade::find($request->id);
        $grade->update($request->all());
        return redirect("/admin/grades");
    }

    public function delete(Request $request){
        $grade = Grade::find($request->id);
        $grade->delete();
        return redirect("/admin/grades");
    }
}
