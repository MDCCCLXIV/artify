<script type="text/javascript">
    $(document).ready(() => {
        $('.hamburger').on("click", () => {
            $(".hamburger").toggleClass("active")
            $(".menuitems").toggleClass("active")
        });
        $('[class=menuItems]').on('click', () => {
            $(".hamburger").toggleClass("active");
            $(".menuitems").toggleClass("active")
        });

        // ADDING TO CART

        const cart = [];
        $(".cart").on('click', function() {
            addToCart(($(".cart").index(this)))
            // console.log("clicked");

        })

        function addToCart(a) {
            cart.push({
                ...newProducts[a]
            })
            updateButton()

        }

        function updateButton() {
            $(".notification").html(function() {
                return (
                    `${cart.length}
                  `
                )
            })
        }
        updateButton()

        function displayCart(a) {
            let total = 0;
            let totalItemPrice = 0;

            if (cart.length == 0) {
                $(".sec-cart").html(function() {
                    $("#total").html("$0.00");
                    return (`<div class="empty-cart">
                        <img src="https://img.icons8.com/cute-clipart/64/null/shopping-cart.png"/>
                        <h2>Your Cart is Empty !!</h2>
                        <h3>Browse our Categories to Discover More</h3>
                        <a href="./landingpage.html#sec-2"><button>MARKETPLACE</button></a>
                    </div>`)
                })
            } else {
                return (
                    `    <div class="full-cart">
                             <div class="cart-product">

                                 <!-- refer to js for flesh -->

                             </div>

                             <div class="cart-summary">
                                     <!-- refer js for flesh -->
                                  </div>


        </div>
                    `
                );
                $(".cart-product").html(cart.map(function(item) {
                    let {
                        name,
                        price,
                        image
                    } = item;


                    return (
                        `       
                         
                         <div class="cart-item">

                            <div class="item-des">
                                <div class="item-image"><img src="${image}"></div>
                                <div class="item-name">${name}</div>
                            </div>
                            
                            
                            <div class="item-extras">
                                <button class="delete"><i class="fa-solid fa-trash"></i></button>
                                <button class="decrement"><i class="fa-solid fa-square-minus"></i></button>
                                <span class="counter">1</span>
                                <button class="increment"><i class="fa-solid fa-square-plus"></i></button>
                                <div class="item-price">${price}</div>
                            </div>
                </div>
                `
                    )

                }).join(''))


            }



            let value = $(".counter").html()

            function updateProductPrice() {
                cart.map(function(item) {
                    let {
                        price
                    } = item;
                    totalItemPrice = value * price
                })
                $(".item-price").html("$" + totalItemPrice + ".00")

            }

            function updateTotalPrice() {
                cart.map((item) => {
                    let allTotal = 0;
                    let totalItemPrice = 0;
                    let {
                        price
                    } = item
                    total = total + price
                    allTotal = totalItemPrice + total
                    $("#total").html("$" + allTotal + ".00")
                })

            }


            updateProductPrice()
            updateTotalPrice()

            function increment() {
                if (value == value) {
                    value++
                }
                $(".counter").html(function() {
                    return (value)


                })
                updateProductPrice()
                updateTotalPrice()

                console.log(value);
            }

            function decrement(a) {
                if (value > 1) {
                    value--
                }
                $(".counter").html(value)
                console.log(value);
                updateProductPrice()
                updateTotalPrice()
            }
            $(".increment").on("click", function() {
                increment()
            })
            $(".decrement").on("click", function() {
                decrement()

            })

            function removeFromCart(a) {
                cart.splice(a, 1)
                displayCart()
                updateButton()


            }
            $(".delete").on('click', function() {
                removeFromCart($(".delete").index(this))
                console.log("clicked")
            })


        }
        displayCart()




    });
</script>