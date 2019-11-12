<template>
	<div class="vacancy-container col-12">
		<h3 class="text-center">Vacancy Lists</h3>
		<clip-loader
			:loading="isLoading"
			:color="spinnerColor"
			class="spinner"
		></clip-loader>
		<vacancy-list
			:vacancyList="vacancyList"
			v-if="isLoading == false"
		></vacancy-list>
	</div>
</template>

<script>
import ClipLoader from 'vue-spinner/src/ClipLoader.vue';

import VacancyList from './VacancyList';

export default {
	name: 'VacancyContainer',
	components: {
		ClipLoader,
		VacancyList
	},
	data() {
		return {
			isLoading: false,
			spinnerColor: 'grey',
			vacancyList: []
		};
	},
	created() {
		this.getVacancy();
	},
	methods: {
		getVacancy() {
			this.isLoading = true;

			window.axios
				.get('https://jsonplaceholder.typicode.com/users')
				.then(response => {
					this.isLoading = false;
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
.spinner {
	margin-top: 15%;
}
</style>
