<div>
<div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">

              <div class="col-sm-6">
                <h1 class="m-0 text-dark">Subject</h1>
              </div><!-- /.col -->

              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                  <li class="breadcrumb-item active">Subject</li>
                </ol>
              </div><!-- /.col -->

            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
</div><!-- /.container-header -->


<div class="main-card mb-2 card p-1">
<div class="container">
<div class="row gutters">
<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card-body ">
		<div class="account-settings ">
			<div class="user-profile">
				<h4>{{ $subject->subject_name }}</h4>
				<h6>{{ $subject->class }}</h6>
			</div>
			<div class="about">
				<h5>SCHEDULE</h5>
				<p>{{ $subject->schedule }}</p>
			</div>
		</div>
	</div>
</div>
</div>
<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card-body">
		
     <!-- nav options -->
          <ul class="nav nav-pills  shadow-sm " id="pills-tab" role="tablist">
              <li class="nav-item"> <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Files</a> </li>
              <li class="nav-item"> <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Tasks</a> </li>
          </ul> <!-- content -->
          <div class="tab-content pt-2" id="pills-tabContent ">
              <!-- 1st card -->
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                  <div class="d-flex justify-content-between">
                    <button class="btn btn-success w-25" wire:click.defer="showFileModal">New</button>
                    <input class="form-control mr-sm-2 w-25 " type="search" placeholder="Search" aria-label="Search..." /> 
                </div>
                 
                  <ul class="content pt-1">
                      
                  <table class="align-middle mb-0 table table  table-hover ">
                    <thead class="text-muted">
                        <tr>
                        <th scope="col">Description</th>
                        <th scope="col">Date Uploaded</th>
                        <th scope="col">Date Modified</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    
                    <tbody >
              
                     <tr>
                       
                       <td class="text-muted pt-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi delectus temporibus sunt sapiente, eveniet minima dolor magnam dolore quae tenetur excepturi eligendi repellendus voluptas eius praesentium modi architecto, expedita recusandae.</td>
                     
                       <td class="text-muted pt-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi delectus temporibus sunt sapiente, eveniet minima dolor magnam dolore quae tenetur excepturi eligendi repellendus voluptas eius praesentium modi architecto, expedita recusandae.</td>

                       <td class="text-muted pt-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi delectus temporibus sunt sapiente, eveniet minima dolor magnam dolore quae tenetur excepturi eligendi repellendus voluptas eius praesentium modi architecto, expedita recusandae.</td>
                  
                     
                       <td class="text-center pt-4">
                          <button type="button" id="PopoverCustomT-1" class="btn btn-danger btn-sm  d-inline" ><i class="fas fa-trash"></i></button> 
                       </td>
                     </tr>
                    
                    </tbody>
                 </table>
            
                  </ul>
              </div> <!-- 2nd card -->
              <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                  <form class="search"> <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search..." /> </form>
                  <ul class="ccontent">
                      
                  <table class="align-middle mb-0 table table  table-hover ">
                    <thead class="text-muted">
                        <tr>
                        <th scope="col">Description</th>
                        <th scope="col">Date Uploaded</th>
                        <th scope="col">Date Modified</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    
                    <tbody >
              
                     <tr>
                       
                       <td class="text-muted pt-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi delectus temporibus sunt sapiente, eveniet minima dolor magnam dolore quae tenetur excepturi eligendi repellendus voluptas eius praesentium modi architecto, expedita recusandae.</td>
                     
                       <td class="text-muted pt-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi delectus temporibus sunt sapiente, eveniet minima dolor magnam dolore quae tenetur excepturi eligendi repellendus voluptas eius praesentium modi architecto, expedita recusandae.</td>

                       <td class="text-muted pt-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi delectus temporibus sunt sapiente, eveniet minima dolor magnam dolore quae tenetur excepturi eligendi repellendus voluptas eius praesentium modi architecto, expedita recusandae.</td>
                  
                     
                       <td class="text-center pt-4">
                          <button type="button" id="PopoverCustomT-1" class="btn btn-danger btn-sm  d-inline" ><i class="fas fa-trash"></i></button> 
                       </td>
                     </tr>
                    
                    </tbody>
                 </table>
            
                  </ul>
              </div> <!-- 3nd card -->
           
       
    
		</div>

		
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="text-right">
					
					
					<!-- <a href="{{ route('update-profile') }}" class="btn btn-primary">Update</a> -->
				</div>
			</div>
		</div>
	</div>
</div>
</div>

</div>
</div>

                <!-- Modal -->
                <form action="" wire:submit.prevent="create">
                <div class="modal fade" id="subjectModal" wire:ignore.self>
               
                    <div class="modal-dialog modal-dialog-centered">
                      
                      <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" >Class </h5>
                        </div>
                        <div class="modal-body">
                       
                        <!-- Subject Name -->
                        <div class="form-group text-muted font-weight-light" style="font-size: 14px;">
                          <label for="name">Subject Name</label>
                          <input type="text" class="form-control @error('subject_name') is-invalid @enderror"   placeholder="Subject Name" wire:model.defer="subject_name">
                           @error('subject_name')<div class="invalid-feedback"> {{ $message }} </div> @enderror
                        </div>

                        <!-- Class -->
                        <div class="form-group text-muted font-weight-light" style="font-size: 14px;" >
                          <label for="class">Class</label>
                          <input type="text" class="form-control @error('class') is-invalid @enderror"  placeholder="Class " wire:model.defer="class">
                            @error('class')<div class="invalid-feedback"> {{ $message }} </div> @enderror
                        </div>

                        <!-- Schedule -->
                        <div class="form-group text-muted font-weight-light" style="font-size: 14px;" >
                          <label for="schedule">Schedule</label>
                          <input type="text" class="form-control @error('class') is-invalid @enderror"  placeholder="Schedule " wire:model.defer="schedule">
                            @error('schedule')<div class="invalid-feedback"> {{ $message }} </div> @enderror
                        </div>

                        <!-- Class Code -->
                        <div class="form-group text-muted font-weight-light" style="font-size: 14px;" >
                          <label for="code">Class Code</label>
                          <input type="text" class="form-control @error('code') is-invalid @enderror"  placeholder="Class Code" wire:model.defer="code">
                            @error('code')<div class="invalid-feedback"> {{ $message }} </div> @enderror
                        </div>
            
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary " style="width:90px" wire:click.defer="hideSubjectModal">Cancel</button>
                        <button type="submit" class="btn btn-primary " style="width:90px">Join</button>
                        </div>
                    </div>
                    </div>
                  
                </div>
                </form>
            <!-- ./modal -->
        <!-- Main row -->

</div><!-- ./main-card mb-3 card -->

<!-- Update --> 


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

body {
    background-color: #bcd9f5
}

.card {
    padding: 0;
    border: none;
    border-radius: 0.5rem
}

a.active {
    border-bottom: 2px solid #55c57a
}

.nav-link {
    color: rgb(110, 110, 110);
    font-weight: 500
}

.nav-link:hover {
    color: #55c57a
}

.nav-pills .nav-link.active {
    color: black;
    background-color: white;
    border-radius: 0.5rem 0.5rem 0 0;
    font-weight: 600
}

.tab-content {
    padding-bottom: 1.3rem
}

.form-control {
    background-color: rgb(241, 243, 247);
    border: none
}

span {
    margin-left: 0.5rem;
    padding: 1px 10px;
    color: white;
    background-color: rgb(143, 143, 143);
    border-radius: 4px;
    font-weight: 600
}

.third {
    padding: 0 1.5rem 0 1.5rem
}

label {
    font-weight: 500;
    color: rgb(104, 104, 104)
}

.btn-success {
    float: right
}

.form-control:focus {
    box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.075) inset, 0px 0px 7px rgba(0, 0, 0, 0.2)
}

select {
    -webkit-appearance: none;
    -moz-appearance: none;
    text-indent: 1px;
    text-overflow: ""
}

ul {
    list-style: none;
    /* margin-top: 1rem; */
    padding-inline-start: 0
}

.ccontent li .wrapp {
    padding: 0.3rem 1rem 0.001rem 1rem
}

.ccontent li .wrapp div {
    font-weight: 600
}

.ccontent li .wrapp p {
    font-weight: 360
}

.ccontent li:hover {
    background-color: rgb(117, 93, 255);
    color: white
}

.addinfo {
    padding: 0 1rem
}
</style> 
</div>
