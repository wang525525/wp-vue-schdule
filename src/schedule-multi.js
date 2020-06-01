import Vue from "vue";
import ScheduleMulti from "./ScheduleMulti.vue";

// Allow multiple Vue apps in the same page
const appElements = document.querySelectorAll(".vue-schedule-multi");
Array.from(appElements).forEach(element => {
  /* eslint-disable no-new */
  new Vue({
    el: element,
    render: h => h(ScheduleMulti)
  });
});
