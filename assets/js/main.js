Vue.config.devtools = true;

var app = new Vue({
  el: '#root',
  data: {
    disc: [],
    searchArtist: "",
    selectGenre: "",
  },
  created() {
      axios.get('http://localhost/php-ajax-dischi/call.php').then((response) => {
        this.disc = response.data;
        });
    },
  methods: {
  }
});
