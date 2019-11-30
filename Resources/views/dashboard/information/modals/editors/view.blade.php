<div class="modal fade" id="show_editors_information" tabindex="-1" role="dialog" aria-labelledby="editors_information" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">@lang('credits::modals.editor-view')</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="col-md-12 text-primary mb-3">
                    <div class="row author">
                        <div class="col-md-6">@lang('credits::modals.role-author')</div>
                        <div class="col-md-6 text-secondary view_author">
                            Who's the author
                            This line of text will not be shown on the website.
                            This is where data will be placed using JS.
                        </div>
                    </div>
                    <div class="row approved_by_author">
                        <div class="col-md-6">@lang('credits::modals.moment-author-approval')</div>
                        <div class="col-md-6 text-secondary view_approved_by_author">
                            Date when author approved
                            This line of text will not be shown on the website.
                            This is where data will be placed using JS.
                        </div>
                    </div>
                    <div class="row editor">
                        <div class="col-md-6">@lang('credits::modals.role-editor')</div>
                        <div class="col-md-6 text-secondary view_editor">
                            Who's the editor
                            This line of text will not be shown on the website.
                            This is where data will be placed using JS.
                        </div>
                    </div>
                    <div class="row created_at">
                        <div class="col-md-6">@lang('credits::modals.moment-created_at')</div>
                        <div class="col-md-6 text-secondary view_created_at">
                            Date when created
                            This line of text will not be shown on the website.
                            This is where data will be placed using JS.
                        </div>
                    </div>
                    <div class="row updated_at">
                        <div class="col-md-6">@lang('credits::modals.moment-updated_at')</div>
                        <div class="col-md-6 text-secondary view_updated_at">
                            Date when updated
                            This line of text will not be shown on the website.
                            This is where data will be placed using JS.
                        </div>
                    </div>
                </div>

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


