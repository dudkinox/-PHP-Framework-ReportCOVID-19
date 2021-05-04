<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
    $('#Province').change(function() {
        var id_province = $(this).val();

        $.ajax({
            type: "POST",
            url: "Api_provinces/ajax_db.php",
            data: {
                id: id_province,
                function: 'provinces'
            },
            success: function(data) {
                $('#Amphur').html(data);
                $('#District').html(' ');
                $('#District').val(' ');
                $('#postalcode').val(' ');
            }
        });
    });

    $('#Amphur').change(function() {
        var id_amphures = $(this).val();

        $.ajax({
            type: "POST",
            url: "Api_provinces/ajax_db.php",
            data: {
                id: id_amphures,
                function: 'amphures'
            },
            success: function(data) {
                $('#District').html(data);
            }
        });
    });

    $('#District').change(function() {
        var id_districts = $(this).val();

        $.ajax({
            type: "POST",
            url: "Api_provinces/ajax_db.php",
            data: {
                id: id_districts,
                function: 'districts'
            },
            success: function(data) {
                $('#postalcode').val(data)
            }
        });

    });
</script>