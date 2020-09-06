<template>
    <div>
        <h3 class="text-center">All Users</h3><br/>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Mot de pass</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="meekouser1 in meekouser1s" :key="meekouser1.id">
                <td>{{ meekouser1.id }}</td>
                <td>{{ meekouser1.nom }}</td>
                <td>{{ meekouser1.prenom }}</td>
                <td>{{ meekouser1.email }}</td>
                <td>{{ meekouser1.motdepass }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'edit', params: { id: meekouser1.id }}" class="btn btn-primary">Edit</router-link>
                        <button class="btn btn-danger" @click="deleteMeekouser1(meekouser1.id)">Delete</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                meekouser1s: []
            }
        },
        created() {
            this.axios
                .get('../api/meekouser1s')
                .then(response => {
                    this.meekouser1s = response.data;
                });
        },
        methods: {
            deleteMeekouser1(id) {
                this.axios
                .delete(`../api/meekouser1/delete/${id}`)
                .then(response => {
                    let i = this.meekouser1s.map(item => item.id).indexOf(id); // find index of your object
                    this.meekouser1s.splice(i, 1)
                });

            }
        }
    }
</script>
