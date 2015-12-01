<?php namespace App;
use Eloquent as Model;

class Article extends Model {
//    protected $table = 'my_users'; //设定数据表
//    protected  $primaryKey="other_id";//设定主键
//    protected $connection ="xx"//更换连接属性
    protected $fillable = array('title','intro','status');
    protected $guarded = ['id'];
    
    public function test(){
//        return $this->all()->toArray();
        
        DB::table('articles')->increment('status', 1, ['title' => 'aaa']);
    }
    
    public function scopeTop($query,$num){
        return $query->take($num);
    }
}
