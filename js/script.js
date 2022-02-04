const App = new Vue(
    {
      el: '#app',
      data: {
        autoUsate: []
      },
      created() {
        axios.get('http://localhost/php-snacks-b1/server/controller.php').then((result) => {
          this.autoUsate = result.data.results;
          console.log(this.autoUsate);
          console.log(result);
        }).catch((error) => { console.log(error); });
      }
    }
  );
