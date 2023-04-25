export default class blogs{
    constructor() {

        this.data ={
            password: 1717
        }

        this.rootElem = document.querySelector('.blogs');
        this.items = this.rootElem.querySelector('.items');

    }

    async init(){
        await this.render();
    }
    async render() {
        const data = await this.getData();

        const row =document.createElement('div');
        row.classList.add('row','g-4');

        for(const  items of data){
            const col = document.createElement('div');
            col.classList.add('col-12', 'col-md-6', 'rounded-4','mb-5');

            col.innerHTML= `
           
            <div class="col-12">
            <div class="card h-100 shadow border-0">
            <a  href="blog.php?BlogId=${items.BlogId}" class="text-decoration-none text-dark">
               <div>
                    <img src ="uploads/${items.blogBillede}" class="card-img-top img-fluid obj1" alt="">
               </div>
                       
          
                <div class="bg-box-p rounded-bottom">
                     <h2 class="p-2 text-light text-center">${items.blogOverskrift}</h2> 
                     <p class="text-light text-center">${items.blogDato}</p>
                     <p class="text-light text-center">${items.blogKortTekst}</p>
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
        const response = await fetch('api.php', {
            method:"POST",
            body: JSON.stringify(this.data)
        });
        return  await response.json();
    }
}