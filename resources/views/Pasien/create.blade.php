@extends('layouts.app')
@section('content') 
<div class="container"> 
    <h3>Tambah Data Pasien</h3> 
     <form action="{{ url('/pasien') }}" method="POST"> 
        @csrf 
        <div class="mb-3"> 
             <label>NIK</label> 
             <input type="text" class="form-control" name="pasien_nik"> 
             </div> 
        <div class="mb-3"> 
            <label>NAMA</label> 
            <input type="text" class="form-control" name="pasien_nama"> 
            </div> 
        <div class="mb-3"> 
            <label>ALAMAT</label> 
            <textarea class="form-control" name="pasien_alamat"></textarea>  
            </div> 
        <div class="mb-3"> 
            <label>JENIS KELAMIN</label> 
            <input type="text" class="form-control" name="pasien_jeniskelamin">
            </div> 
        <div class="mb-3"> 
            <label>GOLONGAN DARAH</label> 
            <input type="text" class="form-control" name="pasien_goldarah"> 
            </div> 
        <div class="mb-3"> 
            <label>NO.HP</label> 
            <input type="text" class="form-control" name="pasien_nohp"> 
            </div> 
        <div class="mb-3"> 
            <input type="submit" value="SIMPAN"> 
            </div> 
            </form> 
        </div> 
 @endsection