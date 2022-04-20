<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Node extends Model
{
    use HasFactory;

    private $height = 0;
    protected $appends = ['height'];




    protected $fillable = ['name', 'parent_id', 'type', 'department_name', 'programming_language'];

    
    public function children(){

        return $this->hasMany(Node::class, 'parent_id', 'id');

    }

    public function getHeightAttribute()
    {
        return $this->calculateHeight($this);
    }

    public function parent(){
        return $this->belongsTo(Node::class);

    }

    private function calculateHeight($currentNode){
       
        
        if($currentNode->parent_id){
            $this->height += 1;

           
            return $this->calculateHeight($currentNode->parent);

        }else{
            return $this->height;

        }

    }

}
