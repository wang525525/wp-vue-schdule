import Vue from "vue";
import ScheduleHome from "./ScheduleHome.vue";

// Allow multiple Vue apps in the same page
const appElements = document.querySelectorAll(".vue-schedule-home");
Array.from(appElements).forEach(element => {
  /* eslint-disable no-new */
  new Vue({
    el: element,
    render: h => h(ScheduleHome)
  });
});
