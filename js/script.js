const App = new Vue(
{
    el: '#app',
    data: {
        discs: [],
    },
    created() {
        axios.get('http://localhost:81/php-ajax-dischi/server/controller-api.php').then((result) => {
        this.discs = result.data.results;
        }).catch((error) => { console.log(error); });
    }
    }
);