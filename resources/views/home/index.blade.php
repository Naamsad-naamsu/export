@extends('layouts.material')

@section('content')
        <div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h4 class="page-title">Dashboard</h4>
				</div>

			</div>
		</div>
<section class="content">
			<div class="row">
				<div class="col-xl-8 col-12">
					<div class="box">
                        <div class="box-body text-center">
                            <div class="mb-20 mt-20">
                                <img src="../images/avatar/avatar-12.png" width="150" class="rounded-circle bg-info-light" alt="user">
                                <h4 class="mt-20 mb-0">{{$user->name}}</h4>
                                <a href="mailto:dummy@gmail.com">{{$user->email}}</a>
                            </div>
                            <div class="badge badge-pill badge-info-light font-size-16">Dashboard</div>
                        </div>
                    </div>
			   </div>
			</div>

		</section>
@endsection
