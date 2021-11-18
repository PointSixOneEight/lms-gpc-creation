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
</div>
    <div> 
        <button wire:click.defer="showFile" >File</button>
        <button wire:click.defer="showTask" >Task</button>
    </div>
    
        @if($show == 1)
       <livewire:teacher.teacher-file :subject="$subject"/>
         @elseif ($show == 2)
       <livewire:teacher.teacher-task :subject="$subject"/>
        @endif
    
   
   
</div>
<!-- Modal Task -->
        <form action="" wire:submit.prevent="addTask"  enctype="multipart/form-data">
            <div class="modal fade" id="taskModal" wire:ignore.self>
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" >Task </h5>
                        </div>
                        <div class="modal-body">
                
                            <!-- Name -->
                            <div class="form-group text-muted font-weight-light" style="font-size: 14px;">
                            <label for="name">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"   placeholder="Subject Name" wire:model.defer="name">
                            @error('name')<div class="invalid-feedback"> {{ $message }} </div> @enderror
                            </div>

                            <!-- Description -->
                            <div class="form-group text-muted font-weight-light" style="font-size: 14px;" >
                            <label for="class">Description</label>
                            <input type="text" class="form-control @error('description') is-invalid @enderror"  placeholder="Description " wire:model.defer="description">
                                @error('description')<div class="invalid-feedback"> {{ $message }} </div> @enderror
                            </div>

                            <!-- File -->
                            <div
                                x-data="{ isUploading: false, progress: 0 }"
                                x-on:livewire-upload-start="isUploading = true"
                                x-on:livewire-upload-finish="isUploading = false"
                                x-on:livewire-upload-error="isUploading = false"
                                x-on:livewire-upload-progress="progress = $event.detail.progress"
                            >
                                <div class="form-group text-muted font-weight-light" style="font-size: 14px;" >
                                <label for="file">File</label>
                                <input type="file" class="form-control @error('file') is-invalid @enderror"  placeholder="File " wire:model.defer="file_path">
                                    @error('file')<div class="invalid-feedback"> {{ $message }} </div> @enderror
                                    <!-- Progress Bar -->
                                    <div x-show="isUploading">
                                        <progress max="100" x-bind:value="progress"></progress>
                                    </div>
                                </div>
                            </div>
                            
                            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary " style="width:90px" wire:click.defer="hideTaskModal">Cancel</button>
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
