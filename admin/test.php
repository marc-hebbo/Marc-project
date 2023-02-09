<form action="" id="manage-appointment">
			<hr>
			<div class="col-md-12 text-center">
				<button class="btn-primary btn btn-sm col-md-4">Request</button>
				<button class="btn btn-secondary btn-sm col-md-4  " type="button" data-dismiss="modal" id="">Close</button>
			</div>
		</form>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("#manage-appointment").submit(function(e){
		e.preventDefault()
$.ajax({
			url:'https://api.publicapis.org/entries',
			method:'GET',
			data:$(this).serialize(),
			error:err=>{
				console.log(err)
	

			},
			success:function(resp){
				console.log(resp)
			}
		
		}) 
    })
    })

	



        </script>


        
</body>
</html>