@if($Category->count())

<form action="/category/{{$Category->Category_ID}}" method="post">
    @method('PATCH')
    @csrf
<div class="box">
<div>
<label for="Category_Id"> Category_Id</label>
    <input type="text" name="Category_Id" id="Category_Id" value="{{$Category->Category_ID}}">
</div>
    <div>
    <label for="Category_Name"> Category_Name</label>
    <input type="text" name="Category_Name" id="Category_Name" value="{{$Category->Category_Name}}">
    </div>
    <div>
    <label for="Description"> Description</label>
    <input type="text" name="Description" id="Description" value="{{$Category->Description}}">
    </div>
    
    <button type="submit">Save </button>
</div>
</form>
@endif