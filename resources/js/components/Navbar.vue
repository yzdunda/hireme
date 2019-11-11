<template>
	<div class="navbar">
		<div class="brand">
			<h2>Hireme</h2>
		</div>
		<div class="navigation">
			<ul>
				<li><a href="/">Home</a></li>
				<li><a href="#">Tentang Kami</a></li>
				<li><a href="/vacancy">Cari Loker</a></li>
				<li><a href="#">Masuk</a></li>
			</ul>
		</div>
	</div>
</template>

<script>
export default {
	name: 'Navbar'
};
</script>

<style lang="scss" scoped>
.navbar {
	display: flex;
	padding: 10px 30px;
	border-bottom-left-radius: 15px;
	border-bottom-right-radius: 15px;
	box-shadow: 0 10px 10px #888888;
	margin-bottom: 10px;
}

.brand {
}

.navigation {
	align-self: flex-end;
	margin-bottom: 10px;

	ul {
		list-style-type: none;
	}

	li {
		float: left;
		a {
			display: block;
			color: black;
			margin: 0 10px;
		}
	}
}
</style>
