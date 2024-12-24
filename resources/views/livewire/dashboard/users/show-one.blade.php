<div class="flex flex-col gap-5">
    <a wire:navigate href="{{url()->previous()}}" class="flex gap-2 items-center">
        <x-carbon-arrow-left class="w-6 h-6 "/>
        {{__("Назад")}}
    </a>
    <div class="flex gap-10">
        @if($user->avatar)
            <img class="w-32 h-32 object-contain rounded-lg drop-shadow-lg" src="{{$user->avatar}}"
                 alt="{{$user->name}}"/>
        @endif
        <div class="flex flex-col gap-3">
            <h1 class="text-2xl font-medium">{{$user->name}}</h1>
            <div class="text-gray-400 text-xl">{{$user->email}}</div>
            <div class="text-gray-400">{{\Carbon\Carbon::parse($user->created_at)->isoFormat('Do MMMM YYYY')}}</div>
        </div>

    </div>

</div>
