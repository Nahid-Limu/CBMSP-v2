@extends('layouts.appAdmin')

@section('title', 'ExtraEventList')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>ExtraEventList</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
          <li class="breadcrumb-item">ExtraEvent</li>
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
                    
                  <h6 class="m-0 font-weight-bold text-primary"><i class='bi bi-person-lines-fill text-success'> Even LIST</i></h6>
                  
                  {{-- flash Message --}}
                    <div id="success_message" class="alert alert-success alert-dismissible fade" role="alert"></div>
                  {{-- flash Message --}}

                  <div class="dropdown no-arrow">
                    <button type="button" class="btn btn-sm btn-outline-success " data-bs-toggle="modal"  data-bs-target="#AddEventModal"><i class='bx bxs-file-plus'></i> Export</button>
                  </div>

                </div>

                <!-- Table with stripped rows -->
                <table class="table table-responsive" id="ExtraEvenListTable">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Phone</th>
                      <th scope="col">Bkash Code</th>
                      <th scope="col">ID Card</th>
                      <th scope="col">Size</th>
                      
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

      {{-- @include('admin.event.addEventModal')
      @include('admin.event.editEventModal')

      @include('include.admin.deleteModal') --}}

</main><!-- End #main -->

@endsection

@section('script')
<script>

  //Table Data
  $('#ExtraEvenListTable').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        "order": [[ 0, "asc" ]],
        ajax:{
        url: "{{ route('extraEventList') }}",
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
              data: 'phone',
              name: 'phone'
          },
          {
              data: 'bkash_code',
              name: 'bkash_code'
          },
          {
              data: 'id_no',
              name: 'id_no'
          },
          {
              data: 'shirt_size',
              name: 'shirt_size'
          },
          {
              data: 'action',
              name: 'action',
              orderable: false
          }
        ]
  });

  //approve Data 
  function approveData(id) {
    // alert(id);
    $.ajax({
        type: 'GET',
        url: "{{url('approveData')}}"+"/"+id,
        // dataType: "html",
        success: function (response) {
            console.log(response.success);
            if (response.success) {

              $('#ExtraEvenListTable').DataTable().ajax.reload();
              
              $('.alert').addClass('show');
              $('#success_message').text(response.success);
              SuccessMsg();
            }
            

        },error:function(){ 
            console.log(response);
        }
    });
  }

</script>
@endsection