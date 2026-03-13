let products = {
  data: [
    {
      productName: "ingredients: chicken, lot of veggies , sprouts, Avacado",
      category: "Non-Veg",
      price: "Calories :710 , Carbs : 68g , Fat : 21g , Protein : 27g",
      image: "nv4.jpg",
    },
    {
      productName: "ingredients: Cabbage , black channa , mint",
      category: "Veg",
      price: "Calories : 720 , Carbs : 79.4g , Fat : 15g , Protein : 15g",
      image: "veg4.jpg",
    },
    {
      productName: "ingredients: toor dal, carrot , beans, pineapple , raw mango",
      category: "Vegan",
      price: "Calories :788 , Carbs : 86 , Fat : 17.5g , Protein : 14.5g",
      image: "vn2.jpg",
    },
    {
      productName: "ingredients: beetroot, egg, broad beans , spinach",
      category: "Non-Veg",
      price: "Calories : 790 , Carbs : 81g , Fat : 17.4g , Protein : 28.5g",
      image: "nv1.jpg",
    },
    {
      productName: "ingredients: pineapple, purple cabbage, curd",
      category: "Veg",
      price: "Calories : 723 , Carbs : 81g , Fat : 14.5g , Protein : 12g",
      image: "veg3.jpg",
    },
    {
      productName: "ingredients: Spinach , chana , kiwi",
      category: "Veg",
      price: "Calories : 647 , Carbs : 71.4g , Fat : 14.5g , Protein : 19g",
      image: "veg2.jpg",
    },
    {
      productName: "ingredients: tindora, Ridge gourd, strawberry",
      category: "Vegan",
      price: "Calories :690 , Carbs : 79g , Fat : 15.6g , Protein : 18g",
      image: "vn1.jpg",
    },
    {
      productName: "Ingredients: Brocoli, cauliflower, soya chunks",
      category: "Veg",
      price: "Calories :843 , Carbs : 90g , Fat : 19g , Protein : 16g",
      image: "veg1.jpg",
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
  price.innerText = "" + i.price;
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
