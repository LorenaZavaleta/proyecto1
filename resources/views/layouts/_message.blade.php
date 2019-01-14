@if (session()->has('message'))
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
			<div class="form-group">
				<div class="alert alert-success col-md-6 control-label">
  					<strong>{{ session()->get('message') }}</strong>
				</div>
			</div>
		</div>
	</div>
</div>
@endif
@if (session()->has('messageerror'))
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
			<div class="form-group">
				<div class="alert alert-danger col-md-6 control-label">
  					<strong>{{ session()->get('messageerror') }}</strong>
				</div>
			</div>
		</div>
	</div>
</div>
@endif