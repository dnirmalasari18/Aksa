<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Form Article</title>

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
                            <a href="{{ url('articleForm') }}"><i class="fa fa-table fa-fw"></i>Form artikel</a>
                        </li>
                        <li>
                            <a href="{{ url('articleShow') }}"><i class="fa fa-edit fa-fw"></i>Tabel artikel</a>
                        </li>
                        <li>
                            <a href="{{ url('categoryShow') }}"><i class="fa fa-edit fa-fw"></i>Tabel kategori</a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                        </li>
                    </ul>
                </div>
            </div>           
        </nav>-->
        
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Form Article</h1>
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
                                    <form role="form" action="{{ route('articlePost') }}" method="post" >
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input class="form-control" name="title">
                                        </div>

                                        <div class="form-group">
                                            <label>Body</label>
                                            <textarea class="form-control" rows="3" name="body"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Category</label>
                                            @if(!empty($category))
                                                @foreach($category as $c)
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="category[]" value="{{$c->id}}">{{$c->name}}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            @endif
                                                
                                        </div>
                                        
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
