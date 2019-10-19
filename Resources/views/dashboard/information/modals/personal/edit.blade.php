<div class="modal fade" id="edit_personal_draft_information" tabindex="-1" role="dialog" aria-labelledby="personal_draft_information" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Edit personal draft</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
{{--            <form method="POST" action="{{route('dashboard.credits.information.update',['id' => $id])}}">--}}
            <form method="POST" action="{{route('dashboard.credits.information.update')}}">
                @csrf
                {{ method_field('PATCH') }}

                <div class="modal-body">

                    <div class="row">

                        <div class="col-md-10 col-lg-offset-1">
                            <div class="modal-body">

                                <input name="id" type="hidden" class="form-control span6" id="edit_personal_drafts_id">

                                <input name="update_type" type="hidden" class="form-control span6" id="edit_personal_drafts_update_type" value="author">

                                <div class="col-md-12 text-primary">
                                    <label for="personal_title">
                                        <h5>
                                            Information title
                                        </h5>
                                    </label>
                                </div>

                                <div class="col-md-12 view_personal_title">
                                    <input name="title" type="text" class="form-control span6" id="edit_personal_drafts_title">
                                </div>

                                <div class="col-md-12">
                                    <hr>
                                </div>


                                <div class="col-md-12 text-primary">
                                    <label for="personal_edit_personal_drafts_description">
                                        <h5>
                                            Information description
                                        </h5>
                                    </label>
                                </div>

                                <div class="col-md-12 view_personal_description">
                                    <input name="description" type="text" class="form-control span6" id="edit_personal_drafts_description">
                                </div>

                                <div class="col-md-12">
                                    <hr>
                                </div>

                                <div class="col-md-12 text-primary">
                                    <label for="personal_body">
                                        <h5>
                                            Information content
                                        </h5>
                                    </label>
                                </div>

                                <div class="col-md-12 edit_personal_body">

                                    <textarea name="content" class="form-control summernote" rows="10" id="edit_personal_drafts_content"></textarea>

                                </div>

                                <div class="col-md-12">
                                    <hr>
                                </div>

                                <div class="col-md-12 text-primary">

                                    <div class="col-md-12">
                                        <label for="author_approve">Approve for the next step</label>
                                    </div>

                                    <div class="col-md-12">

                                        <input name="approve" id="author_approve" type="checkbox"
                                               data-toggle="toggle"
                                               data-size="sm"
                                               data-on="Approved"
                                               data-off="Not Approved"
                                               data-onstyle="success"
                                               data-offstyle="danger"
                                               data-width="125">

{{--                                        <div class="custom-control custom-switch">--}}
{{--                                            <input type="checkbox" class="custom-control-input" id="customSwitch1">--}}
{{--                                            <label class="custom-control-label" for="customSwitch1">Approve for the next step</label>--}}
{{--                                        </div>--}}
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        Cancel
                    </button>
                    <button type="submit" class="btn btn-success" id="edit_personal_drafts_submit">
                        Update
                    </button>
                </div>
            </form>


        </div>
    </div>
</div>


