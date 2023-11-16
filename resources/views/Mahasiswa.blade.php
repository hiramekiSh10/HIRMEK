@extends('layouts/main')

@section('container')
<h1>Halaman Mahasiswa</h1>
 <div class="row">
    <div class="col-sm-8">
        <h4>Tabel Mahasiswa</h4>
        <table class = "table table-sm table-danger table-hover"> 
            <tr>
                <thead>
                    <th>npm</th>
                    <TH>nama</TH>
                    <th>jenis kelamin</th>
                    <th>tanggal lahir</th>
                    <th>tempat tinggal</th>
                </thead>
            </tr>
            <tbody>
                <tr>
                    <td>123</td>
                    <td>ilham</td>
                    <td>LK</td>
                    <td>01-1-2003</td>
                    <td>aceh</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="col-sm-4">
        <h4>Form Mahasiswa</h4>
    </div>
 </div> 
 
@endsection