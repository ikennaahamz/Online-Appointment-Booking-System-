function validateForm() {

    let email =
    document.forms["myForm"]["email"].value;

    let password =
    document.forms["myForm"]["password"].value;

    if(email == "" || password == "") {

        alert("All fields are required");

        return false;
    }

    return true;
}

function validateBookForm() {

    let date =
    document.forms["bookForm"]["date"].value;

    let time =
    document.forms["bookForm"]["time"].value;

    let service =
    document.forms["bookForm"]["service"].value;

    if(date == "" || time == "" || service == "") {

        alert("Please fill all appointment fields");

        return false;
    }

    return true;
}