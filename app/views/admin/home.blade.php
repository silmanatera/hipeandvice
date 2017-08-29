@extends ('template')

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
                    <span class="label label-success">456</span>
                  </a>
                  <a class="quick-btn" href="#" style="font-size: 13px">
                    <i class="glyphicon glyphicon-minus"></i>
                    <span>rejected shopping</span>
                    <span class="label label-warning">20</span>
                  </a>
                </div>

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
                                  <tr>
                                      <td>1</td>
                                      <td>Jill</td>
                                      <td>Smith</td>
                                      <td>smith@gamil.com</td>
                                      <td>California</td>
                                      <td>Product 1</td>
                                      <td>5</td>
                                      <td>
                                        <a class="btn btn-success btn-sm close-box" title="approved">
                                          <i class="glyphicon glyphicon-ok"></i>
                                        </a>
                                        <a class="btn btn-danger btn-sm close-box" title="remove">
                                          <i class="glyphicon glyphicon-remove"></i>
                                        </a>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>2</td>
                                      <td>Jill</td>
                                      <td>Smith</td>
                                      <td>smith@gamil.com</td>
                                      <td>California</td>
                                      <td>Product 1</td>
                                      <td>5</td>
                                      <td>
                                        <a class="btn btn-success btn-sm close-box" title="approved">
                                          <i class="glyphicon glyphicon-ok"></i>
                                        </a>
                                        <a class="btn btn-danger btn-sm close-box" title="remove">
                                          <i class="glyphicon glyphicon-remove"></i>
                                        </a>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>3</td>
                                      <td>Jill</td>
                                      <td>Smith</td>
                                      <td>smith@gamil.com</td>
                                      <td>California</td>
                                      <td>Product 1</td>
                                      <td>5</td>
                                      <td>
                                        <a class="btn btn-success btn-sm close-box" title="approved">
                                          <i class="glyphicon glyphicon-ok"></i>
                                        </a>
                                        <a class="btn btn-danger btn-sm close-box" title="remove">
                                          <i class="glyphicon glyphicon-remove"></i>
                                        </a>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>4</td>
                                      <td>Jill</td>
                                      <td>Smith</td>
                                      <td>smith@gamil.com</td>
                                      <td>California</td>
                                      <td>Product 1</td>
                                      <td>5</td>
                                      <td>
                                        <a class="btn btn-success btn-sm close-box" title="approved">
                                          <i class="glyphicon glyphicon-ok"></i>
                                        </a>
                                        <a class="btn btn-danger btn-sm close-box" title="remove">
                                          <i class="glyphicon glyphicon-remove"></i>
                                        </a>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>4</td>
                                      <td>Jill</td>
                                      <td>Smith</td>
                                      <td>smith@gamil.com</td>
                                      <td>California</td>
                                      <td>Product 1</td>
                                      <td>5</td>
                                      <td>
                                        <a class="btn btn-success btn-sm close-box" title="approved">
                                          <i class="glyphicon glyphicon-ok"></i>
                                        </a>
                                        <a class="btn btn-danger btn-sm close-box" title="remove">
                                          <i class="glyphicon glyphicon-remove"></i>
                                        </a>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>4</td>
                                      <td>Jill</td>
                                      <td>Smith</td>
                                      <td>smith@gamil.com</td>
                                      <td>California</td>
                                      <td>Product 1</td>
                                      <td>5</td>
                                      <td>
                                        <a class="btn btn-success btn-sm close-box" title="approved">
                                          <i class="glyphicon glyphicon-ok"></i>
                                        </a>
                                        <a class="btn btn-danger btn-sm close-box" title="remove">
                                          <i class="glyphicon glyphicon-remove"></i>
                                        </a>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>4</td>
                                      <td>Jill</td>
                                      <td>Smith</td>
                                      <td>smith@gamil.com</td>
                                      <td>California</td>
                                      <td>Product 1</td>
                                      <td>5</td>
                                      <td>
                                        <a class="btn btn-success btn-sm close-box" title="approved">
                                          <i class="glyphicon glyphicon-ok"></i>
                                        </a>
                                        <a class="btn btn-danger btn-sm close-box" title="remove">
                                          <i class="glyphicon glyphicon-remove"></i>
                                        </a>
                                      </td>
                                  </tr>
                              </tbody> 
                          </table>

                          <nav aria-label="Page navigation" style="text-align: center">
                            <ul class="pagination">
                              <li>
                                <a href="#" aria-label="Previous">
                                  <span aria-hidden="true">&laquo;</span>
                                </a>
                              </li>
                              <li><a href="#">1</a></li>
                              <li><a href="#">2</a></li>
                              <li><a href="#">3</a></li>
                              <li><a href="#">4</a></li>
                              <li><a href="#">5</a></li>
                              <li>
                                <a href="#" aria-label="Next">
                                  <span aria-hidden="true">&raquo;</span>
                                </a>
                              </li>
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
<!-- /#wrap -->
@stop()