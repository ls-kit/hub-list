@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Menu bilder
    </div>

    <div class="card-body">
        {!! Menu::render() !!}
    </div>
</div>
@endsection
@section('scripts')
{!! Menu::scripts() !!}

@endsection
