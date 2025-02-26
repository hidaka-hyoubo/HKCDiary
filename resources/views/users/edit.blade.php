@extends('layouts.app')

@section('content')
    <div class="sm:col-span-2 mt-4">
        {{-- タブ --}}  
        @include('users.navtabs')
        {{-- ユーザー情報 --}}
        @include('users.user')
    </div>
@endsection