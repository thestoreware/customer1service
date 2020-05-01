<!--technosmarter.com--> 

 <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


<div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <select name="days_filter" id="days_filter" class="input-sm form-control w-sm inline v-middle">
      <option value="">Select Days</option>
      <option value="180">In 180 Days</option>
      <option value="90">In 90 Days</option>
      <option value="60">In 60 Days</option>

      <option value="30">In 30 Days</option>
                
                  
                   
                  
     </select>
                  
      </div>
      <div class="col-sm-4">
      </div>
     
    </div>
	
	
   
  
      <div class="table-responsive">
     <table id="order_data" class="table table-striped b-t b-light">
      <thead>
       <tr>
	   
         <th>Serial</th>
		 <th>code</th>
        <th>Description</th>
        <th>Personne</th>
          <th>Date </th>
		  <th>time </th>
		 
		  
       </tr>
      </thead>
     </table>
    </div>
   </div>
  </div>
 </body>
</html>



<script type="text/javascript" language="javascript" >


//The ready() method is used to make a function available after the document is loaded. 
//Whatever code you write inside the $(document ).ready() method will run once the page DOM is ready to execute JavaScript code.
//DOM: The Document Object Model is a cross-platform and language-independent interface that treats an XML or HTML document 
$(document).ready(function(){
//call the function load_data
	load_data();
	
$(document).on('change', '#days_filter', function(){
  var no_of_days = $(this).val();
  $('#order_data').DataTable().destroy();
  if(no_of_days != '')
  {
   load_data(no_of_days);
  }
  else
  {
   load_data();
  }
 });
 
});


function load_data(is_days)
 {
	//There are many ways to get your data into DataTables, and if you are working with seriously large databasesyou might want
	//to consider using the server-side options that DataTables provides.With server-side processing enabled,all paging,searching,
	//ordering actions that DataTables performs are handed off to a server where an SQL engine (or similar) can perform these actions on the large data set 
	//(after all, that's what the database engine is designed for!). As such, each draw of the table will result in a new Ajax
	//request being made to get the required data.
	  var dataTable = $('#order_data').DataTable
	  ({
			"processing":true,
			"serverSide":true,
			"order":[],
			"ajax":{
		   
						url:"fetch-details.php",
						type:"POST",
						data:{is_days:is_days}
					}
	  });
 }
</script>

      
  </div>
</div>

<!--Another question ask on link 

technosmarter.com/qa 

-->

