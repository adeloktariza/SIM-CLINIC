@extends('adminlte::page')

@section('title', 'User Management')

@section('content_header')
    
User Management

@stop

@section('content')
    
<div class="wrapper">
    <div class="content-user">

        <!-- Content Header (Page header) -->
        <section class="content-header data-form">
          <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">List User Management</h3>
                            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#create-user">
                                Create User
                            </button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table id="user-table" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Fullname</th>
                                        <th>Username</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>Giri Purnama</td>
                                        <td>GiriPurnama</td>
                                        <td>System Admin</td>
                                        <td>
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#edit-user"><span class="edit"><i class="ri-pencil-line"></i></span></a>
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#delete-user"><span class="delete"><i class="ri-delete-bin-line"></i></span></a>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Giri Purnama</td>
                                        <td>GiriPurnama</td>
                                        <td>System Admin</td>
                                        <td>
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#edit-user"><span class="edit"><i class="ri-pencil-line"></i></span></a>
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#delete-user"><span class="delete"><i class="ri-delete-bin-line"></i></span></a>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>Giri Purnama</td>
                                        <td>GiriPurnama</td>
                                        <td>System Admin</td>
                                        <td>
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#edit-user"><span class="edit"><i class="ri-pencil-line"></i></span></a>
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#delete-user"><span class="delete"><i class="ri-delete-bin-line"></i></span></a>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td>Giri Purnama</td>
                                        <td>GiriPurnama</td>
                                        <td>System Admin</td>
                                        <td>
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#edit-user"><span class="edit"><i class="ri-pencil-line"></i></span></a>
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#delete-user"><span class="delete"><i class="ri-delete-bin-line"></i></span></a>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5.</td>
                                        <td>Giri Purnama</td>
                                        <td>GiriPurnama</td>
                                        <td>System Admin</td>
                                        <td>
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#edit-user"><span class="edit"><i class="ri-pencil-line"></i></span></a>
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#delete-user"><span class="delete"><i class="ri-delete-bin-line"></i></span></a>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
          </div><!-- /.container-fluid -->

          <!-- Modal -->
            <div class="modal fade" id="create-user">
                <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                    <h4 class="modal-title">Large Modal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    <p>One fine body&hellip;</p>
                    </div>
                    <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
                <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
          <!-- End Modal -->
        </section>
    
    </div>
</div>

@stop

@section('css')
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
@stop

@section('js')
<script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js')}}"></script>
@stop

<script type="text/javascript">
    $("#user-table").DataTable({
      "responsive": true, 
      "lengthChange": false, 
      "autoWidth": false
    });
//     $(document).ready(function() {

   
//    });
</script>