@extends('layout.master')
@section('body')
<div class="container" style="height: 100vh">
	<div class="row">
		<div class="col-lg-8" style="margin: auto;">
			<div class="card">
				<div class="card-header">Reset Password</div>
				<div class="card-body">
					@if (session('status'))
					<div class="alert alert-success">
						{{ session('status') }}
					</div>
					@endif

					<form style="margin-left: 10%;" class="form-horizontal" method="POST" action="{{ Route('sendlink') }}">
						{{ csrf_field() }}

						<div class="row form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							<label for="email" class="col-lg-3 col-form-label">E-Mail Address</label>

							<div class="col-lg-7">
								<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

								@if ($errors->has('email'))
								<span class="help-block">
									<strong>{{ $errors->first('email') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="row form-group">
							<div class="col-lg-3">
								
							</div>
							<div class="col-lg-8">
								<button type="submit" class="btn btn-success">
									Send Password Reset Link
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection