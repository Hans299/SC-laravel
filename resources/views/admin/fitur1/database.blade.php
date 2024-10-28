@extends('admin.fitur1.layout')
@section('content')
<h3 class="text-center" style="color: maroon">CONTENT STORAGE</h3>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" class="text-center">No</th>
                    <th scope="col" class="text-center">JUDUL</th>
                    <th scope="col" class="text-center">ISI</th>
                    <th scope="col" class="text-center">GAMBAR</th>
                    <th scope="col" class="text-center">EDIT</th>
                    <th scope="col" class="text-center">PUBLISH</th>
                    <th scope="col" class="text-center">DELETE</th>
                </tr>
            </thead>
            <tbody style="text-align: center">
                @foreach ($data as $cetak)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $cetak->judul }}</td>
                    <td>{{ $cetak->isi }}</td>
                    <td>{{ $cetak->gambar }}</td>
                    <td>
                        <a href="/admin/fitur1/edit/{{ $cetak->id }}">
                            <button type="submit" class="btn btn-warning m-2">edit</button>
                        </a>
                        
                    </td>
                    <td>
                        @if($cetak->status=="pending")
                            <form action="{{ route('admin.update-status',$cetak->id) }}" method="POST">
                                @csrf
                                @method('put')
                                <input type="hidden" name="status" value="publish">
                                <button type="submit" class="btn btn-success m-2">publish</button>
                            </form>
                        @elseif($cetak->status=="publish")
                        <form action="{{ route('admin.update-status',$cetak->id) }} "method="POST">
                            @csrf
                            @method('put')
                            <input type="hidden" name="status" value="pending">
                            <button type="submit" class="btn btn-secondary m-2">pending</button>
                        </form>
                        @endif
                    </td>
                    <td>
                        <a href="/admin/fitur1/hapus/{{ $cetak->id }}">
                            <button type="submit" class="btn btn-danger m-2">delate</button>
                        </a>             
                    </td>
                </tr>    
                @endforeach
                
            </tbody>
        </table>
@endsection