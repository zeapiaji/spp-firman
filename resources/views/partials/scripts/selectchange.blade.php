<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(function(){
        $.ajaxSetup({
            headers:    {  'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')  }
        })
    })

    $(function(){
        $('#student').on('change', function(){
            let student_id  =   $('#student').val()
            $.ajax({
                type:   'POST',
                url:    '/getyear',
                data:   {student_id:student_id},
                cache:false,

                success: function(msg){
                    $('#year').val(msg)
                },

                error: function(data){
                    console.log('error:' ,data)
                }
            })
            $.ajax({
                type:   'POST',
                url:    '/getprice',
                data:   {student_id:student_id},
                cache:false,

                success: function(msg){
                    $('#price').val(msg)
                },

                error: function(data){
                    console.log('error:' ,data)
                }
            })

            $.ajax({
                type: 'POST',
                url:  '/getmonth',
                data:  {student_id:student_id},
                cache:false,

                success: function(msg){
                    $('#month').html(msg)
                    console.log(msg)
                },

                error: function(data){
                    console.log('error:' ,data)
                }
            })
        })
    })
</script>