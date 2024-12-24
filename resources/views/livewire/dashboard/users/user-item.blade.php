<div class="flex gap-5 bg-white border border-gray-200 rounded-lg p-2">
    @if($user->avatar)
        <img class="w-14 h-14 rounded-full object-cover" src="{{$user->avatar}}" alt="{{$user->name}}" />
    @endif
    <div class="flex flex-col gap-0">
        <a wire:navigate href="{{route("dashboard.users.one", $user->id)}}" class="text-xl font-medium">{{$user->name}} </a>
        <div class="text-gray-500">{{$user->email}}</div>
        <div class="text-gray-400 text-sm">{{\Carbon\Carbon::parse($user->created_at)->isoFormat('Do MMMM YYYY')}}</div>
    </div>
</div>
