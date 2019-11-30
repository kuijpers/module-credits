<div class="tab-pane fade" id="information-authors" role="tabpanel" aria-labelledby="information-authors-tab">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-header">
                        <h2>
                            @lang('credits::general.author-drafts')
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

                        <table class="table table-striped table-hover table-sm" id="authors_information">
                            <thead>
                            <tr>
                                <th scope="col">@lang('credits::general.table-title')</th>
                                <th scope="col">@lang('credits::general.table-content')</th>
                                <th scope="col">@lang('credits::general.table-author')</th>
                                <th scope="col">&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($author_info_drafts as $author_draft)
                                @php

                                    $author_draft_list=[
                                                            'id'                => $author_draft->id,
                                                            'title'             => $author_draft->title,
                                                            'description'       => $author_draft->description,
                                                            'content'           => htmlspecialchars_decode($author_draft->content),
                                                            'author_name'       => $author_draft->author()->name,
                                                            'created_at'        => $author_draft->created_at->format('d-m-Y H:i:s'),
                                                            'updated_at'       => $author_draft->updated_at->format('d-m-Y H:i:s'),
                                                            ];

                                    $author_draft_modal = json_encode($author_draft_list, JSON_PRETTY_PRINT);

                                @endphp

                                <tr>
                                    <td>{{ $author_draft->title }}</td>
                                    <td>{!! $author_draft->content !!}</td>
                                    <td>{{ $author_draft->author()->name }}</td>
                                    <td>
                                        <div class="btn-group btn-group-xs" role="group">

                                            <a href="#" class="badge badge-info mr-1"
                                               data-toggle="modal"
                                               data-target="#show_authors_information"
                                               data-info = "{{$author_draft_modal}}">
                                                <i class="fas fa-eye"
                                                   data-toggle="tooltip"
                                                   data-placement="top"
                                                   title="@lang('credits::tooltips.authors-view-button')">
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