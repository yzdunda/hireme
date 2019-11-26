<template>
	<div class="row">
		<div class="left-side col-12 col-md-5 offset-md-1">
			<h1>Masuk ke akun perusahaan Anda</h1>
			<input type="email" placeholder="Email Perusahaan" /><br />
			<input type="password" placeholder="Password" /><br />
			<a @click="companyLogin" class="btn">Login</a>
		</div>
		<div class="right-side col-md-5">
			<img src="/assets/sign-in.png" alt="searching" />
		</div>
	</div>
</template>

<script>
export default {
	name: 'CompanyLogin',
	methods: {
		companyLogin() {
			console.log('you are trying to login');
		}
	}
};
</script>

<style lang="scss" scoped>
.left-side {
	margin-top: 10%;

	h1 {
		font-size: 2.3em;
	}

	input[type='email'],
	input[type='password'] {
		width: 80%;
		padding: 15px 25px;
		border: none;
		background-color: #ffffff;
		box-shadow: 0 10px 10px #c8c8c8;
		margin-bottom: 15px;
		border-radius: 15px;
		color: black;
	}

	input[type='email']:focus,
	input[type='password']:focus {
		background-color: #f8f8f8;
		color: black;
		outline: none;
	}

	.btn {
		margin-top: 10px;
		padding: 5px 35px;
		border-radius: 10px;
		background-color: #1f94f2;
		color: #ffffff;
	}
}

.right-side {
	margin-top: 8%;
	margin-left: 5em;

	img {
		width: 450px;
		height: auto;

		@media (max-width: 768px) {
			display: none;
		}
	}
}
</style>
