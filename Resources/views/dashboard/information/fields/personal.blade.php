<div class="tab-pane fade show active" id="information-personal" role="tabpanel" aria-labelledby="information-personal-tab">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-header">
                        <h2>
                            @lang('credits::general.personal-drafts')
                        </h2>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="card-body">
                        <table class="table table-striped table-hover table-sm" id="personal_draft_information">
                            <thead>
                            <tr>
                                <th scope="col">@lang('credits::general.table-title')</th>
                                <th scope="col">@lang('credits::general.table-content')</th>
                                <th scope="col">&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($personal_info_drafts as $draft)
                                @php

                                    $personal_draft_list=[
                                                            'id'                => $draft->id,
                                                            'title'             => $draft->title,
                                                            'description'       => $draft->description,
                                                            'content'           => htmlspecialchars_decode($draft->content),
                                                            ];

                                    $personal_draft_modal = json_encode($personal_draft_list, JSON_PRETTY_PRINT);

                                @endphp

                            <tr>
                                <td>{{$draft->title}}</td>
                                <td>{!! $draft->content !!}</td>
                                <td>
                                    <div class="btn-group btn-group-xs" role="group">
                                    <a href="#" class="badge badge-info mr-1"
                                           data-toggle="modal"
                                           data-target="#show_personal_draft_information"
                                           data-info = "{{$personal_draft_modal}}">
                                        <i class="fas fa-eye"
                                           data-toggle="tooltip"
                                           data-placement="top"
                                           title="@lang('credits::tooltips.personal-view-button')">

                                        </i>
                                    </a>

                                    <a href="#" class="badge badge-warning mr-1"
                                       data-toggle="modal"
                                       data-target="#edit_personal_draft_information"
                                       data-info = "{{$personal_draft_modal}}">
                                        <i class="fas fa-edit"
                                           data-toggle="tooltip"
                                           data-placement="top"
                                           title="@lang('credits::tooltips.personal-edit-button')">

                                        </i>
                                    </a>

                                    <a href="#" class="badge badge-success mr-1"
                                       data-toggle="modal"
                                       data-target="#approve_personal_draft_information"
                                       data-info = "{{$personal_draft_modal}}">
                                        <i class="fas fa-check-circle"
                                           data-toggle="tooltip"
                                           data-placement="top"
                                           title="@lang('credits::tooltips.personal-approve-button')">

                                        </i>
                                    </a>

                                    <a href="#" class="badge badge-danger ml-2 mr-2"
                                       data-toggle="modal"
                                       data-target="#delete_personal_draft_information"
                                       data-info = "{{$personal_draft_modal}}">
                                        <i class="fas fa-trash-alt"
                                           data-toggle="tooltip"
                                           data-placement="top"
                                           title="@lang('credits::tooltips.personal-delete-button')">

                                        </i>
                                    </a>
                                    </div>
                                </td>
                            </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>