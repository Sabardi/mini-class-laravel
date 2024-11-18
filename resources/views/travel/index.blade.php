@extends('layouts.app')

@section('content')
<div class="table-responsive">
    <a href="{{ route('travel.create') }}" class="btn btn-primary">
        Tambah Data
    </a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">description</th>
                <th scope="col">location</th>
                <th scope="col">budget</th>
                <th scope="col">aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($travels as $travel)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{$travel->name}}</td>
                <td>{{$travel->description}}</td>
                <td>{{$travel->location}}</td>
                <td>Rp. {{$travel->budget}}</td>
                <td>
                    <a href="{{ route('travel.edit', $travel->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('travel.destroy', $travel->id) }}" method="post" class="d-inline">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <div class="text-center">
                <p>Tidak ada data</p>
            </div>
            @endforelse
           
        </tbody>
    </table>
</div>
@endsection
<h1>hallo</h1>


