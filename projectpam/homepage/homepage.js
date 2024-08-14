const previewPhoto = (inp) => {
  const file = inp.files;
  if (file) {
    const fileReader = new FileReader();
    const preview = document.getElementById("profile-image");
    fileReader.onload = function (event) {
      preview.setAttribute("src", event.target.result);
    };
    fileReader.readAsDataURL(file[0]);
  }
};
// input.addEventListener("change", previewPhoto);
