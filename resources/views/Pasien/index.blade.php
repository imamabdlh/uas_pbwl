@extends('layouts.app')
@section('content') 
<div class="container"> 
    <h3>Daftar Pasien </h3>
    <a class="btn btn-primary btn-sm" href="{{ url('pasien/create') }}">Tambah Data</a>
    <br><br>
    <table class="table table-bordered"> 
         <tr> 
             <td>NIK</td> 
              <td>NAMA</td> 
               <td>ALAMAT</td>
                <td>JENIS KELAMIN</td>
                <td>GOLONGAN DARAH</td>
                <td>NO.HP</td>


            </tr> 
             @foreach($rows as $row) 
              <tr> 
                <td>{{ $row->pasien_nik }}</td>
                <td>{{ $row->pasien_nama }}</td>
                <td>{{ $row->pasien_alamat }}</td>
                <td>{{ $row->pasien_jeniskelamin }}</td>
                <td>{{ $row->pasien_goldarah }}</td>
                <td>{{ $row->pasien_nohp }}</td>
                <td><a class="btn btn-warning btn-sm" href="{{ url('pasien/' . $row->pasien_id . '/edit') }}">Edit</a></td>
                <td>
    
                    <form action="{{ url('pasien/' . $row->pasien_id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
                 </tr> 
                  @endforeach 
                 </table>
                 </div> 
                 @endsection