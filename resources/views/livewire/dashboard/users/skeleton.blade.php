<div class="flex flex-col gap-2">

    @for($i = 0; $i < 10; $i++)
        <div class="flex gap-5 bg-white border border-gray-200 rounded-lg p-2 animate-pulse">
            <div class="rounded-full bg-slate-200 h-14 w-14"></div>
            <div class="flex flex-col gap-2 flex-1">
                <div class="h-6 bg-slate-200 rounded"></div>
                <div class="h-4 bg-slate-200 rounded"></div>
                <div class="h-3 bg-slate-200 rounded"></div>
            </div>
        </div>
    @endfor
</div>
