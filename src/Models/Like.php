<?php
namespace Laraveldesign\LikeButton\Models;

use Illuminate\Database\Eloquent\Model;

class Like extends Model {
    protected $fillable = [
        'user_id',
        'model_id',
        'model_class',
        'type'
    ];
}
