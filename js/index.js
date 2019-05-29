function change() {
  var uiw = 320;
  var win_w = document.documentElement.clientWidth;
  document.documentElement.style.fontSize = win_w / uiw * 100 + 'px';
}
change();
window.onload = change;
window.onresize = change;
// 轮播图
var mySwiper = new Swiper('.swiper-container', {
 autoplay: {
    delay: 3000,
    stopOnLastSlide: false,
    disableOnInteraction: false,
    }, 
  loop: true
});
//底部导航切换
$('#nav_list>li').tap(function () {
  $(this).children(".nav_list").show();
  $(this).css({
    color: '#FF8A00',
    borderBottom: '.01rem solid #FF8A00',
  })
  $(this).siblings().children('.nav_list').hide();
  $(this).siblings().css({
    color: ' rgb(102,102,102);',
    borderBottom: 'none',
  })
})
$('.close').tap(function(){
  $(this).parent().remove()
})
$('.me').tap(function(){
  window.location.href="../html/me.html"
})