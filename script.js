// Create function to prevent the empty user and password input
function user_check(){
    var user = document.getElementById('usr').value;
    var pass = document.getElementById('pass').value;
    if (user=="" | user==null | pass=="" | pass==null)
    {
        alert("Please Enter user and password!");
    }
}


