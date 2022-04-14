
@extends('layouts.admin')
@section('styles')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.job.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.setting.update") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <x-admin.input type="file" label="Logo" name="logo" :errors="$errors" />
                </div>
                <div class="col-md-6">
                    <x-admin.input type="file" label="Favicon" name="fevicon" :errors="$errors" />
                </div>
            </div>

            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>

        </form>
    </div>
</div>
@endsection


