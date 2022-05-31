// alert("testing");
let totalPrice = 0;
function add_to_cart(pid, pname, price){
    let cart = localStorage.getItem("cart");
    if(cart == null){
        // no cart yet
        let products =[];
        let product = { productId: pid, productname:pname, productPrice:price ,pQuantity: 1}
        products.push(product);
        localStorage.setItem("cart",JSON.stringify(products));
    }
    else{
        //cart is already presenty
        let pcart = JSON.parse(cart);
        let oldproduct = pcart.find((item)=> item.productId == pid);
        if(oldproduct){
           oldproduct.pQuantity = oldproduct.pQuantity + 1
           pcart.map((item)=>{
               if (item.productId == oldproduct.productId){
                   item.pQuantity = oldproduct.pQuantity;
               }
           }
           )
           localStorage.setItem("cart",JSON.stringify(pcart));
        }
        else{
            let product = { productId: pid, productname:pname, productPrice:price,pQuantity:1}
            pcart.push(product);
            localStorage.setItem("cart",JSON.stringify(pcart));

        }
    }
document.location.reload(true);

}
function deleteItemFromCart(pid){
    let cart = JSON.parse(localStorage.getItem("cart"));
    let newcart = cart.filter((item)=> item.productId != pid);
    localStorage.setItem("cart",JSON.stringify(newcart));
    updatecart();
}
 // update cart
 function updatecart(){
     let cartSting = localStorage.getItem("cart");
     let cart = JSON.parse(cartSting);
      if(cart == null || cart.length == 0){
          console.log(" crt isa emmty");
          $(".cart-list").html("( 0 )");
          $(".cart-body").html("<h3> cart is empty </h3>");
          $(".checkout-btn").addClass('disabled');

      }
      else{
 // if the cart have items
 $(".cart-list").html(`( ${cart.length} )`);
  let table= `
            <table class="table">
            <thead class="thead-light">
                <tr class ="">
                    <th>Product name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total price</th>
                    <th>Action</th>
                </tr>
                </thead>
  `;

  cart.map((item)=>{
    table += `
    <tr>
    <td>${item.productname}</td>
    <td>${item.productPrice}</td>
    <td>${item.pQuantity}</td>
    <td>${item.pQuantity*item.productPrice}</td>
    <td><button class="btn-danger" onclick="deleteItemFromCart(${item.productId})">Remove</botton></td>
    </tr>
    `
    totalPrice+= item.productPrice*item.pQuantity;

})


  table += `
  <tr> <td colspan='5' class='text-right '> <h4>Total Price : ${totalPrice}</h4></td></tr>
  </table>`
 $(".cart-body").html(table);
 $(".checkout-btn").removeClass('disabled');
 $(".total-amount").html(` Total amount:<h1 id="totalprice"> ${totalPrice}</h1>`);
 $(".order-id").html(` Order Id : `);


      }
 }

$(document).ready(function(){
    updatecart();
});
function goTocheckout(){
   window.location = "checkout.php";
}
let cart = localStorage.getItem("cart");
function savedata(){
   

}
function refertoproduct(){
    window.location = "products.php";
}
//


