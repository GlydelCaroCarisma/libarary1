function registration(e) {
    e.preventDefault();
    var lastname = $("#lastname").val();
    var firstname = $("#firstname").val();
    var middlename = $("#middlename").val();
    var password = $("#password").val();
    var email = $("#email").val();
    var idno = $("#idno").val();
    var user = $("#user").val();
    $.post("./php/registration.php", {
        xlastname: lastname,
        xfirstname: firstname,
        xmiddlename: middlename,
        xpassword: password,
        xemail: email,
        xidno: idno,
        xuser: user
    }, function(data) {
        console.log(data);
        let datax = JSON.parse(data);
        if (datax.status == "success") { 
            alert("Registration successful");
            window.location.href = "./src/login.html";
        } else {
            alert("Registration error!!");
        }
    });
}
function login(e) {
    e.preventDefault();
    var email = $("#email").val();
    var password = $("#password").val();
    $.post("../php/login.php", {
        xemail: email,
        xpassword: password
    }, function(data) {
        console.log(data);
        let datax = JSON.parse(data);
        if (datax.status == "success") {
            alert("Login successful");
            window.location.href = "home.html";
        } else {
            alert("Login error!!");
        }
    });
}

function login(e) {
    e.preventDefault();
    var email = $("#book_id").val();
    var password = $("#title").val();
    var password = $("#author").val();
    var password = $("#year").val();
    var password = $("#genre").val();
    var password = $("#quantity").val();
    $.post("../php/book.php", {
        xemail: email,
        xpassword: password
    }, function(data) {
        console.log(data);
        let datax = JSON.parse(data);
        if (datax.status == "success") {
            alert("Login successful");
            window.location.href = "src/books.html";
        } else {
            alert("Login error!!");
        }
    });
}