<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TypeBooks; // นำเอาโมเดล TyepBooks เข้ามาใช้งาน

class TypeBooksController extends Controller
{
    //
    public function index(){
        $typebooks = TypeBooks::all(); // เเสดงข้อมูลยังหมด
    //  $typebooks = TypeBooks::orderBy('id','desc')->get(); // เเสดงข้อมูลทั้งหมดเรียงจากมากไปหาน้อยโดยใช้ id
        
        $count = TypeBooks::count(); // นำจำนวนเเถวทั้งหมด
        return view('typebooks.index',[
            'typebooks' => $typebooks,
            'count' => $count
        ]); // ส่งไปที่ view โฟล์เดอร์ typebooks ไฟล์ index.blade.php
    }

    public function destroy($id) {
        // TypeBooks::find($id)->delete();
        TypeBooks::destroy($id);
        return back();
    }
}
