<template>
	<div id="vacancy-list-item" class="">
		<li>
			<div class="vacancy-title">
				<!-- dummy for vacancy title -->
				<h5>{{ vacancy.company.bs }}</h5>
				<br />
				<!-- dummy for vacancy provider -->
				{{ vacancy.company.name }}
				<br />
			</div>
			<div class="vacancy-desc">
				<!-- dummy for vacancy location -->
				{{ vacancy.address.city }}
				<br />
				<!-- dummy for vacancy salary -->
				Rp{{ vacancy.zipcode }}
				<!-- dummy for vacancy date posted -->
				{{ vacancy.address.suite }}
			</div>
		</li>
	</div>
</template>

<script>
export default {
	name: 'VacancyListItem',
	props: {
		vacancy: {
			type: Object
		}
	}
};
</script>

<style lang="scss" scoped>
#vacancy-list-item {
	padding: 10px 15px;
}

li {
	width: 300px;
	height: 175px;
	background-color: #ffffff;
	box-shadow: 0 10px 10px #888888;
	border-radius: 15px;
	padding: 15px;
}

li:hover {
	cursor: pointer;
	box-shadow: 0 10px 10px #626262;
}
</style>
