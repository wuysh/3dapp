        <!-- delete modal section -->
        <div class="modal fade show hide" id="deleteModal" aria-modal="true">
          <div class="modal-dialog">
              <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title">Delete Confirm</h4>
                  
              </div>
              <div class="modal-body">
                <label for="">Are you sure to delete this picture ?</label>
                <input type="text" id="deleteKey" class="form-control" placeholder="key 321">
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-danger" onclick="deleteConfirm()">Delete</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
              </div>
          </div>
      </div>
    <!-- contact modal section -->
    <div class="modal fade show hide" id="contactModal" aria-modal="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">My contact information</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <h5>Candidate number 246735</h5>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
     <!-- upload modal section -->
    <div class="modal fade show hide" id="uploadModal" aria-modal="true">
      <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title">Upload a picture</h4>
              <button type="button" class="close" data-dismiss="modal">×</button>
          </div>
          <div class="modal-body">
              <form action="" class="form">
                  <div class="form-group">
                    <label for="">Author</label>
                    <input type="text" class="form-control" name="author" id="author">
                    <label for="">Upload Pic</label>
                    <div id="uploader-demo">
                      
                      <div id="filePicker"><img src="./upload/empty.png" width="100px" id="uploadImg" alt=""></div>
                  </div>
                    <input type="hidden" class="form-control" name="url" id="url">
                    <label for="">Description</label>
                    <textarea name="description" class="form-control" id="description" cols="30" rows="10"></textarea>
                    <label for="">Key</label>
                    <input type="text" placeholder="Key 123" required class="form-control" name="key" id="key">
                  </div>
              </form>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" onclick="uploadPic()">Upload</button>

          </div>
          </div>
      </div>
  </div>
   <!-- costa section -->
    <div class="container-fluid hide" style="background:url('./app/view/assets/images/model_bg (1).jpg');background-size:cover;" id="costa">
        <div class="row">
          <div class="col-sm-3">
            <div class="card text-left">
              <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                  <li class="nav-item">
                    <a class="nav-link active" href="#">Gallery</a>
                  </li>
                  
                </ul>
              </div>
              <div class="card-body">
                <h4 class="card-title gallery_title">3D Image Gallery</h4>
                <div class="row" id="costa_gallery">
                  <div class="col-md-12">
                    <a href="javascript:void(0);" onclick="changePro('costa')">
                      <img class="gallery-img img-thumbnail" src="app/view/assets/images/costa.jpg" alt="Coca Cola">
                    </a>
                  </div>
                  <div class="col-md-12">
                    <a href="javascript:void(0);" onclick="changePro('oasis')">
                      <img class="gallery-img img-thumbnail" src="app/view/assets/images/oasis.jpg" alt="Coca Cola">
                    </a>
                  </div>
                  <div class="col-md-12">
                    <a href="javascript:void(0);" onclick="changePro('smartwater')">
                      <img class="gallery-img img-thumbnail" src="app/view/assets/images/smart_water.jpg" alt="Coca Cola">
                    </a>
                  </div>
                </div>
                <p class="gallery_text"></p>
              </div>
            </div>
          </div>
    
          <div class="col-sm-6">
            <div class="card text-left">
              <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                  <li class="nav-item">
                    <a class="nav-link active" href="javascript:void(0);" onclick="changePro('costa')">Costa</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" onclick="changePro('oasis')">Oasis</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" onclick="changePro('smartwater')">Smartwater</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <h4 class="card-title x3d_title">Costa X3D Model</h4>
                <div class="model3D">
                  <x3d id="costa_model">
                    <scene class="bgCoke" DEF="scene">
                      <Viewpoint id="costa_front" orientation='0 0 -1 -0.007317' position='0 0 15' description="camera" fieldOfView='0.5274'></Viewpoint>
                      <Viewpoint id="costa_bottom" orientation='0 -0.7071 0.7071 -3.142' position='0 -15 -7.879e-005' description="camera" fieldOfView='0.5274'></Viewpoint>
                      <Viewpoint id="costa_right" orientation='-3.304e-005 -1 0 -1.571' position='15 0 0.0001097' description="camera" fieldOfView='0.5274'></Viewpoint>
                      <Viewpoint id="costa_top" orientation='1 0 0 -1.571' position='0 15 0.0001097' description="camera" fieldOfView='0.5274'></Viewpoint>
                      <Viewpoint id="costa_left" orientation='0 -1 0 -3.142' position='0 0 -15' description="camera" fieldOfView='0.5274'></Viewpoint>
                       <inline namespacename="model" mapDEFToID="true" onclick="animateModel('costa');" url="app/view/assets/model/costa.x3d"> </inline>

                    </scene>
                  </x3d>
                </div>
                <p class="x3d_description">
                  
                </p>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="card text-left">
                <div class="card-header">
                  <ul class="nav nav-tabs card-header-tabs" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active camera" href="#camera_costa" role="tab" data-toggle="tab">Camera Views</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link animation" href="#animation_costa" role="tab" data-toggle="tab">Animation</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link render" href="#render_costa" role="tab" data-toggle="tab">Render</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link light" href="#light_costa" role="tab" data-toggle="tab">Light</a>
                    </li>
                  </ul>
                </div>
                <div class="tab-content">
                  <div class="card-body tab-pane active" id="camera_costa">
                    <p class="card-text camera_text">These buttons select a range of X3D model viewpoints</p>
                    <div class="btn-group">
                      <a href="javascript:void(0);" class="btn btn-primary btn-responsive camera-font" onclick="document.getElementById('costa_front').setAttribute('set_bind','true');">Front</a>
                      <a href="javascript:void(0);" class="btn btn-secondary btn-responsive camera-font" onclick="document.getElementById('costa_bottom').setAttribute('set_bind','true');">Bottom</a>
                      <a href="javascript:void(0);" class="btn btn-success btn-responsive camera-font" onclick="document.getElementById('costa_left').setAttribute('set_bind','true');">Left</a>
                      <a href="javascript:void(0);" class="btn btn-danger btn-responsive camera-font" onclick="document.getElementById('costa_right').setAttribute('set_bind','true');">Right</a>
                      <a href="javascript:void(0);" class="btn btn-warning btn-responsive camera-font" onclick="document.getElementById('costa_top').setAttribute('set_bind','true');">Top</a>
                      
                    </div>
                  </div>
                  <div class="card-body tab-pane" id="animation_costa">
                    <p class="card-text animation_text">These buttons of control the animation</p>
                    <div class="btn-group ">
                      <a href="javascript:void(0);" class="btn btn-primary btn-responsive camera-font" onclick="spinx('costa')">RotX</a>
                      <a href="javascript:void(0);" class="btn btn-secondary btn-responsive camera-font" onclick="spiny('costa')">RotY</a>
                      <a href="javascript:void(0);" class="btn btn-success btn-responsive camera-font" onclick="spinz('costa')">RotZ</a>
                      <a href="javascript:void(0);" class="btn btn-danger btn-responsive camera-font" onclick="spinNew('costa')">New</a>
                      <a href="javascript:void(0);" class="btn btn-warning btn-responsive camera-font" onclick="stopRotation('costa')">Stop</a>
                    </div>
                  </div>
                  <div class="card-body tab-pane" id="render_costa">
                    <p class="card-text render_text">These buttons of control the render</p>
                    <div class="btn-group ">
                      <a href="javascript:void(0);" class="btn btn-primary btn-responsive camera-font" onclick="wireFrame('costa_model')">wire</a>
                    </div>
                    <div class="btn-group ">
                      <a href="javascript:void(0);" class="btn btn-primary btn-responsive camera-font" onclick="document.getElementById('coasttexture').setAttribute('url','texture/smartwater.png');">wire1</a>
                    </div>
                  </div>
                  <div class="card-body tab-pane" id="light_costa">
                    <p class="card-text light_text">These buttons of control the light</p>
                    <div class="btn-group ">
                      <a href="javascript:void(0);" class="btn btn-primary btn-responsive camera-font" onclick="headLight('costa',true)">On</a>
                      <a href="javascript:void(0);" class="btn btn-secondary btn-responsive camera-font" onclick="headLight('costa',false)">Off</a>
                    </div>
                  </div>
                </div>
              </div>
              </div>
          </div>
          <div class="col-sm-3">
            <div class="card history">
              <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                  <li class="nav-item">
                    <a class="nav-link active" href="#">Introduction</a>
                  </li>
                  
                </ul>
              </div>
              <div class="card-body">
    
                <h3 class="card-title">Costa</h4>
                  <img class="gallery-img img-thumbnail" src="app/view/assets/images/costa_history.jpg" alt="Coca Cola">
                  <p class="card-text" style="margin-top:8px">Served in London since 1971, Costa Coffee's signature blend is the perfect balance of delicate Arabica and strong Robusta beans, slow-roasted for a smooth and nutty flavour and rich aroma. Now you can experience it in a can on the go.
                  </p>
                 
                  <a href="https://www.coca-cola.co.uk/brands/costa-coffee" class="btn btn-primary">Find out more ...</a>
              </div>
            </div>
          </div>
    
          </div>
    
            
      
         
    <hr>
        
      </div>
       <!-- oasis section -->
      <div class="container-fluid hide" style="background:url('./app/view/assets/images/model_bg (2).jpg');background-size:cover;" id="oasis">
        <div class="row">
          <div class="col-sm-3">
            <div class="card text-left">
              <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                  <li class="nav-item">
                    <a class="nav-link active" href="#">Gallery</a>
                  </li>
                  
                </ul>
              </div>
              <div class="card-body">
                <h4 class="card-title gallery_title">3D Image Gallery</h4>
                <div class="row" id="oasis_gallery">
                  <div class="col-md-12">
                    <a href="javascript:void(0);" onclick="changePro('costa')">
                      <img class="gallery-img img-thumbnail" src="app/view/assets/images/costa.jpg" alt="Coca Cola">
                    </a>
                  </div>
                  <div class="col-md-12">
                    <a href="javascript:void(0);" onclick="changePro('oasis')">
                      <img class="gallery-img img-thumbnail" src="app/view/assets/images/oasis.jpg" alt="Coca Cola">
                    </a>
                  </div>
                  <div class="col-md-12">
                    <a href="javascript:void(0);" onclick="changePro('smartwater')">
                      <img class="gallery-img img-thumbnail" src="app/view/assets/images/smart_water.jpg" alt="Coca Cola">
                    </a>
                  </div>
                </div>
                <p class="gallery_text"></p>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card text-left">
              <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                  <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" onclick="changePro('costa')">Costa</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="javascript:void(0);" onclick="changePro('oasis')">Oasis</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" onclick="changePro('smartwater')">Smartwater</a>
                  </li>
                </ul>
              </div>
        
              <div class="card-body">
                <h4 class="card-title x3d_title">Oasis X3D Model</h4>
                <div class="model3D">
                  <x3d id="oasis_model">
                    <scene class="bgCoke">
                      <Viewpoint id="oasis_front" orientation='0 0 -1 -0.007317' position='0 0 15' description="camera" fieldOfView='0.5274'></Viewpoint>
                      <Viewpoint id="oasis_bottom" orientation='0 -0.7071 0.7071 -3.142' position='0 -15 -7.879e-005' description="camera" fieldOfView='0.5274'></Viewpoint>
                      <Viewpoint id="oasis_right" orientation='-3.304e-005 -1 0 -1.571' position='15 0 0.0001097' description="camera" fieldOfView='0.5274'></Viewpoint>
                      <Viewpoint id="oasis_top" orientation='1 0 0 -1.571' position='0 15 0.0001097' description="camera" fieldOfView='0.5274'></Viewpoint>
                       <Viewpoint id="oasis_left" orientation='0 -1 0 -3.142' position='0 0 -15' description="camera" fieldOfView='0.5274'></Viewpoint>
                      <inline namespacename="model" mapDEFToID="true" onclick="animateModel('oasis');" url="app/view/assets/model/oasis.x3d"> </inline>
                    </scene>
                  </x3d>
                </div>
                <p class="x3d_description">
                  
                </p>
    
              </div>
            </div>
            <div class="col-sm-12">
              <div class="card text-left">
                <div class="card-header">
                  <ul class="nav nav-tabs card-header-tabs" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active camera" href="#camera_oasis" role="tab" data-toggle="tab">Camera Views</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link animation" href="#animation_oasis" role="tab" data-toggle="tab">Animation</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link render" href="#render_oasis" role="tab" data-toggle="tab">Render</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link light" href="#light_oasis" role="tab" data-toggle="tab">Light</a>
                    </li>
                  </ul>
                </div>
                <div class="tab-content">
                  <div class="card-body tab-pane active" id="camera_oasis">
                    <p class="card-text camera_text">These buttons select a range of X3D model viewpoints</p>
                    <div class="btn-group">
                      <a href="javascript:void(0);" class="btn btn-primary btn-responsive camera-font" onclick="document.getElementById('oasis_front').setAttribute('set_bind','true');">Front</a>
                      <a href="javascript:void(0);" class="btn btn-secondary btn-responsive camera-font" onclick="document.getElementById('oasis_bottom').setAttribute('set_bind','true');">Bottom</a>
                      <a href="javascript:void(0);" class="btn btn-success btn-responsive camera-font" onclick="document.getElementById('oasis_left').setAttribute('set_bind','true');">Left</a>
                      <a href="javascript:void(0);" class="btn btn-danger btn-responsive camera-font" onclick="document.getElementById('oasis_right').setAttribute('set_bind','true');">Right</a>
                      <a href="javascript:void(0);" class="btn btn-warning btn-responsive camera-font" onclick="document.getElementById('oasis_top').setAttribute('set_bind','true');">Top</a>
                      
                    </div>
                  </div>
                  <div class="card-body tab-pane" id="animation_oasis">
                    <p class="card-text animation_text">These buttons of control the animation</p>
                    <div class="btn-group ">
                      <a href="javascript:void(0);" class="btn btn-primary btn-responsive camera-font" onclick="spinx('oasis')">RotX</a>
                      <a href="javascript:void(0);" class="btn btn-secondary btn-responsive camera-font" onclick="spiny('oasis')">RotY</a>
                      <a href="javascript:void(0);" class="btn btn-success btn-responsive camera-font" onclick="spinz('oasis')">RotZ</a>
                      <a href="javascript:void(0);" class="btn btn-danger btn-responsive camera-font" onclick="spinNew('oasis')">New</a>
                      <a href="javascript:void(0);" class="btn btn-warning btn-responsive camera-font" onclick="stopRotation('oasis')">Stop</a>
                    </div>
                  </div>
                  <div class="card-body tab-pane" id="render_oasis">
                    <p class="card-text render_text">These buttons of control the render</p>
                    <div class="btn-group ">
                      <a href="javascript:void(0);" class="btn btn-primary btn-responsive camera-font" onclick="wireFrame('oasis_model')">wire</a>
                    </div>
                  </div>
                  <div class="card-body tab-pane" id="light_oasis">
                    <p class="card-text light_text">These buttons of control the light</p>
                    <div class="btn-group ">
                      <a href="javascript:void(0);" class="btn btn-primary btn-responsive camera-font" onclick="headLight('oasis',true)">On</a>
                      <a href="javascript:void(0);" class="btn btn-secondary btn-responsive camera-font" onclick="headLight('oasis',false)">Off</a>
                    </div>
                  </div>
                </div>
              </div>
              
              </div>
            
          </div>
          <div class="col-sm-3">
            <div class="card history">
              <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                  <li class="nav-item">
                    <a class="nav-link active" href="#">Introduction</a>
                  </li>
                  
                </ul>
              </div>
              <div class="card-body">
    
                <h3 class="card-title">Oasis</h4>
                  <img class="gallery-img img-thumbnail" src="app/view/assets/images/oasis_history.jpg" alt="Coca Cola">
                  <p class="card-text" style="margin-top:8px">Oasis is a great tasting refreshing still drink made across seven delicious flavours.</p>
                 
                  <a href="https://www.coca-cola.co.uk/brands/oasis" class="btn btn-primary">Find out more ...</a>
              </div>
            </div>
          </div>
    
          </div>
    <hr>
        
      </div>
      <!-- smartwater section -->
      <div class="container-fluid hide" style="background:url('./app/view/assets/images/model_bg (6).jpg');background-size:cover;" id="smartwater">
        <div class="row">
          <div class="col-sm-3">
            <div class="card text-left">
              <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                  <li class="nav-item">
                    <a class="nav-link active" href="#">Gallery</a>
                  </li>
                  
                </ul>
              </div>
              <div class="card-body">
                <h4 class="card-title gallery_title">3D Image Gallery</h4>
                <div class="row" id="smartwater_gallery">
                  <div class="col-md-12">
                    <a href="javascript:void(0);" onclick="changePro('costa')">
                      <img class="gallery-img img-thumbnail" src="app/view/assets/images/costa.jpg" alt="Coca Cola">
                    </a>
                  </div>
                  <div class="col-md-12">
                    <a href="javascript:void(0);" onclick="changePro('oasis')">
                      <img class="gallery-img img-thumbnail" src="app/view/assets/images/oasis.jpg" alt="Coca Cola">
                    </a>
                  </div>
                  <div class="col-md-12">
                    <a href="javascript:void(0);" onclick="changePro('smartwater')">
                      <img class="gallery-img img-thumbnail" src="app/view/assets/images/smart_water.jpg" alt="Coca Cola">
                    </a>
                  </div>
                </div>
                <p class="gallery_text"></p>
              </div>
            </div>
          </div>
    
          <div class="col-sm-6">
            <div class="card text-left">
              <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                  <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" onclick="changePro('costa')">Costa</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" onclick="changePro('oasis')">Oasis</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="javascript:void(0);" onclick="changePro('smartwater')">Smartwater</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <h4 class="card-title x3d_title">Smartwater X3D Model</h4>
                <div class="model3D">
                  <x3d id="smartwater_model">
                    <scene class="bgCoke">
                      <Viewpoint id="smartwater_front" orientation='0 0 -1 -0.007317' position='0 0 15' description="camera" fieldOfView='0.5274'></Viewpoint>
                      <Viewpoint id="smartwater_bottom" orientation='0 -0.7071 0.7071 -3.142' position='0 -15 -7.879e-005' description="camera" fieldOfView='0.5274'></Viewpoint>
                      <Viewpoint id="smartwater_right" orientation='-3.304e-005 -1 0 -1.571' position='15 0 0.0001097' description="camera" fieldOfView='0.5274'></Viewpoint>
                      <Viewpoint id="smartwater_top" orientation='1 0 0 -1.571' position='0 15 0.0001097' description="camera" fieldOfView='0.5274'></Viewpoint>
                       <Viewpoint id="smartwater_left" orientation='0 -1 0 -3.142' position='0 0 -15' description="camera" fieldOfView='0.5274'></Viewpoint>
                      <inline namespacename="model" mapDEFToID="true" onclick="animateModel('smartwater');" url="app/view/assets/model/smartwater.x3d"> </inline>
                    </scene>
                  </x3d>
                </div>
               
                <p class="x3d_description">

                </p>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="card text-left">
                <div class="card-header">
             
                  <ul class="nav nav-tabs card-header-tabs" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active camera" href="#camera_smartwater" role="tab" data-toggle="tab">Camera Views</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link animation" href="#animation_smartwater" role="tab" data-toggle="tab">Animation</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link render" href="#render_smartwater" role="tab" data-toggle="tab">Render</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link light" href="#light_smartwater" role="tab" data-toggle="tab">Light</a>
                    </li>
                  </ul>
                </div>
                <div class="tab-content">
                  <div class="card-body tab-pane active" id="camera_smartwater">
                    <p class="card-text camera_text">These buttons select a range of X3D model viewpoints</p>
                    <div class="btn-group">
                      <a href="javascript:void(0);" class="btn btn-primary btn-responsive camera-font" onclick="document.getElementById('smartwater_front').setAttribute('set_bind','true');">Front</a>
                      <a href="javascript:void(0);" class="btn btn-secondary btn-responsive camera-font" onclick="document.getElementById('smartwater_bottom').setAttribute('set_bind','true');">Back</a>
                      <a href="javascript:void(0);" class="btn btn-success btn-responsive camera-font" onclick="document.getElementById('smartwater_left').setAttribute('set_bind','true');">Left</a>
                      <a href="javascript:void(0);" class="btn btn-danger btn-responsive camera-font" onclick="document.getElementById('smartwater_right').setAttribute('set_bind','true');">Right</a>
                      <a href="javascript:void(0);" class="btn btn-warning btn-responsive camera-font" onclick="document.getElementById('smartwater_top').setAttribute('set_bind','true');">Top</a>
                      
                    </div>
                  </div>
                  <div class="card-body tab-pane" id="animation_smartwater">
                    <p class="card-text animation_text">These buttons of control the animation</p>
                    <div class="btn-group ">
                      <a href="javascript:void(0);" class="btn btn-primary btn-responsive camera-font" onclick="spinx('smartwater')">RotX</a>
                      <a href="javascript:void(0);" class="btn btn-secondary btn-responsive camera-font" onclick="spiny('smartwater')">RotY</a>
                      <a href="javascript:void(0);" class="btn btn-success btn-responsive camera-font" onclick="spinz('smartwater')">RotZ</a>
                      <a href="javascript:void(0);" class="btn btn-danger btn-responsive camera-font" onclick="spinNew('smartwater')">New</a>
                      
                      <a href="javascript:void(0);" class="btn btn-warning btn-responsive camera-font" onclick="stopRotation('smartwater')">Stop</a>
                    </div>
                  </div>
                  <div class="card-body tab-pane" id="render_smartwater">
                    <p class="card-text render_text">These buttons of control the render</p>
                    <div class="btn-group ">
                      <a href="javascript:void(0);" class="btn btn-primary btn-responsive camera-font" onclick="wireFrame('smartwater_model')">wire</a>
                    </div>
                  </div>
                  <div class="card-body tab-pane" id="light_smartwater">
                    <p class="card-text light_text">These buttons of control the light</p>
                    <div class="btn-group ">
                      <a href="javascript:void(0);" class="btn btn-primary btn-responsive camera-font" onclick="headLight('smartwater',true)">On</a>
                      <a href="javascript:void(0);" class="btn btn-secondary btn-responsive camera-font" onclick="headLight('smartwater',false)">Off</a>
                    </div>
                  </div>
                </div>
              
              </div>
              
              </div>
            
          </div>
          <div class="col-sm-3">
            <div class="card">
              <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                  <li class="nav-item">
                    <a class="nav-link active" href="#">Introduction</a>
                  </li>
                  
                </ul>
              </div>
              <div class="card-body history">
    
                <h3 class="card-title">Smartwater</h4>
                  <img class="gallery-img img-thumbnail" src="app/view/assets/images/smart_water_history.jpg" alt="Coca Cola">
                  <p class="card-text" style="margin-top:8px">Glacéau Smartwater is made from British spring water which is vapour-distilled before electrolytes are added.
    
                    It has a distinctive, crisp, clean taste and is produced and bottled in Morpeth, Northumberland.
                    
                    All our Smartwater bottles are now made from 100% recycled PET.
                    
                    *bottle made from 100% recycled plastic. Label and cap are recyclable but are not made from recycled plastic.
                  </p>
                 
                  <a href="https://www.coca-cola.co.uk/brands/glaceau-smartwater" class="btn btn-primary">Find out more ...</a>
              </div>
            </div>
          </div>
    
          </div>
    
            
      
         
    <hr>
        
      </div>
      <!-- index section -->
    <div class="container-fluid hide" style="min-height:1200px;background:url('./app/view/assets/images/model_bg (1).jpg');background-size:cover;" id="index">
        <div class="loadingToast" style="">
            Pages are loading. Please wait for a minute ...
        </div>

        <div class="row">
            <div class="col-sm-12" style="margin-top:10px;">
                <div id="demo" class="carousel slide" data-ride="carousel">
                    <ul class="carousel-indicators">
                      <li data-target="#demo" data-slide-to="0" class="active"></li>
                      <li data-target="#demo" data-slide-to="1"></li>
                      <li data-target="#demo" data-slide-to="2"></li>
                    </ul>
                   
                    <div class="carousel-inner" id="carousel-inner">
                       
                    </div>
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                      <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                      <span class="carousel-control-next-icon"></span>
                    </a>
                  </div>
            </div>
        </div>
        <div class="row" id="brand">
            <!-- Coca Cola column -->
            <div class="col-sm-4 costa">
               
            </div>
            <!-- Sprite column -->
            <div class="col-sm-4 oasis">
                
            </div>
            <!-- Dr Pepper column -->
            <div class="col-sm-4 smartwater">
                
            </div>
        </div>

    </div>
     <!-- about section -->
    <div class="container-fluid hide" style="background:url('./app/view/assets/images/about.jpg');background-size:cover;" id="about">
        <div class="about_content" style="padding: 60px 0px;">
            <h1 style="text-align: center;color: white;margin-bottom:60px;">About Us</h1>
            <div class="video" style="">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/Pdrr3ZxZUOc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
        


    </div>
 <!-- gallery section -->
    <div class="container-fluid hide" style="background:url('./app/view/assets/images/about.jpg') repeat-y;" id="Gallery">
        <div class="about_content" style="padding: 60px 0px;">
            <h1 style="text-align: center;color: white;margin-bottom:60px;">Gallery</h1>
            <div class="showUpload" style="float: right;margin-bottom: 8px;">
                <button data-toggle="modal" data-target="#uploadModal">Upload</button>
            </div>
            <div class="row video">
                <div id="gallery_content"></div>
                
            </div>
        </div>
    </div>
     <!-- reference section -->
    <div class="container-fluid hide" style="background:url('./app/view/assets/images/about.jpg') repeat-y;" id="reference">
      <div class="about_content" style="padding: 60px 0px;">
          <h1 style="text-align: center;color: white;margin-bottom:60px;">Reference</h1>
          
          <div class="row video" style="background:rgba(0,0,0,0.3);padding: 30px;min-height: 600px;">
              <div id="reference_content" style="width: 900px;">
                 <table class="table" style="color:white">
                    <tr>
                      <td>No.</td>
                      <td>Link</td>
                      <td>Description</td>
                    </tr>
                    <tr>
                      <td>1.</td>
                      <td>https://www.coca-cola.co.uk/</td>
                      <td>Product images, model textures, and textual descriptions</td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>https://www.pexels.com/</td>
                      <td>Collection of background images for each page and gallery images</td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>https://www.w3cschool.cn/</td>
                      <td>Learn basic HTML, CSS, and JavaScript operations</td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>https://getbootstrap.com/</td>
                      <td>Learn the use of bootstrap framework components and styles</td>
                    </tr>
                    <tr>
                      <td>5.</td>
                      <td>https://fex.baidu.com/webuploader/</td>
                      <td>Using the webuploader plugin to upload images without refreshing the page</td>
                    </tr>
                    <tr>
                      <td>6.</td>
                      <td>https://github.com/fancyapps/fancybox</td>
                      <td>Image viewing plugin</td>
                    </tr>
                    <tr>
                      <td>7.</td>
                    <td>https://www.bilibili.com/video/BV1ZT411E7Gb/?spm_id_from=333.788.recommend_more_video.17</td>
                      <td>Learning and using Blender tools</td>
                    </tr>
                    <tr>
                      <td>8.</td>
                    <td>https://www.bilibili.com/video/BV1ZT411E7Gb/?spm_id_from=333.788.recommend_more_video.17</td>
                      <td>Learning and using Blender tools</td>
                    </tr>
                    <tr>
                      <td>9.</td>
                    <td> https://fatfreeframework.com/3.8/home
                    </td>
                      <td>Learning of the Fatree Framework.Use to develop the MVC framework.</td>
                    </tr>
                    <tr>
                      <td>10.</td>
                    <td>  https://www.cnblogs.com/ctb-web/p/9968288.html

                    </td>
                      <td>Pages loading function</td>
                    </tr>
                 </table>
              </div>
              
          </div>
      </div>
  </div>
  <!-- github section -->
  <div class="container-fluid hide" style="background:url('./app/view/assets/images/about.jpg') repeat-y;" id="github">
    <div class="about_content" style="padding: 60px 0px;">
      <h1 style="text-align: center;color: white;margin-bottom:60px;">Github</h1>
      
      <div class="row video" style="background:rgba(0,0,0,0.3);padding: 30px;min-height: 600px;">
          <div id="reference_content" style="width: 900px;color:white">
            <table class="table" style="color:white">
              <tr>
                <td>No.</td>
                <td>Link</td>
                <td>Description</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
              </tr>
           </table>
        </div>
          </div>
          
      </div>
  </div>

  <!-- Original statement section -->
  <div class="container-fluid hide" style="background:url('./app/view/assets/images/about.jpg') repeat-y;" id="statement">
    <div class="about_content" style="padding: 60px 0px;">
      <h1 style="text-align: center;color: white;margin-bottom:60px;">Original Statement</h1>
      
      <div class="row video" style="background:rgba(0,0,0,0.3);padding: 30px;min-height: 600px;">
          <div id="reference_content" style="width: 900px;color:white">
              <h2>Coca-Cola Folk Website</h1>
              <p>
                Statement of originality 
This report is submitted as part requirement for the degree of BSc Computer Science at the University of Sussex. It is the product of my own labour except where indicated in the text. The report may be freely copied and distributed provided the source is acknowledged. I hereby give permission for a copy of this report to be loaned out to students in future years. 
              </p>
          </div>
          
      </div>
  </div>
</div>
    
