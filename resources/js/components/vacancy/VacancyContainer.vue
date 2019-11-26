<template>
	<div id="vacancy-container" class="col-12">
		<h3 class="title text-center"><strong>Vacancy Lists</strong></h3>
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
				.get('http://hireme.test/api/vacancies')
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
.title {
	margin-top: 10px;
}

.spinner {
	margin-top: 15%;
}
</style>
