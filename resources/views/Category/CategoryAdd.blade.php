<form action="/category" method="post">
    
    @csrf
<div class="box">
<div>
<label for="Category_ID"> Category_Id</label>
    <input type="text" name="Category_ID" id="Category_ID" value="">
</div>
    <div>
    <label for="Category_Name"> Category_Name</label>
    <input type="text" name="Category_Name" id="Category_Name" value="">
    </div>
    <div>
    <label for="Description"> Description</label>
    <input type="text" name="Description" id="Description" value="">
    </div>
    
    <button type="submit">Save </button>
</div>
</form>
@if($errors->any())
    @foreach($errors as $err)
        <span style="color:red">{{$err}} </span>
    @endforeach
@endif