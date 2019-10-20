<div class="modal fade" id="show_personal_draft_information" tabindex="-1" role="dialog" aria-labelledby="personal_draft_information" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">@lang('credits::modals.personal-view')</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="col-md-12 text-primary">
                    <h5>
                        @lang('credits::modals.title-text')
                    </h5>
                </div>

                <div class="col-md-12 view_title mb-3">
                    Title
                    This line of text will not be shown on the website.
                    This is where data will be placed using JS.
                </div>

                <div class="col-md-12 text-primary">
                    <h5>
                        @lang('credits::modals.body-text')
                    </h5>
                </div>

                <div class="col-md-12 view_body">
                    Body
                    This line of text will not be shown on the website.
                    This is where data will be placed using JS.
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('credits::forms.button-close')</button>
            </div>
        </div>
    </div>
</div>


