<?php
function submitReview($userId, $itemId, $reviewText) {
    // Cek apakah produk ada di database (misalnya diambil dari database)
    $productExists = true;  // Misalnya produk ada

    // Logika submit review
    if ($productExists) {
        $review = [
            'user-id' => $userId,
            'item-id' => $itemId,
            'review-text' => $reviewText,
        ];
        return $review;
    } else {
        echo "Error: Produk tidak ditemukan.";
    }
}

// Contoh penggunaan
$review = submitReview(1, 101, "Parfum ini sangat wangi dan tahan lama.");
print_r($review);
?>
