<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta name="_token" content="{{csrf_token()}}" />
    <title></title>

    <script src="http://code.jquery.com/jquery-3.3.1.min.js">
    </script>
</head>
<body>

<script>
    jQuery(document).ready(function(){
        jQuery('#increase').click(function(e){
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ url('/increase') }}",
                method: 'post',
                success: function(result){
                    // console.log(result);
                    jQuery('.alert').show();
                    jQuery('.alert').html(result);
                }});
        });
    });

</script>
</body>
</html>