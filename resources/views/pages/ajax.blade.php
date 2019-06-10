<script>
    jQuery(document).ready(function () {
        $('.track-card, .list').click(function (e) {
            e.preventDefault();

            var id = parseInt($(this).children(':last-child').val());
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });

            $.ajax({
                url: "{{ url('/song/count/{id}') }}",
                data: {
                    id: id,
                },
                method: "POST",
                success: function (data) {

                    // console.log(data);
                }
            });
            // alert(id);
        });
    });
</script>