@extends('layouts.master')

@section('content')

<div class="main-content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="dataTables" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Email</th>
                                <th>Judul</th>
                                <th>Pesan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contacts as $i=>$contact)
                            <tr>
                                <td>{{ $i+1 }}</td>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->title }}</td>
                                <td>{{ $contact->description }}</td>

                                <td>
                                    <form action="{{ url('contacts/'.$contact->id) }}" method="post">
                                        <button type="submit" name="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE">
                                    </form>
                                </td>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
