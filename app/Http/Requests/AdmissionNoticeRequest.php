<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdmissionNoticeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

            "notification_title" => ["required", "string"],
            "academic_year_id" => ["required",],
            "start_date" => ["required", "date"],
            "end_date" => ["required", "date"],
            "application_fee" => ["required", "numeric"],

        ];
    }
}
