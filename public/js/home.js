/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/home.js ***!
  \******************************/
var app = new Vue({
  el: "#app",
  data: {
    // axios calls data
    apiRestaurantURL: "http://localhost:8000/api/restaurants/",
    apiRestaurantType: "http://localhost:8000/api/types",
    restaurants: [],
    restaurants_types: [],
    selectedType: 0,
    selectedRestaurant: [],
    restaurantSlug: "",
    logoutshow: "",
    menushow: ""
  },
  methods: {
    // logouttoggleshow: function(){
    //    if(this.logoutshow == ""){
    //       this.logoutshow = "display";
    //    }else{
    //    this.logoutshow = "";
    //    }
    // },
    // menutoggleshow: function(){
    //    if(this.menushow == ""){
    //       this.menushow = "display";
    //    }else{
    //    this.menushow = "";
    //    }
    // },
    // hidelogout: function(){
    //    this.logoutshow = "";
    // },
    // hidemenu: function(){
    //    this.logoutshow = "";
    // },
    // hideBanner: function (){
    //   this.bannerNone = "displayNone";
    // },
    // filterrestaurants by type
    filtredRestaurantByType: function filtredRestaurantByType() {
      var _this = this;

      axios.get(this.apiRestaurantURL, {
        params: {
          id: this.selectedType + 1
        }
      }).then(function (serverAnswer) {
        _this.restaurants = serverAnswer.data;
      });
    }
  },
  beforeMount: function beforeMount() {
    var _this2 = this;

    // axios call restaurants
    axios.get(this.apiRestaurantURL, {
      params: {
        id: this.selectedType
      }
    }).then(function (serverAnswer) {
      if (serverAnswer.data != 0) {
        if (serverAnswer.data.lenght > 5) {
          for (var i = 0; i < 12; i++) {
            _this2.restaurants.push(serverAnswer.data[i]);
          }
        } else {
          serverAnswer.data.forEach(function (restaurant) {
            _this2.restaurants.push(restaurant);
          });
        }
      }
    }), // axios call restaurantstypes
    axios.get(this.apiRestaurantType, {
      params: {}
    }).then(function (serverAnswer) {
      serverAnswer.data.forEach(function (type) {
        _this2.restaurants_types.push(type);
      });
    });
    console.log(this.restaurants_types);
  }
});
/******/ })()
;