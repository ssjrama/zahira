@extends('layouts.admin')
@section('content')    
<main class="dash-content">
    <div class="container-fluid">
       <a href="/keuangan/create" class="btn btn-primary">Tambah Data Keuangan</a>
       @if (count($keuangan)>0)
            <table class="table table-striped">
                <tr>
                    <th>Pemasukan</th>
                    <th>Pengeluaran</th>
                    <th>Keuntungan</th>
                    <th>Tanggal</th>
                    <th></th>
                    <th></th>
                </tr>
            @foreach ($keuangan as $k)
                <tr>
                    <td>{{$k->pengeluaran}}</td>
                    <td>{{$k->pemasukan}}</td>
                    <td>{{$k->keuntungan}}</td>
                    <td>{{$k->created_at}}</td>
                    <td><a href="/keuangan/{{$k->id}}/edit" class="btn btn-success">Edit</a></td>
                    <td>
                        <form action="/keuangan/{{$k->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
           </table>        
       @else
       @endif
    </div>
</main>
@endsection