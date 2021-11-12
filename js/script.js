
// onload start
function loaddata() {
}
// onload end
// script for highlighting menuitem start
// function selectMenu(menu) {
//     document.getElementById("homeid").className = "nav-item";
//     document.getElementById("aboutid").className = "nav-item";
//     document.getElementById("expid").className = "nav-item";
//     document.getElementById("eduid").className = "nav-item";
//     document.getElementById("skillid").className = "nav-item";
//     document.getElementById("workid").className = "nav-item";
//     Change(menu);
//     switch (menu) {
//         case "home":
//             document.getElementById("homeid").className = document.getElementById("homeid").className + " active";
//              break;
//         case "about":
//             document.getElementById("aboutid").className = document.getElementById("aboutid").className + " active";
//            break;
//         case "exp":
//             document.getElementById("expid").className = document.getElementById("expid").className + " active"; break;
//         case "edu":
//             document.getElementById("eduid").className = document.getElementById("eduid").className + " active"; break;
//         case "skill":
//             document.getElementById("skillid").className = document.getElementById("skillid").className + " active"; break;
//         case "work":
//             document.getElementById("workid").className = document.getElementById("workid").className + " active"; break;
//     }
// }
// script for highlighting menuitem end
function selectMenu(menuitem){
    var arr=['homeid','aboutid','eduid','skillid','workid'];
            var s=document.getElementById(menuitem);
            s.style="colr:mistyrose;font-weight:550;color:mistyrose;-webkit-animation: glow 1s ease-in-out infinite alternate;-moz-animation: glow 1s ease-in-out infinite alternate;animation: glow 1s ease-in-out infinite alternate;"    
    for (m of arr)
    {   
        if(m.localeCompare(menuitem))
        {
            unselectMenu(m);
        }
    }
}
function unselectMenu(unselectedmenuitem)
{
    document.getElementById(unselectedmenuitem).style=" color:mistyrose;font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;";
}
// script for load sorce start
function loadsrc(srcid) {
        switch (srcid) {
            case "facebook":
                window.location.href ="http://www.facebook.com/profile.php?id=100071514885043";
                break;
            //case "twitter":
              //  window.location.href ="#";
                //break;
            case "telegram":
                window.location.href ="https://t.me/Shreya_64";
                break;
            case "whatsapp":
                window.location.href ="https://wa.me/919403233992";
                break;
            case "linkedin":
                window.location.href ="https://www.linkedin.com/in/shreyaagrawal03";
                break;
            case "instagram":
                window.location.href ="http://www.instagram.com/garg_shreya_63";
                break;
            case "github":
                window.location.href = "https://github.com/Shrey63";
                break;
            case "resume":
                window.location.href = "#";
                break;
    };
}

// script for load sorce end
