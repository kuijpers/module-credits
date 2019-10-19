<!-- Modal -->
<div class="modal fade" id="delete_personal_draft_information" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">

        <form method="POST" action="{{route('dashboard.credits.information.delete')}}">
            @csrf
            {{ method_field('DELETE') }}



            <input name="id" type="hidden" class="form-control span6" id="delete_personal_drafts_id">


        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-danger" id="exampleModalLongTitle">
                    <strong>
                        Delete this item
                    </strong>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5>
                    The following title will be deleted.
                </h5>
                <hr>


                <div class="col-md-12 delete_title mb-3">
                    Title
                    This line of text will not be vissible on the website.
                    This is where data will be placed using JS.
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
        </div>

        </form>

    </div>
</div>