<?php

namespace App\Traits;

use PDO;

trait Findable
{
    
    /**
     * @return array
     */
    public static function findAll(): array
    {
        $query = sprintf(
            'SELECT * FROM %s',
            self::getTable()
        );
        $stmt  = self::$db->query($query);
        
        $stmt->setFetchMode(PDO::FETCH_CLASS, __CLASS__);
        
        return $stmt->fetchAll();
    }
    
    /**
     * @param int $id
     *
     * @return null
     */
    public static function find(int $id): ?self
    {
        $query = sprintf(
            'SELECT * FROM %s WHERE id=:id',
            self::getTable()
        );
        $stmt  = self::$db->prepare($query);
        
        $stmt->execute([':id' => $id]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, __CLASS__);
        
        $result = $stmt->fetch();
        
        return $result === false ? null : $result;
    }
}
