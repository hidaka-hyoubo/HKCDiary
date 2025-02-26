<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {
        // ユーザー一覧をidの降順で取得
        $users = User::orderBy('id', 'desc')->paginate(10);
        
        // 社員一覧ビューでそれを表示
        return view('users.index', [
            'users' => $users
        ]);
    }
    
    public function show($id)
    {
        // idの値でユーザーを検索して取得
        $user = User::findOrFail($id);
        
        // ユーザーの投稿一覧を作成日時の降順で取得
        $reports = $user->reports()->orderBy('created_at', 'desc')->paginate(10);

        // ユーザー詳細ビューでそれを表示
        return view('users.show', [
            'user' => $user,
            'reports' => $reports
        ]);
    }
    
    public function edit(string $id)
    {
        // idの値でユーザーを検索して取得
        $user = User::findOrFail($id);

        // ユーザー詳細ビューでそれを表示
        return view('users.edit', ['user' => $user]);
    }
    
    public function update(Request $request, string $id)
    {
        // バリデーション
        $request->validate([
            'name' => 'required|max:255',   // 追加
            'email' => 'required|max:255',
        ]);
        
         // idの値でユーザーを検索して取得
        $user = User::findOrFail($id);
        
        // ユーザーを更新
        $user->name = $request->name;
        $user->email = $request->email;
        // passwordはどのように？
        $user->save();

        // トップページへリダイレクトさせる
        return redirect('/');
        
        
    }
}
