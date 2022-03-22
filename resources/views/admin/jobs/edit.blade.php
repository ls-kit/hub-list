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
            <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                <label for="title">{{ trans('cruds.job.fields.title') }}*</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ old('title', isset($job) ? $job->title : '') }}" required>
                @if($errors->has('title'))
                    <em class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.job.fields.title_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('company_name') ? 'has-error' : '' }}">
                <label for="company_name">{{ trans('cruds.job.fields.company_name') }}*</label>
                <input type="text" id="company_name" name="company_name" class="form-control" value="{{ old('company_name', isset($job) ? $job->company_name : '') }}" required>
                @if($errors->has('company_name'))
                    <em class="invalid-feedback">
                        {{ $errors->first('company_name') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.job.fields.title_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('short_description') ? 'has-error' : '' }}">
                <label for="short_description">{{ trans('cruds.job.fields.short_description') }}</label>
                <input type="text" id="short_description" name="short_description" class="form-control" value="{{ old('short_description', isset($job) ? $job->short_description : '') }}">
                @if($errors->has('short_description'))
                    <em class="invalid-feedback">
                        {{ $errors->first('short_description') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.job.fields.short_description_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('full_description') ? 'has-error' : '' }}">
                <label for="full_description">{{ trans('cruds.job.fields.full_description') }}</label>
                <textarea id="full_description" name="full_description" rows="10" cols="80">
                    {{ old('full_description', isset($job) ? $job->full_description : '') }}
                </textarea>
                @if($errors->has('full_description'))
                    <em class="invalid-feedback">
                        {{ $errors->first('full_description') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.job.fields.full_description_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('requirements') ? 'has-error' : '' }}">
                <label for="requirements">{{ trans('cruds.job.fields.requirements') }}</label>
                <textarea id="requirements" name="requirements" rows="10" cols="80">
                    {{ old('requirements', isset($job) ? $job->requirements : '') }}
                </textarea>
                @if($errors->has('requirements'))
                    <em class="invalid-feedback">
                        {{ $errors->first('requirements') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.job.fields.requirements_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('job_nature') ? 'has-error' : '' }}">
                <label for="job_nature">{{ trans('cruds.job.fields.job_nature') }}</label>
                <input type="text" id="job_nature" name="job_nature" class="form-control" value="{{ old('job_nature', isset($job) ? $job->job_nature : '') }}">
                @if($errors->has('job_nature'))
                    <em class="invalid-feedback">
                        {{ $errors->first('job_nature') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.job.fields.job_nature_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
                <label for="address">{{ trans('cruds.job.fields.address') }}</label>
                <input type="text" id="address" name="address" class="form-control" value="{{ old('address', isset($job) ? $job->address : '') }}">
                @if($errors->has('address'))
                    <em class="invalid-feedback">
                        {{ $errors->first('address') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.job.fields.address_helper') }}
                </p>
            </div>
            {{-- <div class="form-group {{ $errors->has('categories') ? 'has-error' : '' }}">
                <label for="categories">{{ trans('cruds.job.fields.categories') }}
                    <span class="btn btn-info btn-xs select-all">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all">{{ trans('global.deselect_all') }}</span></label>
                <select name="categories[]" id="categories" class="form-control select2" multiple="multiple">
                    @foreach($categories as $id => $categories)
                        <option value="{{ $id }}" {{ (in_array($id, old('categories', [])) || isset($job) && $job->categories->contains($id)) ? 'selected' : '' }}>{{ $categories }}</option>
                    @endforeach
                </select>
                @if($errors->has('categories'))
                    <em class="invalid-feedback">
                        {{ $errors->first('categories') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.job.fields.categories_helper') }}
                </p>
            </div> --}}
            <div class="form-group {{ $errors->has('salary') ? 'has-error' : '' }}">
                <label for="salary">{{ trans('cruds.job.fields.salary') }}*</label>
                <input type="text" id="salary" name="salary" class="form-control" value="{{ old('salary', isset($job) ? $job->salary : '') }}" required>
                @if($errors->has('salary'))
                    <em class="invalid-feedback">
                        {{ $errors->first('salary') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.job.fields.salary_helper') }}
                </p>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                        <label for="phone">{{ trans('cruds.job.fields.phone') }}</label>
                        <input type="text" id="phone" name="phone" class="form-control" value="{{ old('phone', isset($job) ? $job->phone : '') }}" required>
                        @if($errors->has('phone'))
                            <em class="invalid-feedback">
                                {{ $errors->first('phone') }}
                            </em>
                        @endif
                        <p class="helper-block">
                            {{ trans('cruds.job.fields.phone_helper') }}
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                        <label for="email">{{ trans('cruds.job.fields.email') }}</label>
                        <input type="text" id="email" name="email" class="form-control" value="{{ old('email', isset($job) ? $job->email : '') }}" required>
                        @if($errors->has('email'))
                            <em class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </em>
                        @endif
                        <p class="helper-block">
                            {{ trans('cruds.job.fields.salary_helper') }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="form-group {{ $errors->has('top_rated') ? 'has-error' : '' }}">
                <label for="top_rated">{{ trans('cruds.job.fields.top_rated') }}</label>
                <input name="top_rated" type="hidden" value="0">
                <input value="1" type="checkbox" id="top_rated" name="top_rated" {{ (isset($job) && $job->top_rated) || old('top_rated', 0) === 1 ? 'checked' : '' }}>
                @if($errors->has('top_rated'))
                    <em class="invalid-feedback">
                        {{ $errors->first('top_rated') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.job.fields.top_rated_helper') }}
                </p>
            </div>
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
