<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    //
    protected $table = 'books'; // กำหนดชื่อตารางให้ตรงกับฐานข้อมูล
    protected $fillable = ['title','price','typebooks_id']; // กำหนด ให้สามารถเพิ่มข้อมูลได้ในคำสั่งเดียว Mass Assignment
}
