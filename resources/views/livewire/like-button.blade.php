<div>
    @auth
        <div
            x-data="{
                show:false,
                liked:@entangle('liked')
                }"
            class="relative"
            @mouseover.enter="show=true"
            @mouseleave="show=false"
        >
            <button @keyup.escape.window="show=false" @click="show=true"
                    class="flex gap-1 items-center focus:outline-none active:outline-none focus:border-0 focus:ring-0 active:border-0 active:ring-0">
                <x-like-button::icons.like
                    class="{{$liked == 'like' ? 'border-indigo-600':'border-transparent'}} border-2 rounded-full w-8 h-8"></x-like-button::icons.like>
                <span class="font-bold text-sm">{{$likes}}</span>
                <x-like-button::icons.love
                    class="{{$liked == 'love' ? 'border-indigo-600':'border-transparent'}} border-2  rounded-full w-4 h-4"></x-like-button::icons.love>
                <span class="font-bold text-sm">{{$loves}}</span>
                <x-like-button::icons.care
                    class="{{$liked == 'care' ? 'border-indigo-600':'border-transparent'}} border-2 rounded-full w-4 h-4"></x-like-button::icons.care>
                <span class="font-bold text-sm">{{$cares}}</span>
                <x-like-button::icons.haha
                    class="{{$liked == 'haha' ? 'border-indigo-600':'border-transparent'}} border-2 rounded-full w-4 h-4"></x-like-button::icons.haha>
                <span class="font-bold text-sm">{{$hahas}}</span>
                <x-like-button::icons.wow
                    class="{{$liked == 'wow' ? 'border-indigo-600':'border-transparent'}} border-2 rounded-full w-4 h-4"></x-like-button::icons.wow>
                <span class="font-bold text-sm">{{$wows}}</span>
                <x-like-button::icons.sad
                    class="{{$liked == 'sad' ? 'border-indigo-600':'border-transparent'}} border-2 rounded-full w-4 h-4"></x-like-button::icons.sad>
                <span class="font-bold text-sm">{{$sads}}</span>
                <x-like-button::icons.angry
                    class="{{$liked == 'angry' ? 'border-indigo-600':'border-transparent'}} border-2 rounded-full w-4 h-4"></x-like-button::icons.angry>
                <span class="font-bold text-sm">{{$angries}}</span>
            </button>
            <div x-show="show" @click.away="show=false" style="display:none;" x-cloak
                 class="-top-10 bg-white  absolute shadow rounded-full px-1 pb-2">
                <div class="flex gap-1 items-center">
                    <button wire:click="like('like')" class="relative w-8 h-8">
                        <x-like-button::icons.like
                            class=" duration-75 relative top-0 left-0 z-10 hover:z-20 hover:w-10 h-10 w-8 h-8 hover:-left-1"></x-like-button::icons.like>
                    </button>
                    <button wire:click="like('love')" class="relative w-8 h-8">
                        <x-like-button::icons.love
                            class="  duration-75 relative top-0 left-0 z-10 hover:z-20 hover:w-10 h-10 w-8 h-8 hover:-left-1"></x-like-button::icons.love>
                    </button>
                    <button wire:click="like('care')" class="relative w-8 h-8">
                        <x-like-button::icons.care
                            class=" duration-75 relative top-0 left-0 z-10 hover:z-20 hover:w-10 h-10 w-8 h-8 hover:-left-1"></x-like-button::icons.care>
                    </button>
                    <button wire:click="like('haha')" class="relative w-8 h-8">
                        <x-like-button::icons.haha
                            class=" duration-75 relative top-0 left-0 z-10 hover:z-20 hover:w-10 h-10 w-8 h-8 hover:-left-1"></x-like-button::icons.haha>
                    </button>
                    <button wire:click="like('wow')" class="relative w-8 h-8">
                        <x-like-button::icons.wow
                            class=" duration-75 relative top-0 left-0 z-10 hover:z-20 hover:w-10 h-10 w-8 h-8 hover:-left-1"></x-like-button::icons.wow>
                    </button>
                    <button wire:click="like('sad')" class="relative w-8 h-8">
                        <x-like-button::icons.sad
                            class=" duration-75 relative top-0 left-0 z-10 hover:z-20 hover:w-10 h-10 w-8 h-8 hover:-left-1"></x-like-button::icons.sad>
                    </button>
                    <button wire:click="like('angry')" class="relative w-8 h-8">
                        <x-like-button::icons.angry
                            class=" duration-75 relative top-0 left-0 z-10 hover:z-20 hover:w-10 h-10 w-8 h-8 hover:-left-1"></x-like-button::icons.angry>
                    </button>
                </div>

            </div>
        </div>
    @endauth
</div>
