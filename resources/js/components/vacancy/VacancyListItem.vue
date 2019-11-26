<template>
	<div id="vacancy-list-item" class="">
		<li>
			<div class="vacancy-head">
				<!-- dummy for vacancy title -->
				<span class="title"
					><strong>{{ vacancy.title }}</strong></span
				>
				<br />
				<!-- dummy for vacancy provider -->
				<span class="company-name">{{ vacancy.name }}</span>
				<br />
				<!-- <span class="save-vacancy">
					<a href="#">
						<img src="/assets/favorite_icon.png" alt="saved-vacancy" />
					</a>
				</span> -->
			</div>
			<div class="vacancy-info">
				<!-- dummy for vacancy location -->
				<span class="location"
					><img src="/assets/location_icon.png" alt="vacancy-city-icon" /> Kota
					{{ vacancy.location }}</span
				>
				<br />
				<!-- dummy for vacancy salary -->
				<span class="salary"
					><img src="/assets/currency_icon.png" alt="vacancy-salary-icon" /> IDR
					{{ vacancy.salary }}</span
				>
				<br />
				<!-- dummy for vacancy date posted -->
				<span class="deadline"
					><img src="/assets/calendar_icon.png" alt="vacancy-date-posted" />
					{{ vacancy.created_at }}</span
				>
				<br />
				<span class="date-posted">
					3 Hari yang lalu
				</span>
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
	min-height: 210px;
	background-color: #ffffff;
	box-shadow: 0 10px 10px #888888;
	border-radius: 15px;
	padding: 15px 20px;
}

li:hover {
	cursor: pointer;
	box-shadow: 0 10px 10px #626262;
}

.vacancy-head {
	margin-bottom: 10px;

	.title {
		font-size: 16px;
	}

	.company-name {
		font-size: 14px;
		color: #1f94f2;
	}

	.save-vacancy {
		position: relative;
		float: right;
		bottom: 41px;
	}
}

.vacancy-info {
	.location,
	.salary,
	.deadline {
		font-size: 14px;

		img {
			margin-bottom: 7.5px;
		}
	}

	.date-posted {
		font-size: 12px;
		float: right;
		color: #999999;
	}
}
</style>
