document.addEventListener("DOMContentLoaded", function () {
  // Create modal elements
  const modalOverlay = document.createElement("div");
  modalOverlay.className = "modal-overlay";

  const modalContent = document.createElement("div");
  modalContent.className = "modal-content";

  const modalImage = document.createElement("img");
  const closeButton = document.createElement("button");
  closeButton.className = "modal-close";
  closeButton.innerHTML = "×";

  modalContent.appendChild(modalImage);
  modalContent.appendChild(closeButton);
  modalOverlay.appendChild(modalContent);
  document.body.appendChild(modalOverlay);

  // Add click handlers to all gallery images
  const galleryImages = document.querySelectorAll(".galleryCard img");
  galleryImages.forEach((img) => {
    img.style.cursor = "pointer";
    img.addEventListener("click", function () {
      modalImage.src = this.src;
      modalImage.alt = this.alt;
      modalOverlay.classList.add("active");
    });
  });

  // Close modal when clicking outside or on close button
  modalOverlay.addEventListener("click", function (e) {
    if (e.target === modalOverlay || e.target === closeButton) {
      modalOverlay.classList.remove("active");
    }
  });

  // Close modal on escape key
  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape" && modalOverlay.classList.contains("active")) {
      modalOverlay.classList.remove("active");
    }
  });
});
