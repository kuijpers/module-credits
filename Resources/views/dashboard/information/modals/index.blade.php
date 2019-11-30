
{{--Personal section--}}
@can('credits-information-personal-list')
    @include('credits::dashboard.information.modals.personal.view')
@endcan

@can('credits-information-personal-update')

    @include('credits::dashboard.information.modals.personal.edit')

    @include('credits::dashboard.information.modals.personal.approve')

@endcan

@can('credits-information-personal-delete')

    @include('credits::dashboard.information.modals.personal.delete')

@endcan

{{--Author section--}}

@can('credits-information-author-list')

    @include('credits::dashboard.information.modals.authors.view')

@endcan

{{-- Editor section --}}

@can('credits-information-editor-list')
    @include('credits::dashboard.information.modals.editors.view')
@endcan

@can('credits-information-editor-update')

    @include('credits::dashboard.information.modals.editors.edit')

    @include('credits::dashboard.information.modals.editors.approve')

@endcan

@can('credits-information-editor-delete')

    @include('credits::dashboard.information.modals.editors.delete')

@endcan



