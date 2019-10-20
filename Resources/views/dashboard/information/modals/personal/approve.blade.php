<!-- Modal -->
<div class="modal fade" id="approve_personal_draft_information" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-success" id="exampleModalLongTitle">
                    <strong>
                        @lang('credits::modals.personal-approve')
                    </strong>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{route('dashboard.credits.information.approve')}}">
                @csrf
                {{ method_field('PATCH') }}

                <div class="modal-body">
                    @lang('credits::modals.personal-approve-explanation')
                    <hr>

                    <input name="id" type="hidden" class="form-control span6" id="approve_personal_drafts_id">

                    <input name="update_type" type="hidden" class="form-control span6" id="approve_personal_drafts_update_type" value="author">

                    <div class="col-md-12 text-primary">
                        <h5>
                            @lang('credits::modals.title-text')
                        </h5>
                    </div>

                    <div class="col-md-12 approve_title mb-3">
                        Title
                        This line of text will not be shown on the website.
                        This is where data will be placed using JS.
                    </div>

                    <div class="col-md-12 text-primary">
                        <h5>
                            @lang('credits::modals.body-text')
                        </h5>
                    </div>

                    <div class="col-md-12 approve_body">
                        Body
                        This line of text will not be shown on the website.
                        This is where data will be placed using JS.
                    </div>

                    <hr>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        @lang('credits::forms.button-cancel')
                    </button>
                    <button type="submit" class="btn btn-success" id="edit_personal_drafts_submit">
                        @lang('credits::forms.button-approve')
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>