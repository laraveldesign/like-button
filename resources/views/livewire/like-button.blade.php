<div x-data="{ show:false }" class="w-full relative rounded-lg shadow p-2 border-2 border-gray-200 bg-white">
    <div class="flex justify-between">
        <div class="flex">
                <button class="focus:outline-none bg-gray-100 shadow flex items-center p-2 rounded"
                        @click="show=!show">
                    <div class="mr-1">
                        @if($current_like_type)
                            <x-like-button::icon type="{{$current_like_type}}"/>
                        @else
                            <x-like-button::icon type="like"/>
                        @endif
                    </div>

                    <div>
                        @if($current_like_type)
                            <div>
                                {{ucfirst($current_like_type)}} ({{$total_all}})
                            </div>
                        @else
                            <div>
                                Like ({{$total_all}})
                            </div>
                        @endif
                    </div>

                </button>
            <div @click.away="show=false" style="display:none;" x-show="show" class="
        absolute shadow rounded-lg flex -top-14 bg-white p-2 whitespace-nowrap
    ">
                @php
                    $buttons = [
                        'like','love','care','haha','wow','sad','angry'
                    ];
                @endphp
                @foreach($buttons as $button)
                    <div class="mr-1 mt-1">
                        <button
                            title="{{ucfirst($button)}}"
                            class="
                            flex
                            focus:outline-none p-1 rounded-lg
                            @if($current_like_type === $button)
                                bg-gray-100
                            @else
                                bg-white
                            @endif
                                "
                            wire:click="like('{{$button}}')">
                            <x-like-button::icon type="{{$button}}"></x-like-button::icon>
                            <span>({{\Laraveldesign\LikeButton\Livewire\LikeButton::getVoteCount($button,$model_id,$model_class)}})</span>
                        </button>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
