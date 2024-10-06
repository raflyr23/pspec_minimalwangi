<?php
function checkout($userId, $totalAmount) {
    // Data user (misalnya diambil dari database)
    $user = [
        'id' => $userId,
        'balance' => 500000,  // Saldo user
    ];

    // Variabel status pesanan dan pembayaran
    $orderStatus = '';
    $paymentStatus = '';

    // Logika checkout
    if ($user['balance'] >= $totalAmount) {
        $orderStatus = 'Confirmed';
        $paymentStatus = 'Paid';
        $user['balance'] -= $totalAmount;  // Kurangi saldo user
    } else {
        echo "Error: Saldo tidak mencukupi.";
    }

    // Kembalikan status pesanan dan pembayaran
    return [$orderStatus, $paymentStatus];
}

// Contoh penggunaan
list($orderStatus, $paymentStatus) = checkout(1, 300000);
echo "Status Pesanan: $orderStatus, Status Pembayaran: $paymentStatus";
?>
