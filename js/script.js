const App = new Vue(
    {
      el: '#app',
      data: {
        autoUsate: [],
        carsFiltered: [],
        marca: 'all',
        color: 'all',
      },
      created() {
        axios.get('http://localhost/php-snacks-b1/server/controller.php').then((result) => {
          this.autoUsate = result.data.results;
          this.carsFiltered = this.autoUsate;
          console.log(this.autoUsate);
          console.log(this.carsFiltered);
          console.log(result);
        }).catch((error) => { console.log(error); });
      },
      methods: {
        filter() {
          if (this.color != 'all' && this.marca != 'all') {
              this.carsFiltered = this.autoUsate.filter((element) => {
                return element.colore == this.color && element.marca == this.marca;
              });
          } else if (this.color == 'all' && this.marca != 'all') {
              this.carsFiltered = this.autoUsate.filter((element) => {
                  return element.marca == this.marca;
              });
          } else if (this.color != 'all' && this.marca == 'all') {
              this.carsFiltered = this.autoUsate.filter((element) => {
                  console.log(this.color);
                  return element.colore == this.color;
              });
          } else {
              this.carsFiltered = this.autoUsate;
          }
        }
      },
    }
  );
