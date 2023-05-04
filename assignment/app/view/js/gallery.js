function gallery(){
    var xmlHttp = new XMLHttpRequest ();
	var htmlCode = "";
	var response;
	var send = "./index.php/hook";
	xmlHttp.open("GET", send, true);
	xmlHttp.send(null);
	xmlHttp.onreadystatechange = function() {
		if(xmlHttp.readyState == 4) {
			gallery = xmlHttp.responseText.split("|");
            var html = "";
            var type = "";
            if(gallery.length > 0){
                for (var i = 0; i < gallery.length; i++) {
                    if(i == 0){
                        type = "costa";
                    }
                    if(i == 1){
                        type = "oasis";
                    }
                    if(i == 2){
                        type = "smartwater";
                    }
                    html = 	html + '<div class="col-md-12">'+
                    '<a href="app/view/assets/images/'+gallery[i]+'" data-fancybox data-caption="My X3D model render">'+
                      '<img class="gallery-img img-thumbnail" src="app/view/assets/images/'+gallery[i]+'" alt="Coca Cola">'+
                    '</a>'+
                  '</div>';	
                }
            }
			
            $("#costa_gallery").html(html);
            $("#oasis_gallery").html(html);
            $("#smartwater_gallery").html(html);
		}
	}
}

function getGallery(){
    $.ajax({
        "url":"./index.php/getGallery",
        "type":"POST",
        "data":{},
        "dataType":"json",
        "success":function(res){
            var html = "";
            if(res){
                if(res.length > 0){
                    for(var i = 0 ; i < res.length ; i++){
                        html = html + '<div class="flow_layout"><div class="gallery_content">'+
                        '<div class="gallery_delete"><button class="deleteGallery btn btn-danger" onclick="deleteGallery('+res[i]['id']+')">D</button>'+
                        '</div><div class="gallery_author">'+res[i]['author']+'</div>'+
                        '<div class="gallery_description">'+res[i]['description']+'</div></div>'+
                        '<img src="./upload/'+res[i]['url']+'" alt=""></div>';
                    }
                    $("#gallery_content").html(html);
                }
            }
        },
        "error":function(){

        }
    })
}

deleteId = 0;
function deleteGallery(id){
    deleteId = id;
    $("#deleteModal").modal("show");
}
function deleteConfirm(){
    var deleteKey = $('#deleteKey').val();
    var data = {
        id:deleteId,
        key:deleteKey
    }
    if(deleteKey != ""){
        $.ajax({
            "url":"./index.php/deleteGallery",
            "type":"POST",
            "data":data,
            "dataType":"json",
            "success":function(res){
                if(res.status == 1){
                    $("#deleteKey").val("");
                    $("#deleteModal").modal('hide');
                    alert("Delete success");
                    getGallery();
                    
                }else{
                    alert(res.status);
                }
                
                
            },
            "error":function(){
    
            }
        })
    }else{
        alert("Key required!");
    }
    
}
function uploadPic(){
    var url = $("#url").val();
    if(url == ""){
        alert("Pic is required");
        return false;
    }
    var author = $("#author").val();
    var description = $("#description").val();
    var key = $("#key").val();
    var data = {
        url:url,
        author:author,
        description:description,
        key:key
    }
    $.ajax({
        "url":"./index.php/addGallery",
        "type":"POST",
        "data":data,
        "dataType":"json",
        "success":function(res){
            if(res.status == 1){
                $("#author").val("");
                $("#description").val("");
                $("#key").val("");
                $("#url").val("");
                $("#uploadImg").attr("src","./upload/empty.png");
                alert("Upload success");
                getGallery();
                $("#uploadModal").modal('hide');
            }else{
                alert(res.status);
            }
            
            
        },
        "error":function(){

        }
    })
}
