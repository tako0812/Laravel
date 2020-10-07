<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'product';
    
    protected $fillable = ['name', 'detail','title','price'];
    // 追加：ミューテタ
    // public function setNameAttribute($value)
    // {
    //     if (!preg_match('/^【Task】/', $value)) {
    //         $this->attributes['name'] = '【Task】' . $value;
    //     } else {
    //         $this->attributes['name'] = $value;
    //     }
    // }

    // 追加：アクセサ
    public function getDeadlineAttribute($value)
    {
        return date('Y-m-d',  strtotime($value));
    }
    
    public function get_product()
    {
        // $ret = $this->where('user_id', $id)->get();
        $ret=$this->latest()->get();
        return $ret;
    }
    public function get_product_by_id($id)
    {   
        return $this->where('id', $id)->first();
        // return Product::find($id);

    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
