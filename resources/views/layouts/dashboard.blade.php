@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between mb-3">
            <h2>Dashboard</h2>
            <a href="{{ route('projects.create') }}" class="btn btn-primary">
                <i class="fa fa-plus"></i> Add Project
            </a>
        </div>

        <projects-list :projects="{{ $projects }}" :filters="{{ $filters }}"></projects-list>
    @endsection
