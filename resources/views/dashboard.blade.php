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
             <table>
                 <tr>
                     <td>dawda</td>
                 </tr>
             </table>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    
	
	@extends('include.footer')
	

</body>

</html>
@endsection
