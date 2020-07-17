<template>
  <div class="container">
    <div class="card card-default">
      <div class="card-header">Šiuo metu vykstantys mokymai</div>
      <div class="card-body">
        <p v-for="event in events" v-bind:key="event.id">
          <b>{{ event.title }}</b>. Vieta:
          <i
            v-for="location in event.location"
            v-bind:key="location.id"
          >{{ location.title }} </i>
        </p>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      has_error: false,
      events: null
    };
  },
  mounted() {
    this.getEvents();
  },
  methods: {
    getEvents() {
      this.$http({
        url: "active-events",
        method: "GET"
      }).then(
        res => {
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
