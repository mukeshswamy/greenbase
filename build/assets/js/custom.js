// JAVASCRIPT
// JQUERY
$(document).ready(function () {
	// FOOTER MODAL
	var modal1 = document.getElementById("modalContact");
	var contactModalBtn = document.getElementById("contact-modal");
	var cancelcontactModalBtn = document.getElementById("cancel-modal");

	// When the user clicks the button, open the modal
	contactModalBtn.onclick = function () {
		modal1.style.display = "block";
	};
	// When the user clicks the Cancel, close the modal
	cancelcontactModalBtn.onclick = function () {
		modal1.style.display = "none";
	};

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function (event) {
		if (event.target == modal1) {
			modal1.style.display = "none";
		}
	};

	// MOBILE SIDENAV
	var burger = document.getElementById("burger");
	// When the user clicks the button, open the sidebar background-color: rgb(0, 0, 0); /* Fallback color */
	// background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
	burger.onclick = function () {
		document.getElementById("mySidenav").style.width = "45%";
		document.getElementById("fulloverlay").style.display = "block";
		// document.getElementById("fulloverlay").style.backgroundColor = "rgba(0,0,0,0.4)";
	};

	// ABOUT US PAGE CEO's DETAILS LIFT
	$(".down-arrow").hover(function () {
		var parentelements = $(this).parent().parent();
		parentelements.children(".about-ceos-detail").toggleClass("paraDivTop");
		parentelements
			.children(".img-overlay-about")
			.toggleClass("img-overlay-animate");
		parentelements
			.children(".about-ceos-detail")
			.children("p")
			.toggleClass("showdiv");
	});

	// latestNews
	$("#latestNews").click(function () {
		window.location.href = "newspost";
	});

	//  latesblog
	$("#latesblog").click(function () {
		window.location.href = "blogpost";
	});
	// GALLERY
	var previousActiveTabIndex = 0;
	$(".gallery-list li a").on("click", function (event) {
		event.preventDefault();
		$(".gallery-list li a").removeClass("gallery-list-active");
		$(this).addClass("gallery-list-active");
		var getid = $(this).data("index");
		if (getid != previousActiveTabIndex) {
			$(".content-container-gallery .tab-container-gallery").each(function () {
				if ($(this).data("index") == getid) {
					$(".tab-container-gallery").hide();
					$(this).show();
					previousActiveTabIndex = $(this).data("index");
					return;
				}
			});
		}
	});
	// NEWS
	var yeartab = 1;
	$(".news-dropdown-list-wrapper").on("click", function () {
		event.preventDefault();
		$(".news-dropdown-list-wrapper li a").removeClass("yearActive");
		$(this).find("#year").addClass("yearActive");
		$(".dparrow").removeClass("news-dropdown-arrow-rotate");
		$(this).find("img").addClass("news-dropdown-arrow-rotate");
		var getid = $(this).data("index");
		$(".news-dropdown-wrapper #dropdownchildren").removeClass(
			"news-dropdown-children-show"
		);
		$(this).find("div").addClass("news-dropdown-children-show");
	});
	// NAV BAR
	$(".main-nav-ul li a").on("click", function () {
		$(".main-nav-ul li a").removeClass("navActive");
		$(this).addClass("navActive");
	});
	// CAROUSEL HOME
	var previousActiveTabIndex = 0;
	$(".capabilitie-content-2-ul li a, .overview-list li a").on(
		"click",
		function () {
			$(".capabilitie-content-2-ul li a, .overview-list li a").removeClass(
				"carouselLinkActive"
			);
			$(".capabilitie-content-2-1").removeClass("capabilitie-content-2-1-none");
			$(".content-2-1").addClass("content-2-1-none");
			$(this).addClass("carouselLinkActive");
			var getid = $(this).data("index");
			if (getid != previousActiveTabIndex) {
				$(".capabilitie-content-2-1 div, .overview-content div").each(
					function () {
						if ($(this).data("index") == getid) {
							$(".capabilitie-content-2-1 div, .overview-content div").hide();
							$(this).show();
							previousActiveTabIndex = $(this).data("index");
							return;
						}
					}
				);
				$(".carousel-item-home").each(function () {
					if ($(this).data("index") == getid) {
						$(".carousel-item-home").hide();
						$(this).show();
						previousActiveTabIndex = $(this).data("index");
						return;
					}
				});
				$(".carousel-item-about").each(function () {
					if ($(this).data("index") == getid) {
						$(".carousel-item-about").hide();
						$(this).show();
						previousActiveTabIndex = $(this).data("index");
						return;
					}
				});
			}
		}
	);
	$(".ourcapabilitiesmain").on("click", function () {
		$(".capabilitie-content-2-1").addClass("capabilitie-content-2-1-none");
		$(".content-2-1").removeClass("content-2-1-none");
	});
	// CAROUSEL ABOUT
	var previousActiveTabIndex2 = 0;
	$(".vision_mission_ul li a").on("click", function () {
		$(".vision_mission_ul li a").removeClass("carouselLinkActive");
		$(this).addClass("carouselLinkActive");
		var getid = $(this).data("index");
		if (getid != previousActiveTabIndex2) {
			$(".vision-mission").each(function () {
				if ($(this).data("index") == getid) {
					$(".vision-mission").hide();
					$(this).show();
					previousActiveTabIndex2 = $(this).data("index");
					return;
				}
			});
			$(".carousel-item-vison").each(function () {
				if ($(this).data("index") == getid) {
					$(".carousel-item-vison").hide();
					$(this).show();
					previousActiveTabIndex2 = $(this).data("index");
					return;
				}
			});
		}
	});
	// WHYS MODAL
	var previousActiveTabIndex3 = 1;
	var previousActiveTabIndex4 = 1;
	$(".whysusedge .col-md-4 h5").on("click", function () {
		var getids = $(this).data("index");
		if (getids != previousActiveTabIndex3) {
			$(".modal-know-more1").each(function () {
				if ($(this).data("index") == getids) {
					$(".modal-know-more1").hide();
					$(this).show();
					previousActiveTabIndex3 = $(this).data("index");
					return;
				}
			});
		}
	});
	$(".valuePROPOSITION .col-md-4 h5").on("click", function () {
		var getids = $(this).data("index");
		if (getids != previousActiveTabIndex4) {
			$(".modal-know-more2").each(function () {
				if ($(this).data("index") == getids) {
					$(".modal-know-more2").hide();
					$(this).show();
					previousActiveTabIndex4 = $(this).data("index");
					return;
				}
			});
		}
	});
	$(".cancel").on("click", function () {
		$(".modal-know-more").hide();
	});
	$("#playbuttons").on("click", function () {
		$("#myVideo2").trigger("play");
		$(".video-overlay").addClass("overlaydisplay");
		$(".playbutton").addClass("overlaydisplay");
	});
	$("#myVideo2").on("click", function () {
		$("#myVideo2").trigger("pause");
		$(".video-overlay").removeClass("overlaydisplay");
		$(".playbutton").removeClass("overlaydisplay");
	});
});


