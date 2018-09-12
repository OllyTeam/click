$(document).ready(function() {

    $('select[name="province"]').on('change', function(){
        var provinceId = $(this).val();
        if(provinceId) {
            $.ajax({
                url: "url('/states/get/countryId')",
                type:"GET",
                dataType:"json",
                beforeSend: function(){
                    
                },

                success:function(data) {

                    $('select[name="district"]').empty();

                    $.each(data, function(key, value){

                        $('select[name="district"]').append('<option value="'+ key +'">' + value + '</option>');

                    });
                },
                complete: function(){
                    
                }
            });
        } else {
            $('select[name="district"]').empty();
        }

    });

});


