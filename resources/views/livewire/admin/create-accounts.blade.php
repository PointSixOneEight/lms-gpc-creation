<x-app-layout>
<div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">

              <div class="col-sm-6">
                <h1 class="m-0 text-dark">Register</h1>
              </div><!-- /.col -->

              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                  <li class="breadcrumb-item active">Accounts</li>
				  <li class="breadcrumb-item active">Register</li>
                </ol>
              </div><!-- /.col -->

            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
</div><!-- /.container-header -->

<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 offset-md-2 mb-2 ">
<div class="card h-100">
	<div class="card-body">
	<form action="">
		<div class="row gutters text-muted ">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h6 class="mb-2 text-primary">Register</h6>
			</div>
		
			<!-- First Name -->
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="surname">Firt Name</label>
					<input type="text" class="form-control" id="surname" placeholder="First Name">
				</div>
			</div>

			<!-- Middle Name -->
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="first_name">Middle Name</label>
					<input type="text" class="form-control" id="first_name" placeholder="Middle Name">
				</div>
			</div>

			<!-- Last Name -->
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="middle_name">Last Name</label>
					<input type="text" class="form-control" id="middle_name" placeholder="Last Name">
				</div>
			</div>

			<!-- Email -->
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="username">Email</label>
					<input type="text" class="form-control" id="username" placeholder="Email Address">
				</div>
			</div>

			<!-- Password -->
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="middle_name">Password</label>
					<input type="password" class="form-control" id="middle_name" placeholder="Password">
				</div>
			</div>

			<!-- Confirm Password -->
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="middle_name">Confirm Password</label>
					<input type="password" class="form-control  @error('details') is-invalid @enderror" placeholder="Confirm Password" wire:model.defer="state.details">
					@error('details')<div class="invalid-feedback"> {{ $message }} </div>@enderror
				</div>
			</div>

			

		</div>
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="text-right">
					<button class="btn btn-danger" wire:click.defer="cancel">Cancel</button>
					
					<button type="submit"  class="btn btn-primary">Update</button>

				</div>
			</div>
		</div>
	</form>
	</div>


</div><!-- ./main-card mb-3 card -->
</div>

</x-app-layout>

<style>
 
.account-settings .user-profile {
    margin: 0 0 1rem 0;
    padding-bottom: 1rem;
    text-align: center;
}
.account-settings .user-profile .user-avatar {
    margin: 0 0 1rem 0;
}
.account-settings .user-profile .user-avatar img {
    width: 90px;
    height: 90px;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    border-radius: 100px;
}
.account-settings .user-profile h5.user-name {
    margin: 0 0 0.5rem 0;
}
.account-settings .user-profile h6.user-email {
    margin: 0;
    font-size: 0.8rem;
    font-weight: 400;
    color: #9fa8b9;
}
.account-settings .about {
    margin: 2rem 0 0 0;
    text-align: center;
}
.account-settings .about h5 {
    margin: 0 0 15px 0;
    color: #007ae1;
}
.account-settings .about p {
    font-size: 0.825rem;
}
.form-control {
    border: 1px solid #cfd1d8;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    font-size: .825rem;
    background: #ffffff;
    color: #2e323c;
}

.card {
    background: #ffffff;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 0;
    margin-bottom: 1rem;
}

</style>
