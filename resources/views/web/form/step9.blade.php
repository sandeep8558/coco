<div class="row bg-light shadow py-3 g-4 mb-5">

    <div class="row">
        <div class="col-12">
            <h4>Brother's Details:</h4>
        </div>
    </div>

    @for($i = 0; $i < session('no_of_brothers'); $i++)
    <div class="row g-3">
        
        <div class="col-12 col-xl-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="name" name="brothername[]" value="{{ request()->brothername ? session()->get('brothername')[$i] : '' }}">
                <label for="name">Name</label>
            </div>
        </div>

        <div class="col-12 col-xl-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="age" name="brotherage[]" value="{{ request()->brotherage ? request()->brotherage[$i] : '' }}">
                <label for="age">Age</label>
            </div>
        </div>

        <div class="col-12 col-xl-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="school_college" name="brotherschool_college[]" value="{{ request()->brotherschool_college ? request()->brotherschool_college[$i] : '' }}">
                <label for="school_college">School/College Name</label>
            </div>
        </div>

        <div class="col-12 col-xl-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="grade" name="brothergrade[]" value="{{ request()->brothergrade ? request()->brothergrade[$i] : '' }}">
                <label for="grade">Grade</label>
            </div>
        </div>

    </div>
    @endfor


    <div class="row mt-5">
        <div class="col-12">
            <h4>Sister's Details:</h4>
        </div>
    </div>

    @if(session('no_of_sisters'))
    @for($i = 0; $i < session('no_of_sisters'); $i++)
    <div class="row g-3">
        
        <div class="col-12 col-xl-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="name" name="sistername[]" value="{{ request()->sistername ? request()->sistername[$i] : '' }}">
                <!-- <label for="name">Name {{ $i }} {{ request()->sistername ? request()->sistername[$i] : '' }}</label> -->
                <label for="name">Name</label>
            </div>
        </div>

        <div class="col-12 col-xl-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="age" name="sisterage[]" value="{{ request()->sisterage ? request()->sisterage[$i] : '' }}">
                <label for="age">Age</label>
            </div>
        </div>

        <div class="col-12 col-xl-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="school_college" name="sisterschool_college[]" value="{{ request()->sisterschool_college ? request()->sisterschool_college[$i] : '' }}">
                <label for="school_college">School/College Name</label>
            </div>
        </div>

        <div class="col-12 col-xl-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="grade" name="sistergrade[]" value="{{ request()->sistergrade ? request()->sistergrade[$i] : '' }}">
                <label for="grade">Grade</label>
            </div>
        </div>

    </div>
    @endfor
    @endif


</div>