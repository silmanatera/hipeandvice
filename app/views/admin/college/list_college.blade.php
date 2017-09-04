@extends ('template_admin')

@section ('content')

<div id="content">
      <div class="outer">
          <div class="inner bg-light lter">
              <div class="col-lg-12">
                <h1>Hype & Vice Dashboard</h1>

                <!-- Cuando se haga click se filtra por compras aprobadas y rechazadas -->
                <div class="text-center">
                  <a class="quick-btn" href="#" style="font-size: 13px">
                    <i class="glyphicon glyphicon-shopping-cart"></i>
                    <span>Sold</span>
                    <span class="label label-success">{{College::get_total_sold()}}</span>
                  </a>
                  <a class="quick-btn" href="#" style="font-size: 13px">
                    <i class="glyphicon glyphicon-import"></i>
                    <span>Registered</span>
                    <span class="label label-success">{{College::get_total_registered()}}</span>
                  </a>
                </div>
                <p>
                    @if(Session::get('success'))
                        <div class="alert alert-success" role="alert">
                          <strong>¡Success! </strong>{{Session::get('success')}}
                        </div>
                    @endif
                </p> 
                <div class="col-lg-12">
                  <div class="box">
                      <header>
                          <h5>College List</h5>
                          <div class="toolbar">
                              <div class="btn-group">
                                  <a href="#stripedTable" data-toggle="collapse" class="btn btn-default btn-sm minimize-box">
                                      <i class="glyphicon glyphicon-chevron-up"></i>
                                  </a>
                                  <!-- <a class="btn btn-danger btn-sm close-box"><i class="glyphicon glyphicon-remove"></i></a> -->
                              </div>
                          </div>
                      </header>
                      <div id="stripedTable" class="table-responsive body collapse in">
                          <table class="table table-striped">
                              <thead>
                                  <tr>
                                      <th>Logo</th>
                                      <th>College Name</th>
                                      <th>Total Products</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach($list as $college)
                                  <tr>
                                      <td>
                                        <a class="user-link" href="">
                                          <img class="media-object img-thumbnail user-img" alt="User Picture" src="{{asset('uploads/'.$college->logo)}}">
                                        </a>
                                      </td>
                                      <td>{{$college->name}}</td>
                                      <td><a href="<?=URL::to('/admin/college/product_list/'.$college->id) ?>">See list of products</a><span style="padding-left:5px">({{College::get_count_products($college->id)}})</span></td>
                                      
                                      <td>
                                        <a class="btn btn-success btn-sm close-box" href="<?=URL::to('/admin/college/edit/'.$college->id) ?>" title="edit school name">
                                          <i class="glyphicon glyphicon-pencil"></i>
                                        </a>
                                        @if($college->status == 1)
                                          <a class="btn btn-info btn-sm close-box" href="<?=URL::to('/admin/college/change/2/'.$college->id) ?>" title="unpublish school">
                                            <i class="glyphicon glyphicon-off"></i>
                                          </a>
                                        @elseif($college->status == 2)
                                          <a class="btn btn-info btn-sm close-box" href="<?=URL::to('/admin/college/change/1/'.$college->id) ?>" title="publish school">
                                            <i class="glyphicon glyphicon-ok"></i>
                                          </a>
                                        @endif
                                        <a class="btn btn-danger btn-sm close-box" href="<?=URL::to('/admin/college/remove/'.$college->id) ?>" title="remove school">
                                          <i class="glyphicon glyphicon-remove"></i>
                                        </a>
                                      </td>
                                  </tr>
                                @endforeach  
                              </tbody> 
                          </table>

                          <nav aria-label="Page navigation" style="text-align: center">
                            <ul class="pagination">
                              {{$list->links()}}
                            </ul>
                          </nav>
                      </div>
                </div>
              </div>
            </div>

          </div>
          <!-- /.inner -->
      </div>
      <!-- /.outer -->
  </div>
  <!-- /#content -->
</div>

@stop()