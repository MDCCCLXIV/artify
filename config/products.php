 

 <?php
    // 1. define variables for the product details from the database
    $product_name = $_POST["product_name"];
    $product_description = $_POST["product_description"];
    $price = $_POST["price"];
    $product_image = $_POST["product_image"];
    $product_category = $_POST["product_category"];

    // 2.open a database connection
    $connection = new mysqli("localhost", "obinchu", "@Ibrahim1864", "artify");
    // 3.check database connection
    if ($connection->connect_error) {
        die("Connection to the database failed" + $connection->connect_error);
    } else {
        // 4. write a query to manipulate the database.*Use the prepare method.
        $sqlquery = $connection->prepare("SELECT * FROM products");
        $sqlquery->execute();
        $result = $sqlquery->get_result();
        if ($result->num_rows > 0) {
            return $result;
        }
    }

    function products($product_name, $price, $product_image)
    {
        $productItem = "
           <div class=\"grid-content\">
                <img src=\"$product_image\">
                <p >$product_name</p>
                <div class=\"extras\">
                    <span class=\"stars\">
                        <i class=\"fa-solid fa-star\"></i>
                        <i class=\"fa-solid fa-star\"></i>
                        <i class=\"fa-solid fa-star\"></i>
                        <i class=\"fa-solid fa-star\"></i>

                    </span>

                    <h4>$price.00</h4>

                    <span class=\"cart\">
                        <i id=\"addCart\" class=\"fa-solid fa-cart-plus\"></i>
                    </span>
                </div>
                </div>
        ";
        echo $productItem;
    } 
    
    // class Products
    // {
    //     public $product_name;
    //     public $product_description;
    //     public $price;
    //     public $product_image;
    //     public $product_category;

    //     function __construct($product_name, $product_description, $price, $product_image, $product_category)
    //     {
    //         $this->product_name = $product_name;
    //         $this->product_description = $product_description;
    //         $this->price = $price;
    //         $this->product_image = $product_image;
    //         $this->product_category = $product_category;
    //     }

    //     function displayProducts($product_name, $price, $product_image)
    //     {
    //         $productItem = "
    //    <div class=\"grid-content\">
    //         <img src=\"$product_image\">
    //         <p >$product_name</p>
    //         <div class=\"extras\">
    //             <span class=\"stars\">
    //                 <i class=\"fa-solid fa-star\"></i>
    //                 <i class=\"fa-solid fa-star\"></i>
    //                 <i class=\"fa-solid fa-star\"></i>
    //                 <i class=\"fa-solid fa-star\"></i>

    //             </span>
                
    //             <h4>$price.00</h4>

    //             <span class=\"cart\">
    //                 <i id=\"addCart\" class=\"fa-solid fa-cart-plus\"></i>
    //             </span>
    //         </div>
    //         </div>
    // ";
    //         echo $productItem;
    //     }
    // }
    // $product = new Products($_POST["product_name"], $_POST["product_description"], $_POST["price"], $_POST["product_image"], $_POST["product_category"]);
