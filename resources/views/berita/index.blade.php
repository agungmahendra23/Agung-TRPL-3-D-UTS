<html>
@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Berita</div>

                <div class="card-body">

                    <a href="{!! route('berita.create') !!}" class="btn btn-success">Tambah Data</a>

                    <table border="1">
                        <tr>
                            <td>ID</td>
                            <td>Judul</td>
                            <td>Isi</td>
                            <td>Kategori Id</td>
                            <td>Users Id</td>
                            <td>Create</td>
                            <td>Update</td>
                            <td>Aksi</td>
                        </tr>

                        @foreach($listBerita as $item)

                        <tr>
                            <td>{!! $item->id !!}</td>
                            <td>{!! $item->judul !!}</td>
                            <td>{!! $item->isi !!}</td>
                            <td>{!! $item->kategori_berita_id !!}</td>
                            <td>{!! $item->users_id !!}</td>                           
                            <td>{!! $item->created_at->format ('d/m/Y H:i:s') !!}</td>
                            <td>{!! $item->updated_at->format ('d/m/Y H:i:s') !!}</td>

                            
                            <td>
                                <a href="{!! route('berita.show', [$item->id]) !!} "class="btn btn-sm btn-primary" > 
                                Lihat 
                                </a>
                                <a href="{!! route('berita.edit', [$item->id]) !!} "class="btn btn-sm btn-warning" > 
                                Edit
                                </a>
                                {!! Form::open(['route' => ['berita.destroy', $item->id],'method'=>'delete']) !!}

                                {!! Form::submit('Hapus',['class'=>'btn btn-sm btn-danger','onclick'=>"return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini ?')"]); !!}

                                {!! Form::close() !!}
                            </td>
                        </tr>

                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

    