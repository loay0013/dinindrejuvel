export default class blogs{
    constructor() {

        this.data ={
            password: 1717
        }

        this.rootElem = document.querySelector('.blogs');
        this.items = this.rootElem.querySelector('.items');
        this.filter = this.rootElem.querySelector('.filter');
        this.KategorierSearchId=this.filter.querySelector('.KategorierSearchId');
    }

    async init(){

        this.KategorierSearchId.addEventListener('input',()=>{
            this.render();
        })

        await this.render();
    }
    async render() {
        const data = await this.getData();

        const row =document.createElement('div');
        row.classList.add('row','g-4');

        for(const  items of data){
            const col = document.createElement('div');
            col.classList.add('col-12', 'rounded-4','mb-5');

            col.innerHTML= `
           
            <div class="col-12 container">
            <div class=" flex-row border-0">
            <a  href="blog.php?BlogId=${items.BlogId}" class="text-decoration-none text-dark d-md-flex ">
               <div>
                    <img src ="uploads/${items.blogBillede}" class="flex-md-row rounded-2 wh-img"  alt="${items.blogSeoAlt}">
               </div>
                       
          
                <div class="rounded-bottom d-flex flex-column ">
                     <h2 class="text-Blå2 mt-1 mx-4 ">${items.blogOverskrift}</h2> 
                     <p class="text-Blå2 mt-2 mx-4">${items.blogDato}</p>
                     <p class="text-Blå2 mt-5 mx-4">${items.blogKortTekst}</p>
                     <button class="rounded-5 bg-Gul text-Beige border-0 d-flex w-text mx-4 mt-4 p-1 px-4">Læse mere
                     <img class="pt-1 ps-2" src="img/arrowup 2.svg"  alt="arrowup">
                     </button>
                </div>
            </div>
            </a>
                                       
          `;
            row.appendChild(col);
        }
        this.items.innerHTML='';
        this.items.appendChild(row);
    }




    async getData(){
        this.data.KategorierSearchId = this.KategorierSearchId.value;
        const response = await fetch('api.php', {
            method:"POST",
            body: JSON.stringify(this.data)
        });
        return  await response.json();
    }
}