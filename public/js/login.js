const repass = document.getElementById("signup");
const form = document.getElementById("form")
const signup = (x) => {
    if (x) {

        repass.style.display = "block";
        form.setAttribute("action", "/user")

    }
    else {

        repass.style.display = "none"
        form.setAttribute("action", "/login")
    }

}

