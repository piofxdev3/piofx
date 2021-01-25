<x-nav-of-creates>

<div class="container">
<form method="POST" action="/categories">
 @csrf
 <label class="font-size-h2 font-weight-bolder text-dark ml-1">
   Create a Blog Post
</label>
<div class="form-group">
<label>Name:</label>
<input class="form-control" name="name" type="text">
</div>
<div class="form-group">
<label>Slug:</label>
<input class="form-control" name="slug" type="text">
</div>

<div class="form-group">
  <label>Description:</label> 
<input class="form-control" type="textarea" name="description">
</div>

<div class="form-group">
<label>Status:</label>
<div class="selectbox">
<select name="status">
  <option value="1" name="status">Active</option>
  <option value="2" name="status">In-Active</option>
</select>
</div>
</div>


<div class="form-group">
    <label for="exampleFormControlFile1">Upload image</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file"/>
    
</div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

 </div>




</x-nav-of-creates>