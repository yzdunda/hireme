<template>
	<div>
		<p>{{ vacancyList.length }} Pekerjaan ditemukan untuk kamu</p>

		<div class="vacancy-list">
			<ul v-for="(vacancy, i) in vacancyList" :key="i">
				<li>
					<!-- dummy for vacancy title -->
					{{ vacancy.company.bs }}
					<br />
					<!-- dummy for vacancy provider -->
					{{ vacancy.company.name }}
					<br />
					<!-- dummy for vacancy location -->
					{{ vacancy.address.city }}
					<br />
					<!-- dummy for vacancy salary -->
					Rp{{ vacancy.zipcode }}
					<!-- dummy for vacancy date posted -->
					{{ vacancy.address.suite }}
				</li>
			</ul>
		</div>
	</div>
</template>

<script>
export default {
	name: 'VacancyList',
	props: {
		vacancyList: {
			type: Array
		}
	}
};
</script>

<style lang="scss" scoped>
.vacancy-list {
	display: flex;
	flex-direction: row;
	flex-wrap: wrap;
	background-color: lightgray;

	ul {
		list-style-type: none;

		li {
			width: 275px;
			height: 150px;
			box-shadow: 0 10px 10px #888888;
			border-radius: 15px;
			padding: 10px;
		}

		li:hover {
			cursor: pointer;
			box-shadow: 0 10px 10px #626262;
		}
	}
}
</style>
