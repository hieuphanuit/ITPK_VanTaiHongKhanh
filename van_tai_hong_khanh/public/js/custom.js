document.addEventListener('copy', function(e){
    e.clipboardData.setData('text/plain', '');
    e.clipboardData.setData('text/html', '');
	alert('ĐÂY LÀ TÀI SẢN BẢO MẬT BẢN QUYỀN CỦA CÔNG TY ITPK');
    e.preventDefault(); // We want to write our data to the clipboard, not data from any user selection
});

