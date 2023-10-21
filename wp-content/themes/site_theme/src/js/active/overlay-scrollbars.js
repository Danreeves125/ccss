import OverlayScrollbars from "overlayscrollbars";

var instance = OverlayScrollbars(document.getElementById("home-countries"), {
	/* your options */
});

var map = OverlayScrollbars(document.getElementById("map"), {
	overflowBehavior: {
		x: "scroll",
		y: "scroll",
	},
});

const patronScrollbars = document.querySelectorAll(".team-text");

for (let i = 0; i < patronScrollbars.length; i++) {
	let instance = OverlayScrollbars(patronScrollbars[i], {
		/* your options */
	});
}
