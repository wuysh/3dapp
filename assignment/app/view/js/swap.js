function changePro(category){
    if(category == 'Gallery'){
        getGallery();
    }
    console.log(category)
    $(".hide").hide();
    $('body').animate({scrollTop:'0'},500);
    $("#"+category).fadeIn();

}
backgroundCounter = 0;
function changeBackground() {
    var mainBackground = document.getElementById('mainBackground');
    var headerBackground = document.getElementById('headerBackground');
    var footerBackground = document.getElementById('footerBackground');
    if(backgroundCounter == 0){
        mainBackground.style.backgroundImage = 'linear-gradient(45deg, #93a5cf 0%, #e4efe9 100%)';
        headerBackground.style.backgroundImage = 'linear-gradient(45deg, #93a5cf 0%, #e4efe9 100%)';
        footerBackground.style.backgroundImage = 'linear-gradient(45deg, #93a5cf 0%, #e4efe9 100%)';
    }
    if(backgroundCounter == 1){
        mainBackground.style.backgroundImage = 'linear-gradient(to right, #ff758c 0%, #ff7eb3 100%)';
        headerBackground.style.backgroundImage = 'linear-gradient(to right, #ff758c 0%, #ff7eb3 100%)';
        footerBackground.style.backgroundImage = 'linear-gradient(to right, #ff758c 0%, #ff7eb3 100%)';
    }
    if(backgroundCounter == 2){
        mainBackground.style.backgroundImage = 'linear-gradient(-20deg, #d558c8 0%, #24d292 100%)';
        headerBackground.style.backgroundImage = 'linear-gradient(-20deg, #d558c8 0%, #24d292 100%)';
        footerBackground.style.backgroundImage = 'linear-gradient(-20deg, #d558c8 0%, #24d292 100%)';
    }
    if(backgroundCounter == 3){
        backgroundCounter = 0;
        mainBackground.style.backgroundImage = 'linear-gradient(to top, #30cfd0 0%, #330867 100%)';
        headerBackground.style.backgroundImage = 'linear-gradient(to top, #30cfd0 0%, #330867 100%)';
        footerBackground.style.backgroundImage = 'linear-gradient(to top, #30cfd0 0%, #330867 100%)';
    }
    
    // alert(123);
    console.log(backgroundCounter);
    // if(backgroundCounter == 0){
        
    //     $("#headerBackground").css("background-image","linear-gradient(45deg, #93a5cf 0%, #e4efe9 100%) !important")
    //     $("#footerBackground").css("background-image","linear-gradient(45deg, #93a5cf 0%, #e4efe9 100%) !important")
    //     console.log($("#headerBackground").css("background-image"));
    // }
    // if(backgroundCounter == 1){
    //     $("#headerBackground").css("background-image","linear-gradient(to right, #ff758c 0%, #ff7eb3 100%) !important")
    //     $("#footerBackground").css("background-image","linear-gradient(to right, #ff758c 0%, #ff7eb3 100%) !important")
    //     console.log($("#headerBackground").css("background-image"));
    // }
    // if(backgroundCounter == 2){
    //     backgroundCounter = 0;
    //     $("#headerBackground").css("background-image","linear-gradient(-20deg, #d558c8 0%, #24d292 100%) !important")
    //     $("#footerBackground").css("background-image","linear-gradient(-20deg, #d558c8 0%, #24d292 100%) !important")
    //     console.log($("#headerBackground").css("background-image"));
    // }
    backgroundCounter++;
}

function resetBackground() {
    backgroundCounter = 0;
    var mainBackground = document.getElementById('mainBackground');
    var headerBackground = document.getElementById('headerBackground');
    var footerBackground = document.getElementById('footerBackground');
	mainBackground.style.backgroundImage = 'linear-gradient(to right, #ff758c 0%, #ff7eb3 100%)';
    headerBackground.style.backgroundImage = 'linear-gradient(to right, #ff758c 0%, #ff7eb3 100%)';
    footerBackground.style.backgroundImage = 'linear-gradient(to right, #ff758c 0%, #ff7eb3 100%)';
}