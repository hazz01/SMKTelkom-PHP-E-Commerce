<?php
$product1_price = 600;
$product2_price = 800;

$product1_dicount = false;
$product2_dicount = true;

function diskon($price){
    return $price * 0.8;
}

$product1_final_price = diskon($product1_price);
$product2_final_price = diskon($product2_price);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="dist/styles.css" rel="stylesheet">
    <title>E-Commerce Laptop</title>
</head>
<body class="bg-gray-100">


    <div class="bg-white">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <div class="text-center">
                <p class="mt-1 text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl">Website E-Commerce</p>
                <p class="max-w-xl mt-5 mx-auto text-xl text-gray-500">Cari laptop dengan harga murah kualias mewah</p>
            </div>
        </div>
    </div>

    <div class="bg-gray-100">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Our Products</h2>
            <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                <!-- Produk 1 -->
                <div class="group relative" onclick="openModal(<?php echo $product1_final_price; ?>)">
                    <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                        <img src="https://via.placeholder.com/300" alt="Product Image" class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                    </div>
                    <div class="mt-4 flex justify-between">
                        <div>
                            <h3 class="text-sm text-gray-700">
                                <a href="#">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    Asus Tuff Gaming
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">laptop Gemink Full RGB </p>
                        </div>
                        <p class="text-sm font-medium text-gray-900">$<?php echo $product1_price; ?></p>
                    </div>
                </div>

                <!-- Produk 2 -->
                <div class="group relative" onclick="openModal(<?php echo $product2_final_price; ?>)">
                    <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                        <img src="https://via.placeholder.com/300" alt="Product Image" class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                    </div>
                    <div class="mt-4 flex justify-between">
                        <div>
                            <h3 class="text-sm text-gray-700">
                                <a href="#">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    Macbook Pro
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">Laptop For Productivity</p>
                        </div>
                        <p class="text-sm font-medium text-gray-900">$<?php echo $product2_price; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="checkoutModal" class="fixed inset-0 flex items-center justify-center bg-gray-500 bg-opacity-75 z-50 hidden">
        <div class="bg-white p-6 rounded-lg shadow-lg max-w-sm w-full">
            <h3 class="text-lg font-semibold mb-4">Checkout</h3>
            <p id="modalPrice" class="text-xl font-bold mb-4">Price: $0.00</p>
            <p></p>
            <button onclick="closeModal()" class="bg-blue-500 text-white px-4 py-2 rounded-md">Close</button>
        </div>
    </div>

    <script>
        function openModal(price) {
            document.getElementById('modalPrice').innerText = 'Price: $' + price;
            document.getElementById('checkoutModal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('checkoutModal').classList.add('hidden');
        }
    </script>
</body>
</html>