function change() {
    var uiw = 320;
    var win_w = document.documentElement.clientWidth;
    document.documentElement.style.fontSize = win_w / uiw * 100 + 'px';
  }
  change();
  window.onload = change;
  window.onresize = change;
$.ajax({
    url: "../js/json.json",
    success: function(data) {

        //dot.js 模板引擎
        var sy_ = doT.template($('#sy').text());
        $('.list').html(sy_(data));
    }
});
// 分类
var tag=true;
$('.catalogue').on('tap','li',function(e){
   

    var index=$(this).index();
    $(this).toggleClass('li_color');
    $(this).siblings().removeClass('li_color');
    $('.screen_out>div').eq(index).toggleClass('block');
    $('.screen_out>div').eq(index).siblings().removeClass('block');

    });

$('.region p').tap(function(){
    $(this).css({
        color:'#ff8a00',
        background:"#fff"
    });
    $(this).siblings().css({
        color:'#000',
        background:"#f5f5f5"
    });
})
$('.region li').tap(function(){
    $(this).css({
        color:'#ff8a00'
    
    });
    $(this).siblings().css({
        color:'#000'
       
    });
})
$('.list').on('tap','li',function(){
    window.location.href='../html/details.html'
})
$('.me').tap(function(){
    window.location.href="../html/me.html"
  })