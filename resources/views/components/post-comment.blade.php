@props(['comment'])

<x-panel class="bg-gray-100">
<article class="flex  space-x-4">
    <div class="flex-shrink-0">
        <img src="https://i.pravatar.cc/60?u={{ $comment->user_id }}" alt="" width="60" height="60" class="rounded-xl">
    </div>

    <div>
        <header class="mb-4">
            <h3 class="font-bold">{{ $comment->author->username}}</h3>
            <p class="text-xs">
                Posted
                <time>{{ $comment->created_at->format('F j, Y,g:i a') }}</time>
            </p>
        </header>

        <p>
            {{ $comment-> body }}
        </p>
    </div>

</article>
</x-panel>

{{--<article class="flex bg-gray-100 border border-gray-200 p-6 rounded-xl space-x-4">--}}
{{--    <div class="flex-shrink-0">--}}
{{--        <img src="https://i.pravatar.cc/60" alt="" width="60" height="60" class="rounded-xl">--}}
{{--    </div>--}}

{{--    <div>--}}
{{--        <header class="mb-4">--}}
{{--            <h3 class="font-bold">John</h3>--}}
{{--            <p class="text-xs">--}}
{{--                Posted--}}
{{--                <time>8 hours ago</time>--}}
{{--            </p>--}}
{{--        </header>--}}

{{--        <p>--}}
{{--           hi, this is my first posts--}}
{{--        </p>--}}
{{--    </div>--}}

{{--</article>--}}



