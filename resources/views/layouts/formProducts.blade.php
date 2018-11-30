<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

        <!-- Bootstrap Core CSS -->
        <link href="{!! asset('theme/vendor/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">

        <!-- MetisMenu CSS -->    
        <link href="{!! asset('theme/vendor/metisMenu/metisMenu.min.css') !!}" rel="stylesheet">
       
        <!-- Custom CSS -->    
        <link href="{!! asset('theme/dist/css/sb-admin-2.css') !!}" rel="stylesheet">
    
        <!-- Custom Fonts -->
        <link href="{!! asset('theme/vendor/font-awesome/css/font-awesome.min.css') !!}" rel="stylesheet" type="text/css">
</head>

<body>
    <nav>
        <div id="wrapper">
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="{{ url('showProduct') }}"><i class="fa fa-table fa-fw"></i> Tables</a>
                        </li>
                        <li>
                            <a href="{{ url('formProduct') }}"><i class="fa fa-edit fa-fw"></i> Forms</a>
                        </li>
                    </ul>
                </div>
            </div>   
        

    <div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">@yield('h1')</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Form Elements
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="@yield('action')" method="post" >
                                        {{ csrf_field() }}
                                        @yield('methid')
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select class="form-control" name="category">
                                                <option value="" disabled selected>Select your category</option>
                                                <option value="1" >Pakaian</option>
                                                <option value="2">Minuman</option>
                                            </select>
                                        </div>
                                        @if( $errors->has('category') ? ' has-error' : '' )
                                            <p><font color="red"><strong>{!! $errors->first('category') !!}</strong></font></p>
                                        @endif
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" name="nama">
                                        </div>
                                        @if( $errors->has('nama') ? ' has-error' : '' )
                                            <p><font color="red"><strong>{!! $errors->first('nama') !!}</strong></font></p>
                                        @endif
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" rows="3" name="desc"></textarea>
                                        </div>
                                        @if( $errors->has('desc') ? ' has-error' : 'desc' )
                                            <p><font color="red"><strong>{!! $errors->first('desc') !!}</strong></font></p>
                                        @endif
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input class="form-control" name="price">
                                        </div>
                                        @if( $errors->has('price') ? ' has-error' : 'price' )
                                            <p><font color="red"><strong>{!! $errors->first('price') !!}</strong></font></p>
                                        @endif
                                        
                                        <button type="submit" class="btn btn-default">Simpan</button>
                                    </form>
                                </div>
                                
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{!! asset('theme/vendor/jquery/jquery.min.js')!!}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{!! asset('theme/vendor/bootstrap/js/bootstrap.min.js')!!}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{!! asset('theme/vendor/metisMenu/metisMenu.min.js')!!}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{!! asset('theme/dist/js/sb-admin-2.js') !!}"></script>

</body>

</html>
