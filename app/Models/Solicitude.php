<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Solicitude extends Model
{
    use HasFactory;

    public function scopeSearchID($query, $searchID) {
    	if ($searchID) {
    		return $query->where('id','like',"%$searchID%");
    	}
    }
    public function scopeForm($query, $form) {
    	if ($form) {
    		return $query->where('form','like',"%$form%");
    	}
    }
    public function scopeMode($query, $mode) {
    	if ($mode) {
    		return $query->where('mode','like',"%$mode%");
    	}
    }
    public function scopeSubmode($query, $submode) {
    	if ($submode) {
    		return $query->where('submode','like',"%$submode%");
    	}
    }
}
