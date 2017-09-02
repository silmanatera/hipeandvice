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
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Online</span>
                    <span class="label label-success">{{Blog::get_total_online()}}</span>
                  </a>
                  <a class="quick-btn" href="#" style="font-size: 13px">
                    <i class="glyphicon glyphicon-download"></i>
                    <span>Hidden</span>
                    <span class="label label-danger">{{Blog::get_total_hidden()}}</span>
                  </a>
                </div>

                <div class="col-lg-12">
                  <div class="box">
                      <header>
                          <h5>New Blog</h5>
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
                            <p>
                                @if(Session::get('danger'))
                                    <div id="danger" class="alert alert-danger">
                                      <strong>¡Error! </strong>{{Session::get('danger')}}
                                    </div>
                                @endif
                            </p> 
                            <p>
                                @if(Session::get('success'))
                                    <div class="alert alert-success" role="alert">
                                      <strong>¡Exito! </strong>{{Session::get('success')}}
                                    </div>
                                @endif
                            </p> 
                            <div id="collapse2" class="body" style="margin-top: 4%">
                            {{ Form::open(array('url' => '/admin/blog/register', 'files' => true, 'class' => 'form-horizontal', 'id' => 'popup-validation', 'method' => 'post')) }}
                              <div class="form-group">
                                    <label class="control-label col-lg-3">Select</label>
                                    <div class="col-lg-6">
                                        <select name="category" id="sport" class="validate[required] form-control">
                                            <option value="">Choose a Category</option>
                                            @if(isset($category))
                                              @foreach($category as $element)
                                                <option value="{{$element->id}}">{{$element->name}}</option>
                                              @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    @if($errors->has('category'))
                                      @foreach($errors->get('category') as $error)
                                        <span>× {{ $error }}</span>
                                      @endforeach
                                   @endif
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-lg-3">Title</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="validate[required] form-control" name="title" id="req">
                                        @if($errors->has('title'))
                                          @foreach($errors->get('title') as $error)
                                            <span>× {{ $error }}</span>
                                          @endforeach
                                       @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="text4" class="control-label col-lg-3">Blog Resume</label>

                                    <div class="col-lg-6">
                                        <textarea id="text4" name="resume" class="form-control"></textarea>
                                        @if($errors->has('resume'))
                                          @foreach($errors->get('resume') as $error)
                                            <span>× {{ $error }}</span>
                                          @endforeach
                                       @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-3">Photo</label>
                                    <div class="col-lg-8"><input type="file" name="photo"></div>
                                </div>


                                <div class="form-group">
                                    <label class="control-label col-lg-3">Date</label>

                                    <div class=" col-lg-6">
                                        <input value="201-12-01" class="validate[required,custom[date]] form-control" type="text"
                                               name="date" id="date3"/>
                                        <span class="help-block">date only YYYY-mm-dd</span>
                                        @if($errors->has('date'))
                                          @foreach($errors->get('date') as $error)
                                            <span>× {{ $error }}</span>
                                          @endforeach
                                       @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label col-lg-3">publish?</label>
                                  <div class="checkbox">
                                      <label>
                                          <input class="uniform" type="radio" name="optionsRadios" value="1" checked>Yes
                                      </label>
                                      <label>
                                          <input class="uniform" type="radio" name="optionsRadios" value="0">No
                                      </label>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label for="text4" class="control-label col-lg-3">Blog Description</label>
                                  <div class="col-lg-6">
                                    
                                      <div class="body">
                                         <textarea id="ckeditor" name="description" class="ckeditor"></textarea>
                                         @if($errors->has('description'))
                                            @foreach($errors->get('description') as $error)
                                              <span>× {{ $error }}</span>
                                            @endforeach
                                         @endif
                                      </div>
                                    
                                  </div>
                                </div>

                                
                                <div class="form-actions no-margin-bottom" style="text-align: right">
                                    <input type="submit" value="Save" class="btn btn-metis-2 btn-lg btn-grad btn-rect">
                                    <input type="button" onclick="window.open('<?=URL::to("/admin/")?>','_top');" value="Cancel" class="btn btn-metis-1 btn-lg btn-grad btn-rect">
                                </div>
                            {{ Form::close() }}
                        </div>
                      </div>
                </div>
              </div>
            </div>

          </div>
          <!-- /.inner -->
      </div>
      <!-- /.outer -->
  </div>


@stop()