@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Edit Item </h3>
    {{-- <div class="card-body bg-secondary text-light"> --}}
        <form action="/request/{{ $item->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="text">Text</label>
                <input id="text" class="form-control" type="text" name="text" value="{{ $item->text }}">
            </div>

            <div class="form-group">
                <label for="body">Body</label>
                <input id="body" class="form-control" type="text" name="body" value="{{ $item->body }}">
            </div>
            <br>
            <button type="submit" class="form-control btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection