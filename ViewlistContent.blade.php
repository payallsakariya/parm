<html>
	<body>
		<head>
			 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Registration user</title>
			<!--bootstrap css-->
			<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
			<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
			<!-- <link rel="stylesheet" type="text/css" href="assets\datatable\datatables.css"> -->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
			<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

			<style>
				.card{
					margin: 1 auto;
					float: none;
					margin-bottom:10px;
					margin-top: 20px;
				}
				
				p{
					display: inline;
				}
				#tbl{
					margin-top: 1%;
				}
				h2{
					background-color: lightgrey;
				}
				tfoot input {
					width: 90%;
					padding: 3px;
					box-sizing: border-box;
				}
				.container{
					width: 80%;
				}
				

			</style>
	    </head>	
		    <!-- <div class="card" style="margin :1%;">
				<h2>Content Media</h2>
				<div class="card-boby">	 
						<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add new Record</button>
				</div>
	 
	        </div>

	<div> -->

	<p><button class='btn btn-sm'><a href="https://hitvaniapp.excellcons.com/MenPage">HomePage</a></button></p><br>

	<div class="card" style="margin :1%;">
	
		<center><h2>Content Menu</h2></center>
		<br>
		<spane class="p-2"> 
		<button type="button" class="btn btn-info btn-sm AddData">Add new Record</button>
		</spane>
		
		<br>
		
		<form action="" class="form-inline sellistview"> 
		        <input type="hidden" name="Lng_Name"  id="Lng_Name" class="form-group">
				<input type="hidden" name="L1_id"  id="L1_id" class="form-group">
				<input type="hidden" name="L2_id"  id="L2_id" class="form-group">
				<input type="hidden" name="L3_id"  id="L3_id" class="form-group">
				<input type="hidden" name="L4_id"  id="L4 _id" class="form-group">
			<div class="card-body">
				<spane>
				<button type="button" class="btn btn-success btn-sm searchbt" >Search</button>
				<button type="button" class="btn btn-danger btn-sm clearbt" >Clear</button>
				</spane>
			<spane class="p-4">
					<lable class=""><b>Language</b></lable>
					<select id="language_droupdwon" class="form-labe">
					<option selected="" value="" disabled="">--selcted language--</option>
						<option  value="H">H</option>
						<option  value="E">E</option>
						<option  value="G">G</option>
					</select>
			</spane>
			<spane class="p-4">
					<lable class=""><b>L1</b></lable>
				<select id="L1_droupdwon">
					<option selected="" value="" disabled="">--Selcted L1--</option>
				</select>
			</spane>		
			<spane class="p-4">
					<lable class=""><b>L2</b></lable>
				<select id="L2_droupdwon">
					<option selected="" value="" disabled="">--Selcted L2--</option>
				</select>
			</spane>		
			<spane class="p-4">
					<lable class=""><b>L3</b></lable>
				<select id="L3_droupdwon">
					<option selected="" value="" disabled="">--Selcted L3--</option>
				</select>
			</spane>		
			<spane class="p-4">
					<lable class=""><b>L4</b></lable>
				<select id="L4_droupdwon">
					<option selected="" value="" disabled="">--Selcted L4--</option>
				</select>
			</spane>
			</div>
		</form>

		<div class="card-boby">	 
				<!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add new Record</button> -->

	
			<table class="table table-bordered table-sm" id="tbl" style="width:100%">
				
				<thead class="table-dark">
				    <tr>
						<th scope="col" size=1>Action</th>
						<th scope="col">Language</th>
						<th scope="col">ParentID</th>
						<th scope="col">ChildID</th>
						<th scope="col">ParentName</th>
						<th scope="col">Name</th>
						<th scope="col">Stauts</th>
						<th scope="col">Category</th>
						<th scope="col">ContentCreater</th>
					</tr>
				</thead>
			
			</table>
		</div>
	</div>

   
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	       <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script> -->
        	<!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script> -->
        	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script> -->
			<!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script> -->
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
			 

			<!-- <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script> -->
			 <!-- <script src="assets\datatable\datatables.js"></script> -->
			 <!-- <script src="assets\datatable\datatables.min.js"></script> -->
			 <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> -->
			 <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script> -->
			<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script> -->
	<script src="https://cdn.datatables.net/v/bs5/jszip-3.10.1/dt-2.0.8/b-3.0.2/b-html5-3.0.2/b-print-3.0.2/cr-2.0.3/fc-5.0.1/fh-4.0.1/r-3.0.2/rg-1.5.0/sc-2.4.3/sb-1.7.1/sp-2.3.1/sl-2.0.3/datatables.min.js"></script>




<script>
	$(document).ready(function() {
		        $('#language_droupdwon').select2();
				$('#L1_droupdwon').select2();
				$('#L2_droupdwon').select2();
				$('#L3_droupdwon').select2();
				$('#L4_droupdwon').select2();

		const $parntids=[];
	    LoadTableData($parntids);
	
        // get va in db viwe modal
	    $(document).on('click', 'a.editdata', function(e) {
			e.preventDefault();
			var checkid = $(this).data('dataid');
			var data = {
				'checkid': checkid,
			}
			window.location.href = "https://hitvaniapp.excellcons.com/viewupdata/" + checkid;

			
		});
		
		$(document).on('click', 'a.addmedia', function(e) {
			e.preventDefault();
			var menu_id = $(this).data('dataid');
			var data = {
				'menu_id': menu_id,
			}
			window.location.href = "https://hitvaniapp.excellcons.com/getupdata?menu_id="+menu_id;
			
		});

		
		$(document).on('click', 'button.AddData', function(e) {
			e.preventDefault();
			// console.log('Add');
			window.location.href = "https://hitvaniapp.excellcons.com/addinsert";
			
		});

		$(document).on('click', 'button.searchbt', function(e) {
			e.preventDefault();
			var language = $('#language_droupdwon').val();
			var l1 = $('#L1_id').val();
			var l2 = $('#L2_id').val();
			var l3 = $('#L3_id').val();
			var l4 = $('#L4_id').val();
			var getpid = "";
			 if (l1) {
				getpid = $('#L1_id').val();
				} 
			 if (l2) {
				getpid = $('#L2_id').val();
				} 
			 if(l3) {
				getpid = $('#L3_id').val();
				}
			const $parntids={
				'L1': getpid,
				'language':language
			}
			       LoadTableData($parntids);
			        // var url='https://hitvaniapp.excellcons.com/searchlist';
					// $.ajax({ 
					// 	type : 'get',
					// 	url :url,
					// 	data :{
					// 	'language':language,
					// 	'getpid':getpid  
					// 	},
					// 	catch :false,
					// 	dataType: 'json',
					// 	success: function(dataS2) {
					// 		console.log(dataS2)
							
					// 	},
					// 	error: function() {
					// 		alert('Failed to fetch menu items');
					// 	}
					// })
			
		});

		$(document).on('click', 'button.clearbt', function(e) {
			e.preventDefault();
			window.location.href = "https://hitvaniapp.excellcons.com/datatable";

		});

   });


// $(document).ready(function() { var table = $('#example').removeAttr('width').DataTable( { scrollY: "1000px", scrollX: true, scrollCollapse: true, paging: true, columnDefs: [ { width: 200, targets: 0 } ] } ); new $.fn.dataTable.FixedColumns( table ); } );
			function LoadTableData($getpid){
				// console.log($getpid);
				// console.log('datalist');
				var url='https://hitvaniapp.excellcons.com/api/menucontent';
				// DataTable
				var parntids = $getpid;
				var t= $('#tbl').DataTable({
					destroy: true,
					searching: false,
					"lengthMenu": [[100, "All", 50, 25], [100, "All", 50, 25]],
					//processing: true,
					//serverSide: true,
					// initComplete: function ()
					// {
					// 	var i = 0;
					// 	this.api().columns([1,2,3,4,5,6,7,8]).every( function () //Columnas a mostrar
					// 	{
					// 		var column = this;
					// 		i = i + 1;
					// 		var select = $('<select style="width:100%" class="js-example-basic-single" id="'+i+'id"><option value=""></option></select>')
					// 			.appendTo( $(column.header()).empty() )
					// 			.on( 'change', function () {var val = $.fn.dataTable.util.escapeRegex($(this).val());
					// 			column
					// 			.search( val ? '^'+val+'$' : '', true, false )
					// 			.draw();
								
					// 		});
					// 		column.data().unique().sort().each( function ( d, j )
					// 		{
					// 			select.append( '<option value="'+d+'">'+d+'</option>' )
					// 		});
							
					// 	});

					// },
					columnDefs: [
						{
							searchable: false,
							orderable: false,
						}],
						
					ajax: {
						url: url,
						type: 'get',
						// data:{ 'parntids':parntids },
						data :{
						'parntids':parntids  
						},
						// data: function(d) {
						//         d.start = d.start;
						//         d.length = d.length;
						//         d.draw = d.draw;
						//     }
					},

					columns: [
						{data: 'child_id'},
						{data: 'language'},
						{data: 'parentid'},
						{data: 'child_id'},
						{data: 'parnt_name'},
						{data: 'child_name'},
						{data: 'stauts'},
						{data: 'category'},
						{data: 'content_creator'},
					],
					
					columnDefs: [
						{
							// searchable: false,
							// orderable: false,
							"targets": 0,
							"data": "child_id",
							"render": function (data, type, row, meta) {
									// return '<td><button type="button" class="btn btn-info editdata"  data-dataid="'+row.child_id+'">Update</button><button type="button" class="btn btn-danger deletedata" data-dataid="'+row.child_id+'">delete</button></td>';
									return '<td><a type="button" class="addmedia"  data-dataid="'+row.child_id+'"><i class="fa fa-caret-square-o-right"></i></a><a type="button" class="editdata"  data-dataid="'+row.child_id+'"><i class="fa fa-pencil fa-fw "></i></a><a type="button" class="deletedata" data-dataid="'+row.child_id+'"><i class="fa fa-trash-o fa-fw"></i></a></td>';
									// return "<td><a href='firstconsulatationpdf?pdf_id="+row.consult_id+"&pid="+row.pid+"'><i class='fa fa-file-pdf-o m-r-5' title='Firstconsulatation'></i><a href='firstconsulatationpdf?pdf_id="+row.consult_id+"&pid="+row.pid+"'><i class='fa fa-file-pdf-o m-r-5' title='Firstconsulatation'></i></a></td>";

							}
						}
					]

					
				});         
			}



			$('#language_droupdwon').change(function(){
				$('#Lng_Name').val(this.value)
				getlanguage(this.value);
				
					$('#L1_id').val("");
				    $('#L3_id').val("");
					$('#L2_id').val("");
					$('#L4_id').val("");
			});

			$('#L1_droupdwon').change(function(){
				$('#L1_id').val(this.value)
				getL1(this.value);
				    $('#L3_id').val("");
					$('#L2_id').val("");
					$('#L4_id').val("");
			});
			$('#L2_droupdwon').change(function(){
				$('#L2_id').val(this.value)
				getL2(this.value);
				    $('#L3_id').val("");
					$('#L4_id').val("");
			});
			$('#L3_droupdwon').change(function(){
				$('#L3_id').val(this.value)
				getL3(this.value);
					$('#L4_id').val("");
			});

			function getlanguage(language_sel){
					url='https://hitvaniapp.excellcons.com/getlanguage';
					$.ajax({ 
						type : 'get',
						url :url,
						data :{
						'language_sel':language_sel  
						},
						catch :false,
						dataType: 'json',
						success: function(menus) {
							// Append options to the select element
							$('#L1_droupdwon').empty();
							$('#L2_droupdwon').empty();
							$('#L3_droupdwon').empty();
							$('#L4_droupdwon').empty();
							$('#L1_droupdwon').append('<option selected="" value="" disabled="">--selcted L1--</option>');
							$('#L2_droupdwon').append('<option selected="" value="" disabled="">--selcted L2--</option>');
							$('#L3_droupdwon').append('<option selected="" value="" disabled="">--selcted L3--</option>');
							$('#L4_droupdwon').append('<option selected="" value="" disabled="">--selcted L4--</option>');
							$.each(menus, function(index, menu) {
								$('#L1_droupdwon').append($('<option>', {
									value: menu.menu_id,
									text: menu.name
								}));
							});
						},
						error: function() {
							alert('Failed to fetch menu items');
						}
					})
			}

	        function getL1(L1_sel){
				// console.log(L1_sel);
					url='https://hitvaniapp.excellcons.com/getL1';
					$.ajax({ 
						type : 'get',
						url :url,
						data :{
						'L1_sel':L1_sel  
						},
						catch :false,
						dataType: 'json',
						success: function(datas) {
							// console.log(datas)
							// Append options to the select element
							$('#L2_droupdwon').empty();
							$('#L3_droupdwon').empty();
							$('#L4_droupdwon').empty();
							$('#L2_droupdwon').append('<option selected="" value="" disabled="">--selcted L1--</option>');
							$('#L3_droupdwon').append('<option selected="" value="" disabled="">--selcted L3--</option>');
							$('#L4_droupdwon').append('<option selected="" value="" disabled="">--selcted L4--</option>');
							$.each(datas, function(index, data) {
							$('#L2_droupdwon').append($('<option>', {
							value: data.menu_id,
							text: data.name
								}));
							});
						},
						error: function() {
							alert('Failed to fetch menu items');
						}
					})
			}	
			
			function getL2(L2_sel){
					url='https://hitvaniapp.excellcons.com/getL2';
					$.ajax({ 
						type : 'get',
						url :url,
						data :{
						'L2_sel':L2_sel  
						},
						catch :false,
						dataType: 'json',
						success: function(dataS2) {
							console.log(dataS2)
							// Append options to the select element
							$('#L3_droupdwon').empty();
							$('#L3_droupdwon').append('<option selected="" value="" disabled="">--selcted L3--</option>');
							$.each(dataS2, function(index, data) {
							$('#L3_droupdwon').append($('<option>', {
							value: data.menu_id,
							text: data.name
								}));
							});
						},
						error: function() {
							alert('Failed to fetch menu items');
						}
					})
			}

			function getL3(L3_sel){
					url='https://hitvaniapp.excellcons.com/getL3';
					$.ajax({ 
						type : 'get',
						url :url,
						data :{
						'L3_sel':L3_sel  
						},
						catch :false,
						dataType: 'json',
						success: function(dataS3) {
							// Append options to the select element
							$('#L4_droupdwon').empty();
							$('#L4_droupdwon').append('<option selected="" value="" disabled="">--selcted L4--</option>');
							$.each(dataS3, function(index, data) {
							$('#L4_droupdwon').append($('<option>', {
							value: data.menu_id,
							text: data.name
								}));
							});
						},
						error: function() {
							alert('Failed to fetch menu items');
						}
					})
			}

		 </script>
	</body>

	</html>
