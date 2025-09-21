@extends('layouts.appAdmin')

@section('title', 'User List')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>User List</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
          <li class="breadcrumb-item">User</li>
          <li class="breadcrumb-item active">List</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
          <div class="col-lg-12">
  
            <div class="card">
              <div class="card-body">
                
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    
                  <h6 class="m-0 font-weight-bold text-primary"><i class='bi bi-person-lines-fill text-success'> User LIST</i></h6>
                    
                  {{-- flash Message --}}
                    <div id="success_message" class="alert alert-success alert-dismissible fade" role="alert"></div>
                  {{-- flash Message --}}

                  <div class="dropdown no-arrow">
                    <button type="button" class="btn btn-sm btn-outline-success " data-bs-toggle="modal"  data-bs-target="#AddUserModal"><i class='bx bxs-file-plus'></i> Add New User</button>
                  </div>

                </div>

                <!-- Table with stripped rows -->
                <table class="table table-responsive" id="UserListTable">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">User Name</th>
                      <th scope="col">Type</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  
                </table>
                <!-- End Table with stripped rows -->
  
              </div>
            </div>
  
          </div>
        </div>
      </section>

      @include('admin.user.addUserModal')
      {{-- @include('admin.blog.editBlogModal') --}}

      @include('include.admin.deleteModal')

</main><!-- End #main -->

@endsection

@section('script')
<script>

  //Table Data
  $('#UserListTable').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        "order": [[ 0, "asc" ]],
        ajax:{
          url: "{{ route('userList') }}",
        },
        columns:[
          { 
              data: 'DT_RowIndex', 
              name: 'DT_RowIndex' 
          },
          {
              data: 'name',
              name: 'name'
          },
          {
              data: 'username',
              name: 'username'
          },
          {
              data: 'type',
              name: 'type'
          },
          {
              data: 'action',
              name: 'action',
              orderable: false
          }
        ]
  });

  //Add Table Data
  function addData() {

    $('.addData').prop('disabled', true).html('Processing...'); // Disable and change text of button
    var form = $('#AddUserForm')[0];
    var formdata = new FormData(form);
    $.ajax({
            url:"{{ route('userAdd') }}",
            method:"POST",
            data:formdata,
            dataType:'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success:function(response)
            {
              console.log(response.errors);

              // validation
              var html = '';
              if(response.errors)
              {
                html = '<div class="alert alert-danger">';
                for(var count = 0; count < response.errors.length; count++)
                {
                html += '<p>' + response.errors[count] + '</p>';
                }
                html += '</div>';
                
              }
              $('#form_result').html(html);

              //success
              if (response.success) {
                
                $("#success_message").text(response.success);
                $('#BlogListTable').DataTable().ajax.reload();
                $('#AddUserModal').modal('hide');
                // $("#AddInsectAndDiseaseForm").trigger("reset");
                onCloseModal('AddUserForm');
                // alert(response.success);
                SuccessMsg();

                $('.addData').prop('disabled', false); //enable and change text of button
              }

            },
            error: function(response) {
                // console.log(response);
            }
    })

  }
  
</script>
@endsection