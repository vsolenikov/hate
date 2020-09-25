<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App;

class Task extends Model
{
    /**
     * Массово присваиваемые атрибуты.
     *
     * @var array
     */
    protected $fillable = ['name'];
    protected $casts = [
        'user_id' => 'int',
    ];
    /**
     * Получить пользователя - владельца данной задачи
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }


}/*
$user = App\User::find(1);
*/
$user = App\User::find(1);

foreach ($user->tasks as $task) {
    echo $task->name;
}
