<template>
	<div>
		<ul v-for="(vacancy, i) in vacancyList" :key="i">
			<li>{{ vacancy.employee_name }}</li>
		</ul>
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
</style>
