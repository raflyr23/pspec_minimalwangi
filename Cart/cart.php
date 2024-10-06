<?php
function addToCart($userId, $itemId, $quantity) {
    // Cek apakah item tersedia di stok (misalnya diambil dari database)
    $availableStock = 10;  // Stok produk

    // Logika menambahkan item ke keranjang
    if ($quantity <= $availableStock) {
        $cart = [
            'user-id' => $userId,
            'item-id' => $itemId,
            'quantity' => $quantity,
        ];
        return $cart;
    } else {
        echo "Error: Barang habis.";
    }
}

// Contoh penggunaan
$cart = addToCart(1, 101, 2);
print_r($cart);
?>
