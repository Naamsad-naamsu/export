
@extends('layouts.material')

@section('content')

<div class="content">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form  method="POST" action="{{ route('users.update',[$user->id]) }}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{ method_field('PATCH') }}
                    <div class="box-header with-border">
                      <h4 class="box-title">User Management</h4>
                       @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
					</div>

                    <div class="box-body">
                    <div class="row">
                        
                        <div class="col-md-6">
                                <div class="form-group">
                                    <label>Code</label>
                                    <input type="text" class="form-control"  name="code" value="{{ old('code',$user->code) }}" disabled="">
                                </div>
                        </div>
                        <div class="col-md-6">
                                <div class="form-group {{$errors->has('name') ? 'has-error': ''}}">
                                    <label>Name</label>
                                    <input type="text" class="form-control"  name="name" value="{{ old('name',$user->name) }}" placeholder="Enter Name">
                                </div>
                        </div>

                    </div>
                    <div class="row">
                    
                        <div class="col-md-6">
                                <div class="form-group">
                                    <label>Department</label>
                                    <input type="text" class="form-control"  name="department" value="{{ old('department',$user->department) }}" placeholder="Enter Department">
                                </div>
                        </div>
                        <div class="col-md-6">
                                <div class="form-group {{$errors->has('qualification') ? 'has-error': ''}}">
                                    <label>Qualification</label>
                                    <input type="text" class="form-control"  name="qualification" value="{{ old('qualification',$user->qualification) }}" placeholder="Enter Qualification">
                                </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                                <div class="form-group">
                                    <label>Age</label>
                                    <input type="text" class="form-control"  name="age" value="{{ old('age',$user->age) }}" placeholder="Enter Age" pattern="[0-9]+">
                                </div>
                        </div>
                        <div class="col-md-6">
                                <div class="form-group">
                                    <label>Experience</label>
                                    <input type="text" class="form-control"  name="experience" value="{{ old('experience',$user->experience) }}" placeholder="Enter Experience">
                                </div>
                        </div>
                    </div>


                        <div class="card-footer">
                        <button type="reset" class="btn btn-rounded btn-warning btn-outline mr-1">
								  <i class="ti-trash"></i> Cancel  <div class="ripple-container"></div></button>
                        <button type="submit" class="btn btn-rounded btn-primary btn-outline">
								  <i class="ti-save-alt"></i> Update  <div class="ripple-container"></div></button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>

</div>
@endsection
