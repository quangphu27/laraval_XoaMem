<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SinhVien;
class SinhVienController extends Controller
{
    public function index()
    {
        // Lấy tất cả dữ liệu từ bảng sinhvien
        $sinhviens = SinhVien::all();
        return view('sinhvien.index', ['sinhviens' => $sinhviens]);
    }
    public function XoaMem($masv)
    {
        // Tìm sinh viên theo masv
        $sinhvien = SinhVien::where('masv', $masv)->first();
        SinhVien::where('masv', $masv)->update(['trangThai' => 0]);
        //Quay lại trang danh sách SV
        $sinhviens = SinhVien::all();
        return view('sinhvien.index', ['sinhviens' => $sinhviens]);
    }
}
