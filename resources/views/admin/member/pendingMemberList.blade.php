@extends('layouts.appAdmin')

@section('title', 'PendingMemberList')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Pending Member</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
          <li class="breadcrumb-item">Member</li>
          <li class="breadcrumb-item active">Pending List</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
          <div class="col-lg-12">
  
            <div class="card">
              <div class="card-body">
                
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    
                  <h6 class="m-0 font-weight-bold text-primary"><i class='bx bxs-user-detail'> Pending Member LIST</i></h6>
                    
                  {{-- flash Message --}}
                    <div id="success_message" class="alert alert-success alert-dismissible fade" role="alert"></div>
                  {{-- flash Message --}}

                  {{-- <div class="dropdown no-arrow">
                    <button type="button" class="btn btn-sm btn-outline-success " data-bs-toggle="modal"  data-bs-target="#AddTeacherModal"><i class='bx bxs-file-plus'></i> Add Teacher</button>
                  </div> --}}

                </div>

                <!-- Table with stripped rows -->
                <table class="table table-responsive" id="PendingMemberListTable">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Photo</th>
                      <th scope="col">Phone</th>
                      <th scope="col">Tea Board Registration</th>
                      <th scope="col">Garden Address</th>
                      <th scope="col">Garden Amount (in acres)</th>
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

      @include('admin.member.viewMemberModal')

      @include('include.admin.deleteModal')

</main><!-- End #main -->

@endsection

@section('script')
<script>

  //--Table Data
  $('#PendingMemberListTable').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        "order": [[ 0, "asc" ]],
        ajax:{
        url: "{{ route('pendingMemberList') }}",
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
              data: 'photo',
              name: 'photo'
          },
          {
              data: 'phone',
              name: 'phone'
          },
          {
              data: 'tea_board_registration_number',
              name: 'tea_board_registration_number'
          },
          {
              data: 'tea_garden_address',
              name: 'tea_garden_address'
          },
          {
              data: 'amount_of_tea_garden',
              name: 'amount_of_tea_garden'
          },
          {
              data: 'action',
              name: 'action',
              orderable: false
          }
        ]
  });

  //--Delete Table Data
  function deleteTableData(id) {
      // alert(121);
      $.ajax({
          type: 'GET',
          url: "{{url('deleteMember')}}"+"/"+id,
          success: function (response) {
              // console.log(response);
              if (response.success) {
                      
                $("#success_message").text(response.success);
                $('#PendingMemberListTable').DataTable().ajax.reload();
                $('#DeleteModal').modal('hide');

                SuccessMsg();
              }

          },error:function(){ 
              console.log(response);
          }
      });
  }

  //--View Data
  function viewData(id) {

    // $("#EditTeacherForm").trigger("reset");
    $.ajax({
        type: 'GET',
        url: "{{url('viewMember')}}"+"/"+id,
        // dataType: "html",
        success: function (response) {
            // console.log(response);
            if (response) {
              
              $('#id').val(response.id);
              $('#status').val(response.status);
              // $('#mid').text(response.mid);

              $("#photo").attr("src", "assets/img/Members/"+ response.photo);

              $('#name').text(response.name);
              $('#nid').text(response.nid);
              $('#dob').text(response.dob);
              $('#father_name').text(response.father_name);
              $('#mother_name').text(response.mother_name);

              $('#village').text(response.village);
              $('#union_parishad').text(response.union_parishad);
              $('#upazila').text(response.upazila);
              $('#zila').text(response.zila);
              $('#phone').text(response.phone);
              $('#email').text(response.email);

              $('#tea_garden_address').text(response.tea_garden_address);
              $('#amount_of_tea_garden').text(response.amount_of_tea_garden);
              $('#dag_number').text(response.dag_number);
              $('#mouja_name').text(response.mouja_name);
              $('#tea_board_registration_number').text(response.tea_board_registration_number);

              response.status == 1 ? $('#member_status').text(" Active").addClass("text-success") : $('#member_status').text(" Pending").addClass("text-danger");

            }

        },error:function(){ 
            console.log(response);
        }
    });
  }

  //--Approve Table Data
  function approveData(params) {
    // alert();
    var form = $('#ViewMemberForm')[0];
    var formdata = new FormData(form);
    $.ajax({
            url:"{{ route('approveMember') }}",
            method:"POST",
            data:formdata,
            dataType:'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success:function(response)
            {
              // console.log(response);
              if (response.success) {
                
                $("#success_message").text(response.success);
                $('#PendingMemberListTable').DataTable().ajax.reload();
                $('#ViewMemberModal').modal('hide');
                
                SuccessMsg();
              }
            },
            error: function(response) {
                // console.log(response);
            }
    })
  }
  
</script>
@endsection