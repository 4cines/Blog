export let renderComments = () => {

    let addComments = document.querySelectorAll(".add-comments");

    document.addEventListener("renderComments",( event =>{
        renderComments();
    }), {once: true});

    addComments.forEach(addComments => {

        addComments.addEventListener("click", (event) => {
            
            let sendPostRequest = async () => { // llamada async va con un await
                
                let data = {}; //JSON llamada al servidor enviando datos
                data["route"] = 'addComment';
                data["post"] = addProduct.dataset.post;
    
                let response = await fetch('web.php', {
                    headers: {
                        'Accept': 'application/json',
                    },
                    method: 'POST',
                    body: JSON.stringify(data)
                })
                .then(response => {
                
                    if (!response.ok) throw response;
    
                    return response.json();
                })
                .then(json => {

                    let comments = addCommentsLayout.cloneNode(true);
    
                    comments.querySelector('.add-comments').dataset.ticket = json.newProduct.id;
                    comments.querySelector('.name').src =  json.newProduct.imagen_url;
                    comments.querySelector('.email').innerHTML =  json.newProduct.categoria;
                    comments.querySelector('.comment').innerHTML =  json.newProduct.nombre;
                    product.classList.remove('d-none', 'add-product-layout');
    
    
                    if(ticketContainer.querySelector('.no-products')){
                        ticketContainer.querySelector('.no-products').classList.add('d-none');
                        ticketContainer.appendChild(product);
                    }else{
                        ticketContainer.appendChild(product);
                    }
    
                    document.dispatchEvent(new CustomEvent('renderTicket'));
                })
                .catch ( error =>  {
                    console.log(JSON.stringify(error));
                });
            };
    
            sendPostRequest();
        }); 
    });
 
};