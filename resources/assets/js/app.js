Vue.filter('reverse-string', function(value) {
  return value.split('').reverse().join('')
});

Vue.filter('add-link', function(value) {
  return value + "<button class='btn'>Click me</button>";
});

Vue.filter('strip-html', function(value) {

});

//Vue.filter('escape-string')

var vcontact = new Vue({
  el: "#vcform",
  data: function() {
    return {
        heading: "Contact",
        name: '',
        email: '',
        subject: '',
        message: '',
        counter: 0
    }
  },
  computed: {
    counter: function() {
      console.log('Compute Output');
      return this.counter >= 37 ? 'Greater then 37 ' : 'Less then 37';
      //return this.name + " at " + this.email + " talking about " + this.subject + " saying " + this.message;
    }
  },
  watch: {
    name: function(value) {
      //view instanced needs to be stored in watch
      var vm = this;
      setTimeout(function() {

        console.log('watch called');
      }, 2000)
    },
    counter: function(value) {
      var vm = this;
      setTimeout(function() {
        vm.counter = 0;
        return vm.counter >= 37 ? 'Greater then 37 ' : 'Less then 37';
      }, 2000)
    }
  },
  methods: {
    calculate: function() {
      return this.name + " at " + this.email + " talking about " + this.subject + " saying " + this.message;
    }
  }
});

var vposts = new Vue({
  el: "#v-blog",

  data: function() {
    return {
      posts: [],
      messsage: '',
      wpAPI: 'http://boylecreations.com/wp-json/wp/v2/posts'
    }
  },

  created: function() {
    this.fetchPosts();
  },//,

//  computed:  {
//      reverseString: function(value) {

  //    }
//  },

  methods: {
    fetchPosts: function(response) {
        this.$http.get(this.wpAPI).then((response) => {


                //alert(response.status);
                this.posts = response.body;

                //return response.text();
                //this.$set('projects', data);

            }, (response) => {

                alert('this is not working');

        });
      }//,

      //filterJSON: function(data) {
      //  data.items.forEach(function(item))
      //}
    }
});


var proj = new Vue({
      el: '#v-projects',

      data: function() {
        return {
          projects: [],
          apiURL: '/api/projects'
        }
      },

      created: function() {

        console.log('Created');
        this.fetchProjects();

      },

      methods: {
          fetchProjects: function(response) {

            console.log('Fetch Init');


            this.$http.get(this.apiURL).then((response) => {

                    //alert(response.status);
                    this.projects = response.body;
                    //this.$set('projects', data);

                }, (response) => {

                    alert('this is not working');

            });
          },

          filterProjects: function() {

          },

          resetProjects: function() {

          }
      }
  });
