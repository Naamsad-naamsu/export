
@extends('layouts.material')

@section('content')

<div class="content">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form  method="POST" action="{{route('users.store')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="box-header with-border">
                      <h4 class="box-title">Create User</h4>
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
                                        <input type="text" class="form-control"  name="code" value="{{ old('code') }}" placeholder="Enter Code">
                                    </div>
                            </div>
                            <div class="col-md-6">
                                    <div class="form-group {{$errors->has('name') ? 'has-error': ''}}">
                                        <label>Name</label>
                                        <input type="text" class="form-control"  name="name" value="{{ old('name') }}" placeholder="Enter Name">
                                    </div>
                            </div>

                        </div>
                        <div class="row">
                        
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Department</label>
                                        <input type="text" class="form-control"  name="department" value="{{ old('department') }}" placeholder="Enter Department">
                                    </div>
                            </div>
                            <div class="col-md-6">
                                    <div class="form-group {{$errors->has('qualification') ? 'has-error': ''}}">
                                        <label>Qualification</label>
                                        <input type="text" class="form-control"  name="qualification" value="{{ old('qualification') }}" placeholder="Enter Qualification">
                                    </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Age</label>
                                        <input type="text" class="form-control"  name="age" value="{{ old('age') }}" placeholder="Enter Age" pattern="[0-9]+">
                                    </div>
                            </div>
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Experience</label>
                                        <input type="text" class="form-control"  name="experience" value="{{ old('experience') }}" placeholder="Enter Experience">
                                    </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="reset" class="btn btn-rounded btn-warning btn-outline mr-1">
								  <i class="ti-trash"></i> Cancel  <div class="ripple-container"></div></button>
                            <button type="submit" class="btn btn-rounded btn-primary btn-outline">
								  <i class="ti-save-alt"></i>  Submit  <div class="ripple-container"></div></button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>

</div>
@endsection
@section('script')
<script>
$(document).ready(function() {
$('.mdb-select').materialSelect();
});
</script>

@endsection
