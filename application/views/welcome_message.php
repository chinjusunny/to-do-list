<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.3/examples/starter-template/">

    <title>To-Do List</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

   <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
   
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="">Home</a></li>
            <li><a href="api/item">API</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container theme-showcase" role="main">

        <div class="jumbotron">
	        <h1>To Do List</h1>
	        <p>
		        <a href="pages/add_new" class="btn btn-sm btn-primary" data-target="#Modal" data-toggle="modal">Add New</a>
		    </p>
	        
			<table class="table table-striped">
			  <thead>
			    <tr>
			      <!--<th scope="col">#</th>-->
			      <th scope="col"></th>
			      <th scope="col">Title</th>
			      <th scope="col">Date</th>
			      <th scope="col">Description</th>
			      <th scope="col">Actions</th>
			    </tr>
			  </thead>
			  <tbody>
			    
			    <?php  
			    foreach($data as $row)
			    {  
			    	
         		?>
         		<tr <?php if($row->completed){?>style="text-decoration: line-through;color:#aba7a7;"<?php } ?>>
			      <!--style="text-decoration: line-through;"<th scope="row"><?php //echo $row->id;?></th>-->
			      <td><input type="checkbox" class="complete" id="<?php echo $row->id;?>" <?php echo ($row->completed==1 ? 'checked' : '');?> value="<?php echo $row->completed;?>"/></td>
			      <td><?php echo $row->title;?></td>
			      <td><?php echo $row->date;?></td>
			      <td><?php echo $row->description;?></td>
			      <td>
			      	<a href='pages/edit_item?id=<?php echo $row->id;?>' class="edit_button" data-target="#editModal" data-toggle="modal" data-title="<?php echo $row->title;?>"  data-date="<?php echo $row->date;?>" data-description="<?php echo $row->description;?>" data-id="<?php echo $row->id; ?>"><img src="img/edit-icon.png"  height="15" width="15"/></a>
			      	<a href='pages/delete_item?id=<?php echo $row->id;?>' class="delete"><img src="img/delete-icon.jpeg"  height="15" width="15"/></a>
			      </td>
			    </tr>
         		<?php
         		}
         		?>
			    
			  </tbody>
			</table>
        </div>

    </div><!-- /.container -->

	<div class="modal fade text-center" id="Modal">
	  <div class="modal-dialog">
	    <div class="modal-content">
	    </div>
	  </div>
	</div>

	<div class="modal fade text-center" id="editModal">
	  <div class="modal-dialog">
	    <div class="modal-content">
	    </div>
	  </div>
	</div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/js/bootstrap-datepicker.min.js"></script>
   
  </body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
	    $("a.delete").click(function(e){
	        if(!confirm('Are you sure want to delete?')){
	            e.preventDefault();
	            return false;
	        }
	        return true;
	    });
	    $('.complete').on('change',function() {
    		//alert($(this).attr('id')); 
            $.ajax({
                type: "POST",
                url : "pages/complete_item",
                data : {"id" : $(this).attr('id'),"value":$(this).attr('value')},
                success: function(data) {
                   //alert(data);
                    location.reload();
                }

            });
    	});
    	$('.edit_button').on('click',function() {
    		var title = $(this).data('title');
		    var id = $(this).data('id');
		    var description = $(this).data('description');
		    var date = $(this).data('date');
		    
		    $(".title").val(title);
		    $(".id").val(id);
		    $(".description").val(description);
		    $(".date").val(date);
    	});

	});
</script>



        
        