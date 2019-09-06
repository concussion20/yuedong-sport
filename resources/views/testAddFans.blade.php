@extends('layouts.app')

@section('mainContent')
<form method="POST" action="injectExerLogs/3">
                {{ csrf_field() }}
                <div class="form-group">
                    {{-- 这里的name的取名通常和数据库表的字段名一样 --}}
                    <textarea name="distance" class="form-control">{{ old('distance') }}</textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add fan</button>
                    <a href="loadLau/{{Auth::id()}}">sdfs</a>
                </div>
            </form>

@endsection