<?php

namespace Laraveldesign\LikeButton\Livewire;

use Illuminate\Support\Facades\Auth;
use Laraveldesign\LikeButton\Models\Like;
use Livewire\Component;

class LikeButton extends Component
{

    public $model_id;
    public $model_class;
    public $total_likes;
    public $i_like;

    public function mount($model)
    {
        $this->model_id = $model->id;
        $this->model_class = get_class($model);
        $this->calculate();
    }

    public function calculate()
    {
        $params = [
            ['model_id', '=', $this->model_id],
            ['model_class', '=', $this->model_class]
        ];
        $this->total_likes = Like::where($params)->count();
        $this->i_like = $this->currentLike();
    }

    public function currentLike()
    {
        if (Auth::check()) {
            return Like::where([
                'model_id' => $this->model_id,
                'model_class' => $this->model_class,
                'user_id' => auth()->user()->id
            ])->first();
        }
        return false;

    }

    public function like()
    {
        if (Auth::check()) {
            $test = $this->currentLike();
            if ($test) {
                $test->delete();
            } else {
                Like::create([
                    'user_id' => auth()->user()->id,
                    'model_id' => $this->model_id,
                    'model_class' => $this->model_class
                ]);
            }
            $this->calculate();
        }
    }

    public function render()
    {
        return view('like-button::livewire.like-button');
    }
}
