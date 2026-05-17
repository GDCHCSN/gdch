let facultyToggleBtn = document.querySelectorAll(".facultyToggleBtn");
for (e of facultyToggleBtn) {
  e.addEventListener("mousedown", function (e) {
    let facultyToggleBtnIcon = e.currentTarget.querySelectorAll("img");
    if (facultyToggleBtnIcon[0].style["display"] == "none") {
      facultyToggleBtnIcon[0].style["display"] = "block";
      facultyToggleBtnIcon[1].style["display"] = "none";
    } else {
      facultyToggleBtnIcon[0].style["display"] = "none";
      facultyToggleBtnIcon[1].style["display"] = "block";
    }

    let facultyGallery =
      e.currentTarget.parentElement.querySelector(".facultyGallery, .accordionContent");
    if (facultyGallery.style.maxHeight == "none") {
      facultyGallery.style.maxHeight = "0";
      facultyGallery.style.overflow = "clip";
      facultyGallery.style.padding = "0";
    } else {
      facultyGallery.style.maxHeight = "none";
      facultyGallery.style.overflow = "visible";
      facultyGallery.style.padding = "1.5rem";
    }
  });
}
