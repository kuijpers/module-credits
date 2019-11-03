
@include('credits::dashboard.information.header')



<div class="row mt-3">
    <div class="col-md-2">
        @include('credits::dashboard.information.nav')
    </div>

    <div class="col-md-10">
        <div class="tab-content" id="v-pills-tabContent">

{{--    Permission to access by all users that are allowed to accexx the information section    --}}
            @include('credits::dashboard.information.fields.explanation')
{{--    End permission access all   --}}

            @can('credits-information-personal-list')

                @include('credits::dashboard.information.fields.personal')

            @endcan

            @can('credits-information-author-list')

                @include('credits::dashboard.information.fields.authors')

            @endcan

            @can('credits-information-editor-list')

                @include('credits::dashboard.information.fields.editor')

            @endcan

            @can('credits-information-publisher-list')

                @include('credits::dashboard.information.fields.publisher')
            @endcan

            @include('credits::dashboard.information.fields.published')

            @can('credits-information-publisher-list')

                @include('credits::dashboard.information.fields.archived')

            @endcan

            @can('credits-information-destroy-list')

                @include('credits::dashboard.information.fields.deleted')

            @endcan

        </div>
    </div>

</div>