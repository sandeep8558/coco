<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;
use App\Http\Requests\DocumentRequest;


class DocumentController extends Controller
{
    //

    public function index(Request $request)
    {
        
        $document=null;
        if(isset($request->id))
        {
            $document=Document::find($request->id);
        }
        $documents=Document::simplePaginate(10);
        return view('admin.documents', compact('documents','document'));

    }

    public function save(DocumentRequest $request)
    {
        // Document::create($request->all());
        // return back();

        Document::create($request->all());
        return back();
        
    }

    public function update(DocumentRequest $request)
    {
       $document= Document::find($request->id);
       $document->update($request->all());
       return redirect("/admin/documents");
        
    }

    public function delete(Request $request)
    {
        $document=Document::find($request->id);
        $document->delete();
        return redirect("/admin/documents");

        
    }
}
