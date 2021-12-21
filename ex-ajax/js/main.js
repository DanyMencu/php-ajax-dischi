const app = new Vue({
    el: '#app',
    data: {
        albums: null,
    },
    methods: {
        getAlbums() {
            axios.get('http://localhost/php-ajax-dischi/ex-ajax/scripts/database.php')
                .then(response => {
                this.albums = response.data;
                })
                .catch(err => {
                console.log(err);
            })
        },
    },
});