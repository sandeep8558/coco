<div class="mb-5">
    <div class="row bg-light py-3 shadow g-4">
        <h3>Contact Details:</h3>
        <div class="col-12 col-xl-8">
            <div class="form-floating">
                <input type="text" class="form-control" id="address" name="address" value="{{ request()->address }}">
                <label for="address">Address</label>
            </div>
            @if($errors->get('address'))
            @foreach($errors->get('address') as $err)
            <p class="text-danger">{{ $err }}</p>
            @endforeach
            @endif
        </div>

        <div class="col-12 col-xl-4">
            <div class="form-floating">
                <input type="text" class="form-control" id="city" name="city" value="{{ request()->city }}">
                <label for="city">City</label>
            </div>
            @if($errors->get('city'))
            @foreach($errors->get('city') as $err)
            <p class="text-danger">{{ $err }}</p>
            @endforeach
            @endif
        </div>

        <div class="col-12 col-xl-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="state" name="state" value="{{ request()->state }}">
                <label for="state">State</label>
            </div>
            @if($errors->get('state'))
            @foreach($errors->get('state') as $err)
            <p class="text-danger">{{ $err }}</p>
            @endforeach
            @endif
        </div>

        <div class="col-12 col-xl-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="country" name="country" value="{{ request()->country }}">
                <label for="country">Country</label>
            </div>
            @if($errors->get('country'))
            @foreach($errors->get('country') as $err)
            <p class="text-danger">{{ $err }}</p>
            @endforeach
            @endif
        </div>

        <div class="col-12 col-xl-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="pincode" name="pincode" value="{{ request()->pincode }}">
                <label for="pincode">Pincode</label>
            </div>
            @if($errors->get('pincode'))
            @foreach($errors->get('pincode') as $err)
            <p class="text-danger">{{ $err }}</p>
            @endforeach
            @endif
        </div>

        <div class="col-12 col-xl-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="primary_contact_number" name="primary_contact_number" value="{{ request()->primary_contact_number }}">
                <label for="primary_contact_number">Primary Contact Number</label>
            </div>
            @if($errors->get('primary_contact_number'))
            @foreach($errors->get('primary_contact_number') as $err)
            <p class="text-danger">{{ $err }}</p>
            @endforeach
            @endif
        </div>

    </div>
</div>