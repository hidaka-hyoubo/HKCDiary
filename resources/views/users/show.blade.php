@extends('layouts.app')

@section('content')
    <div class="sm:col-span-2 mt-4">
            {{-- 投稿フォーム --}}
            @include('reports.form')
            {{-- 投稿一覧 --}}
            @include('reports.reports')
        </div>
@endsection