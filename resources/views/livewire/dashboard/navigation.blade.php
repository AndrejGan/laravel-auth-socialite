<div class="flex flex-col">
    <a class="pl-2 py-1 rounded-md  flex items-center gap-2"
       wire:current.exact="font-bold bg-gray-100" href="{{route("dashboard.index")}}" wire:navigate>
        <x-carbon-home class="w-6 h-6 text-blue-500"/>
        {{ __('Главная')}}
    </a>
    <a class="pl-2 py-1 rounded-md flex items-center gap-2"
       wire:current="font-bold bg-gray-100" href="{{route("dashboard.users")}}" wire:navigate>
        <x-carbon-group class="w-6 h-6 text-blue-500"/>
        {{ __('Пользователи')}}
    </a>
</div>
