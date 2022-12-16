@extends('layouts.app')

@section('content')
    <h2> Items </h2> 
    @if(count($items) > 0)
    <div class="list-group">
            
        @foreach ($items as $item)
            <a href="/request/{{ $item->id }}/edit" class="list-group-item list-group-item-action active" aria-current="true">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">{{ $item->text }}</h5>
                    <small>{{ $item->created_at }}</small>
                </div>
                <p class="mb-1">{{ $item->body }}</p>
                <form action="/request/{{ $item->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger float-end">DELETE</button>
                </form>
                <br>
                <hr>
            </a>
        @endforeach
    </div>
    @endif

@endsection