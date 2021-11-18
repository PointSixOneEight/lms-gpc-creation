<div class="tab-content pt-2" id="pills-tabContent ">
        <!-- 1st card -->
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="d-flex justify-content-between">
                <button class="btn btn-success w-25" wire:click.defer="showTaskModal" >New</button>
                <input  class="form-control mr-sm-2 w-25 " type="search" placeholder="Search" aria-label="Search..." /> 
        </div>
                 
        <ul class="content pt-1">     
            <table class="align-middle mb-0 table table  table-hover ">
                <thead class="text-muted">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">File</th>
                        <th scope="col">Date Uploaded</th>
                    </tr>
                </thead>
                    
                <tbody >
                @foreach ($tasks as  $task)
                    <tr>
                    
                       <td class="text-muted pt-4"> {{ $task->name }} </td>
                     
                       <td class="text-muted pt-4" > {{ $task->description }} </td>

                       <td class="text-muted pt-4">  {{ $task->file_path }} </td>

                       <td class="text-muted pt-4">  {{ $task->created_at }} </td>
                  
                       <td class="text-center pt-4">
                          <button type="button" id="PopoverCustomT-1" class="btn btn-danger btn-sm  d-inline"  wire:click.prevent="confirmTaskRemoval({{ $task->id }})"><i class="fas fa-trash"></i></button> 
                       </td>
                    </tr>
                @endforeach
              
                </tbody>
              
            </table>
             <div class='d-flex justify-content-center'>{{ $tasks->links() }}</div>
            
    </ul>
     <!-- Modal File -->
     <form action="" wire:submit.prevent="addTask"  enctype="multipart/form-data">
        <div class="modal fade" id="subjectModal" wire:ignore.self> 
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" >TASK </h5>
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
                        <button type="button" class="btn btn-secondary " style="width:90px" wire:click.defer="hideFileModal">Cancel</button>
                        <button type="submit" class="btn btn-primary " style="width:90px">Join</button>
                        </div>
                    </div>
                    </div>
                  
        </div>
    </form>
</div>

   

