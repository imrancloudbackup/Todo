@extends('master.header')

@section('content')
    <!-- Start Breadcrumbbar -->
    <div class="breadcrumbbar">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-8">
                <h4 class="page-title">Add your Tasks Here</h4>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbbar -->

    <div class="contentbar">
        <!-- Start row -->
        <div class="row">
             <!-- Start col --> 
             <!-- Start col -->                      
             <div class="col-lg-12 col-xl-12">
                <div class="card m-b-30">
                    <div class="card-header">
                    <form action="{{route('addtask')}}" method="POST" id="todolistform">
                    @csrf
                        <div class="input-group mt-3">
                            <input type="text" class="form-control" id="todolist" name="todolist" placeholder="What do you need to do today?">
                            @error('todolist')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div class="input-group-append">
                                <button class="btn btn-primary add" id="button-addon-to-do-list" type="submit">Add to List</button>
                            </div>
                        </div>
                    </form>
                    </div>
                    <div class="card-body">
                    <table class="table table-bordered" id="todolisttable">
                        <tbody>
                        @if(count($alltasks) < 1)
                            <div class="alert alert-warning">
                                <strong>Sorry!</strong> No Task Found.
                            </div>                                      
                        @else
                        @foreach($alltasks as $alltasksdata)
                            <tr>
                                <td>@if($alltasksdata->task_status == 2) <s>{{$alltasksdata->task_name}}</s>@else{{$alltasksdata->task_name}}@endif</td>
                                <td>@if($alltasksdata->task_status == 2)<s>@if(empty($alltasksdata->updated_date)){{date('d-m-Y', strtotime($alltasksdata->created_date))}}@else{{date('d-m-Y', strtotime($alltasksdata->updated_date))}}@endif</s>@else
                                @if(empty($alltasksdata->updated_date)){{date('d-m-Y', strtotime($alltasksdata->created_date))}}@else{{date('d-m-Y', strtotime($alltasksdata->updated_date))}}@endif
                                @endif</td>
                                <td>
                                @if($alltasksdata->task_status == 2)
                                <div class="dropdown">
                                        <button class="btn btn-link p-0 font-18 float-right" type="button" id="widgetRevenue" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal-"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="widgetRevenue" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(108px, 29px, 0px);">
                                            <a class="dropdown-item font-13" href="{{url('task/delete/'.$alltasksdata->id)}}"
                                            onclick="return confirm('Are you sure you want to delete it permanently?')">Delete</a>
                                            <a class="dropdown-item font-13" href="{{url('task/recover/'.$alltasksdata->id)}}"
                                            onclick="return confirm('Are you sure you want to Move to Active?')">Recover</a>
                                        </div>
                                    </div>
                                @else
                                    <div class="dropdown">
                                        <button class="btn btn-link p-0 font-18 float-right" type="button" id="widgetRevenue" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal-"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="widgetRevenue" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(108px, 29px, 0px);">
                                            <a class="dropdown-item font-13" id="{{$alltasksdata->id}}" href="javascript:void(0);" data-toggle="modal" data-target="#exampleModalCenter" onclick="ViewTasks(this.id)">Edit</a>
                                            <a class="dropdown-item font-13" href="{{url('task/delete/'.$alltasksdata->id)}}"
                                            onclick="return confirm('Are you sure you want to delete it permanently?')">Delete</a>
                                            <a class="dropdown-item font-13" href="{{url('task/complete/'.$alltasksdata->id)}}"
                                            onclick="return confirm('Are you sure you want to Mark it as Complete?')">Complete</a>
                                        </div>
                                    </div>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        @endif
                        
                        </tbody>
                    </table>
                    </div>
                </div>
             </div>
            <!-- End col -->

            
            <!-- End col -->
        </div>
        <!-- End row -->
    </div>

   <!-- Modal -->
   <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Edit Task</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form name="editmodalform" id="editmodalform" method="POST" action="{{route('updatetask')}}">
                    @csrf
                    <div class="form-group">
                        <label for="edittodolist" class="col-form-label">Task Name:</label>
                        <input type="text" class="form-control" id="edittodolist" name="edittodolist">
                        @error('edittodolist')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <input type="hidden" id="todolisttableid" name="todolisttableid" />
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update changes</button>
                    </div>
                </form>
                </div>
                
            </div>
        </div>
    </div>

    @endsection





