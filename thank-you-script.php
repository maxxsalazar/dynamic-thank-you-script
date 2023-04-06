
<!-- This is the code for a Dynamic name thank you page -->
<!-- javascript with one if statement in php -->
<!-- Dynamic name in thank you page starts -->
	<script>
		// 	select input
		let userName = document.querySelector('input#input_1_1_3');
		function capitalizeFirstLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}
		//Add event listener to input
			userName.addEventListener( 'change', function( event ) {
				// save name to variable
				let fullName = this.value.split(' ');
				let firstName = capitalizeFirstLetter(fullName[0]);
				
				console.log(firstName)
				// Save it to session storage
				sessionStorage.setItem("firstName", firstName);
			
	
		}, false );
	</script>

<?php if(is_page(525)): // only runs in thank you page ?>

	<!-- This sections controls the dynamic name in the thank you page	 -->
	<script>
		// retrieve name from session storage
		let firstName = sessionStorage.getItem("firstName");
		
		// if name exists populate value
		
		if(firstName != null && firstName != ''){
			// Destination
			let targetField = document.querySelector('#dynamicHeader');
			targetField.innerText = `Thank You, ${firstName}!`;
		}

	</script>
<!-- dynamic name in thank you page ends  -->
<?php endif; ?>