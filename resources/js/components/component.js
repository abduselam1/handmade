export default function (){
    // Vue.component("HelloWorld", require("./components/HelloWorld.vue").default);

    Vue.component('register',require('./auth/register.vue').default);
    Vue.component('example-component', require('./components/ExampleComponent.vue').default);
}