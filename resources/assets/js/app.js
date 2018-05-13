
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

$(document).ready(function(){
    $(".btn-modal-change-role").click(function(e) {
      var currentUserRole = $(this).data("userrole");
      var currentUserId = $(this).data("userid");
      // add the user id of the selected user to the input
      $("input[name='user_id']").val(currentUserId);
      // select current role for the user selected
      $("select[name='role']").val(currentUserRole);
      $("#roleModal").modal("show");
    });
  });

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

// const app = new Vue({
//     el: '#app'
// });
