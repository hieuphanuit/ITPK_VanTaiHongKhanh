document.addEventListener('copy', function(e){
    e.clipboardData.setData('text/plain', '');
    e.clipboardData.setData('text/html', '');
	alert('ĐÂY LÀ TÀI SẢN BẢO MẬT BẢN QUYỀN CỦA CÔNG TY ITPK');
    e.preventDefault(); // We want to write our data to the clipboard, not data from any user selection
});

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

$(document).ready(function(){
	
	
})
