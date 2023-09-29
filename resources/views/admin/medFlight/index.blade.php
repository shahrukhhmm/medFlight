@extends('brackets/admin-ui::admin.layout.default')

@section('title', 'Med-Flight')


@include('admin.components.styles')


@section('body')

    <div class="row mt-4">
        <div class="col">
       

            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i> New
                    <a class="btn btn-primary btn-sm pull-right m-b-0 add" href="{{ url('/admin/med-form') }}"><i class="fa fa-plus"></i>&nbsp; New</a>
                </div>
                <div class="card-body" v-cloak>

                    @if(session()->has('message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success</strong> &nbsp; {{ session()->get('message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>                            
                    @endif

                <div class="container">
                    <form id="filter-form" class="filter-form-container row">
                        <div class="col-sm-12 col-md-6 col-lg-5">
                            <label for="from_date" class="h6">From:</label>
                            <input type="date" id="from_date" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-5">
                            <label for="to_date" class="h6">To:</label>
                            <input type="date" id="to_date" class="form-control">
                        </div>
                        <div style="margin-top: 30px" class="col-sm-12 col-md-6 col-lg-2 applyBtn">
                            <button type="submit" class="btn btn-sm btn-success">Apply Filter</button>
                        </div>
                    </form>
                </div>

                    <table class="table table-hover role-listing table-listing" style="overflow:auto; width:100%;">
                        <thead>
                            <tr>
                                  
                                <th>ID</th>
                                <th>Client Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Fax</th>
                                <th>Rn Email</th>
                                <th>Created at</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection


<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" defer></script>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">


<script type="text/javascript">

    $(function () {
        setTimeout(function () {
      var table = $('.role-listing').DataTable({
          processing: true,
          serverSide: true,
          ajax: {
            url :"{{ url('/admin/med-flight-list') }}",
            data: function (d) {
            d.from_date = $('#from_date').val();
            d.to_date = $('#to_date').val();
        }
        },

        columns: [
            {data: 'id', name: 'id'},
            {data: 'intake.client_name', name: 'intake.client_name'},
            {data: 'email', name: 'email'},
            {data: 'phone', name: 'phone'},
            {data: 'fax', name: 'fax'},
            {data: 'rn_email', name: 'rn_email'},

            {data: 'created', name: 'created'},
            {
                data: 'action', 
                name: 'action', 
                orderable: false, 
                searchable: false
            },
          ],
          order: [[0, 'desc']],
        });

        $('#filter-form').on('submit', function (e) {
            e.preventDefault();
            $('.role-listing').DataTable().ajax.reload();
        });

    }, 2000); 
    });

</script>
