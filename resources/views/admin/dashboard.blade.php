@extends('layouts.admin')

@section('title', 'Dashboard')

@section('page_title', 'Dashboard')

@section('breadcrumbs')
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Dashboard</h3>
                </div>
                <div class="box-body">
                    <p>Welcome to the dashboard.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
