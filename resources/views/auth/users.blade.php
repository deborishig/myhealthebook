@extends('layouts.app')

@section('content')
<div class="container">
  <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <!-- <div class="page-title">
              <div class="title_left">
                <h3>Users List</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div> -->

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Users List</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    @if(session('success'))
                        <div class="alert alert-success alert-block">
                        	<button type="button" class="close" data-dismiss="alert">×</button>	
                            <strong>Success </strong> {{ session('success') }}
                        </div>
                    @endif
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Address</th>
                          <th>Action</th>
                          <!-- <th>Age</th>
                          <th>Start date</th>
                          <th>Salary</th>
                          <th>Extn.</th>
                          <th>E-mail</th> -->
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($users as $index => $user)
                          <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->address1 }} {{ ($user->address2) ? ", ". $user->address2 : "" }} {{ ($user->city) ? ", ". $user->city : "" }} {{ ($user->state) ? ", ". $user->state : "" }} </td>
                            <td>
                              <a href="{{ Request::url().'/'.$user->id }}/edit" class="btn btn-xs btn-default"><i class="fa fa-edit"></i>Edit</a>
                              <a href="{{ Request::url().'/'.$user->id }}/delete" class="btn btn-xs btn-default"><i class="fa fa-close"></i>Delete</a>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
</div>
@endsection
