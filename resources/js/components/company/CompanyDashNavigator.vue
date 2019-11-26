<template>
	<div id="dashboard-nav">
		<div class="list-nav">
			<ul class="text-center">
				<li><a href="/company-profile">Profile</a></li>
				<li><a href="/company-vacancies">My Vacancy</a></li>
				<li><a href="/company-create">Create new Vacancy</a></li>
				<li><a href="/company-applicants">Applicants</a></li>
			</ul>
		</div>
	</div>
</template>

<script>
export default {
	name: 'CompanyDashboardNavigator'
};
</script>

<style lang="scss" scoped>
#dashboard-nav {
	padding: 10%;
}

ul {
	list-style-type: none;

	li {
		margin-bottom: 10px;
		background-color: #f3f3f3;
		border-radius: 10px;
		padding: 10px;
	}

	a {
		color: black;
	}
}
</style>
