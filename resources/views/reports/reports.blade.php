<div class="mt-4">
    @if (isset($reports))
        <ul class="list-none">
            @foreach ($reports as $report)
                <li class="flex items-start gap-x-2 mb-4">
                    <div>
                        <div>
                            {{-- 投稿の所有者のユーザー情報ページへのリンク --}}
                            <a class="link link-hover text-info" href="{{ route('users.show', $report->user->id) }}">{{ $report->user->name }}</a>
                            <span class="text-muted text-gray-500">posted at {{ $report->created_at }}</span>
                        </div>
                        <div>
                            {{-- 日報のタイトルと日付  --}}
                            <p class="mb-0">{!! nl2br(e($report->report_title)) !!} <{!! nl2br(e($report->report_date)) !!}></p>
                            {{-- 日報内容 --}}
                            <p class="mb-0">{!! nl2br(e($report->report_content)) !!}</p>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
        {{-- ページネーションのリンク --}}
        {{ $reports->links() }}
    @endif
</div>