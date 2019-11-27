<template>
    <div id="company-dashboard">
        <p>my vacancy</p>
    </div>
</template>

<script>
export default {
    name: "CompanyDashboard",
    data() {
        return {
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

<style lang="scss" scoped></style>
