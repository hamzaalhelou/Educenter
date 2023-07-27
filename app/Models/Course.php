<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function teacher() {
        return $this->belongsTo(Teacher::class)->withDefault();
    }
    public function users() {
        return $this->belongsToMany(User::class);
    }
}



