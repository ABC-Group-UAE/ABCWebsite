@extends('Admin.Admin-layout')
@section('content')
    <section class="content">
        <div class="container-fluid">
        <form id="form_validation" method="POST" action="{{route('EntryFormSubmit',app()->getlocale())}}">
        @csrf
        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>New Product Entry</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="wizard_vertical">
                                <h2> First stage of product Entry</h2>
                                <section>
                                <div class="form-group col-md-6">
										<label>Product ID</label>
										<input type="text" class="form-control" name="productId" id="productId" placeholder="Enter  productID" required>
									</div>
                                    <div class="form-group col-md-6">
										<label>FamilyCode</label>
										<input type="text" class="form-control" name="Familycode" id="Familycode"  placeholder="Enter family code" required>
									</div>
                                
                                

                                <div class="col-md-6">
                                    <p>
                                        <b>Category</b>
                                    </p>
                                    <select class="form-select" aria-label="Default select example" name="Category" id="Category" >
                                        <option selected>Open this select menu</option>
                                        @if($Categories->count())
                                        @foreach($Categories as $categoryItem)
                                        <option value="{{$categoryItem->Category_ID}}">{{$categoryItem->Category_Name }}</option>
                                        @endforeach
                                        @endif
                                    </select>

                                </div>
                                <div class="col-md-6" id="subcatDiv" style="display:none;">
                                    <p>
                                        <b>SubCategory</b>
                                    </p>
                                    <select class="form-select" aria-label="Default select example" name="subCategory" id="subCategory" >
                                        <option selected>Open this select menu</option>
                                        
                                    </select>

                                </div>
                                <div class="col-md-6" id="subsubcatDiv" style="display:none;">
                                    <p>
                                        <b>Sub of subCategory</b>
                                    </p>
                                    <select class="form-select" aria-label="Default select example" name="subsubCategory" id="subsubCategory">
                                        <option selected>Open this select menu</option>
                                        
                                    </select>

                                </div>
                                </section>

                                <h2>Product features</h2>
                                <section>
                                <div class="form-group col-md-6">
										<label>Product Name</label>
										<input type="text" class="form-control" name="productName" id="productName" placeholder="Enter product name" autofocus required>
									</div>
                                    <div class="form-group col-md-6">
										<label>Product Description</label>
										<input type="text" class="form-control" name="productDescription" id="productDescription" placeholder="Enter  product description" required>
									</div>
                                    <div class="form-group col-md-6">
										<label>Long Description</label>
                                        <textarea  cols="30" rows="5" class="form-control no-resize" name="productlongDescription" id="productlongDescription" placeholder="Enter long description of product" required></textarea>
									</div>
                                
                                </section>

                                <h2>Third Step</h2>
                                <section>
                                <!-- <form class="form-horizontal form-label-left"> -->
									<div class="form-group col-md-6">
										<label>shape</label>
										<input type="text" name="shape" id="shape" class="form-control" placeholder="Enter shape of the product">
									</div>
									<div class="form-group  col-md-6">
										<label>colour</label>
										<select class="form-select" aria-label="Default select example" name="colour" id="colour" >
                                        <option selected>Open this select menu</option>
                                        @if((sizeof($colours)>0))
                                        @foreach($colours as $Item)
                                        <option value="{{$Item->color_code}}">{{$Item->colour }}</option>
                                        @endforeach
                                        @endif
                                    </select>
									</div>
                                    <div class="form-group col-md-6">
										<label>Size</label>
										<input type="text" name="size" id="size" class="form-control" placeholder="Enter size or dimension of the product">
									</div>
                                    <div class="form-group col-md-6">
										<label>Finish</label>
										<input type="text" name="finish" id="finish" class="form-control" placeholder="Enter finish of the product">
									</div>
                                    <div class="form-group col-md-6">
										<label>Material</label>
										<input type="text" name="material" id="material" class="form-control" placeholder="Enter material of the product">
									</div>
                                    <div class="form-group col-md-6">
										<label>Thickness</label>
										<input type="text" name="thickness" id="thickness" class="form-control" placeholder="Enter thickness of the product">
									</div>
                                    <div class="form-group col-md-6">
										<label>Outlet Diameter</label>
										<input type="text" name="outDiameter" id="outDiameter" class="form-control" placeholder="Enter outlet diameter of the product">
									</div>
                                    <div class="form-group col-md-6">
										<label>Brand</label>
										<select class="form-select" aria-label="Default select example" name="brand" id="brand" >
                                        <option selected>Open this select menu</option>
                                        @if((sizeof($Brands)>0))
                                        @foreach($Brands as $Item)
                                        <option value="{{$Item->Brand_id}}">{{$Item->Brand_Name }}</option>
                                        @endforeach
                                        @endif
                                    </select>
									</div>
                                    <div class="form-group col-md-6">
										<label>Unit of measurement</label>
										<input type="text" name="UoM" id="UoM" class="form-control" placeholder="Enter unit of measurement of the product">
									</div>
                                    <div class="form-group col-md-6">
										<label>Unit price</label>
										<input type="text" name="price" id="price" class="form-control" placeholder="Enter unit Price of the product">
									</div>
                                    <div class="form-group col-md-6">
										<label>Application</label>
										<input type="text" name="application" id="application" class="form-control" placeholder="Enter application of the product">
									</div>

								<!-- </form> -->
                                </section>

                                <h2>Forth Step</h2>
                                <section>
                                    <p>
                                    <div class="form-group col-md-6">
										<label>main product image</label>
                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="validatedCustomFilemain" required>
                                                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                                        </div>
									</div>
                                    <div class="form-group  col-md-6">
										<label>No: of thumpnail images</label>
										<select class="form-select" aria-label="Default select example" name="countoftumpnails" id="countoftumpnails" >
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                                <option value="4">Four</option>
                                                <option value="5">Five</option>
                                                <option value="6">Six</option>
                                        </select>
									</div>
                                    <div class="col-md-12" id="thumpnaildiv">
                                            
                                            
										
									</div>
                                   
                                    </p>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
                            </form>
        
            
            
           
        </div>
    </section>
   
@endsection
@section('extra-js')
<script>
    
    $(function() {

        $("#Category").on("change",function(e){
            var selectedcategory = $("#Category").val();
            url="{{route('SubCategoryFetch',app()->getlocale())}}";
                  //url = url.replace("http", "https");
                  console.log(url);
                  console.log(selectedcategory);
                  $.ajax({
                    url: url,
                    type:"GET",
                    
                    data:{
                        selectedcategory:selectedcategory
                      
                      
                    },
                    success:function(response){
                            var subcategories = response.SubCategories;
                           if( subcategories.length !=0){
                            $('#subCategory').empty();
                            $('#subCategory').append($('<option>', { 
                                        value: '-1',
                                        text : 'Choose....' 
                                    }));
                            $.each(subcategories, function (i, item) {
                                    $('#subCategory').append($('<option>', { 
                                        value: item.Sub_Category_ID,
                                        text : item.Sub_Category_Name 
                                    }));
                            });
                            $("#subcatDiv").show();
                           }else{
                            
                            $('#subCategory').empty();
                            $('#subCategory').append($('<option>', { 
                                        value: '0',
                                        text : 'empty' 
                                    }));
                            $("#subcatDiv").hide();
                           }
                            

                    }
            });

        });
        $("#subCategory").on("change",function(e){
            var selectedcategory = $("#Category").val();
            var selectedsubcategory = $("#subCategory").val();
            url="{{route('SubSubCategoryFetch',app()->getlocale())}}";
                  //url = url.replace("http", "https");
                  console.log(url);
                  console.log(selectedcategory);
                  console.log(selectedsubcategory);
                  $.ajax({
                    url: url,
                    type:"GET",
                    
                    data:{
                        selectedcategory:selectedcategory,
                        selectedsubcategory:selectedsubcategory
                      
                    },
                    success:function(response){
                            var subsubcategories = response.SubSubCategories;
                            if( subsubcategories.length !=0){
                                $('#subsubCategory').empty();
                                $('#subsubCategory').append($('<option>', { 
                                        value: '-1',
                                        text : 'Choose....' 
                                    }));
                                $.each(subsubcategories, function (i, item) {
                                        $('#subsubCategory').append($('<option>', { 
                                            value: item.Sub_Sub_Category_ID,
                                            text : item.Sub_Sub_Category_Name 
                                        }));
                                });
                                $("#subsubcatDiv").show();
                            }else{
                            
                            $('#subsubCategory').empty();
                            $('#subsubCategory').append($('<option>', { 
                                        value: '0',
                                        text : 'empty' 
                                    }));
                             $("#subsubcatDiv").hide();
                           }
                            

                    }
            });

        });

        $("#countoftumpnails").on("change",function(e){
            var count = $("#countoftumpnails").val();
            $( "#thumpnaildiv" ).empty();
            for(var i=0;i<count;i++){
                $html = $('<div class="form-group col-md-6"><label>Thumpnail image</label><div class="custom-file"><input type="file" class="custom-file-input" id="validatedCustomFile'+i+'" required>'+
                            '<label class="custom-file-label" for="validatedCustomFile">Choose file...</label><div class="invalid-feedback">Example invalid custom file feedback</div>'+
                            '</div></div>');
						$( "#thumpnaildiv" ).append( $html);
            }
            

        });
    });
    </script> 
@endsection
   