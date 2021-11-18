<div>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">

              <div class="col-sm-6">
                <h1 class="m-0 text-dark">Subject</h1>
              </div><!-- /.col -->

              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{ route ('dashboard')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active">Subject</li>
                </ol>
              </div><!-- /.col -->

            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
    </div><!-- /.container-header -->  

    <!-- Dashboard -->
     <div class="dashboard" id="dashboard">
      <div class="container-fluid" >
        <!-- Small boxes (Stat box) -->
        <div class="d-flex justify-content-between" >
                    <button class="btn btn-primary w-25" wire:click.defer="showSubjectModal">New</button>
                    <input class="form-control mr-sm-2 w-25 " type="search" placeholder="Search" aria-label="Search..." /> 
        </div>
       
        <div class="cards">
        @foreach ($subjects as $subject)
            <a href="{{ route('show_subject' , ['subject' => $subject])}}">
              <div class="card">
                <h2>{{ $subject->subject_name }}</h2>
                <p>{{ $subject->class }}</p>
              </div>
            </a>
        @endforeach
        </div>
       
       
      
     
          <!-- /.row -->
          <!-- Button trigger modal -->
                
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
        </div>
        
      </div>
    <!-- /.dashboard -->
  </div>

 <style>

.cards {
  display: flex;
  align-items: center;
  justify-content: start;
  flex-wrap: wrap;
  gap: 1rem;
  text-align: center;
  padding: 1rem 0;
}

.card {
  width: 17rem;
  height: 14rem;
  padding: 1.3rem;
  background: #3d3d3d;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  color: white;
  gap: 1rem;
  border-radius: 5px;
  box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
    0 4px 6px -2px rgba(0, 0, 0, 0.05);
}

@media all and (max-width: 860px) {
  .card {
    width: 100%;
  }
}
  </style> 
