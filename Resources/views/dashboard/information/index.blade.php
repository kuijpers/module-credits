
@include('credits::dashboard.information.header')



<div class="row mt-3">
    <div class="col-md-2">
        @include('credits::dashboard.information.nav')
    </div>

    <div class="col-md-10">
        <div class="tab-content" id="v-pills-tabContent">

            @include('credits::dashboard.information.fields.personal')

            @include('credits::dashboard.information.fields.authors')

            @include('credits::dashboard.information.fields.editor')

            @include('credits::dashboard.information.fields.publisher')

            @include('credits::dashboard.information.fields.published')

            @include('credits::dashboard.information.fields.archived')

            @include('credits::dashboard.information.fields.deleted')

        </div>
    </div>

</div>