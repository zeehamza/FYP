<style>
.submit-button {
    background: #333;
    color: #FFF;
    padding: 10px 20px;
    border-radius: 3px;
}
#result-qr-code{
    display:none;
}
</style>

<form method="POST" action="{{ route('bookproperty.store') }}">
    @csrf

    <div class="row mb-3">
        <label for="name" class="col-md-3 col-form-label text-md-end">{{ __('Name') }}</label>
        <div class="col-md-6">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required
                autocomplete="name" autofocus>
        </div>
    </div>

    <div class="row mb-3">
        <label for="type" class="col-md-3 col-form-label text-md-end">{{ __('Office Type') }}</label>
        <div class="col-md-6">
            <select id="type" class="form-control @error('type') is-invalid @enderror" name="type" required autocomplete="current-type">
                <option value="hot_desk">Hot Desk</option>
                <option value="co_working">Co-working Space</option>
                <option value="open_office">Open Office Other</option>
            </select>
        </div>
    </div>

    <div class="row mb-3">
        <label for="phone_number" class="col-md-3 col-form-label text-md-end">{{ __('Phone Number') }}</label>
        <div class="col-md-6">
            <input id="phone_number" type="number" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number"
                required autocomplete="current-phone_number">
        </div>
    </div>

    <div class="row mb-3">
        <label for="email" class="col-md-3 col-form-label text-md-end">{{ __('Professional email') }}</label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                required autocomplete="current-email">
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
        <label for="furnished" class="col-md-3 col-form-label text-md-end">{{ __('Furnished') }}</label>
        <div class="col-md-6">
                <select id="furnished" class="form-control @error('furnished') is-invalid @enderror" name="furnished" required autocomplete="current-furnished">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
        </div>
    </div>

    <!-- <div class="row mb-3">
        <label for="code" class="col-md-3 col-form-label text-md-end">{{ __('Generate QR Code') }}</label>
        <div class="col-md-6">
            <input id="code" type="number" class="form-control @error('code') is-invalid @enderror" name="code"
                required autocomplete="current-code">
        </div>
    </div> -->


    <div class="row mb-3">
        <div class="col-md-3">
            <input type="button" name="generate" class="submit-button" value="Generate QR Code" onclick="myFunction()"/>
        </div>
        <div class="col-md-6">

        <script>
            function myFunction() {
            document.getElementById("result-qr-code").style.display = "block";
            <?php
            require ('tc-lib-barcode/vendor/autoload.php');
            $barcode = new \Com\Tecnick\Barcode\Barcode();
            $targetPath = "qr-code/";

            if (! is_dir($targetPath)) {
                exit;
                mkdir($targetPath, 0777, true);
            }
            $timestamp = time();
            $bobj = $barcode->getBarcodeObj('QRCODE,H', $timestamp, - 16, - 16, 'black', array(
                - 2,
                - 2,
                - 2,
                - 2
            ))->setBackgroundColor('#f0f0f0');

            $imageData = $bobj->getPngData();


            file_put_contents($targetPath . $timestamp . '.png', $imageData);
        ?>
            }
        </script>
        <img id="result-qr-code" src="<?php echo $targetPath . $timestamp ; ?>.png" width="150px" height="150px">
         <input id="code" type="hidden" class="form-control" name="code" value="<?= $timestamp ; ?> ">
        </div>
    </div>

    <div class="row mb-3">
        <label for="payment" class="col-md-3 col-form-label text-md-end">{{ __('Payment Type') }}</label>
        <div class="col-md-6">
            <select id="payment" class="form-control @error('payment') is-invalid @enderror" name="payment" required autocomplete="current-payment">
                <option value="bank">Bank</option>
                <option value="easy_paisa">Easy Paisa</option>
            </select>
        </div>
    </div>

    <div class="row mb-3">
        <label for="account_number" class="col-md-3 col-form-label text-md-end">{{ __('Account Number') }}</label>
        <div class="col-md-6">
            <input id="account_number" type="number" class="form-control @error('account_number') is-invalid @enderror" name="account_number"
                required autocomplete="current-account_number">
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

