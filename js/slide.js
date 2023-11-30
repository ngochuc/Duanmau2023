
$(document).ready(function(){
    let active = 0;
    let lengthItems = $('.slider .listbanner .item').length - 1;

    $('#next').click(function(){
      if(active + 1 > lengthItems){
        active = 0;
      } else {
        active = active + 1;
      }
      reloadSlider();
    });

    $('#prev').click(function(){
      if(active - 1 < 0){
        active = lengthItems;
      } else {
        active = active - 1;
      }
      reloadSlider();
    });

    let refreshSlider = setInterval(function(){ $('#next').click(); }, 4000);

    function reloadSlider(){
      let checkLeft = $('.slider .listbanner .item').eq(active).position().left;
      $('.slider .listbanner').css('left', -checkLeft + 'px');

      $('.slider .dots li.active').removeClass('active');
      $('.slider .dots li').eq(active).addClass('active');

      clearInterval(refreshSlider);
      refreshSlider = setInterval(function(){ $('#next').click(); }, 4000);
    }

    $('.slider .dots li').click(function(){
      active = $(this).index();
      reloadSlider();
    });
  });