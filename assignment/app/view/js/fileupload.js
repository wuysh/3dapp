var uploader = WebUploader.create({
    auto: true,
    swf: "./app/view/assets/images/Uploader.swf",
    server: './index.php/fileupload',
    pick: '#filePicker',
    accept: {
        title: 'Images',
        extensions: 'gif,jpg,jpeg,bmp,png',
        mimeTypes: 'image/*'
    }
});
uploader.on( 'uploadError', function( file ) {
  alert("Upload failed!");

    
});
uploader.on( 'uploadSuccess', function( file,res ) {
    if(res.status == 1){
        $("#uploadImg").attr("src","./upload/"+res.msg);
        $("#url").val(res.msg);
    }else{
        alert(res.msg)
    }
});
