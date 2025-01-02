<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'title','body','category_id'
    ];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function tagStr(){
        $tagArray = [];
        foreach($this->tags as $t){
            $tagArray[] = $t->title;
        }
        $tagStr = implode(',',$tagArray);
        return $tagStr;
    }
}
