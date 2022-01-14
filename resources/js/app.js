/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import axios from 'axios';
import VueRouter from 'vue-router'
import routes from './routes'
window.Vue = require('vue').default;

Vue.use(VueRouter);
const router = new VueRouter({
    routes: routes,
    mode: 'history'
  })

function adjustStringforTitle(title){
    if(title.length < 50){
        return title;
    }
    return title.substr(0,50)+'...';
}

router.beforeEach((to, from, next) => {
    // This goes through the matched routes from last to first, finding the closest route with a title.
    // e.g., if we have `/some/deep/nested/route` and `/some`, `/deep`, and `/nested` have titles,
    // `/nested`'s will be chosen.
    
    const nearestWithTitle = to.matched.slice().reverse().find(r => r.meta && r.meta.title);

    const previousNearestWithMeta = from.matched.slice().reverse().find(r => r.meta && r.meta.metaTags);

    // If a route with a title was found, set the document (page) title to that value.
    
    const name = to.name;
    if(name == 'account'){
        // axios.get()
    }else if(name == 'post'){
        var post_id = to.params.id;
            axios.get('/api/post/'+post_id).then((result) => {
            
            if(result.data != false){
                const tag1 = document.createElement('meta');
                const tag2 = document.createElement('meta');
                tag1.setAttribute("name","description");
                tag1.setAttribute('content', result.data.content);
                document.title = result.data.user.username+' - '+adjustStringforTitle(result.data.content);
                tag2.setAttribute("property", "og:description");
                tag2.setAttribute("content", result.data.content);
                document.head.appendChild(tag1)
                document.head.appendChild(tag2)
            }
            to.meta.data = result.data;
        }).catch((err) => {
            // this.post = this.cache_post;
            
        });
        // console.log(to.params);
    }else{
        if(nearestWithTitle) {
            document.title = nearestWithTitle.meta.title;
          } else if(previousNearestWithMeta) {
            document.title = previousNearestWithMeta.meta.title;
          }
    
        
        // Find the nearest route element with meta tags.
        const nearestWithMeta = to.matched.slice().reverse().find(r => r.meta && r.meta.metaTags);
      
        
        // Remove any stale meta tags from the document using the key attribute we set below.
        Array.from(document.querySelectorAll('[data-vue-router-controlled]')).map(el => el.parentNode.removeChild(el));
      
        // Skip rendering meta tags if there are none.
        if(!nearestWithMeta) return next();
      
        // Turn the meta tag definitions into actual elements in the head.
        nearestWithMeta.meta.metaTags.map(tagDef => {
          const tag = document.createElement('meta');
    
          Object.keys(tagDef).forEach(key => {
            tag.setAttribute(key, tagDef[key]);
            
          });
          
          // We use this to track which meta tags we create so we don't interfere with other ones.
          tag.setAttribute('data-vue-router-controlled', '');
      
          return tag;
        })
        // Add the meta tags to the document head.
        .forEach(tag => document.head.appendChild(tag));
      
        
    }
    next();
});


const files = require.context('./', true, /\.vue$/i)
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.filter('postDateFormat',function(value){
    var dateTime = new Date(value);
    var hour = dateTime.getHours();
    var period = 'AM';
    if(hour > 12){
        hour = Math.floor(dateTime.getHours);
        period = 'PM';
    }
    var months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sept", "Oct", "Nov", "Dec"];
    var month = months[dateTime.getMonth()];
    return hour+':'+dateTime.getMinutes()+' '+period+' . '+month+' '+dateTime.getDate()+', '+dateTime.getFullYear()
    // return dateTime.getFullYear();
})



const app = new Vue({
    router,
    mounted(){

    },
    data(){
        return {
            profile:'',
            
        }
    },
    el: '#app',
});
