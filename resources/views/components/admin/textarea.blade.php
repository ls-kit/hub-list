<div>
    <div class="form-group {{ $errors->has($name) ? 'has-error' : '' }}">
        <label for="{{$name}}">{{ $label }}</label>

        <textarea id="{{$name}}" name="{{$name}}" rows="10" cols="80">
            {{ old($name, isset($value) ? $value->{$name} : '') }}
        </textarea>

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


