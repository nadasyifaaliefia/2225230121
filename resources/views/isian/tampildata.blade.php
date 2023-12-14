@extends('layout.nadsyif')
@section('kontent')
<h4><a href="/" class="btn btn-primary">Tambah Data Mahasiswa</a>
<table class=table border= "2" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Hobi</th>
            <th>CitaCita</th>
            <th>NIM</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <td>{{$item->Nama}}</td>
            <td>{{$item->Hobi}}</td>
            <td>{{$item->CitaCita}}</td>
            <td>{{$item->NIM}}</td>   
            <td>
                <a class='btn btn-warning btn-sm' href="{{url('/isian/'.$item->Nama.'/edit')}}">Edit</a>
                <form onsubmit="return confirm('Apakah Anda Yakin?')" class="d-inline" action="{{'/isian/'.$item->Nama}}" method="post"> @csrf @method('DELETE')
                <button class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>          
        </tr>
       @endforeach 
    </tbody>
</table>
@endsection