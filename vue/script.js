Vue.config.devtools = true; 


const app = new Vue({
    el:  '#root',
    data: {
        discs: [],
        search: '',
        genre: '',
    },
    mounted(){
        axios.get('../api/disc/index.php').then(res => {
            this.discs = res.data;
        })
    }
})