<div class="container">
  <form method="post" action="{{ route('images.store') }}" 
		enctype="multipart/form-data">
    @csrf
    
    <div class="name">
      <label><h4>Name</h4></label>
      <input type="text" class="form-control" required name="name">
    </div>
    
    <div class="image">
      <label><h4>Add image</h4></label>
      <input type="file" class="form-control" required name="image">
    </div>

    <div class="post_button">
      <button type="submit" class="btn btn-success">Add</button>
    </div>
  </form>
</div>