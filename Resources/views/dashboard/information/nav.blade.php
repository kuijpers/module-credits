<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist">

    <a class="nav-link nav-link-color active text-info" id="information-explanation-tab" data-toggle="pill" href="#information-explanation" role="tab" aria-controls="information-explanation" aria-expanded="true">
        @lang('credits::navigation.tab-side-info')
    </a>


    @can('credits-information-personal-list')
    <a class="nav-link nav-link-color" id="information-personal-tab" data-toggle="pill" href="#information-personal" role="tab" aria-controls="information-personal" aria-expanded="true">
        @lang('credits::navigation.tab-side-personal')
        <span class="badge badge-secondary float-right mt-1">
             {{$personal_info_drafts->count()}}
        </span>
    </a>
    @endcan


    @can('credits-information-author-list')
    <a class="nav-link nav-link-color" id="information-authors-tab" data-toggle="pill" href="#information-authors" role="tab" aria-controls="information-authors" aria-expanded="true">
        @lang('credits::navigation.tab-side-authors')
        <span class="badge badge-secondary float-right mt-1">
            2
        </span>
    </a>
    @endcan


    @can('credits-information-editor-list')
    <a class="nav-link nav-link-color" id="information-editor-tab" data-toggle="pill" href="#information-editor" role="tab" aria-controls="information-editor" aria-expanded="true">
        @lang('credits::navigation.tab-side-editor')
        <span class="badge badge-secondary float-right mt-1">
            4
        </span>
    </a>
    @endcan


    @can('credits-information-publisher-list')
    <a class="nav-link nav-link-color" id="information-publisher-tab" data-toggle="pill" href="#information-publisher" role="tab" aria-controls="information-publisher" aria-expanded="true">
        @lang('credits::navigation.tab-side-publisher')
        <span class="badge badge-secondary float-right mt-1">
            3
        </span>
    </a>
    @endcan


    <a class="nav-link nav-link-color" id="information-published-tab" data-toggle="pill" href="#information-published" role="tab" aria-controls="information-published" aria-expanded="true">
        @lang('credits::navigation.tab-side-published')
        <span class="badge badge-secondary float-right mt-1">
            6
        </span>
    </a>


    @can('credits-information-publisher-list')
    <a class="nav-link nav-link-color" id="information-archived-tab" data-toggle="pill" href="#information-archived" role="tab" aria-controls="information-archived" aria-expanded="true">
        @lang('credits::navigation.tab-side-archived')
        <span class="badge badge-secondary float-right mt-1">
            125
        </span>
    </a>
    @endcan


    @can('credits-information-destroy-list')
    <a class="nav-link nav-link-color" id="information-deleted-tab" data-toggle="pill" href="#information-deleted" role="tab" aria-controls="information-deleted" aria-expanded="true">
        @lang('credits::navigation.tab-side-deleted')
        <span class="badge badge-secondary float-right mt-1">
            20
        </span>
    </a>
    @endcan



</div>
