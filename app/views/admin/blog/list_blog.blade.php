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
                    <i class="glyphicon glyphicon-thumbs-up"></i>
                    <span>Total Likes</span>
                    <span class="label label-success">{{Blog::get_total_likes()}}</span>
                  </a>
                </div>
                <p>
                    @if(Session::get('success'))
                        <div class="alert alert-success" role="alert">
                          <strong>¡¡Success! </strong>{{Session::get('success')}}
                        </div>
                    @endif
                </p> 
                <div class="col-lg-12">
                  <div class="box">
                      <header>
                          <h5>Blog List</h5>
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
                                      <th>Photo</th>
                                      <th>Title</th>
                                      <th>Category</th>
                                      <th>Date</th>
                                      <th>Likes</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody> 
                              @foreach($list as $blog)                           
                                  <tr>
                                      <td>
                                        <a class="user-link" href="">
                                          <img class="media-object img-thumbnail user-img" alt="User Picture" src="{{ asset('uploads/'.$blog->image_route) }}">
                                        </a>
                                      </td>
                                      <td>{{$blog->title}}</td>
                                      <?php $category = Category::find($blog->category)->first()->name; ?>
                                      <td>{{$category}}</td>
                                      <?php 
                                        $fecha = strftime("%d %b %Y", strtotime($blog->date));
                                      ?>
                                      <td>{{$fecha}}</td>
                                      <td><i class="glyphicon glyphicon-thumbs-up"></i> {{$blog->likes}}</td>
                                      <td>
                                        <a href="<?=URL::to('/admin/blog/edit/'.$blog->id)?>" class="btn btn-success btn-sm close-box" title="edit">
                                          <i class="glyphicon glyphicon-pencil"></i>
                                        </a>
                                        @if($blog->publish == 1)
                                          <a href="<?=URL::to('/admin/blog/publish/'.$blog->id)?>" class="btn btn-metis-4 btn-sm close-box" title="close">
                                            <i class="glyphicon glyphicon-remove"></i>
                                          </a>
                                        @elseif($blog->publish == 0)
                                          <a href="<?=URL::to('/admin/blog/publish/'.$blog->id)?>" class="btn btn-metis-4 btn-sm close-box" title="publish">
                                            <i class="glyphicon glyphicon-ok"></i>
                                          </a>
                                        @endif
                                        
                                        <a href="<?=URL::to('/admin/blog/remove/'.$blog->id)?>" class="btn btn-danger btn-sm close-box" title="remove">
                                          <i class="glyphicon glyphicon-remove"></i>
                                        </a>
                                      </td>
                                  </tr>
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