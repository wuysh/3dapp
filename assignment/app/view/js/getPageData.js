function getPageData(){
    
    $.getJSON("./index.php/getPageData",function(result){
        var bannerHtml = "";
        var result = result.pageTextData;
        // console.log(result);
        for(var i = 0 ; i < result['index_brand'].length ; i++){
            var active = "";
            if(i == 0){
                active = 'active';
            }
            bannerHtml = bannerHtml + '<div class="carousel-item '+active+'">'+
            '<img decoding="async" src="'+result['index_banner'][i]['url']+'">'+
            '<div class="carousel-caption">'+
                '<h3>'+result['index_banner'][i]['title']+'</h3>'+
                '<p>'+result['index_banner'][i]['subTitle']+'</p>'+
              '</div>'+
          '</div>';
        }
      $("#carousel-inner").html(bannerHtml);
      

      var brandHtml = "";
      for(var i = 0 ; i < result['index_brand'].length ; i++){
        brandHtml = brandHtml + '<div class="col-sm-4">'+
        '<div class="card">'+
        '<a href="'+result['index_brand'][i]['url']+'" data-fancybox data-caption="My 3D Model Render">'+
        '<img class="card-img-top img-fluid img-thumbnail" src="'+result['index_brand'][i]['url']+'" alt="Coke">'+
        '</a>'+
        '<div class="card-body">'+
        ' <h3 class="card-title">'+result['index_brand'][i]['title']+'</h3>'+
        '<p class="card-text  card-text-brands">'+result['index_brand'][i]['description']+'</p>'+
        '<a href="'+result['index_brand'][i]['link']+'" class="btn btn-primary">Find out more ...</a>'+
        '</div>'+
        ' </div>'+
        '</div>';
      }
      $("#brand").html(brandHtml);

      $("#costa .x3d_description").html(result['modelHistory'][0]['x3dCreationMethod']);
      $("#oasis .x3d_description").html(result['modelHistory'][1]['x3dCreationMethod']);
      $("#smartwater .x3d_description").html(result['modelHistory'][2]['x3dCreationMethod']);

      $("#costa .x3d_title").html(result['modelHistory'][0]['x3dModelTitle']);
      $("#oasis .x3d_title").html(result['modelHistory'][1]['x3dModelTitle']);
      $("#smartwater .x3d_title").html(result['modelHistory'][2]['x3dModelTitle']);

      $(".camera").html(result['CameraTitle']);
      $(".camera_text").html(result['CameraSubtitle']);

      $(".gallery_title").html(result['galleryTitle']);
      $(".gallery_text").html(result['galleryDescription']);


    });
}