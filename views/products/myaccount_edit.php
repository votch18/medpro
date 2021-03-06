<div class="card" style="width:  100%;">
    <div class="card-header">Products</div>
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">Edit Product</h3>
            </div>
            <hr>          
            <form action="" method="post" enctype="multipart/form-data" novalidate>
                <div class="row">
                    <input type="hidden" name="id" value="<?=$this->data['prodid'] ?>"/>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="name" class="control-label mb-1">Product</label>
                            <input name="name" type="text" value="<?=$this->data['name'] ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="sku" class="control-label mb-1">SKU</label>
                            <input name="sku" type="text" value="<?=$this->data['sku'] ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="description" class="control-label mb-1">Description</label>
                            <textarea class="form-control" rows="6" name="description"><?=$this->data['description'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="price" class="control-label mb-1">Price</label>
                            <input name="price" type="number" class="form-control" value="<?=$this->data['price'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="UoM" class="control-label mb-1">Unif of Measure</label>
                            <select name="UoM" class="form-control">
                                <?php 
                                $prod = new Product();
                                $res = $prod->getUnitofMeasure();
                                
                                foreach($res as $row) { 
                                ?>
                                <option value="<?=$row['lid']?>" <?=$row['lid'] == $this->data['UoM'] ? 'selected' : ''?>><?=$row['description']?></option>
                                <?php } ?>
                            </select>
                        </div>

                        
                        <div class="form-group">
                            <label for="category" class="control-label mb-1">Category</label>
                            <select name="category" class="form-control">
                                <?php 
                                $prod = new Product();
                                $res = $prod->getProductCategory();
                                
                                foreach($res as $row) { 
                                ?>
                                <option value="<?=$row['lid']?>" <?=$row['lid'] == $this->data['category'] ? 'selected' : ''?>><?=$row['description']?></option>
                                <?php } ?>
                            </select>
                        </div>
                        

                        <div>
                            <button type="submit" class="btn btn-lg btn-info btn-block">
                                <span>Save</span>
                            </button>
                        </div>                  
                    </div>

                    <div class="col-6">
                       
                        <div class="form-group">
                            <label for="" class="control-label mb-1">Product Photos</label>
                            <div class="progress d-none" id="progress" style="width: 100%; height: 4px; background: transparent;">
                                <div id="progressBar" class="progress-bar bg-info" role="progressbar"
                                style="width: 0% height: 4px;" aria-valuenow="100" aria-valuemin="0"
                                aria-valuemax="100"></div>
                            </div>
                            <div class="imgcon photo" id="dropzone" style="width: 100%; min-height: 350px; border-radius: 5px; padding: 10px; border: 1px solid rgba(0, 0, 0, .2);">
                                    <?php 
                                        $images = explode(",", $this->data['images']);

                                        $count = 0;
                                        foreach($images as $img){ 
                                            if($img) {
                                                $count++;
                                    ?>
                                    <div class="image-con" style="background-image: url('/uploads/products/<?=$img?>');" id="<?=$img?>">
                                        <div class="check " style="background-color:rgba(30, 112, 132,0.7); padding:5px; top: 0; right: 0; z-index:9; position: absolute;">
                                            <h6 class="text-right">
                                                <?php if( $count == 1) {?>
                                                <button id="btn-check" style="background-color:transparent;border-style:none;padding:5px;cursor:pointer;" title="Main image" ><i class="fa fa-check" style="color:#fff;"></i></button> 
                                                <?php } ?>
                                                <button id="<?=$img?>" style="background-color:transparent;border-style:none;padding:5px;cursor:pointer;" class="delPicture" ><i class="fa fa-trash" style="color:#fff;"></i></button> 
                                            </h6>
                                        </div>
                                    </div>
                                    <?php 
                                            } 
                                        }
                                    ?>
                            </div>
					    </div>
                       

                        <a href="#" class="btn btn-info mb-3 mt-2" id="choosephotos" ><i class="fa fa-plus"></i>&nbsp;Add Photos</a>
                       
                        <div class="alert alert-info w-100" >
                            <small><strong>Note:</strong> Please click to select the image you want to be the primary image.</small>
                        </div>
                        
                        <input type="file" class="d-none" id="file" accept="image/x-png,image/gif,image/jpeg"  name="file" required/>
                    
                        <input type="hidden" name="main_photo" id="main_photo"/>
                    </div>
                </div>
            </form>           
        </div>
    </div>
</div>

<script>
    $('#choosephotos').on('click', function(){
        $('#file').trigger('click');
    });

    $("#file").change(function() {
			
        $('#progress').removeClass();
        $('#progress').addClass("progress");

        var file = this.files[0];
        var imagefile = file.type;
        
        var match= ["image/jpeg","image/png","image/jpg"];
        if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]) ))
        {
            
            swal(
            'Invalid image file',
            'Please select a valid image file!',
            'warning'
            );
            return false;
        }
        else
        {
            if (this.files.length > 5){
                $(this).val("");
                
                    swal(
                    'Too many images',
                    'Maximum of 5 images only!',
                    'warning'
                    );
                }else{
                
                $.each(this.files, function(index, value) {
                    if ((value.size / 5000000) <= 1){
                        //readURL(this, index);
                    }else {
                        swal(
                        'Image file too large.',
                        '"Maximum file size is 5MB only.',
                        'warning'
                        );
                    }
                });
                
                //upload file when file onchange triggered
                var file = this.files[0];
                var fd = new FormData();
                fd.append("file", file);
                fd.append("id", "<?=$this->data['prodid']?>");
                
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '/ajax/products/add_photo/', true);
                
                xhr.upload.onprogress = function (e) {
                    
                    var percentComplete = (e.loaded / e.total) * 100;  
                    
                    $('#progressBar').css('width', percentComplete + '%');
                }
                xhr.upload.onloadstart = function (e) {
                    $('#progressBar').css('width', '0%');
                }
                
                xhr.upload.onloadend = function (e) {
                    $('#progressBar').css('display', 'none');
                    $('#progressBar').css('width', '0%');
                    $('#progressBar').css('display', 'block');
                }
                
                xhr.onload = function() {
                    if (this.status == 200) {
                        // success!!!\
                        //alert(this.responseText);
                        var data = JSON.parse(this.responseText);
                        
                        $('#dropzone').append(
                            $( "<div class=\"image-con\" style=\"background-image: url('/uploads/products/" + file.name + "');\" id= \"" + file.name + "\">" +
                                "<div class=\"check \" style=\"background-color:rgba(30, 112, 132,0.7); padding:5px; top: 0; right: 0; z-index:9; position: absolute;\">" +
                                    "<h6 class=\"text-right\">" +
                                        "<button id=\"" + file.name + "\" style=\"background-color:transparent;border-style:none;padding:5px;cursor:pointer;\" class=\"delPicture\"><i class=\"fa fa-trash\" style=\"color:#fff;\"></i></button> " +
                                    "</h6>" +
                                "</div>" +
                            "</div>")
                        );
                        
                    }
                }
                
                xhr.send(fd);
                
                
            }
            
        }
    });
      
    $('body').on('click', '.delPicture', function(e) {
		e.preventDefault(); //prevent modal from closing
		
		swal({
			title: 'Are you sure?',
			text: "You won't be able to revert this!",
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes, delete it!'
		}).then((result) => {
		
			if (result.value) {
				//get image container from delete button [div > div > h6 > button(delete)]
				var h6 = $(this).parent();
				var delcon = $(h6).parent();
				var imgcon = $(delcon).parent();
				//var houseid = $($(imgcon).parent()).attr('id');
				
				var deletedImgId = $(this).attr('id');
				
				//get number of images
				var sib = imgcon.siblings();
				imgcon.remove();
												
				//set post data
				var delImg = {
                    id: "<?=$this->data['prodid']?>",
					image: deletedImgId,
				}

				//save changes to database
				if (deletePicture(delImg)) {
					swal(
					  'Deleted!',
					  'Your image has been deleted.',
					  'success'
					)
				}
			}
			
		});
	});
	

    function deletePicture(delImg){
		
		return $.ajax({
            type: 'POST',
            url: '/ajax/products/delete_photo/',
            data: delImg,
            dataType: 'json',
            crossDomain: true,
            headers: {'X-Requested-With': 'XMLHttpRequest'},
            success: function(response){
                switch(response.message){
                    case 'success': 
                        break
                    case 'error':
                        swal({
                            title: "Error",
                            text: "An error occured while saving your changes",
                            type: "error",
                            confirmButtonText: '',
                            showCancelButton: true,
                            showConfirmButton: false,
                        });
                        break
                }
            }
        });
	}

    $('body').on('click', '.image-con', function(e) {
        e.preventDefault(); //prevent modal from closing
		$('#main_photo').val($(this).attr('id'));
				
        var check = "<button id=\"btn-check\" style=\"background-color:transparent;border-style:none;padding:5px;cursor:pointer;\" class=\"setMainImg\"><i class=\"fa fa-check\" style=\"color:#fff;\"></i></button>" ;
                       
        $("#btn-check").remove();
        $(this).children().children().prepend(check);

        //set post data
        var saveMainImg = {
            id: "<?=$this->data['prodid']?>",
            image: $(this).attr('id'),
        }
        if (saveMainPicture(saveMainImg)) {
            swal(
                "Main image has been changed!", 
                "", 
                "success"
            );
        }
    });


    function saveMainPicture(saveMainImg){
		
		return $.ajax({
            type: 'POST',
            url: '/ajax/products/save_main_photo/',
            data: saveMainImg,
            dataType: 'json',
            crossDomain: true,
            headers: {'X-Requested-With': 'XMLHttpRequest'},
            success: function(response){
                switch(response.message){
                    case 'success':                       
                        break
                    case 'error':
                        swal({
                            title: "Error",
                            text: "An error occured while saving your changes",
                            type: "error",
                            confirmButtonText: '',
                            showCancelButton: true,
                            showConfirmButton: false,
                        });
                        break
                }
            }
        });
	}

</script>

<style>
   
    #dropzone {
        overflow-y: auto; 
    }

    div.image-con { 
        width: 140px!important;
        height: 140px!important; 
        overflow: hidden; 
        float: left; 
        padding: 5px; 
        position: relative; 
        overflow: hidden;
        background-size: cover;
        background-position: center;
        margin: 2px;
        }

</style>