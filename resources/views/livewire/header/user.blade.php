<div x-data="{ open: false }" class="relative">
    <div :class="{ 'bg-white': !open, 'bg-gray-200': open }"
         class="flex gap-2 items-center cursor-pointer h-[56px] px-2" x-on:click="open = !open">
        @if(auth()->user()->avatar)
            <img class="w-10 h-10 object-cover rounded-full" src="{{auth()->user()->avatar}}"
                 alt="{{auth()->user()->name}}"/>
        @else
            <div class="font-semibold">{{auth()->user()->name}}</div>
        @endif
        <x-carbon-chevron-down class="w-3 h-3 text-gray-400"/>
    </div>
    <div class="dropdown" x-show="open" x-on:click.outside="open = false">
        @if(auth()->user()->type == "admin")
            <div class="dropdown-item">
                <x-carbon-dashboard class="w-4 h-4 text-blue-600"/>
                <a href="{{route('dashboard.index')}}" wire:navigate>
                    {{ __('Панель администратора')}}
                </a>
            </div>
        @endif
        <div class="dropdown-item">
            <x-carbon-logout class="w-4 h-4 text-blue-600"/>
            <form method="post" action="{{ route('logout') }}">
                @csrf
                <button type="submit">
                    {{ __('Выйти')}}
                </button>
            </form>
        </div>
    </div>
</div>
