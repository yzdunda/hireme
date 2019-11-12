<template>
	<div id="vacancy-list">
		<span v-if="vacancyList.length"
			><p>{{ vacancyList.length }} Pekerjaan ditemukan untuk kamu</p></span
		>

		<div class="vacancy-lists mx-auto">
			<ul v-if="vacancyList.length">
				<vacancy-list-item
					v-for="(vacancy, i) in vacancyList"
					:key="i"
					:vacancy="vacancy"
				></vacancy-list-item>
			</ul>
		</div>
	</div>
</template>

<script>
import VacancyListItem from './VacancyListItem';

export default {
	name: 'VacancyList',
	components: {
		VacancyListItem
	},
	props: {
		vacancyList: {
			type: Array
		}
	}
};
</script>

<style lang="scss" scoped>
.vacancy-lists {
	ul {
		display: flex;
		flex-direction: row;
		flex-wrap: wrap;
		justify-items: center;
		list-style-type: none;
	}
}
</style>
