@extends('layouts.app')

@section('content')
    <div class="sm:col-span-2 mt-4">
        {{-- タブ --}}  
        @include('users.navtabs')
        {{-- 投稿フォーム --}}
        @include('reports.form')
    </div>
@endsection