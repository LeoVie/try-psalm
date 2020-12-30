<?php

declare(strict_types=1);

namespace LeoVie\TryPsalm\Readonly;

use PDO;

// --taint-analysis
class UserUpdater
{
    private function deleteUser(PDO $pdo, int $userId): void
    {
        $pdo->exec("DELETE FROM users WHERE user_id = $userId;");
    }

    public function foo(): void
    {
        $this->deleteUser(new PDO(''), $_GET["user_id"]); // Detected tainted SQL
    }
}