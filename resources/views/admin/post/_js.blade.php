@section('scripts')
    <script src="{{ asset('/js/pickadate/picker.js') }}"></script>
    <script src="{{ asset('/js/pickadate/picker.date.js') }}"></script>
    <script src="{{ asset('/js/pickadate/picker.time.js') }}"></script>
    <script src="{{ asset('/js/selectize/selectize.min.js') }}"></script>
    <script type="text/javascript">
        $(document).load(function () {
            $("#publish_date").pickadate({
                format: "mmm-d-yyyy"
            });
            $("#publish_time").pickatime({
                format: "h:i A"
            });
            $("#tags").selectize({
                create: true
            });
        });
    </script>
@stop