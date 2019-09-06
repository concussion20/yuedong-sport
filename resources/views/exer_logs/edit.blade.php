@extends('layouts.app')

@section('content')
    <h1>Edit the ExerLog</h1>

    <form method="POST" action="/exer_logs/{{$exerLog->id}}">
    {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <div class="form-group">
            <textarea name="distance" class="form-control">{{ $exerLog->distance }}</textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update ExerLog</button>
        </div>
    </form>
@endsection