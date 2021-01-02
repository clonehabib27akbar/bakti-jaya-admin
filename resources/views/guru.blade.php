@section('content')
<!DOCTYPE html>
<html lang="en">

    <head>

        @extends('include.header')
    
    </head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('dashboard') }}">Bakti Jaya</a>
                
            </div>
            <div style="position: relative; top: 10px;" class="nav navbar-top-links navbar-right">
                {{ Auth::user()->name }}&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
            <!-- /.navbar-header -->

            

            @extends('include.menu')
            
            
            
           
            <!-- /.navbar-static-side -->
        </nav>
        
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Guru</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        {{-- <div class="panel-heading">
                            DataTables Advanced Tables
                        </div> --}}
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>NUPTK</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($guru as $data_guru)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$data_guru->nama}}</td>
                                            <td>{{$data_guru->nuptk}}</td>
                                            <td>{{$data_guru->jk}}</td>
                                            <td>{{$data_guru->tempat_lahir}}</td>
                                            <td>{{$data_guru->tgl_lahir}}</td>
                                            
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    
	
	@extends('include.footer')
	

</body>

</html>
@endsection
