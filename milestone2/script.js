console.log('Vue Ok', Vue);

Vue.config.devtools = true;

const root = new Vue ({
    el: '#root',
    data:{
        albums:[],
    },
    mounted(){
        axios.get('http://localhost/php-ajax-dischi/milestone2/data.php').then(res =>{
            this.albums = res.data;
        }).catch(err =>{console.error(err)})
    }

})


