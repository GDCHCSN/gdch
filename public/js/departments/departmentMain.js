let facultyToggleBtn = document.querySelectorAll(".facultyToggleBtn");

for (let e of facultyToggleBtn) {
  e.addEventListener("mousedown", function (e) {
    let facultyToggleBtnIcon = e.currentTarget.querySelectorAll("img");

    if (facultyToggleBtnIcon[0].style.display == "none") {
      facultyToggleBtnIcon[0].style.display = "block";
      facultyToggleBtnIcon[1].style.display = "none";
    } else {
      facultyToggleBtnIcon[0].style.display = "none";
      facultyToggleBtnIcon[1].style.display = "block";
    }

    let toggleContent = e.currentTarget.parentElement.querySelector(
      ".facultyGallery, .accordionContent, .subOpdContent"
    );

    if (toggleContent.style.maxHeight == "none") {
      toggleContent.style.maxHeight = "0";
      toggleContent.style.overflow = "clip";
      toggleContent.style.padding = "0";
    } else {
      toggleContent.style.maxHeight = "none";
      toggleContent.style.overflow = "visible";
      toggleContent.style.padding = "1.5rem";
    }
  });
}

