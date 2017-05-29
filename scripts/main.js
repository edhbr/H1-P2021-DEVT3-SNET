var subMenuHolder = $(".subMenuHolder");
var nav = $("nav#navHeader>ul");
var burger = $(".hamburger");

subMenuHolder.on(
	"click",
	function() {
		$(this).find("ul").toggleClass("subMenuToggle");
		$(this).toggleClass("toggled");
});

burger.on(
	"click",
	function() {
		burger.toggleClass("is-active");
		nav.toggleClass("is-active");
		$(".subMenuToggle").removeClass("subMenuToggle");
});
