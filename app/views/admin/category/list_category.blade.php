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
                    <i class="glyphicon glyphicon-import"></i>
                    <span>Registered</span>
                    <span class="label label-success">{{Category::get_total_register()}}</span>
                  </a>
                </div>
                <p>
                    @if(Session::get('success'))
                        <div class="alert alert-success" role="alert">
                          <strong>¡Exito! </strong>{{Session::get('success')}}
                        </div>
                    @endif
                </p> 
                <div class="col-lg-12">
                  <div class="box">
                      <header>
                          <h5>Category List</h5>
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
                                  
                                      <th>Name</th>
                                      <th>Products</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach($list as $category)
                                  <tr>
                                      <td>
                                        {{$category->name}}
                                      </td>
                                      <td><i class="glyphicon glyphicon-eye-open"></i> <a href="<?=URL::to('/admin/category/see-products/'.$category->id) ?>">See Products</a></td>
                                      
                                      <td>
                                        <a class="btn btn-success btn-sm close-box" href="<?=URL::to('/admin/category/edit/'.$category->id) ?>" title="edit category">
                                          <i class="glyphicon glyphicon-pencil"></i>
                                        </a>
                                      @if($category->status == 1)
                                        <a class="btn btn-info btn-sm close-box" href="<?=URL::to('/admin/category/change/2/'.$category->id) ?>" title="unpublish category">
                                          <i class="glyphicon glyphicon-off"></i>
                                        </a>
                                      @elseif($category->status == 2)
                                        <a class="btn btn-info btn-sm close-box" href="<?=URL::to('/admin/category/change/1/'.$category->id) ?>" title="publish category">
                                          <i class="glyphicon glyphicon-ok"></i>
                                        </a>
                                      @endif  
                                        <a class="btn btn-danger btn-sm close-box" href="<?=URL::to('/admin/category/remove/'.$category->id) ?>" title="remove category">
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