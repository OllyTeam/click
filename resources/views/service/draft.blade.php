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


<script>

$(document).ready(function(){

    $('#province').on('change',function(e){
        if($(this).val() != '')
        { 

                var select = $(this).attr("id");
                var value = $(this).val();
                var dependent = $(this).data('dependent');
                var _token = $('input[name="_token"]').val();

                $.ajax({
                            url:"{{url('dynamicdata.fetch')}}",
                            method:"POST",
                            data:{select:select, value:value, _token:_token,dependent:dependent},
                            success:function(result)
                            {
                                    // $.each(result,function(index,item){
                                    //    $('.list').append('<option value="">' + item.name + '</option>' );
                                    // });

                                     var myDiv = document.getElementById("district2");
                                     document.getElementById("district2").innerHTML = ""; 

                                     var selectList = document.createElement("select");
                                     selectList.id = "mySelect";
                                     selectList.class = "form";
                                     myDiv.appendChild(selectList);

                                    //Create and append the options
                                    for (var i = 0; i < result.length; i++) 
                                    {
                                        var option = document.createElement("option");
                                         option.value = result[i].id;
                                         option.text = result[i].name;
                                         selectList.appendChild(option);
                                         console.log(result[i].id,result[i].name);
                                    }

                            }
                        });
        }   
    });


                                $('#mySelect').on('click',function(e){
                                    if($(this).val() != '')
                                    { 

                                            var select = $(this).attr("id");
                                            var value = $(this).val();
                                            var dependent = $(this).data('dependent');
                                            var _token = $('input[name="_token"]').val();

                                            $.ajax({
                                                        url:"{{url('dynamicdata.fetch2')}}",
                                                        method:"POST",
                                                        data:{select:select, value:value, _token:_token,dependent:dependent},
                                                        success:function(result)
                                                        {
                                                                // $.each(result,function(index,item){
                                                                //    $('.list').append('<option value="">' + item.name + '</option>' );
                                                                // });

                                                                 var myDiv = document.getElementById("district2");
                                                                 document.getElementById("district2").innerHTML = ""; 

                                                                 var selectList = document.createElement("select");
                                                                 selectList.id = "mySelect";
                                                                 selectList.class = "form";
                                                                 myDiv.appendChild(selectList);

                                                                //Create and append the options
                                                                for (var i = 0; i < result.length; i++) 
                                                                {
                                                                    var option = document.createElement("option");
                                                                     option.value = result[i].id;
                                                                     option.text = result[i].name;
                                                                     selectList.appendChild(option);
                                                                     console.log(result[i].id,result[i].name);
                                                                }

                                                        }
                                                    });
                                    }   
                                });
});    

</script>