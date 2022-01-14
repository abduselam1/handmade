export default [
    {
        path: '/',
        name:"home",
        component: require('./components/pages/index.vue').default,
        meta: {
          title: 'Home Page - Handmed',
          metaTags: [
            {
              name: 'description',
              content: 'Handmed is the best way to connect to real professional doctors and pyschatrist to get the correct information and also to communicate with them.'
            },
            {
              property: 'og:description',
              content: 'Handmed is the best way to connect to real professional doctors and pyschatrist to get the correct information and also to communicate with them.'
            }
          ]
        }
      },

      
      {
        path: '/profile',
        name:"profile",
        component: require('./components/pages/profile.vue').default
      },
      {
        path:'/account/:username',
        name:"account",
        component: require('./components/pages/account.vue').default,
        meta: {
          title: 'username - Handmed',
          metaTags: [
            {
              name: 'description',
              content: ''
            },
            {
              property: 'og:description',
              content:''
            }
          ],
          data:null
        },


      },
      {
        path: '/message',
        name:"message",
        component:require('./components/pages/message.vue').default
      },
      {
        path:'/setting',
        name:"setting",
        component: require('./components/pages/setting.vue').default
      },
      {
        path:'/post/:id',
        component:require('./components/pages/post.vue').default,
        name:"post",
        meta: {
          title: 'Home Page - Handmed',
          metaTags: [
            {
              name: 'description',
              content:''
            },
            {
              property: 'og:description',
              content:''
            }
          ],
          data:null
        }

      }
]