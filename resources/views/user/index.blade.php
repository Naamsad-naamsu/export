
@extends('layouts.material')

@section('content')

                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Employee List</h3>
                                
                                <form action="{{ route('import-file') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group mb-5" style="max-width: 300px; margin: 10 auto;">
                                        <div class="custom-file text-left">
                                            <!-- <input type="file" name="file" class="custom-file-input" id="customFile"> -->
                                            <!-- <label class="custom-file-label" for="customFile">Browse file</label> -->
                                            <input type="file" name="file" /></span>
                                        </div>
                                    </div>
                                    <button class="btn btn-danger pull-left">Click to Import</button>
                                </form>
                                <a href="{{ url('export-File') }}" class="btn btn-success pull-left">Click to Export</a>
           
                                <a href="{{ url('users/create') }}" class="btn btn-success pull-right">Create</a>
                                </div>
                                    <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="table-responsive">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Code</th>
                                                    <th>Name</th>
                                                    <th>Department</th>
                                                    <th>Qualification</th>
                                                    <th>Age</th>
                                                    <th>Experience</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php $i=0 ?>
                                            @foreach($user as $key => $users)
                                                <tr>
                                                    <td>{{ ++$i}}</td>
                                                    <td>{{ $users->code }}</td>
                                                    <td>{{ $users->name }}</td>
                                                    <td>{{ $users->department }}</td>
                                                    <td>{{ $users->qualification }}</td>
                                                    <td>{{ $users->age }}</td>
                                                    <td>{{ $users->experience }}</td>
                                                    <td> <a href="{{ url('users/'.$users->id) }}" title="{{trans('users.view')}}" class="waves-effect waves-light btn btn-info btn-xs">View</a></td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

@endsection
