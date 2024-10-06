<?php
function viewProductDetail($itemId) {
    // Data produk (misalnya diambil dari database)
    $product = [
        'item-id' => 101,
        'name' => 'Parfum A',
        'price' => 250000,
        'description' => 'Parfum dengan aroma bunga.',
    ];

    // Logika menampilkan detail produk
    if ($itemId === $product['item-id']) {
        return $product;
    } else {
        echo "Error: Produk tidak ditemukan.";
    }
}

// Contoh penggunaan
$productDetail = viewProductDetail(101);
print_r($productDetail);
?>
