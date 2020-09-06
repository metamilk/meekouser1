<template>
    <div>
        <h3 class="text-center">Edit User</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateMeekouser1">
                    <div class="form-group">
                        <label>Nom</label>
                        <input type="text" class="form-control" v-model="meekouser1.nom">
                    </div>
                    <div class="form-group">
                        <label>Prenom</label>
                        <input type="text" class="form-control" v-model="meekouser1.prenom">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" v-model="meekouser1.email">
                    </div>
                    <div class="form-group">
                        <label>Mot de pass</label>
                        <input type="text" class="form-control" v-model="meekouser1.motdepass">
                    </div>
                    <button type="submit" class="btn btn-primary">Update User</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                meekouser1: {}
            }
        },
        created() {
            this.axios
                .get(`../api/meekouser1/edit/${this.$route.params.id}`)
                .then((response) => {
                    this.meekouser1 = response.data;
                    // console.log(response.data);
                });
        },
        methods: {
            updateMeekouser1() {
                this.axios
                    .post(`../api/meekouser1/update/${this.$route.params.id}`, this.meekouser1)
                    .then((response) => {
                        this.$router.push({name: 'home'});
                    });
            }
        }
    }
</script>
