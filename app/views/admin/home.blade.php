@extends ('template_admin')

@section ('content')

  <!-- /#left -->
  <div id="content">
      <div class="outer">
          <div class="inner bg-light lter">
              <div class="col-lg-12">
                <h1>Hype & Vice Dashboard</h1>
                
                <!-- Cuando se haga click se filtra por compras aprobadas y rechazadas -->
                <div class="text-center">
                  <a class="quick-btn" href="#" style="font-size: 13px">
                    <i class="glyphicon glyphicon-plus"></i>
                    <span>approved shopping</span>
                    <span class="label label-success">{{Purchase::get_total_approved()}}</span>
                  </a>
                  <a class="quick-btn" href="#" style="font-size: 13px">
                    <i class="glyphicon glyphicon-minus"></i>
                    <span>rejected shopping</span>
                    <span class="label label-warning">{{Purchase::get_total_rejected()}}</span>
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
                          <h5>Listing by delivering</h5>
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
                        @if(isset($list))  
                          <table class="table table-striped">
                              <thead>
                                  <tr>
                                      <th>#order</th>
                                      <th>First Name</th>
                                      <th>Last Name</th>
                                      <th>E-mail</th>
                                      <th>School</th>
                                      <th>Product</th>
                                      <th>Qty</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>  
                              <tbody>
                              @foreach($list as $purchase)
                                  <tr>
                                      <td>{{$purchase->id}}</td>
                                      <td>{{$purchase->first_name}}</td>
                                      <td>{{$purchase->last_name}}</td>
                                      <td>{{$purchase->email}}</td>
                                      <?php $school = College::find($purchase->college_id)->first()->name; ?>
                                      <td>{{$school}}</td>
                                      <td>{{$purchase->title}}</td>
                                      <td>{{$purchase->cantidad}}</td>
                                      <td>
                                        <a class="btn btn-success btn-sm close-box" href="<?=URL::to('/admin/change/1/'.$purchase->id)?>" title="approved">
                                          <i class="glyphicon glyphicon-ok"></i>
                                        </a>
                                        <a class="btn btn-danger btn-sm close-box" href="<?=URL::to('/admin/change/2/'.$purchase->id)?>" title="remove">
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
                        @endif  
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
<!-- /#wrap -->
@stop()