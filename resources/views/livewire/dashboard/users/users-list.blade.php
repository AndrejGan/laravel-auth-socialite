<div class="flex flex-col gap-5 w-full">
    <div class="flex flex-col gap-2">
        @foreach ($users as $user)
            <livewire:dashboard.users.UserItem :key="$user->id" :$user />
        @endforeach
    </div>

    {{ $users->links() }}
</div>
