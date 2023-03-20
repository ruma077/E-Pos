<!Doctype html>
<html>

   <?php include("head.php") ?>
   <body class="hold-transition  sidebar-mini" style="background-color:#f2f7fc;">
      <div class="wrapper">
         <?php include("head_nav.php") ?>
         <?php include("side_dashboard.php") ?>
          
                   <link href 	= "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
                   <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
                   <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
                   <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap"
      rel="stylesheet"
    />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css" />

    <style>

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  border: none;
  outline: none;
  font-family: "Poppins", sans-serif;
}
body {
  background-color: #f5f8ff;
}
.wrapper {
  width: 95%;
  margin: 0 auto;
}
#search-container {
  margin: 1em 0;
}
#search-container input {
  background-color: transparent;
  width: 40%;
  border-bottom: 2px solid #110f29;
  padding: 1em 0.3em;
}
#search-container input:focus {
  border-bottom-color: #6759ff;
}
#search-container button {
  padding: 1em 2em;
  margin-left: 1em;
  background-color: #6759ff;
  color: #ffffff;
  border-radius: 5px;
  margin-top: 0.5em;
}
.button-value {
  border: 2px solid #6759ff;
  padding: 1em 1em;
  border-radius: 3em;
  background-color: transparent;
  color: #6759ff;
  cursor: pointer;
}
.active {
  background-color: #6759ff;
  color: #ffffff;
}
#products {
  display: grid;
  grid-template-columns: auto auto auto;
  grid-column-gap: 1.5em;
  padding: 2em 0;
  
}
.card {
  background-color: #ffffff;
  max-width: 18em;
  margin-top: 1em;
  padding: 1em;
  border-radius: 10px;
  box-shadow: 1em 2em 2.5em rgba(1, 2, 68, 0.08);
}
.image-container {
  text-align: center;
}
img {
  max-width: 100%;
  object-fit: contain;
  height: 15em;
}
.container {
  padding-top: 1em;
  color: #110f29;
}
.container h5 {
  font-weight: 500;
}
.hide {
  display: none;
}
@media screen and (max-width: 720px) {
  img {
    max-width: 100%;
    object-fit: contain;
    height: 10em;
  }
  .card {
    max-width: 10em;
    margin-top: 1em;
  }
  #products {
    grid-template-columns: auto auto;
    grid-column-gap: 1em;
  }
}
   </style>
                  
                   <div class="content-wrapper">
                         <section class="content-header">
                               <div class="container-fluid">        
                                  <div class="wrapper">
                                      <div id="search-container">
                                        <input
                                          type="search"
                                          id="search-input"
                                          placeholder="Search product name here.."
                                        />
                                        <button id="search">Search</button>
                                      </div>
                                    </div>
                              </div>
                            </section>
                    <div>
                    <div id="products"  style="overflow-x: hidden;overflow-y: auto;max-height: 500px;"></div>
    </div>
    <script>

let products = {
data: [
{
productName: "Basmati Rice",
category: "rice",
price: "30",
image: "assets/images/rice1.jpg",
},
{
productName: "Olay Cream(cusmetic)",
category: "cusmetic",
price: "49",
image: "assets/images/cusmetic.jpg",
},
{
productName: "Suger",
category: "suger",
price: "99",
image: "assets/images/suger.jpg",
},
{
productName: "Miniket Rice",
category: "rice",
price: "29",
image: "assets/images/rice2.jpg",
},
{
productName: "Salt",
category: "salt",
price: "129",
image: "assets/images/salt.jpg",
},
{
productName: "Four Season Basmati Rice ",
category: "rice",
price: "89",
image: "assets/images/rice4.jpg",
},
{
productName: "Dove Hair shampo(cusmetic)",
category: "cusmetic",
price: "189",
image: "assets/images/cusmetic2.jpg",
},
{
productName: "National Basmati Rice",
category: "rice",
price: "49",
image: "assets/images/rice3.jpg",
},
{
productName: "Mixed Dal",
category: "dal",
price: "49",
image: "assets/images/mix dal2.jpg",
},
{
productName: "Masoor Dal",
category: "dal",
price: "49",
image: "assets/images/dal3.jpg",
},
{
productName: "Moong Dal",
category: "dal",
price: "49",
image: "assets/images/dal4.jpg",
},
{
productName: "Boot Dal",
category: "dal",
price: "49",
image: "assets/images/Boot-dal-01.jpg",
},
],
};

for (let i of products.data) {
//Create Card
let card = document.createElement("div");
//Card should have category and should stay hidden initially
card.classList.add("card", i.category, "hide");
//image div
let imgContainer = document.createElement("div");
imgContainer.classList.add("image-container");
//img tag
let image = document.createElement("img");
image.setAttribute("src", i.image);
imgContainer.appendChild(image);
card.appendChild(imgContainer);
//container
let container = document.createElement("div");
container.classList.add("container");
//product name
let name = document.createElement("h5");
name.classList.add("product-name");
name.innerText = i.productName.toUpperCase();
container.appendChild(name);
//price
let price = document.createElement("h6");
price.innerText = "$" + i.price;
container.appendChild(price);

card.appendChild(container);
document.getElementById("products").appendChild(card);
}

//parameter passed from button (Parameter same as category)
function filterProduct(value) {
//Button class code
let buttons = document.querySelectorAll(".button-value");
buttons.forEach((button) => {
//check if value equals innerText
if (value.toUpperCase() == button.innerText.toUpperCase()) {
button.classList.add("active");
} else {
button.classList.remove("active");
}
});

//select all cards
let elements = document.querySelectorAll(".card");
//loop through all cards
elements.forEach((element) => {
//display all cards on 'all' button click
if (value == "all") {
element.classList.remove("hide");
} else {
//Check if element contains category class
if (element.classList.contains(value)) {
  //display element based on category
  element.classList.remove("hide");
} else {
  //hide other elements
  element.classList.add("hide");
}
}
});
}

//Search button click
document.getElementById("search").addEventListener("click", () => {
//initializations
let searchInput = document.getElementById("search-input").value;
let elements = document.querySelectorAll(".product-name");
let cards = document.querySelectorAll(".card");

//loop through all elements
elements.forEach((element, index) => {
//check if text includes the search value
if (element.innerText.includes(searchInput.toUpperCase())) {
//display matching card
cards[index].classList.remove("hide");
} else {
//hide others
cards[index].classList.add("hide");
}
});
});

//Initially display all products
window.onload = () => {
filterProduct("all");
};
</script>

                            
                               <!-- Product Display -->
                                                <!-- Product Filter-->
                                
                                  
                        
                                    
                                    
                    
                     
    </body>
</html>