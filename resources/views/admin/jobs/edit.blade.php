@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.job.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.jobs.update", [$job->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <x-admin.input type="text" label="Title" name="title" :errors="$errors" :value="$job" />

            <x-admin.input type="text" label="Company Name" name="company_name" :errors="$errors" :value="$job" />

            <x-admin.input type="text" label="Short Description" name="short_description" :errors="$errors" :value="$job" />

            <x-admin.textarea label="Full Description" name="full_description" :errors="$errors" :value="$job" />

            <x-admin.textarea label="Requirements" name="requirements" :errors="$errors" :value="$job" />

            <x-admin.input type="text" label="Job Nature" name="job_nature" :errors="$errors" :value="$job" />

            <x-admin.input type="text" label="Address" name="address" :errors="$errors" :value="$job" />

            <x-admin.input type="text" label="Salary" name="salary" :errors="$errors" :value="$job" />

            <div class="row">
                <div class="col-md-6">
                    <x-admin.input type="text" label="Phone" name="phone" :errors="$errors" :value="$job" />
                </div>
                <div class="col-md-6">
                    <x-admin.input type="email" label="Email" name="email" :errors="$errors" :value="$job" />
                </div>
            </div>

            <x-admin.checkbox name="top_rated" label="Top Rated" :errors="$errors" :value="$job" />

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
