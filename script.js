//form
function show() {
  document.getElementById("popup").style.display = "block";
}
function hide() {
  document.getElementById("popup").style.display = "none";

  document.getElementById("title").value = "";
  document.getElementById("img").value = "";
  document.getElementById("author").value = "";
  document.getElementById("description").value = "";
}

//validation
const form = document.getElementById("form");
const title = document.getElementById("title");
const img = document.getElementById("img");
const author = document.getElementById("author");
const description = document.getElementById("description");

form.addEventListener("submit", (e) => {
  e.preventDefault();

  checkInputs();
});

function checkInputs() {
  // trim to remove the whitespaces
  const titleValue = title.value.trim();
  const imgValue = img.value.trim();
  const authorValue = author.value.trim();
  const descriptionValue = description.value.trim();

  if (titleValue === "") {
    setErrorFor(title, "  حقل فارغ");
  } else if (!isArabic(titleValue)) {
    setErrorFor(title, "يجب الكتابة باللغة العربية");
  } else {
    setSuccessFor(title);
  }

  if (imgValue === "") {
    setErrorFor(img, "  حقل فارغ");
  } else {
    setSuccessFor(img);
  }

  if (authorValue === "") {
    setErrorFor(author, "  حقل فارغ");
  } else if (!isArabic(authorValue)) {
    setErrorFor(author, "يجب الكتابة باللغة العربية");
  } else {
    setSuccessFor(author);
  }

  if (descriptionValue === "") {
    setErrorFor(description, "   حقل فارغ");
  } else {
    setSuccessFor(description);
  }

  if (
    !(titleValue === "") &&
    !(imgValue === "") &&
    !(authorValue === "") &&
    !(descriptionValue === "") &&
    isArabic(titleValue) &&
    isArabic(authorValue)
  ) {
    form.submit();
  }
}

function setErrorFor(input, message) {
  const formControl = input.parentElement;
  const small = formControl.querySelector("small");
  formControl.className = "form-control error";
  small.innerText = message;
}

function setSuccessFor(input) {
  const formControl = input.parentElement;
  formControl.className = "form-control success";
}

function isArabic(x) {
  return /\p{Script=Arabic}+/u.test(x);
}
