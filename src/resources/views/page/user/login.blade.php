@extends('layouts.app')

@section('content')
<div class="vh-100 bg-light" role="main" style="padding-top: 100px;">
    <div class="card mx-auto" style="max-width: 500px; padding-block: 80px;">
        <h1 id="ログイン" class="text-center mb-0">ログイン</h1>
        
        <form method="post" action="{{ route('login') }}" class="mt-4 px-4">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">メールアドレス</label>
                <input type="email" class="form-control" id="email" name="email" required autofocus>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">パスワード</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">ログイン</button>
            </div>
        </form>
    </div>
</div>
@endsection