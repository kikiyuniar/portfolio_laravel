@extends('layouts.master')

@section('title')
    About Us
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">About Us</h4>

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Add</button>
                
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add About Us</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>

                            <form action="/save-aboutus" method="">
                                {{csrf_field()}}
                                {{method_field('post')}}

                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Title :</label>
                                        <input type="text" name="title" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Sub-Title :</label>
                                        <input type="text" class="form-control" name="subtitle" id="recipient-name"></input>
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Description :</label>
                                        <textarea class="form-control" name="description" id="message-text"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Send message</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>Id</th>
                            <th>Title</th>
                            <th>Subtitle</th>
                            <th>Description</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>

                            <tr>
                                <td>Dakota Rice</td>
                                <td>Dakota Rice</td>
                                <td>Dakota Rice</td>
                                <td>Dakota Rice</td>
                                
                                <td>
                                    <a href="#" class="btn btn-info">Edit</a>
                                </td>    
                                <td>
                                    <form action="#" method="post">
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            
                            {{--  @foreach ($users as $row)
                            
                            
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->phone }}</td>
                                <td>{{ $row->email }}</td>
                                <td>{{ $row->usertype }}</td>
                                <td>
                                    <a href="/role-edit/{{ $row->id }}" class="btn btn-info">Edit</a>
                                </td>    
                                <td>
                                    <form action="/role-delete/{{ $row->id }}" method="post">
                                        {{csrf_field()}}
                                        {{method_field('delete')}}
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach  --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    
@endsection