<button
    wire:click="like"
    class="
    focus:outline-none
    flex
    items-center
    bg-white
    py-1
    px-4
    rounded"
>
    @if($i_like)
        <div>
            <svg class="w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <defs/>
                <path fill="#22a7ef" d="M4.5 8h2C7.3 8 8 8.7 8 9.5v10c0 .8-.7 1.5-1.5 1.5h-2c-.8 0-1.5-.7-1.5-1.5v-10C3 8.7 3.7 8 4.5 8z"/>
                <path fill="#22a7ef" d="M16.3 21H10c-1.1 0-2-.9-2-2V9.2c0-.7.3-1.5.8-2l2.5-2.7.4-2.3c.2-1 1.4-1.5 2.2-.8.5.5 1.1 1.3 1.1 2.5C15 5.6 14 8 14 8h5c1.7 0 3 1.3 3 3v1.3c0 .4-.1.9-.3 1.3L19 19.3c-.4 1-1.5 1.7-2.7 1.7z" opacity=".35"/>
            </svg>
        </div>
    @else
        <div>
            <svg class="w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <defs/>
                <path d="M4.5 8h2C7.3 8 8 8.7 8 9.5v10c0 .8-.7 1.5-1.5 1.5h-2c-.8 0-1.5-.7-1.5-1.5v-10C3 8.7 3.7 8 4.5 8z"/>
                <path d="M16.3 21H10c-1.1 0-2-.9-2-2V9.2c0-.7.3-1.5.8-2l2.5-2.7.4-2.3c.2-1 1.4-1.5 2.2-.8.5.5 1.1 1.3 1.1 2.5C15 5.6 14 8 14 8h5c1.7 0 3 1.3 3 3v1.3c0 .4-.1.9-.3 1.3L19 19.3c-.4 1-1.5 1.7-2.7 1.7z" opacity=".35"/>
            </svg>
        </div>
    @endif
    <div class="ml-1
    @if($i_like)
        font-bold
    @endif
        ">
        {{__('Like')}} ({{$total_likes}})
    </div>
</button>
