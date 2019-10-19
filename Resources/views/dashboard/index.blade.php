@extends('layouts.adminlight')

@section('title')
    Dashboard Credits
@endsection

@section('topcss')

    <link rel="stylesheet" href="{{asset('modules/credits/css/nav-pills.css')}}">

    <link href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.5.0/css/bootstrap4-toggle.min.css" rel="stylesheet">

@endsection

@section('topjs')

@endsection

@section('bottomcss')

@endsection

@section('bottomjs')

    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.5.0/js/bootstrap4-toggle.min.js"></script>

    @include('credits::dashboard.includes.modals')

    @include('credits::dashboard.includes.datatables')


@endsection


@section('content')

    @include('credits::dashboard.includes.notifications')
    
    @include('credits::dashboard.information.modals.index')

    <div class="row mb-3">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Credits Module</h2>
            </div>
        </div>
    </div>



    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link  nav-link-color active" id="information-tab" data-toggle="tab" href="#information" role="tab" aria-controls="information" aria-selected="true">
                Information
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link nav-link-color" id="credits-tab" data-toggle="tab" href="#credits" role="tab" aria-controls="credits" aria-selected="false">
                Credits
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link nav-link-color" id="config-tab" data-toggle="tab" href="#config" role="tab" aria-controls="config" aria-selected="false">
                Config
            </a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">

        <div class="tab-pane fade show active" id="information" role="tabpanel" aria-labelledby="information-tab">
            @include('credits::dashboard.information.index')
        </div>

        <div class="tab-pane fade" id="credits" role="tabpanel" aria-labelledby="credits-tab">

            @include('credits::dashboard.main.index')

        </div>

        <div class="tab-pane fade" id="config" role="tabpanel" aria-labelledby="config-tab">
            @include('credits::dashboard.config.index')
        </div>

    </div>

@endsection
