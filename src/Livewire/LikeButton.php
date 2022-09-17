<?php

namespace Laraveldesign\LikeButton\Livewire;

use App\Models\Like;
use Livewire\Component;

class LikeButton extends Component
{

    public $model;
    public $likes;
    public $loves;
    public $cares;
    public $hahas;
    public $wows;
    public $sads;
    public $angries;
    public $liked;

    public function mount($model)
    {
        $this->model = $model;
        if(\Auth::check()) {
            $this->calculate();
        }

    }

    public function like($type)
    {
        if ($this->hasLiked()) {
            $likes = \Laraveldesign\LikeButton\Models\Like::where([
                ['user_id', '=', auth()->user()->id],
                ['model_id', '=', $this->model->id],
                ['model_class', '=', get_class($this->model)]
            ])->get();
            foreach($likes as $like) {
                $like->delete();
            }
        }

        $like = new \Laraveldesign\LikeButton\Models\Like();
        $like->model_class = get_class($this->model);
        $like->model_id = $this->model->id;
        $like->user_id = auth()->user()->id;
        $like->type = $type;
        $like->save();

        $this->calculate();

    }

    public function hasLiked()
    {
        $liked = \Laraveldesign\LikeButton\Models\Like::where([
            ['user_id', '=', auth()->user()->id],
            ['model_id', '=', $this->model->id],
            ['model_class', '=', get_class($this->model)]
        ])->first();

        return $liked;
    }

    public function calculate() {
        $this->likes = \Laraveldesign\LikeButton\Models\Like::where([
            ['model_id','=',$this->model->id],
            ['model_class','=',get_class($this->model)],
            ['type','=','like']
        ])->count();
        $this->loves = \Laraveldesign\LikeButton\Models\Like::where([
            ['model_id','=',$this->model->id],
            ['model_class','=',get_class($this->model)],
            ['type','=','love']
        ])->count();
        $this->cares = \Laraveldesign\LikeButton\Models\Like::where([
            ['model_id','=',$this->model->id],
            ['model_class','=',get_class($this->model)],
            ['type','=','care']
        ])->count();
        $this->hahas = \Laraveldesign\LikeButton\Models\Like::where([
            ['model_id','=',$this->model->id],
            ['model_class','=',get_class($this->model)],
            ['type','=','haha']
        ])->count();
        $this->wows = \Laraveldesign\LikeButton\Models\Like::where([
            ['model_id','=',$this->model->id],
            ['model_class','=',get_class($this->model)],
            ['type','=','wow']
        ])->count();
        $this->sads = \Laraveldesign\LikeButton\Models\Like::where([
            ['model_id','=',$this->model->id],
            ['model_class','=',get_class($this->model)],
            ['type','=','sad']
        ])->count();
        $this->angries = \Laraveldesign\LikeButton\Models\Like::where([
            ['model_id','=',$this->model->id],
            ['model_class','=',get_class($this->model)],
            ['type','=','angry']
        ])->count();
        if($this->hasLiked()) {

            $this->liked = $this->hasLiked()->type;

        } else {
            $this->liked = "";
        }
    }

    public function render()
    {
        return view('like-button::livewire.like-button');
    }
}
