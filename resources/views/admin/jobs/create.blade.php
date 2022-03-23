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
        <form action="{{ route("admin.jobs.store") }}" method="POST" enctype="multipart/form-data">
            @csrf

            <x-admin.input type="text" label="Title" name="title" :errors="$errors" />

            <x-admin.input type="text" label="Company Name" name="company_name" :errors="$errors" />

            <x-admin.input type="text" label="Short Description" name="short_description" :errors="$errors" />

            <x-admin.textarea label="Full Description" name="full_description" :errors="$errors" />

            <x-admin.textarea label="Requirements" name="requirements" :errors="$errors" />

            <x-admin.input type="text" label="Job Nature" name="job_nature" :errors="$errors" />

            <x-admin.input type="text" label="Address" name="address" :errors="$errors" />

            <x-admin.input type="text" label="Salary" name="salary" :errors="$errors" />

            <div class="row">
                <div class="col-md-6">
                    <x-admin.input type="text" label="Phone" name="phone" :errors="$errors" />
                </div>
                <div class="col-md-6">
                    <x-admin.input type="email" label="Email" name="email" :errors="$errors" />
                </div>
            </div>

            <x-admin.checkbox name="top_rated" label="Top Rated" :errors="$errors" />

            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>

        </form>


    </div>
</div>
@endsection

@section('scripts')
<script>
    CKEDITOR.replace( 'full_description' );
    CKEDITOR.replace( 'requirements' );
</script>
@endsection

