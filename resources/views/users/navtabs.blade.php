<div class="tabs tabs-lifted">
    {{-- 日報登録タブ --}}
    <a href="{{ route('reports.create') }}" class="tab grow {{ Request::routeIs('reports.create') ? 'tab-active' : '' }}">
        日報登録
        <div class="badge badge-neutral ml-1"></div>
    </a>
    {{-- 日報一覧タブ --}}
    <a href="{{ route('users.show',$user->id) }}" class="tab grow {{ Request::routeIs('users.show') ? 'tab-active' : '' }}">
        日報一覧
        <div class="badge badge-neutral ml-1"></div>
    </a>
    {{-- ユーザー情報タブを追加する --}}
    
</div>