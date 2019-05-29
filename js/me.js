function change() {
    var uiw = 320;
    var win_w = document.documentElement.clientWidth;
    document.documentElement.style.fontSize = win_w / uiw * 100 + 'px';
  }
  change();
  window.onload = change;
  window.onresize = change;
  $('.login').tap(function(){
    window.location.href='../html/login.html';
  })