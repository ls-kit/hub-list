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
        <form action="{{ route("admin.service.update", $service->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <x-admin.input type="text" label="Service Name" name="name" :errors="$errors" :value="$service" />

            <div class="form-group {{ $errors->has('logo') ? 'has-error' : '' }}">
                <label for="logo">{{ trans('cruds.company.fields.logo') }}</label>
                <div class="needsclick dropzone" id="logo-dropzone">

                </div>
                @if($errors->has('logo'))
                    <em class="invalid-feedback">
                        {{ $errors->first('logo') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.company.fields.logo_helper') }}
                </p>
            </div>

            <x-admin.input type="text" label="Service Area" name="area" :errors="$errors" :value="$service" />

            <x-admin.input type="text" label="Service Map" name="map" :errors="$errors" :value="$service" />

            <x-admin.input type="text" label="Service Type" name="type" :errors="$errors" :value="$service" />

            <x-admin.input type="text" label="Service phone" name="phone" :errors="$errors" :value="$service" />

            <x-admin.input type="text" label="Service Provider" name="provider_name" :errors="$errors" :value="$service" />



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

<script>
    Dropzone.options.logoDropzone = {
    url: '{{ route('admin.service.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="logo"]').remove()
      $('form').append('<input type="hidden" name="logo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="logo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
        @if(isset($service) && $service->logo)
            var file = {!! json_encode($service->logo) !!}
                this.options.addedfile.call(this, file)
            this.options.thumbnail.call(this, file, '{{ $service->logo->getUrl('thumb') }}')
            file.previewElement.classList.add('dz-complete')
            $('form').append('<input type="hidden" name="logo" value="' + file.file_name + '">')
            this.options.maxFiles = this.options.maxFiles - 1
        @endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}
</script>
@endsection

