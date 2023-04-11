@include('layouts.header')
<main id="main">
    <!--title-->
    <section class="dashboard">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="title-single-box">
                        <h1 class="title-single">{{ __('Dashboard') }}</h1>
                    </div>
                    <!-- <span> <a href="{{ url('/logout') }}"> logout </a></span> -->
                </div>
                <div class="col-md-2 col-lg-2">
                    @include('layouts.sidebar')
                </div>
                <div class="col-md-8 col-lg-8">

                <div id="tabpropert_list" class="tabcontent">
                    <h3>Property List</h3>
                    @include('property.index')
                </div>

                <div id="tabadd_prorperty" class="tabcontent">
                    <h3>Add Property</h3>
                    @include('property.create')
                </div>

                <div id="tabbook_property" class="tabcontent">
                    <h3>Book Property</h3>
                    @include('property.book')
                </div>

                <div id="tabprofile" class="tabcontent">
                    <h3>Profile Information</h3>
                    @include('profile.edit')
                </div>

                <div id="tabsetting" class="tabcontent">
                    <h3>Setting</h3>
                </div>

                <div id="tabprivacy_policy" class="tabcontent">
                    <h3>Privacy Policy</h3>
                </div>
                </div>
            </div>
        </div>
    </section><!-- Section: Design Block -->
</main>

@include('layouts.footer')
<script>
    // Get the element with id="london" and click on it
    document.getElementById("propert_list").click();
</script>
