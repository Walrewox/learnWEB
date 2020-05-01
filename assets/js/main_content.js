$(document).ready(function(){
  $('#author').click(function(){
    $.ajax({
      url: 'ajax-content/author.html',
      success: function(html){
        $('#info').html(html);
      }
    });
    $("*").removeClass('choice-active');
    $(this).addClass("choice-active");
    var state = 'author';
    window.history.pushState(state,null,'author');
  });
  $('#bio').click(function(){
    $.ajax({
      url: 'ajax-content/bio.php',
      success: function(html){
        $('#info').html(html);
      }
    });
    $("*").removeClass('choice-active');
    $(this).addClass("choice-active");
    var state = 'biography';
    window.history.pushState(state,null,'bio');
  });
  $('#edu').click(function(){
    $.ajax({
      url: 'ajax-content/edu.html',
      success: function(html){
        $('#info').html(html);
      }
    });
    $("*").removeClass('choice-active');
    $(this).addClass("choice-active");
    var state = 'education';
    window.history.pushState(state,null,'edu');
  });
  $('#hobby').click(function(){
    $.ajax({
      url: 'ajax-content/hobby.html',
      success: function(html){
        $('#info').html(html);
      }
    });
    $("*").removeClass('choice-active');
    $(this).addClass("choice-active");
    var state = 'hobby';
    window.history.pushState(state,null,'hobby');
  });
}); 