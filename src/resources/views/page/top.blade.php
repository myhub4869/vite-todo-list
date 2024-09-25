@extends('layouts.app')

@section('content')
<div id="todo-app" class="vh-100 pt-3 bg-light" role="main">
    <div class="d-flex align-items-center gap-2 ms-3">
        <img src="{{ asset('images/icon.png') }}" alt="user icon" class="rounded-circle border border-muted" style="aspect-ratio: 1/1; width: 40px;">
        {{ Auth::user()->email }}
    </div>

    <div class="card mt-5 mx-auto" style="max-width: 700px; padding-block: 80px;">
        <h1 id="todoリスト" class="text-center mb-0">ToDoリスト</h1>

        <div>
            <todo-list></todo-list>
            <todo-modal></todo-modal>
        </div>
    </div>
    <loading-modal></loading-modal>
</div>
@endsection

@push('scripts')
@vite('resources/js/app.js')
@endpush
