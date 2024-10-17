const showPassword =  document.querySelector("#showpassword");
const passwordField= document.querySelector("#login-pass");

showPassword.addEventListener("click", function(){
    this.classList.toggle("fa-eye");
    const type = passwordField.getAttribute("type") === "password" ? "text" : "password";
    passwordField.setAttribute("type", type);
})


function toggleHamburgerIcon(el) {
    el.classList.toggle("change");
}

const myMenu = document.getElementById("myMenu");
const hamIcon = document.getElementById("hamIcon");

hamIcon.addEventListener("click", function() {
    if (myMenu.style.display === "block") {
        myMenu.style.display = "none";
    } else {
        myMenu.style.display = "block";
    }
});


