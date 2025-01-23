@extends('layouts.admin')

@section('head')
<title>Admission Notice</title>
@endsection

@section('content')
<h1>Admission Notice</h1>

@if(!isset($admission_notice))
<div>
    <form action="/admin/admission_notice/save" method="post">
        @csrf
        <input type="text" name="notification_title" id="notification_title">
        @if($errors->get('notification_title'))
        @foreach($errors->get('notification_title') as $err)
        {{ $err }}
        @endforeach
        @endif
        <select name="academic_year_id" id="academic_year_id">
            <option value="">Select Academic Year</option>
            @if(isset($academic_years))
                @foreach($academic_years as $acdyear)
                <option value="{{$acdyear->id}}">
                    {{$acdyear->title}}
                </option>
                @endforeach
        @endif
        </select>
        
        @if($errors->get('academic_year_id'))
        @foreach($errors->get('academic_year_id') as $err)
        {{ $err }}
        @endforeach
        @endif
        <input type="date" name="start_date" id="start_date">
        @if($errors->get('start_date'))
        @foreach($errors->get('start_date') as $err)
        {{ $err }}
        @endforeach
        @endif
        <input type="date" name="end_date" id="end_date">
        @if($errors->get('end_date'))
        @foreach($errors->get('end_date') as $err)
        {{ $err }}
        @endforeach
        @endif
        <input type="number" name="application_fee" id="application_fee">
        @if($errors->get('application_fee'))
        @foreach($errors->get('application_fee') as $err)
        {{ $err }}
        @endforeach
        @endif
        <br>
        @foreach($grades as $gr)
        <div>
          <input type="checkbox" name="grade_id[]" id="grade_id_{{$gr->id}}" value="{{$gr->id}}">
          <label for="grade_id_{{$gr->id}}"> {{$gr->grade}} </label>
          <input type="text" name="seats[]" id="seats">
        </div>
        @endforeach
        <br>
        
        <input type="submit" value="Save Admission Notice">
    </form>
</div>
@endif

@if(isset($admission_notice))
<div>
    <form action="/admin/admission_notice/update" method="post">
        @csrf
        <input type="text" name="id" id="id" value="{{$admission_notice->id}}">
        <input type="text" name="notification_title" id="notification_title" value="{{$admission_notice->notification_title}}">
        @if($errors->get('notification_title'))
        @foreach($errors->get('notification_title') as $err)
        {{ $err }}
        @endforeach
        @endif
        <select name="academic_year_id" id="academic_year_id">
            <option value="">Select Academic Year</option>
            @if(isset($academic_years))
                @foreach($academic_years as $acdyear)
                <option {{ $admission_notice->academic_year_id == $acdyear->id ? 'selected' : '' }} value="{{$acdyear->id}}">
                    {{$acdyear->title}}
                </option>
                @endforeach
        @endif
        </select>
        <!-- //<input type="text" name="academic_year_id" id="academic_year_id"> -->
        @if($errors->get('academic_year_id'))
        @foreach($errors->get('academic_year_id') as $err)
        {{ $err }}
        @endforeach
        @endif
        <input type="date" name="start_date" id="start_date" value="{{$admission_notice->start_date}}">
        @if($errors->get('start_date'))
        @foreach($errors->get('start_date') as $err)
        {{ $err }}
        @endforeach
        @endif
        <input type="date" name="end_date" id="end_date" value="{{$admission_notice->end_date}}">
        @if($errors->get('end_date'))
        @foreach($errors->get('end_date') as $err)
        {{ $err }}
        @endforeach
        @endif
        <input type="number" name="application_fee" id="application_fee" value="{{$admission_notice->application_fee}}">
        @if($errors->get('application_fee'))
        @foreach($errors->get('application_fee') as $err)
        {{ $err }}
        @endforeach
        @endif

        <br>
        @foreach($grades as $gr)
            <?php $is = false; ?>
            @foreach($admission_notice->admission_notice_grade_seats as $angs)
                @if($angs->grade_id == $gr->id)
                    <?php $is = true; ?>
                    <div>
                        <input type="checkbox" name="grade_id[]" id="grade_id_{{$gr->id}}" value="{{$gr->id}}" checked>
                        <label for="grade_id_{{$gr->id}}"> {{$gr->grade}} - {{$gr->id}} </label>
                        <input type="text" name="seats[]" id="seats" value="{{$angs->seats}}">
                    </div>
                @endif
            @endforeach
            @if(!$is)
                <div>
                    <input type="checkbox" name="grade_id[]" id="grade_id_{{$gr->id}}" value="{{$gr->id}}">
                    <label for="grade_id_{{$gr->id}}"> {{$gr->grade}} </label>
                    <input type="text" name="seats[]" id="seats">
                </div>
            @endif
        @endforeach
        <br>

        <input type="submit" value="Save Admission Notice">
    </form>


    <form action="/admin/admission_notice/delete" method="post">
        @csrf
        <input type="text" name="id" id="id" value="{{$admission_notice->id}}">
        <input type="text" name="notification_title" id="notification_title" value="{{$admission_notice->notification_title}}">
        <select name="academic_year_id" id="academic_year_id">
            <option value="">Select Academic Year</option>
            @if(isset($academic_years))
                @foreach($academic_years as $acdyear)
                <option {{ $admission_notice->academic_year_id == $acdyear->id ? 'selected' : '' }} value="{{$acdyear->id}}">
                    {{$acdyear->title}}
                </option>
                @endforeach
        @endif
        </select>
        <input type="date" name="start_date" id="start_date" value="{{$admission_notice->start_date}}">
        <input type="date" name="end_date" id="end_date" value="{{$admission_notice->end_date}}">
        <input type="number" name="application_fee" id="application_fee" value="{{$admission_notice->application_fee}}">
        <input type="submit" value="Delete Admission Notice">
    </form>
</div>
@endif

<div>
    <table class="table">
      <thead>
        <tr>
            <th scope="col" class="" style="width:80px;">#</th>
            <th scope="col">Notification Title</th>
            <th scope="col">Academic Year</th>
            <th scope="col">Start Date</th>
            <th scope="col">End Date</th>
            <th scope="col">Application Fee</th>
            <th scope="col" style="width:120px;">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($admission_notices as $adnotice)
        <tr>
            <th scope="row">{{ $adnotice->id }}</th>
            <td>{{ $adnotice->notification_title }}</td>
            <td>{{ $adnotice->academic_year_id }}</td>
            <td>{{ $adnotice->start_date }}</td>
            <td>{{ $adnotice->end_date }}</td>
            <td>{{ $adnotice->application_fee }}</td>

            <td><a href="/admin/admission_notice?id={{$adnotice->id}}">Edit / Delete</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>

    @if($admission_notices)
    {{ $admission_notices->links() }}
    @endif
</div>



@endsection