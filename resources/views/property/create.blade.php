<form method="POST" action="{{ route('property.store') }}" enctype="multipart/form-data">
    @csrf

    <div class="row mb-3">
        <label for="name" class="col-md-3 col-form-label text-md-end">{{ __('Name') }}</label>
        <div class="col-md-6">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required
                autocomplete="name" autofocus>
        </div>
    </div>

    <div class="row mb-3">
        <label for="location" class="col-md-3 col-form-label text-md-end">{{ __('Location') }}</label>
        <div class="col-md-6">
            <input id="location" type="text" class="form-control @error('location') is-invalid @enderror" name="location"
                required autocomplete="current-location">
        </div>
    </div>

    <div class="row mb-3">
        <label for="total_rooms" class="col-md-3 col-form-label text-md-end">{{ __('Total Rooms') }}</label>
        <div class="col-md-6">
            <input id="total_rooms" type="number" class="form-control @error('total_rooms') is-invalid @enderror" name="total_rooms"
                required autocomplete="current-total_rooms">
        </div>
    </div>

    <div class="row mb-3">
        <label for="type" class="col-md-3 col-form-label text-md-end">{{ __('Type') }}</label>
        <div class="col-md-6">
            <select id="type" class="form-control @error('type') is-invalid @enderror" name="type" required autocomplete="current-type">
                <option value="residential">Residential</option>
                <option value="commercial">Commercial</option>
                <option value="industrial">Industrial</option>
            </select>
        </div>
    </div>

    <div class="row mb-3">
        <label for="washroom" class="col-md-3 col-form-label text-md-end">{{ __('Washroom') }}</label>
        <div class="col-md-6">
            <input id="washroom" type="number" class="form-control @error('washroom') is-invalid @enderror" name="washroom"
                required autocomplete="current-washroom">
        </div>
    </div>

    <div class="row mb-3">
        <label for="kitchen" class="col-md-3 col-form-label text-md-end">{{ __('Kitchen') }}</label>
        <div class="col-md-6">
            <input id="kitchen" type="number" class="form-control @error('kitchen') is-invalid @enderror" name="kitchen"
                required autocomplete="current-kitchen">
        </div>
    </div>

    <div class="row mb-3">
        <label for="furnished" class="col-md-3 col-form-label text-md-end">{{ __('Furnished') }}</label>
        <div class="col-md-6">
                <select id="furnished" class="form-control @error('furnished') is-invalid @enderror" name="furnished" required autocomplete="current-furnished">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
        </div>
    </div>

    <div class="row mb-3">
        <label for="floor" class="col-md-3 col-form-label text-md-end">{{ __('Floor') }}</label>

        <div class="col-md-6">
            <input id="floor" type="number" class="form-control @error('floor') is-invalid @enderror" name="floor"
                required autocomplete="current-floor">
        </div>
    </div>

    <div class="row mb-3">
        <label for="price" class="col-md-3 col-form-label text-md-end">{{ __('Rent Per Month') }}</label>

        <div class="col-md-6">
            <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price"
                required autocomplete="current-price">
        </div>
    </div>

    <div class="row mb-3">
            <label class="col-md-3 col-form-label text-md-end" for="inputImage">{{ __('Select Image') }}</label>
            <div class="col-md-6">
                <input type="file" name="image" id="inputImage"class="form-control @error('image') is-invalid @enderror" required>
                @error('image')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
    </div>

    <div class="row mb-3">
        <label for="description" class="col-md-3 col-form-label text-md-end">{{ __('Description ') }}</label>

        <div class="col-md-6">
            <textarea name="description" id="description" cols="30" rows="10" class="form-control" autocomplete="current-description"></textarea>
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
