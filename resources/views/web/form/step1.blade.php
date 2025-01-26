<div>
    <div class="row g-3 bg-light py-3">
        
        <div class="col-12">
            <label for="admission_for">I need admission for my ward</label>
            <select class="form-select" id="admission_for" name="admission_for">
                <option value="">Select type of admission</option>
                <option {{ (request()->admission_for == 'New') ? 'selected' : '' }} value="New">New Admission</option>
                <option {{ (request()->admission_for == 'Re-admission') ? 'selected' : '' }} value="Re-admission">Re-admission</option>
            </select>

            @if($errors->get('admission_for'))
            @foreach($errors->get('admission_for') as $err)
            {{ $err }}
            @endforeach
            @endif
        </div>

        <div class="col-12">
            <label for="grade_id">Admission for grade</label>
            <select class="form-select" id="grade_id" name="grade_id">
                <option value="">Select Grade</option>
                @foreach($admission_notice->admission_notice_grade_seats as $gr)
                    <option value="{{ $gr->grade_id }}" {{ (request()->grade_id == $gr->grade_id) ? 'selected' : '' }}>{{ $gr->grade->grade }}</option>
                @endforeach
            </select>

            @if($errors->get('grade_id'))
            @foreach($errors->get('grade_id') as $err)
            {{ $err }}
            @endforeach
            @endif
        </div>

    </div>
</div>