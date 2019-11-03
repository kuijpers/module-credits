
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



