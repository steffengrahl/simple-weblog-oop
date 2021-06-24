<?php

namespace App\Traits;

use PDOStatement;

trait Deletable
{
    public function delete(): void
    {
        $query = sprintf(
            'DELETE FROM %s WHERE id=:id',
            self::getTable()
        );
        
        /** @var PDOStatement $stmt */
        $stmt  = self::$db->prepare($query);
        $stmt->execute([':id' => $this->id]);
        
        $this->id = 0;
    }
}
