<?php

namespace Laraveldesign\LikeButton\Livewire;

use Illuminate\Support\Facades\Auth;
use Laraveldesign\LikeButton\Models\Like;
use Livewire\Component;

class LikeButton extends Component
{

    public $show;
    public $model_id;
    public $model_class;
    public $current_like_type;

    public $total_likes;
    public $total_loves;
    public $total_cares;
    public $total_hahas;
    public $total_wows;
    public $total_sads;
    public $total_angrys;

    public $total_all;

    public function mount($model)
    {
        $this->model_id = $model->id;
        $this->model_class = get_class($model);
        $this->calculate();
    }

    public function calculate()
    {
        $current_like = $this->currentLike();
        if ($current_like) {
            $this->current_like_type = $current_like->type;
        } else {
            $this->current_like_type = '';
        }
        $this->total_likes = self::getVoteCount('like',$this->model_id,$this->model_class);
        $this->total_loves = self::getVoteCount('love',$this->model_id,$this->model_class);
        $this->total_cares = self::getVoteCount('care',$this->model_id,$this->model_class);
        $this->total_hahas = self::getVoteCount('haha',$this->model_id,$this->model_class);
        $this->total_wows = self::getVoteCount('wow',$this->model_id,$this->model_class);
        $this->total_sads = self::getVoteCount('sad',$this->model_id,$this->model_class);
        $this->total_angrys = self::getVoteCount('angry',$this->model_id,$this->model_class);
        $this->total_all = self::getVoteCount('all',$this->model_id,$this->model_class);
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

    }

    public function like($type)
    {
        if(Auth::check()) {
            // check if like exists
            $test = $this->currentLike();
            if ($test) {
                //if not same type, change type
                if ($test->type !== $type) {
                    $test->type = $type;
                    $test->save();
                } else {
                    $test->delete();
                }
            } else {
                Like::create([
                    'user_id' => auth()->user()->id,
                    'model_id' => $this->model_id,
                    'model_class' => $this->model_class,
                    'type' => $type
                ]);
                $this->current_like_type = $type;

            }
            $this->calculate();
        }


    }

    public static function getVoteCount($type,$model_id,$model_class)
    {
        if(is_object($model_id)) {
            $model_class = get_class($model_id);
            $model_id = $model_id->id;
        }
        $params = [
            ['model_id','=', $model_id],
            ['model_class','=',$model_class]
        ];
        if ($type != 'all') {
            $params[] = ['type','=',$type];
        }
        return Like::where($params)->count();
    }

    public function render()
    {
        return view('like-button::livewire.like-button');
    }
}
