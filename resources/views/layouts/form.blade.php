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
                                            <label>Nama</label>
                                            <input class="form-control" name="nama">
                                        </div>
                                        @if( $errors->has('nama') ? ' has-error' : '' )
                                            <p><font color="red"><strong>{!! $errors->first('nama') !!}</strong></font></p>
                                        @endif
                                        <label>Jenis Kelamin</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="jenisKelamin" id="optionsRadiosInline1" value="Laki-laki" checked>L
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="jenisKelamin" id="optionsRadiosInline2" value="Perempuan">P
                                            </label>
                                        @if( $errors->has('jenisKelamin') ? ' has-error' : '' )
                                            <p><font color="red"><strong>{!! $errors->first('jenisKelamin') !!}</strong></font></p>
                                        @endif
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input required class="form-control" type="email" name="email">
                                        </div>
                                        @if( $errors->has('email') ? ' has-error' : '' )
                                            <p><font color="red"><strong>{!! $errors->first('email') !!}</strong></font></p>
                                        @endif
                                        <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input class="form-control" name="tempatLahir">
                                        </div>
                                        @if( $errors->has('tempatLahir') ? ' has-error' : '' )
                                            <p><font color="red"><strong>{!! $errors->first('tempatLahir') !!}</strong></font></p>
                                        @endif
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input class="form-control" type="date" name="tanggalLahir">
                                        </div>
                                        @if( $errors->has('tanggalLahir') ? ' has-error' : '' )
                                            <p><font color="red"><strong>{!! $errors->first('tanggalLahir') !!}</strong></font></p>
                                        @endif
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control" rows="5" name="alamat"></textarea>
                                        </div>
                                        @if( $errors->has('alamat') ? ' has-error' : '' )
                                            <p><font color="red"><strong>{!! $errors->first('alamat') !!}</strong></font></p>
                                        @endif
                                        <div class="form-group">
                                            <label>Motto</label>
                                            <textarea class="form-control" rows="3" name="motto"></textarea>
                                        </div>
                                        @if( $errors->has('motto') ? ' has-error' : '' )
                                            <p><font color="red"><strong>{!! $errors->firs('motto') !!}</strong></font></p>
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
