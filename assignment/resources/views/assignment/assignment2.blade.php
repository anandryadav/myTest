@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
         <!--Input panel start-->
         <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Question 2</div>
                <div class="panel-body">
                    <form class="form-horizontal" id="form1" role="form">                        
                        <div class="form-group">
                            <label for="input" class="col-md-4 control-label">Number of Board of Directors</label>
                            <div class="col-md-6">                               
                                <input type="text"  class="form-control" placeholder="Enter Number Only" id="input" name="itemConsumption" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57" />
                            </div>
                        </div>                      

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="button" id="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>    
         </div>
         <!--Input panel End-->
         <!--Result panel start-->
         <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Result</div>
                <div class="panel-body">
                <label class="col-md-6 control-label"> Number of handshakes :</label>
                    <span id="result"></span>
                </div>
            </div>    
         </div>
        <!--Result panel End-->
    </div>    
</div>
<!-- Scripts -->
<script src="{{URL::asset('js/assing.js')}}" type="text/javascript"></script>
 <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-1.4.4.min.js"></script>

@endsection