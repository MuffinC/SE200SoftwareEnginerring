$(document).ready(function(){
 $.ajaxSetup({ cache: false });
 $('#search').keyup(function(){
  $('#result').html('');
  $('#state').val('');
  var searchField = $('#search').val();
  var expression = new RegExp(searchField, "i");
  $.getJSON('data.json', function(data) {
   $.each(data, function(key, value){
    if (value.course_name.search(expression) != -1 || value.course_code.search(expression) != -1 || value.school.search(expression) != -1)
    {
     $('#result').append('<li class="list-group-item link-class"><strong>'+value.course_name+'</strong> | <strong>'+value.course_code+'</strong> | <span class="text-muted"><strong>'+value.school+'</strong></span> | <p><em>'+value.course_description+'</em></p> | <a target="_blank" href = "'+value.reference+'">Click Here</a></li>');
    }
   });   
  });
 });
 
 $('#result').on('click', 'li', function() {
  var click_text = $(this).text().split('|');
  $('#search').val($.trim(click_text[0]));
  $("#result").html('');
 });
});