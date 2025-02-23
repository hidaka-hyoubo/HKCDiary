@if (Auth::check())
    {{-- 日報登録ページへのリンク --}}
    <li><a class="link link-hover" href="#">日報登録</a></li>
    {{-- ログインユーザー情報ページへのリンク --}}
    <li><a class="link link-hover" href="{{ route('users.show', Auth::user()->id ) }}">ユーザー情報</a></li>
    {{-- ユーザー一覧ページへのリンク --}}
    <li><a class="link link-hover" href="{{ route('users.index') }}">社員一覧</a></li>
    <li class="divider lg:hidden"></li>
    {{-- ユーザー登録へのリンク --}}
    <li><a class="link link-hover" href="#" onclick="event.preventDefault();this.closest('form').submit();">ユーザー登録(未)</a></li>
    {{-- ログアウトへのリンク --}}
    <li><a class="link link-hover" href="#" onclick="event.preventDefault();this.closest('form').submit();">Logout</a></li>
@else
    {{-- ユーザー登録ページへのリンク --}}
    <li><a class="link link-hover" href="{{ route('register') }}">Signup</a></li>
    <li class="divider lg:hidden"></li>
    {{-- ログインページへのリンク --}}
    <li><a class="link link-hover" href="{{ route('login') }}">Login</a></li>
@endif