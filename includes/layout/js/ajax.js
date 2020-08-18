$(function(){
  $('.commentform').on('submit',function(){
    var that   = $(this),
        action = that.attr('action'),
        method = that.attr('method'),
        data   = {};

    that.find('[name]').each(function(index,value){
      var that = $(this),
          name = that.attr('name');
      data[name] = that.val();
    })


    $.ajax({
      url: action,
      type: method,
      data: data,
      success: function(response){
        document.getElementById("comments").innerHTML = response;
        document.getElementById("commentform").reset();
      }
    });

    return false;
  });


/*  $('.addnewpost form').on('submit',function(){
    var that   = $(this),
        action = that.attr('action'),
        method = that.attr('method'),
        data   = {};

    that.find('[name]').each(function(index,value){
      var that = $(this),
          name = that.attr('name');
      data[name] = that.val();
    })


    $.ajax({
      url: action,
      type: method,
      data: data,
      success: function(response){
        document.getElementById("news").innerHTML = response;
        document.getElementById("addnewpost").reset();
      }
    });

    return false;
  });

  */


  $('.attendance i.fa-check').click(function(){
    $('.attendance .attend').css('display','block');
    $('.attendance .attend').addClass('dropDownAnimation');
    $('i.fa-spinner').addClass('rotatespinner');

    $.ajax({
      url: 'ajax/gps.php',
      success: function(response){
        document.getElementById("gps").innerHTML = "<p>" + response + "</p>";
        $('.attendance .attend p').addClass('dropDownAnimation');
        $('.attendance i').css("background-color", "green");
        $('.attendance i').css("box-shadow", "none");
        $('.attendance i').addClass('dropDownAnimation');
      }
    });
  });

  $('.attendance .attend').click(function(){
    $(this).css('display','none');
  })

})
