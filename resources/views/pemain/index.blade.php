@extends('layouts.master')

@section('title','pemain')
@section('content')
@include('components.navbar')
<div class="p-4">
    <table class="table ">
        <thead>
          <tr>
            <th scope="col">no</th>
            <th scope="col">nama pemain</th>
            <th scope="col">no pemain</th>
            <th scope="col">posisi</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($pemain as $pemain)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$pemain->nama_pemain}}</td>
                <td>{{$pemain->no_punggung}}</td>
                <td>{{$pemain->posisi}}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
</div>
@endsection
