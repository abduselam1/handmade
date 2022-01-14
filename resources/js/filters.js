Vue.filter('postDateFormat',function(value){
    var date = new Date(value);
    return date.getFullYear;
})