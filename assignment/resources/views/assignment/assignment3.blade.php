@extends('layouts.app')

@section('content')
<style>
	#map-canvas{
		width:1050px;
		height:600px;
	}
</style>
<div class="container">
   <div class="row"> 
        <div class="col-md-12">        
            <div id="map-canvas"> </div>   	
        </div>         
    </div>
</div> 
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIzxm_Wb-MoX82lBgqRjVHd1UWHqJqb_8&libraries=places">
</script>
<script src="{{URL::asset('js/map.js')}}" type="text/javascript"></script>
@endsection