$(document).ready(function() {
    selesai();
});
 
function selesai() {
	setTimeout(function() {
		update();
		selesai();
	}, 200);
}
 
function update() {
	$.getJSON("isikomentar.php", function(data) {
		$("ul").empty();
		$.each(data.result, function() {
			$("ul").append("</li><li>Komentar : "+this['komentar']+"</li>");
		});
	});
}
