<!DOCTYPE html>
<html>
<head>
    <title>Geonames</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{csrf_token()}}">


    <style rel="stylesheet" href="{{asset('css/app.css')}}"></style>
    <style rel="stylesheet" href="{{asset('css/main.css')}}"></style>
    <script type="text/javascript">
        let LARAVEL = {};
        LARAVEL.APP_URL = {!! json_encode(url('/')) !!};
        LARAVEL.CSRF_TOKEN =  {!! json_encode(csrf_token()) !!};

    </script>
</head>
<body>

<div class="d-flex flex-row">
    <div class="p-3">
        <div>
{{--            <form action="{{route('get-twenty-cities')}}">--}}
                <input id="getTwentyCities" class="controls pac-input" type="text" placeholder="Enter a location">
            {{--</form>--}}
        </div>
    </div>
    <div class="p-9">
        <div>
            <div id="map" style="margin: 0 auto;width: 80%; height: 800px"></div>
        </div>
    </div>

</div>





{{--<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>--}}
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
{{--<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>--}}
<script src="{{asset('js/jquery.autocomplete.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsUnq309Hjg7knPz2aErSo_4yZ1A3CS9s&libraries=places&callback=initMap"
        async defer></script>
<script src="{{asset('js/main.js')}}"></script>

<script>

    var countries = [
        { value: 'Armenia', data: '40.4555/45.55' },
        { value: 'Zimbabwe', data: '41.555/45.000' },
        { value: 'Andorra', data: '41.555/45.100' },
        { value: 'Use', data: '42.555/46.100' },
        { value: 'Russia', data: '42.655/46.600' },
        { value: 'Turkey', data: '42.155/46.300' }
    ];

    initAutocomplete(countries)

</script>


</body>
</html>
