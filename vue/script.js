Vue.config.devtools = true; 


const app = new Vue({
    el:  '#root',
    data: {
        discs: [],
        genre: '',
    },
    methods:{
        fetchDiscs(){
            axios.get(`../api/disc?genre=${this.genre}`).then(res => {
                this.discs = res.data;
            })
        }     
    },
    mounted(){
        this.fetchDiscs();
    }
}) 