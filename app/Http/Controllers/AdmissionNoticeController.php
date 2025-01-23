<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdmissionNotice;
use App\Http\Requests\AdmissionNoticeRequest;
use App\Models\AcademicYear;
use App\Models\Grade;
use App\Models\AdmissionNoticeGradeSeat;


class AdmissionNoticeController extends Controller
{
    //
    public function index(Request $request){
        $admission_notice = null;
        if(isset($request->id)){
            $admission_notice = AdmissionNotice::with('admission_notice_grade_seats')->find($request->id);
        }

        $admission_notices = AdmissionNotice::simplePaginate(10);
        $academic_years=AcademicYear::get();
        $grades=Grade::get();

        return view('admin.admission_notice', compact('admission_notices', 'admission_notice','academic_years','grades'));
    }

    public function save(Request $request){
        $seats=[];
        foreach($request->seats as $seat)
        {
            if($seat!=null)
            {
                $seats[]=$seat;
            }
        }
        $an=AdmissionNotice::create($request->all());
        $admission_notice_id=$an->id;
        foreach($seats as $ind=>$seat)
        {
            $data=[
                "admission_notice_id"=>$admission_notice_id,
                "grade_id"=>$request->grade_id[$ind],
                "seats"=>$seat,
            ];
            AdmissionNoticeGradeSeat::create($data);
        }
        return back();
    }

    public function update(AdmissionNoticeRequest $request){

        $admission_notice = AdmissionNotice::find($request->id);
        $admission_notice->admission_notice_grade_seats()->delete();

        $seats=[];
        foreach($request->seats as $seat)
        {
            if($seat!=null)
            {
                $seats[]=$seat;
            }
        }

        $admission_notice_id=$admission_notice->id;
        foreach($seats as $ind=>$seat)
        {
            $data=[
                "admission_notice_id"=>$admission_notice_id,
                "grade_id"=>$request->grade_id[$ind],
                "seats"=>$seat,
            ];
            AdmissionNoticeGradeSeat::create($data);
        }

        $admission_notice->update($request->all());



        return redirect("/admin/admission_notice");


    }

    public function delete(Request $request){
        $admission_notice = AdmissionNotice::find($request->id);
        $admission_notice->admission_notice_grade_seats()->delete();
        $admission_notice->delete();
        return redirect("/admin/admission_notice");
    }
}
