@extends('cms.layout.main', array(
"pageTitle" => "Quản lý menu",
"breadCrumbs" => array(
array(
"name" => "Quản lý menu",
"link" => "/menus",
"active" => true
)
)))

@push("head-title")
Quản lý menu
@endpush


@section('content')
<div class="col-12">
    <div class="card">
        <table id="table-menu" class="table table-hover table-striped" style="width:100%">
            <thead>
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>CREATED AT</th>
                    <th>UPDATE AT</th>
                    <th>ACTION</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@endsection

@push("plugins-scripts")
<script src="/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
@endpush

@push("style-custome")
<link rel="stylesheet" href="/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="css/datatable.css">
@endpush

@push("foot-scripts")
<script>
    $(document).ready(function(e){

        $("#table-menu").DataTable({
            lengthChange: true,
            dom: '<<"datatable__head_wrap row"<"col-6"f><"col-6"B>><rt><"datatable__info_wrap"lip>>',
            serverSide: true,
            processing: true,
            ajax: '{{ route('menus.list') }}',
            language: {
                lengthMenu: "_MENU_"
            },
            columns: [
                {
                    "data": "id",
                    "render": function(data, type, row, meta){
                        return `<input type="checkbox" />`
                    }
                },
                {
                    "data": "id"
                },
                {
                    "data": "name"
                },
                {
                    "data": "created_at",
                    "render": (data, type, row, meta) => {
                        if (data) {
                            return moment(data).format('MMMM Do YYYY, h:mm:ss a')
                        }
                        return null;
                    }
                },
                {
                    "data": "updated_at",
                    "render": (data, type, row, meta) => {
                        if (data) {
                            return moment(data).format('MMMM Do YYYY, h:mm:ss a')
                        }
                        return null;
                    }
                },
                {
                    "targets": 0,
                    "data": "id",
                    "render": function ( data, type, row, meta ) {
                    return '@can('edit')  <a href="/cms/menus/'+data+'/edit" class="btn btn-icon btn-sm btn-primary"data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a> @endcan  @can('delete')  <a ref="delete-menu" href="/cms/menus/'+data+'" class="btn btn-icon btn-sm btn-danger"data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>  @endcan';
                    }
                } 
            ],
            buttons: [{
                text: "Create",
                className: "btn btn-info btn-sm",
                action: function ( e, dt, button, config ) {
                    window.location = '/cms/menus/create';
                }  
            }]
        })

    })

    $(document).on("click", "[ref=delete-menu]", function(e){
       
        const check = confirm("Ban muon xoa menu nay");
        if (!check)  e.preventDefault();

    } )
</script>
@endpush


