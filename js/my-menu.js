$(document).ready(function () {
	$("#btn-menu").click(function () {
		if ($(".btn-menu span").attr("class") == "fa fa-bars") {
			$(".btn-menu span").removeClass("fa fa-bars").addClass("fa fa-close");
			$(".container-menu-link").css({ left: "0" });
		} else {
			$(".btn-menu span").removeClass("fa fa-close").addClass("fa fa-bars");
			$(".container-menu-link").css({ left: "-100%" });
		}
	});
});
