<!DOCTYPE html>
<html>
<head>
    <title>Danh sách sinh viên</title>
</head>
<body>
    <h1>Danh sách sinh viên</h1>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Họ tên</th>
                <th>Mã SV</th>
                <th>Trạng thái</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sinhviens as $sinhvien)
                <tr>
                    <td>{{ $sinhvien->hoten }}</td>
                    <td>{{ $sinhvien->masv }}</td>
                    <td>{{ $sinhvien->trangThai }}</td>
                    <td>
                        <form action="{{ route('sinhvien.xoaMem', $sinhvien->masv) }}" method="POST">
                            @csrf
                            <button type="submit" onclick="return confirm('Bạn có chắc chắn muốn cập nhật trạng thái sinh viên này không?');">
                                Xóa
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
