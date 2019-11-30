<div class="tab-pane fade" id="information-editor" role="tabpanel" aria-labelledby="information-editor-tab">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-header">
                        <h2>
                            @lang('credits::general.editor-check')
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
{{--                        <p>{{ $editor_info_drafts  }}</p>--}}

                        <table class="table table-striped table-hover table-sm" id="editor_information">
                            <thead>
                            <tr>
                                <th>@lang('credits::general.table-title')</th>
                                <th>@lang('credits::general.table-content')</th>
                                <th>@lang('credits::general.table-author')</th>
                                <th>@lang('credits::general.table-author-approved')</th>
                                <th>@lang('credits::general.table-editor')</th>
                                <th>&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($editor_info_drafts as $editor_draft)
                                @php

                                        $editor_draft_list=[
                                                                'id'                => $editor_draft->id,
                                                                'title'             => $editor_draft->title,
                                                                'description'       => $editor_draft->description,
                                                                'content'           => htmlspecialchars_decode($editor_draft->content),
                                                                'author_name'       => $editor_draft->author()->name,

                                                                'editor_name'      => $editor_draft->editor_name(),

                                                                'created_at'        => $editor_draft->created_at->format('d-m-Y H:i:s'),
                                                                'updated_at'        => $editor_draft->updated_at->format('d-m-Y H:i:s'),
                                                                'author_approved'   => $editor_draft->author_approve->format('d-m-Y H:i:s'),
                                                                ];

                                        $editor_draft_modal = json_encode($editor_draft_list, JSON_PRETTY_PRINT);

                                @endphp

                                <tr>
                                    <td>{{ $editor_draft->title }}</td>
                                    <td>{!! $editor_draft->content !!}</td>
                                    <td>{{ $editor_draft->author()->name }}</td>
                                    <td>{{ $editor_draft->author_approve->format('d-m-Y H:i:s') }}</td>
                                    <td>
                                        @if(!is_null($editor_draft->editor_id))
                                            {{ $editor_draft->editor()->name }}
                                            @else
                                            @lang('credits::general.editor-not-processed')
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-xs" role="group">

                                            <a href="#" class="badge badge-info mr-1"
                                               data-toggle="modal"
                                               data-target="#show_editors_information"
                                               data-info = "{{$editor_draft_modal}}">
                                                <i class="fas fa-eye"
                                                   data-toggle="tooltip"
                                                   data-placement="top"
                                                   title="@lang('credits::tooltips.editor-view-button')">
                                                </i>
                                            </a>

                                            @can('credits-information-editor-update')
                                                <a href="#" class="badge badge-warning mr-1"
                                                   data-toggle="modal"
                                                   data-target="#edit_editors_information"
                                                   data-info = "{{$editor_draft_modal}}">
                                                    <i class="fas fa-edit"
                                                       data-toggle="tooltip"
                                                       data-placement="top"
                                                       title="@lang('credits::tooltips.editor-edit-button')">

                                                    </i>
                                                </a>

                                                <a href="#" class="badge badge-success mr-1"
                                                   data-toggle="modal"
                                                   data-target="#approve_editors_information"
                                                   data-info = "{{$editor_draft_modal}}">
                                                    <i class="fas fa-check-circle"
                                                       data-toggle="tooltip"
                                                       data-placement="top"
                                                       title="@lang('credits::tooltips.editor-approve-button')">

                                                    </i>
                                                </a>
                                            @endcan

                                            @can('credits-information-editor-delete')
                                                <a href="#" class="badge badge-danger mr-2"
                                                   data-toggle="modal"
                                                   data-target="#delete_editors_information"
                                                   data-info = "{{$editor_draft_modal}}">
                                                    <i class="fas fa-trash-alt"
                                                       data-toggle="tooltip"
                                                       data-placement="top"
                                                       title="@lang('credits::tooltips.editor-delete-button')">

                                                    </i>
                                                </a>
                                            @endcan


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