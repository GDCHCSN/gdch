let facultyToggleBtn = document.querySelectorAll(".facultyToggleBtn");
for (e of facultyToggleBtn) {
    e.addEventListener("mousedown", function(e) {
        let facultyToggleBtnIcon = e.currentTarget.querySelectorAll("img");
        if (facultyToggleBtnIcon[0].style["display"] == "none") {
            facultyToggleBtnIcon[0].style["display"] = "block";
            facultyToggleBtnIcon[1].style["display"] = "none";
        }
        else {
            facultyToggleBtnIcon[0].style["display"] = "none";
            facultyToggleBtnIcon[1].style["display"] = "block";
        }

        let facultyGallery = e.currentTarget.parentElement.querySelector(".facultyGallery");
        if (facultyGallery.style["max-height"] == "1000vh") {
            facultyGallery.style["max-height"] = "0";
            facultyGallery.style["padding"] = "0";
        }
        else {
            facultyGallery.style["max-height"] = "1000vh";
            facultyGallery.style["padding"] = "1.5rem";
        }
    });
}