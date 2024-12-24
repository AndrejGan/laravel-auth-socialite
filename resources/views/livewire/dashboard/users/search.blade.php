<div x-data="{ open: false }" class="flex-1 relative">
    <div class="flex-1 relative">
        <input
            x-on:click.stop="open=true"
            type="search"
            wire:model.live.debounce.1000ms="search"
            placeholder="{{__("Поиск пользователей")}}"
            :class="{ 'rounded-bl-lg': !open, 'rounded-bl-none': open }"
            class="w-full flex items-center h-11 pl-9 pr-2 border rounded-lg focus:outline-none hover:outline-none z-40"
        />
        <x-carbon-search class="w-6 h-6 absolute top-3 left-2 text-gray-400"/>
    </div>
    <div class="dropdown-search" x-show="open" x-on:click.outside="open = false">
        <div class="flex flex-col gap-2">
            @forelse ($users as $user)
                <a href="{{route("dashboard.users.one", $user->id)}}" x-on:click="open=false" wire:navigate wire:key="{{ $user->id }}"
                   class="flex gap-3 items-center hover:bg-gray-200 p-1 rounded-md">
                    @if($user->avatar)
                        <img class="w-10 h-10 rounded-full object-cover" src="{{$user->avatar}}" alt="{{$user->name}}"/>
                    @endif
                    <div class="font-medium">{{ $user->name }}</div>
                </a>
            @empty
                <div class="text-gray-400">{{__("Пользователи не найдены")}}</div>
            @endforelse
        </div>
    </div>
</div>
