<div>
    <div class="form-group {{ $errors->has($name) ? 'has-error' : '' }}">
        <label for="$name">{{ $label }}</label>
        <input name="{{$name}}" type="hidden" value="0">
        <input value="1" type="checkbox" id="{{$name}}" name="{{$name}}" {{ (isset($value) && $value->{$name}) || old($name, 0) === 1 ? 'checked' : '' }}>
        @if($errors->has($name))
            <em class="invalid-feedback">
                {{ $errors->first($name) }}
            </em>
        @endif
        <p class="helper-block">
            {{ trans('cruds.job.fields.'.$name.'_helper') }}
        </p>
    </div>
</div>
