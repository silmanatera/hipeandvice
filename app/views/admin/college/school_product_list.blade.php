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
                    <span class="label label-success">{{College::get_total_registered()}}</span>
                  </a>
                </div>

                <div class="col-lg-12">
                  <div class="box">
                      <header>
                      	  <?php $college = College::find($id)->name;?>
                          <h5>Product List: <span style="color: #398439">{{$college}}</span></h5>
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
                                    <th>Product</th>
                                    <th>Price $ </th>
                                    <th>College</th>
                                    <th>Category</th>
                                    <th>Colors</th>
                                    <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach($list as $product)
                                  <tr>
                                    <td>
                                      <a class="user-link" href="">
                                          <img class="media-object img-thumbnail user-img" alt="User Picture" src="{{asset('assets/img/user.gif')}}">
                                        </a>
                                    </td>
                                      <td>
                                        {{$product->title}}
                                      </td>
                                      <td>{{$product->price}}</td>
                                      <td>{{$college}}</td>
                                      <?php $category = Category::find($product->category_id)->name;?>
                                      <td>{{$category}}</td>
                                      <?php $colors = DB::table('color')->where('product_id', '=', $product->id)->get(); ?>
                                      <td>
                                      @foreach($colors as $color)
                                        <div style="height:20px;width:20px;background:{{$color->color_hex}};margin-left: 2px;float:left"></div>
                                      @endforeach  
                                      </td>
                                      <td>
                                        <a class="btn btn-success btn-sm close-box" href="<?=URL::to('/admin/product/edit/'.$product->id); ?>" title="edit product">
                                          <i class="glyphicon glyphicon-pencil"></i>
                                        </a>
                                        @if($product->publish == 1)
                                        	<a class="btn btn-info btn-sm close-box" href="<?=URL::to('/admin/product/change/2/'.$product->id); ?>" title="unpublish product">
	                                          <i class="glyphicon glyphicon-off"></i>
	                                        </a>
                                        @elseif($product->publish == 2)
                                        	<a class="btn btn-info btn-sm close-box" href="<?=URL::to('/admin/product/change/1/'.$product->id); ?>" title="publish product">
	                                          <i class="glyphicon glyphicon-ok"></i>
	                                        </a>
                                        @endif
                                        <a class="btn btn-danger btn-sm close-box" href="<?=URL::to('/admin/product/remove/'.$product->id); ?>" title="remove product">
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