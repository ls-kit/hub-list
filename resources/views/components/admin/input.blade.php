@props(['value'])

<div>
    <div class="form-group {{ $errors->has($name) ? 'has-error' : '' }}">
        <label for="{{$name}}">{{ $label }}</label>
        <input type="{{$type}}" id="{{$name}}" name="{{$name}}" class="form-control" value="{{ old($name, isset($value) ? $value->{$name} : '') }}">
        @if($errors->has('title'))
            <em class="invalid-feedback">
                {{ $errors->first($name) }}
            </em>
        @endif
        <p class="helper-block">
            {{ trans("cruds.job.fields.".$name.'_helper') }}
        </p>
    </div>
</div>
