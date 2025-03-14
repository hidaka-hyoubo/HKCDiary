@extends('layouts.app')

@section('content')
    @if (Auth::check())
            <div>
                {{-- 投稿フォーム --}}
                @include('reports.form')
            </div>
    @else
        <div class="prose hero bg-base-200 mx-auto max-w-full rounded">
            <div class="hero-content text-center my-10">
                <div class="max-w-md mb-10">
                    <h2>Welcome to the HKCDiary</h2>
                </div>
            </div>
        </div>
    @endif
@endsection