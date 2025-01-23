<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GradeWiseDocument;
use App\Models\Grade;
use App\Models\Document;

class GradeWiseDocumentController extends Controller
{
    //

    public function index(Request $request)
    {

        $grade_wise_document = null;
        if(isset($request->id)){
            $grade_wise_document = GradeWiseDocument::find($request->id);
        }
        $grade_wise_documents = GradeWiseDocument::simplePaginate(10);
        $grades=Grade::get();
        $documents=Document::get();
        return view('admin.grade_wise_documents', compact('grade_wise_documents', 'grade_wise_document','grades','documents'));

    }

    public function save(Request $request)
    {
        GradeWiseDocument::create($request->all());
        return back();
        
    }

    public function update(Request $request)
    {

        $grade_wise_document = GradeWiseDocument::find($request->id);
        $grade_wise_document->update($request->all());
        return redirect("/admin/grade_wise_documents");
        
    }

    public function delete(Request $request)
    {

        $grade_wise_document = GradeWiseDocument::find($request->id);
        $grade_wise_document->delete();
        return redirect("/admin/grade_wise_documents");
    }
}
