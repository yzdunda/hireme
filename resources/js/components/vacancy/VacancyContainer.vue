<template>
	<div>
		<h3>Vacancy List</h3>
		<vacancy-list :vacancyList="vacancyList"></vacancy-list>
	</div>
</template>

<script>
import VacancyList from './VacancyList';

export default {
	name: 'VacancyContainer',
	components: {
		VacancyList
	},
	data() {
		return {
			vacancyList: []
		};
	},
	created() {
		this.getVacancy();
	},
	methods: {
		getVacancy() {
			window.axios
				.get('http://dummy.restapiexample.com/api/v1/employees')
				.then(response => {
					console.log(response);
					this.vacancyList = response.data;
				})
				.catch(error => {
					console.log(error);
				});
		}
	}
};
</script>

<style lang="scss" scoped>
</style>
