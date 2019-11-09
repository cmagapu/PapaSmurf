document.getElementById("nvg").addEventListener("click",transit_out,true);
document.getElementById("signup").addEventListener("click",transit_out,true);
function transit_out(e) //prints logo animation
{
    document.getElementById("out_square").style.visibility = "visible";
    document.getElementById("out_square").style.width= "100%";
    document.getElementById("out_square").style.height = "100%";
    setTimeout(load_page, 1500,e.target.id);
}


function load_page(id_target) //loads next page
{
    if (id_target=="home")
    {
        window.location.href = "Home_Page.html";
    }
    else if(id_target=="login")
    {
        window.location.href = "Login_Page.html";
    }
    else if(id_target=="signup")
    {
        window.location.href = "Signup_Page.html";
    }
}