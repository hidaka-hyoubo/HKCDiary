<div class="flex justify-center">
@if (Auth::id() == $user->id)
    <div class="w-1/2">
        <form method="POST" action="{{ route('reports.store') }}">
            @csrf
            <div class="form-control my-4">日付
                <input type="date" name="report_date" class="input input-bordered w-full"></input>
            </div>
            <div class="form-control my-4">タイトル
                <input type="text" name="report_title" class="input input-bordered w-full"></input>
            </div>
            <div class="form-control my-4">内容
                <input type="text" name="report_content" class="input input-bordered w-full"></input>
            </div>
        
            <button type="submit" class="btn btn-primary btn-block normal-case">日報登録</button>
        </form>
    </div>
@endif
</div>