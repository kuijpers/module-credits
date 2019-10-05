
@include('credits::dashboard.config.header')


<div class="row mt-3">
    <div class="col-md-2">
        @include('credits::dashboard.config.nav')
    </div>

    <div class="col-md-10">
        <div class="tab-content" id="v-pills-tabContent">

            @include('credits::dashboard.config.fields.information')

            @include('credits::dashboard.config.fields.main')

        </div>
    </div>

</div>