<div class="flex gap-5 items-center justify-between border-b h-[57px]">
    <a href="{{route('index')}}" wire:navigate
       class="text-2xl font-sans font-semibold uppercase"> {{env("APP_NAME")}} </a>
    <livewire:header.account/>
</div>
