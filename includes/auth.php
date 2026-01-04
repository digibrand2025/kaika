<?php
/**
 * Authentication Functions
 */

/**
 * Verify admin login credentials
 */

function verifyLogin($pdo, $username, $password) {
    $stmt = $pdo->prepare("SELECT * FROM admin_users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();
    
    if ($user && password_verify($password, $user['password'])) {
        // Update last login
        $updateStmt = $pdo->prepare("UPDATE admin_users SET last_login = NOW() WHERE id = ?");
        $updateStmt->execute([$user['id']]);
        
        // Set session variables
        $_SESSION['admin_id'] = $user['id'];
        $_SESSION['admin_username'] = $user['username'];
        $_SESSION['admin_email'] = $user['email'];
        $_SESSION['login_time'] = time();
        
        return true;
    }
    
    return false;
}

/**
 * Logout admin user
 */
function logout() {
    session_unset();
    session_destroy();
    header('Location: index.php');
    exit;
}

/**
 * Check session timeout
 */
function checkSessionTimeout() {
    if (isset($_SESSION['login_time'])) {
        $elapsed = time() - $_SESSION['login_time'];
        if ($elapsed > ADMIN_SESSION_TIMEOUT) {
            logout();
        }
        // Update login time
        $_SESSION['login_time'] = time();
    }
}
?>