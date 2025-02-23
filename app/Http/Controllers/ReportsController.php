<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Report;

class ReportsController extends Controller
{
    public function index()
    {
        $data = [];
        if (\Auth::check()) { // 認証済みの場合
            // 認証済みユーザーを取得
            $user = \Auth::user();
            // ユーザーのreportの一覧を作成日時の降順で取得
            $reports = $user->reports()->orderBy('created_at', 'desc')->paginate(10);
            $data = [
                'user' => $user,
                'reports' => $reports,
            ];
        }
        
        // dashboardビューでそれらを表示
        return view('dashboard', $data);
    }
    public function store(Request $request)
    {
        // バリデーション
        $request->validate([
            'report_date' => 'required|date',
            'report_title' => 'required|max:255',
            'report_content' => 'required|max:255',
        ]);
        
        // 認証済みユーザー（閲覧者）の日報として作成（リクエストされた値をもとに作成）
        $request->user()->reports()->create([
            'report_date' => $request->report_date,
            'report_title' => $request->report_title,
            'report_content' => $request->report_content,
        ]);
        
        // 前のURLへリダイレクトさせる
        return back();
    }
    public function destroy(string $report_id)
    {
        // idの値で投稿を検索して取得
        $report = Report::findOrFail($report_id);
        
        // 認証済みユーザー（閲覧者）がその日報の所有者である場合は日報を削除
        if (\Auth::id() === $report->user_id) {
            $report->delete();
            return back()
                ->with('success','Delete Successful');
        }

        // 前のURLへリダイレクトさせる
        return back()
            ->with('Delete Failed');
    }
}
