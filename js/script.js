
// onload start
function loaddata() {
    var starCountRef = firebase.database().ref('home');
    starCountRef.on('value', (snapshot) => {
        const data = snapshot.val();
        document.getElementById("myphoto").src = data.img
        document.getElementById("myname").innerHTML = data.name
    });
    var starCountRef = firebase.database().ref('about');
    starCountRef.on('value', (snapshot) => {
        const data = snapshot.val();
        document.getElementById("aboutphoto").src = data.img
        document.getElementById("abouttext").innerHTML = data.abouttext
    });
}
// onload end
// script for highlighting menuitem start
function selectMenu(menu) {
    document.getElementById("homeid").className = "nav-item";
    document.getElementById("aboutid").className = "nav-item";
    document.getElementById("expid").className = "nav-item";
    document.getElementById("eduid").className = "nav-item";
    document.getElementById("skillid").className = "nav-item";
    document.getElementById("workid").className = "nav-item";
    switch (menu) {
        case "home":
            document.getElementById("homeid").className = document.getElementById("homeid").className + " active"; break;
        case "about":
            document.getElementById("aboutid").className = document.getElementById("aboutid").className + " active"; break;
        case "exp":
            document.getElementById("expid").className = document.getElementById("expid").className + " active"; break;
        case "edu":
            document.getElementById("eduid").className = document.getElementById("eduid").className + " active"; break;
        case "skill":
            document.getElementById("skillid").className = document.getElementById("skillid").className + " active"; break;
        case "work":
            document.getElementById("workid").className = document.getElementById("workid").className + " active"; break;
    }
}
// script for highlighting menuitem end

// script for load sorce start
function loadsrc(srcid) {
    // alert("hey");
    var starCountRef = firebase.database().ref('home');
    // alert("hey1")
    starCountRef.on('value', (snapshot) => {
        const data = snapshot.val();

        switch (srcid) {
            case "facebook":
                window.location.href = data.facebook;
                break;
            case "twitter":
                window.location.href = data.twitter;
                break;
            case "telegram":
                window.location.href = data.telegram;
                break;
            case "whatsapp":
                window.location.href = data.whatsapp;
                break;
            case "linkedin":
                window.location.href = data.linkedin;
                break;
            case "instagram":
                window.location.href = data.instagram;
                break;
            case "github":
                window.location.href = data.github;
                break;
            case "resume":
                window.location.href = data.resume;
                break;
        }
    });
}

// script for load sorce end


