<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Learning Management System</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('backend/plugins/toastr/toastr.min.css') }}">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset ('backend/plugins/fontawesome-free/css/all.min.css') }}" >
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset ('backend/dist/css/adminlte.min.css') }}" >
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!--datepicker-->
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
  <!-- Google Fonts -->

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
 
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script type="text/javascript" src="https://unpkg.com/moment"> </script>
  <link rel="stylesheet" type="text/css" href="{{ asset('backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}"> 
  <link rel="stylesheet" type="text/css" href="{{ asset('backend/notification.css') }}">
  @stack('styles')
  @livewireStyles
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('layouts.partials.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('layouts.partials.aside')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    {{ $slot }}
  </div>
  <!-- /.content-wrapper -->

  

  <!-- Main Footer -->
  @include('layouts.partials.footer')
</div>
<!-- ./wrapper -->





<!-- jQuery -->
<script src="{{ asset ('backend/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset ('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset ('backend/dist/js/adminlte.min.js') }}"></script>
<!-- Toastr -->
<script type="text/javascript" src="{{ asset('backend/plugins/toastr/toastr.min.js') }}"></script>
<!-- Datepicker -->
<script type="text/javascript" src="{{ asset('backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!--toastr settings-->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- sweet alert -->

<!-- Sweet Alert -->
<script>

  /** Delete Confirmation */
  window.addEventListener('show-delete-confirmation', event =>{
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Delete'
    }).then((result) => {
      if (result.isConfirmed) {
        Livewire.emit('deleteConfirmed')
      }
    })
  })
  
  window.addEventListener('deleted', event=> {
    Swal.fire(
      'Deleted!',
        event.detail.message,
      'success'
    )
  }) 

  /** Show Modal Subject */
  window.addEventListener('show-form' , event => {
      $('#subjectModal').modal('show');
  })

  /** Hide Modal Subject */
  window.addEventListener('hide-form' , event => {
      $('#subjectModal').modal('hide');
  })

  /** Show Success Message */
  window.addEventListener('hide-modal', event => {
       $('#subjectModal').modal('hide');
       toastr.success(event.detail.message , 'Success!');
  })

  /** Toast Success Message Option*/
  $(document).ready(function() {
    toastr.options = {
                "positionClass": "toast-top-right",
                "progressBar": true,
            }
  });

</script>

@livewireScripts
</body>
</html>





  