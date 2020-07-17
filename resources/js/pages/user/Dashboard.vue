<template>
  <div class="container">
    <div class="card card-default">
      <div class="card-header">{{ $auth.user().role.title }} zona | {{ $auth.user().branch.title }}</div>
      <div class="card-body">
        <userList></userList>
      </div>
    </div>
  </div>
</template>
<script>
import UserList from "../../components/UserList.vue";
export default {
  data() {
    return {
      //
    };
  },
  components: {
    UserList
  }
};
</script>
