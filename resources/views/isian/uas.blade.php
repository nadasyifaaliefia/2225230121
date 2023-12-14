@extends('layout.nadsyif')
@section('kontent')
<h3>Input Data Hobi dan Cita-Cita Mahasiswa Untirta</h3>
<form method="POST" action="/isian" >
    @csrf
    <div class="mb-3">
        <label for="Nama" class="form-label">Nama:</label>
        <input type="text" id="Nama" name="Nama" class="form-control" placeholder="Nama Lengkap" value="{{Session::get('Nama')}}">
    </div>
    <div class="mb-3">
        <label for="Hobi" class="form-label">Hobi:</label>
        <input type="text" id="Hobi" name="Hobi" class="form-control" placeholder="Mis.Memasak" value="{{Session::get('Hobi')}}">
    </div>
    <div class="mb-3">
        <label for="CitaCita" class="form-label">CitaCita:</label>
        <input type="text" id="CitaCita" name="CitaCita" class="form-control" placeholder="Mis.Dokter" value="{{Session::get('CitaCita')}}">
    </div>
    <div class="mb-3">
        <label for="NIM" class="form-label">NIM:</label>
        <input type="Number" id="NIM" name="NIM" class="form-control" placeholder="Mis.2225000000" value="{(Session::get('NIM'))}">
    </div>
    <div class="mb-3">
        <button>Submit</button>
    </div>
</form>
@endsection
