@if (Auth::id() == $user->id)
    <div class="mt-4">
        <form method="POST" action="{{ route('reports.store') }}">
            @csrf
            <div class="form-control mt-4">日付
                <textarea rows="2" name="report_date" class="input input-bordered w-full"></textarea>
            </div>
            <div class="form-control mt-4">タイトル
                <textarea rows="2" name="report_title" class="input input-bordered w-full"></textarea>
            </div>
            <div class="form-control mt-4">内容
                <textarea rows="2" name="report_content" class="input input-bordered w-full"></textarea>
            </div>
        
            <button type="submit" class="btn btn-primary btn-block normal-case">日報登録</button>
        </form>
    </div>
@endif