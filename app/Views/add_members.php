<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body>

	<div id="app">
		<ul>
			<li v-for="info in member">
				<input type="text" v-model="info">
			</li>
		</ul>
	</div>


	<script>
		var app = new Vue({
			el: "#app",
			data: {
				member:{
					name:"John",
					address:"807 rue du couvent",
					phone:"819 555-5555"
				}
			}
		})
	</script>
</body>
</html>

