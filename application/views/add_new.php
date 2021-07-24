<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/css/bootstrap-datepicker.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal">X</button>
  <h1>Add New List</h1>
</div>
<div class="modal-body">
      	<form method="post" action="pages/save">
			<div class="form-group">
			    <label for="title">Title</label>
			    <input type="text" class="form-control" name="title" id="title" placeholder="Title">
     		</div>
			<div class="form-group">
			    <label for="date">Date</label>
				<div id="filterDate2">
		          <!-- Datepicker as text field -->         
		          <div class="input-group date" data-date-format="dd.mm.yyyy">
		            <input  type="text" name="date" class="form-control" placeholder="dd/mm/yyyy">
		            <div class="input-group-addon" >
		              <span class="glyphicon glyphicon-th"></span>
		            </div>
		          </div>
		        </div>    
			</div>
			<div class="form-group">
			    <label for="description">Description</label>
			    <textarea class="form-control" name="description" id="description" rows="3"></textarea>
			</div>
		    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    	    <input type="submit" class="btn btn-success" name="save" value="Save Data"/>
		</form>
   
</div>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript">
      $('.input-group.date').datepicker({format: "dd/mm/yyyy"}); 
</script>