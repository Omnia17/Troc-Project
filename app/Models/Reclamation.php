<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reclamation extends Model
{
    use HasFactory;



    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'title',
        'image',
        'description',
        "status",

    ];




    public function user()
    {
        return $this->belongsTo(User::class);
    }










}
