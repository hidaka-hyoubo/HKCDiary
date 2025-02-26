<div class="flex justify-center">
    @if (isset($reports))
        <ul class="w-1/2 list-none">
            @foreach ($reports as $report)
                <li class="flex items-start gap-x-2 mb-4">
                    <div>
                        <div>
                            {{-- 投稿の所有者のユーザー情報ページへのリンク --}}
                            <a class="">{{ $report->user->name }}</a>
                            <span class="text-muted text-gray-500">posted at {{ $report->created_at }}</span>
                        </div>
                        <div>
                            <div class='flex'>
                                {{-- 日報のタイトルと日付  --}}
                                <a class="link link-hover text-info mb-0" href="{{ route('report.edit', $report->report_id) }}">{!! nl2br(e($report->report_title)) !!}</a>
                                {{-- 日報のタイトルと日付  --}}
                                <p class="mb-0"><{!! nl2br(e($report->report_date)) !!}></p>
                            </div>
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