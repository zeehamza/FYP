<form method="POST" action="{{ route('profile.update') }}">
    @csrf

    <div class="row mb-3">
        <label for="first_name" class="col-md-2 col-form-label text-md-end">{{ __('First Name') }}</label>

        <div class="col-md-6">
            <input id=first_name type="text" class="form-control @error('name') is-invalid @enderror" name=first_name required
                autocomplete=first_name value="{{$user->first_name}}" autofocus>
        </div>
    </div>

    <div class="row mb-3">
        <label for="last_name" class="col-md-2 col-form-label text-md-end">{{ __('Last Name') }}</label>

        <div class="col-md-6">
            <input id=last_name type="text" class="form-control @error('name') is-invalid @enderror" name=last_name required
                autocomplete=last_name value="{{$user->last_name}}" autofocus>
        </div>
    </div>

    <div class="row mb-3">
        <label for="staff_id" class="col-md-2 col-form-label text-md-end">{{ __('Staff ID') }}</label>

        <div class="col-md-6">
            <input id="staff_id" type="text" class="form-control @error('staff_id') is-invalid @enderror" name="staff_id"
                required autocomplete="current-staff_id" value="{{$user->staff_id}}">
        </div>
    </div>

    <div class="row mb-3">
        <label for="email" class="col-md-2 col-form-label text-md-end">{{ __('Email') }}</label>

        <div class="col-md-6">
            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                required autocomplete="current-email" value="{{$user->email}}">
        </div>
    </div>

    <div class="row mb-3">
        <label for="type" class="col-md-2 col-form-label text-md-end">{{ __('Location') }}</label>

        <div class="col-md-6">
            <input id="department" type="text" class="form-control @error('department') is-invalid @enderror" name="department" required
                autocomplete="current-department" value="{{$user->department}}">
        </div>
    </div>

    <div class="row mb-3">
        <label for="position" class="col-md-2 col-form-label text-md-end">{{ __('Phone Number') }}</label>

        <div class="col-md-6">
            <input id="position" type="text" class="form-control @error('position') is-invalid @enderror" name="position"
                required autocomplete="current-position" value="{{$user->position}}">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-8 offset-md-2">
            <button type="submit" class="btn btn-primary">
                {{ __('Submit') }}
            </button>
        </div>
    </div>
</form>

