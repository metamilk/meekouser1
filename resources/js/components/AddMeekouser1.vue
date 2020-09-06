<template>
    <div>
        <h3 class="text-center">Add User</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addMeekouser1">
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
                    <button type="submit" class="btn btn-primary">Add User</button>
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
        methods: {
            addMeekouser1() {

                this.axios
                    .post('../api/meekouser1/add', this.meekouser1)
                    .then(response => (
                        this.$router.push({name: 'home'})
                        // console.log(response.data)
                    ))
                    .catch(error => console.log(error))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>
