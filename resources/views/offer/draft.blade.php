<script type="text/javascript">
$.each(result, function (index, value) {
  //console.log(value);
  //$('.district').append('<option>'+ value +'</option>');
        $(".district").append(function(value){
            return "<option>" + value + ".</option>";
        });
});

                        console.log(length(result));
                        //$('.district').html(result);
                        //console.log(result)
                      var $el = $('#district');
                      $el.empty();
                      $el.append('<option></option>').attr("value",'').text('district');
                      $each(result,function(value,key){
                             $el.append('<option></option').attr("value",value).text(key);
                     });  

                     var opts = $.parseJSON(result);

                                 $.each(result, function(i,d) 
                                 {
                                    $('.district').append('<option value="">' + d.name + '</option>');
                                    //$('.district').value('d.name');
                                 });

                     console.log(result);
</script>