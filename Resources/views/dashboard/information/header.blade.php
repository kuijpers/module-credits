<div class="row mb-3 mt-3">
    <div class="col-md-2 pull-left">
        @can('credits-personal-create')
            <a class="btn btn btn-outline-secondary" href="{{ route('dashboard.credits.information.create') }}">
                @lang('credits::forms.button-create')
            </a>
        @endcan
    </div>
    <div class="col-md-9 offset-md-1 pull-right">
        <h2>@lang('credits::general.information-title')</h2>
    </div>
</div>