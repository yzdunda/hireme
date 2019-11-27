<template>
    <div>
        <h3 class="title">My Applicants</h3>
        <ul v-for="(data, i) in companyData" :key="i">
            <li>
                {{ i + 1 }}. {{ data.title }} | {{ data.name }} |
                {{ data.experience }} months | <a href="#">Action</a>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    name: "CompanyDashApplicants",
    data() {
        return {
            companyName: "",
            companyData: []
        };
    },
    methods: {
        getData() {
            console.log("clicked");
        },
        getApplicants(companyData) {
            let id = companyData.data.id;
            axios
                .get(`http://hireme.test/api/applicant/company/${id}`)
                .then(response => {
                    this.companyData = response.data.data;
                })
                .catch(error => {
                    console.log(error);
                });
        }
    },
    created() {
        let companyData = JSON.parse(localStorage.getItem("responseLogin"));
        // console.log(companyData);
        this.getApplicants(companyData);
    }
};
</script>

<style lang="scss" scoped>
.title {
    margin-top: 20px;
    margin-left: 40px;
}

ul {
    list-style-type: none;
}
</style>
