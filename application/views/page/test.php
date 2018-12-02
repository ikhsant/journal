<form method="post">
	<div class="form-group">
	<label>Author</label>
	<input type="text" name="author[]" class="form-control" id="author">
	<div id="baru"></div>
</div>
<button type="submit" name="submit" class="btn btn-info">Submit</button>
</form>
<span class="btn btn-primary" id="add_author">Add</span>
<span class="btn btn-danger" id="remove_author">Remove</span>

<script>
$("#add_author").click(function(){   
    $("#author").clone().appendTo("#baru");  
});
$("#remove_author").click(function(){   
    $("#author").remove();  
});
</script>