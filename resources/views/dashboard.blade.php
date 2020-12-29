@section('content')
<!DOCTYPE html>
<html lang="en">

@extends('include.header');

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
                <a class="navbar-brand" href="{{ route('dashboard') }}">Admin : {{ Auth::user()->name }}</a>
                
            </div>
            <!-- /.navbar-header -->

            

            @extends('include.menu')
            
            
            
           
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    
	<script src="http://libs.baidu.com/jquery/1.11.1/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	
	<script src="bower_components/sammy/lib/min/sammy-latest.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>
	





    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>
	
	

</body>

</html>
@endsection
