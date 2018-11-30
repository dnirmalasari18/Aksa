<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Form Edit Article</title>

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
        <div id="wrapper">
            
        
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
                                    <form role="form" action="{{ route('articleUpdated',['id'=>$article->id] ) }}" method="post" >
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input class="form-control" name="title" value="{{$article->title}}">
                                        </div>

                                        <div class="form-group">
                                            <label>Body</label>
                                            <textarea class="form-control" rows="3" name="body">{{$article->body}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Category</label>
                                            @if(!empty($category))
                                                @foreach($category as $c)
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="category[]" 
                                                            @if (!empty($article->categories))
                                                                @foreach ($article->categories as $ac)
                                                                    @if ($ac->name == $c->name)
                                                                        checked
                                                                    @endif
                                                                @endforeach
                                                            @endif
                                                            value="{{$c->id}}">{{$c->name}}
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
