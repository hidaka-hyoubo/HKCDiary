<div class="flex justify-center">
@if (Auth::id() == $user->id)
    <div class="w-1/2">
        <form method="POST" action="{{ route('reports.store') }}">
            @csrf
            <div class="form-control my-4">日付
                <textarea rows="2" name="report_date" class="input input-bordered w-full"></textarea>
            </div>
            <div class="form-control my-4">タイトル
                <textarea rows="2" name="report_title" class="input input-bordered w-full"></textarea>
            </div>
            <div class="form-control my-4">内容
                <textarea rows="2" name="report_content" class="input input-bordered w-full"></textarea>
            </div>
        
            <button type="submit" class="btn btn-primary btn-block normal-case">日報登録</button>
        </form>
    </div>
@endif
</div>