<?php
function login($username, $password) {
    // Data pengguna (misalnya diambil dari database)
    $user = [
        'username' => 'rafly',
        'password' => 'password123',  // Password yang di-hash seharusnya
    ];

    // Logika login
    if ($username === $user['username'] && $password === $user['password']) {
        $loginStatus = 'Success';
    } else {
        $loginStatus = 'Failed';
    }

    return $loginStatus;
}

// Contoh penggunaan
$loginStatus = login('rafly', 'password123');
echo "Login Status: $loginStatus";
?>
