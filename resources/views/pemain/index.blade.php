@extends('layouts.layout')

@section('title', 'Pemain Sepak Bola')

@section('content')

<div class="card">
    <div class="card-header">
        Daftar Pemain Bola
    </div>

    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Pemain</th>
                    <th>Nomor Punggung</th>
                    <th>Posisi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($daftar_pemain as $pemain)

                <tr>
                    <td>{{ $pemain->id }}</td>
                    <td>{{ $pemain->nama_pemain }}</td>
                    <td>{{ $pemain->no_punggung }}</td>
                    <td>{{ $pemain->posisi }}</td>
                </tr>
                
                @endforeach
            </tbody>
        </table>
    </div>

</div>

@endsection