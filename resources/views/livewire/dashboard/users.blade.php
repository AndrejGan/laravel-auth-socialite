<div class="flex flex-col gap-5 w-full">
    <div class="flex gap-10 items-center">
        <h1 class="text-2xl font-medium">
            {{__('Пользователи')}}
        </h1>
        <livewire:dashboard.users.search/>
    </div>
    <livewire:dashboard.users.UsersList lazy/>
</div>
