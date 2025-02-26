<div class="tabs tabs-lifted">
    @if (Auth::id() == $user->id)
    {{-- 日報登録タブ --}}
    <a href="{{ route('reports.create') }}" class="tab grow {{ Request::routeIs('reports.create') ? 'tab-active' : '' }}">
        日報登録
    </a>
    @endif
    {{-- 日報一覧タブ --}}
    <a href="{{ route('users.show',$user->id) }}" class="tab grow {{ Request::routeIs('users.show') ? 'tab-active' : '' }}">
        日報一覧
    </a>
    {{-- ユーザー情報タブ --}}
    <a href="{{ route('users.edit',$user->id) }}" class="tab grow {{ Request::routeIs('users.edit') ? 'tab-active' : '' }}">
        ユーザー情報
    </a>
</div>