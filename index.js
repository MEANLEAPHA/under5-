




                         //sliderSale
        function home(){
        const con2=document.querySelector(".con2");
        const con3=document.querySelector(".con3");
        const con4=document.querySelector(".con4");
        const con1=document.querySelector(".con1");
        const h=document.getElementById('h');
        const t=document.getElementById('t');
        const n=document.getElementById('n');
        const d=document.getElementById('d');
        h.style.backgroundColor='grey';
        t.style.backgroundColor='black';
        n.style.backgroundColor='black';
        d.style.backgroundColor='black';
        con2.style.display='none';
        con3.style.display='none';
        con4.style.display='none';
        con1.style.display='block';
        };
        function trending(){
        const con1=document.querySelector(".con1");
        const con3=document.querySelector(".con3");
        const con4=document.querySelector(".con4");
        const con2=document.querySelector(".con2");
        const h=document.getElementById('h');
        const t=document.getElementById('t');
        const n=document.getElementById('n');
        const d=document.getElementById('d');
        h.style.backgroundColor='black';
        t.style.backgroundColor='grey';
        n.style.backgroundColor='black';
        d.style.backgroundColor='black';
        con1.style.display='none';
        con3.style.display='none';
        con4.style.display='none';
        con2.style.display='block';
        };
        function New(){
        const con1=document.querySelector(".con1");
        const con3=document.querySelector(".con3");
        const con4=document.querySelector(".con4");
        const con2=document.querySelector(".con2");
        const h=document.getElementById('h');
        const t=document.getElementById('t');
        const n=document.getElementById('n');
        const d=document.getElementById('d');
        h.style.backgroundColor='black';
        t.style.backgroundColor='black';
        n.style.backgroundColor='grey';
        d.style.backgroundColor='black';
        con1.style.display='none';
        con3.style.display='Block';
        con4.style.display='none';
        con2.style.display='none';
        };
        function discount(){
        const con1=document.querySelector(".con1");
        const con3=document.querySelector(".con3");
        const con4=document.querySelector(".con4");
        const con2=document.querySelector(".con2");
        const h=document.getElementById('h');
        const t=document.getElementById('t');
        const n=document.getElementById('n');
        const d=document.getElementById('d');
        h.style.backgroundColor='black';
        t.style.backgroundColor='black';
        n.style.backgroundColor='black';
        d.style.backgroundColor='grey';
        con1.style.display='none';
        con3.style.display='none';
        con4.style.display='block';
        con2.style.display='none';
        };
        function home2(){
            const con2=document.querySelector(".con2s");
            const con3=document.querySelector(".con3s");
            const con4=document.querySelector(".con4s");
            const con1=document.querySelector(".con1s");
            const h=document.getElementById('h2');
            const t=document.getElementById('t2');
            const n=document.getElementById('n2');
            const d=document.getElementById('d2');
            h.style.backgroundColor='grey';
            t.style.backgroundColor='black';
            n.style.backgroundColor='black';
            d.style.backgroundColor='black';
            con2.style.display='none';
            con3.style.display='none';
            con4.style.display='none';
            con1.style.display='block';
            };
            function trending2(){
            const con1=document.querySelector(".con1s");
            const con3=document.querySelector(".con3s");
            const con4=document.querySelector(".con4s");
            const con2=document.querySelector(".con2s");
            const h=document.getElementById('h2');
            const t=document.getElementById('t2');
            const n=document.getElementById('n2');
            const d=document.getElementById('d2');
            h.style.backgroundColor='black';
            t.style.backgroundColor='grey';
            n.style.backgroundColor='black';
            d.style.backgroundColor='black';
            con1.style.display='none';
            con3.style.display='none';
            con4.style.display='none';
            con2.style.display='block';
            };
            function New2(){
            const con1=document.querySelector(".con1s");
            const con3=document.querySelector(".con3s");
            const con4=document.querySelector(".con4s");
            const con2=document.querySelector(".con2s");
            const h=document.getElementById('h2');
            const t=document.getElementById('t2');
            const n=document.getElementById('n2');
            const d=document.getElementById('d2');
            h.style.backgroundColor='black';
            t.style.backgroundColor='black';
            n.style.backgroundColor='grey';
            d.style.backgroundColor='black';
            con1.style.display='none';
            con3.style.display='Block';
            con4.style.display='none';
            con2.style.display='none';
            };
            function discount2(){
            const con1=document.querySelector(".con1s");
            const con3=document.querySelector(".con3s");
            const con4=document.querySelector(".con4s");
            const con2=document.querySelector(".con2s");
            const h=document.getElementById('h2');
            const t=document.getElementById('t2');
            const n=document.getElementById('n2');
            const d=document.getElementById('d2');
            h.style.backgroundColor='black';
            t.style.backgroundColor='black';
            n.style.backgroundColor='black';
            d.style.backgroundColor='grey';
            con1.style.display='none';
            con3.style.display='none';
            con4.style.display='block';
            con2.style.display='none';
            };
                        //sliderAdd
            const slides = document.querySelectorAll(".slides img");
            let slideIndex = 0;
            let intervalid=null;
            document.addEventListener("DOMContentLoaded",initializeSlider);

    function initializeSlider(){
            if(slides.length>0){
          slides[slideIndex].classList.add("displaySlide");
            intervalid =setInterval(nextSlide , 5000);
        }
    };
            
            function showSlide(index){
                if(index>=slides.length){
                    slideIndex=0
                }
                else if(index<0){
                    slideIndex=slides.length-1;
                }
    slides.forEach(slide =>{
        slide.classList.remove("displaySlide");
    });
    slides[slideIndex].classList.add("displaySlide");

            };
            function nextSlide(){
    slideIndex++;
    showSlide(slideIndex);
            };











            document.getElementById("cartt").addEventListener('click',()=>{
                document.getElementById('forNav').style.display="block"
                document.querySelector('.fa-cart-shopping').style.color='yellow'
        });
        document.querySelector("#close").addEventListener('click',()=>{
                document.getElementById('forNav').style.display="none"
                document.querySelector('.fa-cart-shopping').style.color='black'
        })
//addToCartOperation
        let cartImages = [];
        const addToCartButtons = document.querySelectorAll('.add2cart2');
        addToCartButtons.forEach(button =>{
          button.addEventListener('click',()=>{
                const productCode=button.getAttribute('data-product-code');
                const productName=button.getAttribute('data-product-name');
                    const productPrice = parseFloat(button.getAttribute('data-product-price'));
                const productImage=button.getAttribute('data-product-image');
          
                addToCart(productCode,productName,productPrice,productImage);
            })
        });
        
        //AddToCartFunction
        function addToCart(code,name,price,image){
          
            var forAddToCart=document.getElementById('for-add-to-cart');
            var forAddToCarts = document.createElement('div');
            forAddToCarts.classList.add('for-add-to-cards');
            forAddToCarts.setAttribute('data-product-code', code);
            var img = document.createElement('img');
            img.src = image;
            img.alt = name;
          var text = document.createElement('div');
          text.classList.add('forText');
          text.innerHTML = `${name} PRICE: <span class="price">${price}</span>$`;
            var btnn=document.createElement('div');
        btnn.classList.add('forBtnNum');
            var numforbtn=document.createElement('div');
            numforbtn.classList.add('numforbtn');
            var prevNbtn=document.createElement('button');
            prevNbtn.classList.add('prevNbtn');
            prevNbtn.textContent=`<`;
            var numNbtn=document.createElement('div');
            numNbtn.classList.add('numNbtn');
            numNbtn.textContent=`1`;
            var nextNbtn=document.createElement('button');
            nextNbtn.classList.add('nextNbtn');
            nextNbtn.textContent=`>`;
            numforbtn.appendChild(prevNbtn);
            numforbtn.appendChild(numNbtn);
            numforbtn.appendChild(nextNbtn);
            btnn.appendChild(numforbtn);
        var x=document.createElement('h5');
        x.classList.add('forCancel');
        x.textContent=`Remove`;
            forAddToCarts.appendChild(img);
            forAddToCarts.appendChild(text);
            forAddToCarts.appendChild(btnn);
            forAddToCarts.appendChild(x);
        forAddToCart.append(forAddToCarts);
        //NextFunction
        nextNbtn.addEventListener('click', () => {
                let currentCount = parseInt(numNbtn.textContent);
                numNbtn.textContent = currentCount + 1;
                updateTotalPrice();
                updateTotalCost();
                updateShippingCost();
                updateStuffQuantity();
            });
            //NotiFunction
            function updateNotification() {
                    var forAddToCart = document.getElementById('for-add-to-cart');
                    var forNotfication = document.querySelector('.forNotfication');
                    if (forAddToCart.children.length > 0) {
                        forNotfication.style.display = 'block';
                    } else {
                        forNotfication.style.display = 'none';
                    }
                }
                //functionOperation
                updateTotalPrice();
                updateTotalCost();
                updateShippingCost();
                updateNotification();
                updateCartImages();
                updateStuffQuantity();
        
            //preFunction
            prevNbtn.addEventListener('click', () => {
                let currentCount = parseInt(numNbtn.textContent);
                if (currentCount > 1) {  
                    numNbtn.textContent = currentCount - 1;
                
                }
                updateTotalPrice();
                updateTotalCost();
                updateShippingCost();
                updateStuffQuantity();
            });
            //removeFunction
        x.addEventListener('click', () => {
                forAddToCart.removeChild(forAddToCarts);
                updateNotification();
                updateTotalPrice();
                updateTotalCost();
                updateShippingCost();
                updateCartImages();
                updateStuffQuantity();
        });
        function updateStuffQuantity() {
            const cartItems = document.querySelectorAll('.for-add-to-cards'); // Select all cart items
            let SQ = []; // Clear the array at the start of the function
            
            cartItems.forEach(item => {
                const productCode = item.getAttribute('data-product-code'); // Retrieve the product code directly
                const quantity = parseInt(item.querySelector('.numNbtn').textContent); // Get the quantity for each product
                let stuffandquantity = `${productCode}x${quantity}`; // Format the product code and quantity
                
                SQ.push(stuffandquantity); // Add to the array
            });
            
            const StuffwithQuantity = document.getElementById("stuff-quanity");
            StuffwithQuantity.value = SQ.join(','); // Join the array with commas and set it to the input value
        }
       //imageBuyer
        function updateCartImages() {
            const cartItems = document.querySelectorAll('.for-add-to-cards img');
            cartImages = [];
            cartItems.forEach(item => {
                cartImages.push(item.src); 
            });
            const imgBuynow = document.getElementById('stuff-image');
            imgBuynow.value = cartImages.join(',');     
        }
        }
        //ProductCostWithQuantity
        function updateTotalPrice() {
            const cartItems = document.querySelectorAll('.for-add-to-cards');
            const totalcost=document.getElementById('product-cost');
            let totalPrice = 0;
        
            cartItems.forEach(item => {
                const price = parseFloat(item.querySelector('.price').textContent); 
                const quantity = parseInt(item.querySelector('.numNbtn').textContent); 
                totalPrice += price * quantity;
                
            });
            totalcost.value=totalPrice;
            // Update total price display
            document.getElementById('total-prices').textContent = totalPrice.toFixed(2); 
        } 
        //Shipping Cost
        const shipCost = document.getElementById('shipCost');
        const stateSelect = document.getElementById('state');
        
        function updateShippingCost() {
            const selectedState = stateSelect.value;
            const proShipping=document.getElementById('product-shipping');
        
            if (selectedState === "SR") {
                shipCost.textContent = 5;
            } 
            else if(selectedState === "nothing"){
                shipCost.textContent = ` ?`;
            }
            else {
                shipCost.textContent = 3;
            }
            proShipping.value=shipCost.textContent;
        }
        stateSelect.addEventListener('change', updateShippingCost);
        updateShippingCost();


        //AlltotalCost
    const totalCost = document.getElementById('totalCost');

function updateTotalCost() {
    const proTotal=document.getElementById('product-total');
    const totalprices = document.getElementById('total-prices');
    const tpVal = parseFloat(totalprices.textContent) || 0;
    const shVal = parseFloat(shipCost.textContent) || 0;
    const calculate = tpVal + shVal;

    totalCost.textContent = ` ${calculate}`; 
    proTotal.value=totalCost.textContent;
}
updateTotalCost(); 
document.getElementById('for-add-to-cart').addEventListener('change', updateTotalCost);
stateSelect.addEventListener('change', updateTotalCost);
        
     
          
        // function sendToServer(id, name, price, image) {
        //     fetch('/add-to-cart', {
        //         method: 'POST',
        //         headers: {
        //             'Content-Type': 'application/json',
        //         },
        //         body: JSON.stringify({
        //             productId: id,
        //             productName: name,
        //             productPrice: price,
        //             productImage: image,
        //         }),
        //     })
        //     .then(response => response.json())
        //     .then(data => {
        //         console.log('Success:', data);
        //     })
        //     .catch(error => {
        //         console.error('Error:', error);
        //     });
        // }
        // ;



       