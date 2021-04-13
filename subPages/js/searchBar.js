$(document).ready(function(){
 $.ajaxSetup({ cache: false });
 $('#search').keyup(function(){
  $('#result').html('');
  $('#state').val('');
  var searchField = $('#search').val();
  var expression = new RegExp(searchField, "i");
  $.getJSON('poly/polydata.json', function(polydata) {
   var resp = polydata;
        for(kk in resp)
        {
                var j = resp[kk];
                for(k in j)
                {
                        var i = j[k];
                        for(key in i)
                        {
                            if (key.search(expression) != -1 || i[key].course_code.search(expression) != -1 || k.search(expression) != -1 || kk.search(expression) != -1) {
                                $('#result').append('<li class="list-group-item list-group"><strong class="courseHeader">'+kk+'</strong> | <strong class="courseHeader">'+k+'</strong> | <strong class="courseHeader">'+key+'</strong> | <strong class="courseHeader"> Year: '+i[key].year+'</strong> | <strong class="courseHeader"> Type: '+i[key].elr2b2_type+'</strong> | <strong class="courseHeader"> ELR2B2: '+i[key].elr2b2+'</strong> | <strong class="courseHeader"> Planned Intake: '+i[key].planned_intake+'</strong> | <span><strong class="courseHeader"> Course Code: '+i[key].course_code+'</strong></span> | <p>'+i[key].course_description+'</p> <a target="_blank" href = "'+i[key].reference+'"><em>Click Here to Learn More</em></a></li>');
                            }
                        }
                    
                }
            
        }
       
  });
 });
 
 $('#result').on('click', 'li', function() {
  var click_text = $(this).text().split('|');
  $('#search').val($.trim(click_text[0]));
  $("#result").html('');
 });
});
