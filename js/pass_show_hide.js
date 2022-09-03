let pswrdfield = document.querySelector(".passInput");
let toggleBtn = document.querySelector(".eyeIcon");

toggleBtn.onclick = () => {
  if(pswrdfield.type == "password") {
    pswrdfield.type = "text";
    toggleBtn.classList.add("active");
  }else {
    pswrdfield.type="password";
    toggleBtn.classList.remove("active");
  }
}