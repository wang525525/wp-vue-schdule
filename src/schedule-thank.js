import Vue from "vue";
import ScheduleThank from "./ScheduleThank.vue";

// Allow multiple Vue apps in the same page
const appElements = document.querySelectorAll(".vue-schedule-thank");
Array.from(appElements).forEach(element => {
  /* eslint-disable no-new */
  new Vue({
    el: element,
    render: h => h(ScheduleThank)
  });
});
