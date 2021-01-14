@extends('layouts.app')

@section('content')
    <div class="contaniner">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <div class="card">
                    <div class="card-header h3">
                        เเสดงผลข้อมูลประเภทหนังสือ [ทั้งหมด {{ $count }} รายการ]
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>รหัส</th>
                                <th>ประเภทหนังสือ</th>
                                <th>เครื่องมือ</th>
                            </tr>
                            @foreach ($typebooks as $typebook)
                                <tr>
                                    <td>{{ $typebook->id }}</td>
                                    <td>{{ $typebook->name }}</td>
                                    {{-- issue 404 page
                                    <td><a href="{{ url('/typebooks/destroy/'.$typebook->id)}}">ลบ</a></td> 
                                    --}}
                                    <td><a href="{{ url('/typebooks/destroy/'.$typebook->id)}}">ลบ</a></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection