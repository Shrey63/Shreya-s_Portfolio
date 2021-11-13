sectio = body.getElementsByTagName("section");
alert(sectio[0]);
// const navLi = document.querySelectorAll("nav .container ul li");
// window.addEventListener("scroll", () => {
//   let current = "";
//   sections.forEach((section) => {
//     const sectionTop = section.offsetTop;
//     const sectionHeight = section.clientHeight;
//     if (pageYOffset >= sectionTop - sectionHeight / 3) {
//       current = section.getAttribute("id");
//     }
//   });

//   navLi.forEach((li) => {
//     li.classList.remove("active");
//     if (li.classList.contains(current)) {
//       li.classList.add("active");
//     }
//   });
// });

// *********************
// This Code is for only the floating card in right bottom corner
// **********************

const WebCifarIcon = document.querySelector("#webCifar-icon");
const WebCifarEl = document.querySelector("#webCifar");
const close = WebCifarEl.querySelector(".close");
const youtubeLink = document.querySelector(".youtubeLink");

WebCifarIcon.addEventListener("click", () => {
  WebCifarEl.classList.add("active");
});
close.addEventListener("click", () => {
  WebCifarEl.classList.remove("active");
});

youtubeLink.setAttribute("href", "https://youtu.be/RsPWEmfOQdU");



// script for highlighting menuitem end
function selectMenu(menuitem){
    var arr=['homeid','aboutid','eduid','skillid','workid'];
            var s=document.getElementById(menuitem);
            s.style="-webkit-animation: glow 1s ease-in-out infinite alternate;-moz-animation: glow 1s ease-in-out infinite alternate;animation: glow 1s ease-in-out infinite alternate;   text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073; text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;"    
            s.style.fontWeight=500;
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
    document.getElementById(unselectedmenuitem).style="color:mistyrose;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif";
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
