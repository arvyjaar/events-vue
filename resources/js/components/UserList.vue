<template>
  <div>
    <div class="alert alert-danger" v-if="has_error">
      <p>Nepavyko įkelti darbuotojų sąrašo.</p>
    </div>
    <p class="text-center" v-for="event in events" v-bind:key="event.id">{{ event.title }}</p>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Vardas</th>
          <th scope="col">Padalinys</th>
          <th scope="col">Rezervuotos datos</th>
          <th scope="col">Veiksmai</th>
        </tr>
      </thead>
      <tr v-for="user in users" v-bind:key="user.id" style="margin-bottom: 5px;">
        <td>{{ user.name }}</td>
        <td>{{ user.branch.title }}</td>
        <td><span v-for="(d, index) in user.event_date" v-bind:key="d.id" v-bind:title="d.location.title">
            {{ d.datetime }}
            <span v-if="index != user.event_date.length - 1">*</span></span> </td>
        <td> <button class="btn btn-outline-secondary">Registruoti</button> </td>
      </tr>
    </table>
  </div>
</template>
<script>
export default {
  data() {
    return {
      has_error: false,
      users: null,
    };
  },
  mounted() {
    this.getUsers();
  },
  methods: {
    getUsers() {
      this.$http({
        url: "auth/users",
        method: "GET"
      }).then(
        res => {
          this.users = res.data.users;
          this.events = res.data.events;
        },
        () => {
          this.has_error = true;
        }
      );
    }
  }
};
</script>
