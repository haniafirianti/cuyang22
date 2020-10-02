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
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal-edit"><i class="fa fa-edit"></i></button>
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

@section('modal')
<div class="modal inmodal fade" id="myModal-edit" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Contacts</h4>
            </div>
            <div class="modal-body">
                <form action="{{ url('contacts/update/'.$contact->id) }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="new-password" class="col-md-8 control-label">Judul</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="title" value="{{ $contact->title }}">
                            @error('title')
                            <label class="error mt-2 text-danger">
                                {{ $message }}
                            </label>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="new-password" class="col-md-8 control-label">Pesan</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="description" value="{{ $contact->description }}">
                            @error('description')
                            <label class="error mt-2 text-danger">
                                {{ $message }}
                            </label>
                            @enderror
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="_method" value="PUT">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>


@endsection