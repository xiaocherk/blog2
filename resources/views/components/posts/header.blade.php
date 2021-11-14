<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        Latest <span class="text-blue-500">Laravel From Scratch</span> News
    </h1>

    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-4">
        <!--  Category -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
            <x-dropdown  class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold">
                <x-slot name="trigger">
{{--                    <button--}}
{{--                        class="py-2 pl-3 pr-9 text-sm font-semboid w-full lg:w-32 text-left flex lg:inline-flex"--}}
{{--                    >--}}
{{--                        {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories'}}--}}
{{--                        <x-icon name="down-arrow" class="absolute pointer-events-none" style="right:12 px;" />--}}

{{--                    </button>--}}
                </x-slot>


{{--                @foreach ( $categories as $category)--}}
{{--                    <a href="/categories/{{ $category->slug }}"--}}
{{--                       class="--}}
{{--                    block text-left px-3 text-sm leading-6--}}
{{--                    hover:bg-blue-500 focus:bg-blue-500 hover:text-white focus:text-white--}}
{{--                    {{ isset( $currentCategory ) && $currentCategory->is($category) ? 'bg-blue-500 text-white' : '' }}"--}}
{{--                    <x-dropdown-item href="/categories/{{ $category->slug }}">{{ ucwords($category->name) }}</x-dropdown-item>--}}
{{--                    >{{ ucwords($category->name)}}</a>--}}
{{--                @endforeach--}}
            </x-dropdown>

            <x-category-dropdown />

        </div>

{{--        <!-- Other Filters -->--}}
{{--        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">--}}
{{--            <select class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold">--}}
{{--                <option value="category" disabled selected>Other Filters--}}
{{--                </option>--}}
{{--                <option value="foo">Foo--}}
{{--                </option>--}}
{{--                <option value="bar">Bar--}}
{{--                </option>--}}
{{--            </select>--}}


{{--        </div>--}}

        <!-- Search -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
            <form method="GET" action="/">

                @if(request('category'))
                    <input type="hidden" name="category" value="{{request('category')}}">
                    @endif
                <input type="text"
                       name="search"
                       placeholder="Find something"
                       class="bg-transparent placeholder-black font-semibold text-sm"
                        value="{{ request('search') }}">
            </form>
        </div>
    </div>
</header>
