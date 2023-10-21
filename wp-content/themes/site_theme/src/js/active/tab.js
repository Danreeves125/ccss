const tabTitles = document.querySelectorAll("[data-tab-target]"),
	tabPanels = document.querySelectorAll("[data-tab-panel]");

for (let i = 0; i < tabTitles.length; i++) {
	tabTitles[i].addEventListener("click", function (e) {
		tabTitles.forEach((button) => {
			button.classList.add("button--grey");
		});

		tabPanels.forEach((panel) => {
			panel.style.display = "none";
		});

		let targetPanel = this.getAttribute("data-tab-target");
		tabTitles[i].classList.remove("button--grey");

		document.querySelector(`[data-tab-panel=${targetPanel}]`).style.display = "grid";
	});
}

// data-tab-panel
