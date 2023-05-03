function imgLoad(data) {
    try {
        return new Promise(function (res, err) {
            var imgData = data?data:$('img'); 
            var img = [],
                flag = 0, 
                imgTotal = imgData.length,
                mulitImg = []; 
            for (var i = 0; i < imgTotal; i++) {
                mulitImg.push(imgData.eq(i).attr('src'));
                img[i] = new Image();
                img[i].src = mulitImg[i];
                img[i].onload = function () {
                    flag++;
                    if (flag == imgTotal) {
                        res(200)
                    }
                };
                var imgErrNum = 0; 
                img[i].onerror = function (err) {
                    imgTotal--;
                    if (flag == (imgTotal - imgErrNum)) {
                        res(200)
                    }
                };
            }
        })
    }catch(e) {
        $(".loadingToast").fadeOut();
    } 
    }

$(document).ready(function() {
    var backgroundCounter = 0;
    try {
        imgLoad().then(function(){
            $(".loadingToast").fadeOut();
        });
    }catch(e){
        $(".loadingToast").fadeOut();
    }
    $('[data-toggle="popover"]').popover();   
	gallery();
    getPageData();
});
