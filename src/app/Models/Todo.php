<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Todo extends Model
{
    use HasFactory, SoftDeletes;

    /****************
     * リレーション定義
     */
    /**
     * トラッカー
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<Todo>
     */
    public function todos()
    {
        return $this->hasMany(Todo::class);
    }
}
