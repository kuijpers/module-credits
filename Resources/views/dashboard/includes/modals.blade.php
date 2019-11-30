{{--Helpers--}}


<!-- include summernote css -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">

<!-- include summernote js -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>

<script src="{{asset('modules/credits/js/modals/helpers.js')}}"></script>



@can('credits-information-personal-list')
    <script src="{{asset('modules/credits/js/modals/personal/view.js')}}"></script>
@endcan

@can('credits-information-personal-update')

    <script src="{{asset('modules/credits/js/modals/personal/edit.js')}}"></script>

    <script src="{{asset('modules/credits/js/modals/personal/approve.js')}}"></script>

@endcan

@can('credits-information-personal-delete')

    <script src="{{asset('modules/credits/js/modals/personal/delete.js')}}"></script>

@endcan

<script src="{{asset('modules/credits/js/modals/authors/view.js')}}"></script>

@can('credits-information-editor-list')
    <script src="{{asset('modules/credits/js/modals/editor/view.js')}}"></script>
@endcan

@can('credits-information-editor-update')

    <script src="{{asset('modules/credits/js/modals/editor/edit.js')}}"></script>

    <script src="{{asset('modules/credits/js/modals/editor/approve.js')}}"></script>

    <script src="{{asset('modules/credits/js/modals/editor/disapprove.js')}}"></script>

@endcan

@can('credits-information-editor-delete')

    <script src="{{asset('modules/credits/js/modals/editor/delete.js')}}"></script>

@endcan

