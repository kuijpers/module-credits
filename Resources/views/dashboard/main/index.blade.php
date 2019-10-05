
@include('credits::dashboard.main.header')



<div class="row mt-3">
    <div class="col-md-2">
        @include('credits::dashboard.main.nav')
    </div>

    <div class="col-md-10">
        <div class="tab-content" id="v-pills-tabContent">

            @include('credits::dashboard.main.fields.personal')

            @include('credits::dashboard.main.fields.authors')

            @include('credits::dashboard.main.fields.editor')

            @include('credits::dashboard.main.fields.publisher')

            @include('credits::dashboard.main.fields.published')

            @include('credits::dashboard.main.fields.archived')

            @include('credits::dashboard.main.fields.deleted')

        </div>
    </div>

</div>