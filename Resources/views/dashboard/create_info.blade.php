@extends('layouts.adminlight')

@section('title')
    Dashboard Create Credits Information
@endsection

@section('topcss')

    <link rel="stylesheet" href="{{asset('modules/credits/css/nav-pills.css')}}">

    <!-- include summernote css -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">

@endsection

@section('topjs')

@endsection

@section('bottomcss')

@endsection

@section('bottomjs')

    <!-- include summernote js -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>

    <script type="text/javascript">
		$('#information').summernote({
			placeholder: 'Please put your information here ...',
			tabsize: 2,
			height: 200,
			toolbar: [
				// [groupName, [list of button]]
				['style', ['bold', 'italic', 'underline', 'clear']],
				['font', ['strikethrough']],
				['fontsize', ['fontsize']],
				['color', ['color']],
				['para', ['ul', 'ol', 'paragraph']],
				['height', ['height']],
				['misc', ['undo','redo']],
				['view', ['fullscreen']]
			]
		});
    </script>

@endsection


@section('content')

    @include('credits::dashboard.includes.notifications')

    <div class="row mb-3">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Credits Module</h2>
            </div>
        </div>
    </div>

    <div class="row mb-3">

        <div class="col-md-12">
            <a class="btn btn btn-outline-secondary"  onclick="history.back()">
                Back
            </a>
        </div>

    </div>

    <div class="row mb-3">

        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    <h2 class="text-info">
                        Create new top information
                    </h2>
                </div>
                <div class="card-body">

                    <form action="{{route('dashboard.credits.information.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title" class="h4">
                                Who ? *
                            </label>
                            <div class="form-row">
                                <div class="col-md-11">
                                    <input name="title"
                                           type="text"
                                           class="form-control @error('title') is-invalid @enderror"
                                           id="title"
                                           aria-describedby="title"
                                           placeholder="Enter title"
                                            required
                                           value="{{old('title')}}">
                                    <div class="invalid-feedback">
                                        @error('title'){{ $message }}@enderror
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <li class="fas fa-question-circle fa-lg text-info"
                                        data-toggle="tooltip"
                                        title="Who to give credits to !">
                                    </li>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="link" class="h4">
                                Where ? *
                            </label>
                            <div class="form-row">
                                <div class="col-md-11">
                                    <input name="link"
                                           type="text"
                                           class="form-control @error('link') is-invalid @enderror"
                                           id="link"
                                           aria-describedby="title"
                                           placeholder="Enter weblink if non leave blank"
                                           value="{{old('link')}}">
                                    <div class="invalid-feedback">
                                        @error('link'){{ $message }}@enderror
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <li class="fas fa-question-circle fa-lg text-info"
                                        data-toggle="tooltip"
                                        title=
                                        "Make sure it's an active link !
For example make use of http:// or https://
or copy link form the address bar">
                                    </li>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="information" class="h4">
                                Why ? *
                            </label>
                            <div class="form-row">
                                <div class="col-md-11">
                                    <textarea  id="information"
                                               name="content"
                                               @error('content')class=" is-invalid "@enderror>
{{old('content')}}
                                    </textarea>
                                    <div class="invalid-feedback">
                                        @error('content'){{ $message }}@enderror
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <li class="fas fa-question-circle fa-lg text-info"
                                        data-toggle="tooltip"
                                        title=
                                        "Why do you give this person/company/organisation credits.
Let the visitors know what they did for this website.">
                                    </li>

                                </div>
                            </div>

                            @error('content')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-3 offset-md-1">
                                <button type="submit" class="btn btn-success">Submit</button>
                                <button class="btn btn btn-outline-primary" type="reset" value="Reset">Reset</button>
                            </div>
                            <div class="col-md-8 text-warning">
                                Fields marked with <strong>*</strong> are required fields to fill in.
                            </div>


                        </div>
                    </form>
                </div>
            </div>


        </div>

    </div>


@endsection

