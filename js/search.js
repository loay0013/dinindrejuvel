export default class ser{
    constructor() {

        this.data ={
            password: 1717
        }

        this.rootElem = document.querySelector('.input-search');
        this.search = this.rootElem.querySelector('.search')

    }

    async init(){
        this.search.addEventListener('input',()=>{
            if ( this.search.value.length >= 3 ) {
                this.render();
            }
        })
        await this.render();

}
    async getData(){
        this.data.search =this.search.value;
        const response = await fetch('api.php', {
            method:"POST",
            body: JSON.stringify(this.data)
        });
        return  await response.json();
    }

}