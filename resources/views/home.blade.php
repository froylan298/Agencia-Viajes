@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('') }}
                </div>

                <style>
                    #map {
                	height: 500px;
                	width: 100%;
                }
                
                </style>
                <script>function iniciarMap(){
                    var coord = {lat:-34.5956145 ,lng: -58.4431949};
                    var map = new google.maps.Map(document.getElementById('map'),{
                    zoom: 10,
                    center: coord
                 });
                var marker = new google.maps.Marker({
                    position: coord,
                    map: map
                 });
                }</script>
                <div id="map"></div>
                <script src="script.js"></script>
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap"></script>

            </div>
        </div>
    </div>
</div>
@endsection
