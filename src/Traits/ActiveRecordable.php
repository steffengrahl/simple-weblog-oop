<?php

namespace App\Traits;

use Exception;
use PDO;

trait ActiveRecordable
{
    /**
     * @var PDO
     */
    private static $db;
    
    public static function connectToDb(PDO $db): void
    {
        self::$db = $db;
    }
    
    /**
     * @throws Exception
     */
    public static function getTable(): string
    {
        if (empty(self::$db)) {
            throw new Exception('Kein DB Objekt!');
        }
        
        $table = strtolower(__CLASS__);
        
        if (!empty(self::$table)) {
            $table = self::$table;
        }
        
        return $table;
    }
    
    /**
     * @param bool $withId
     *
     * @return array
     */
    public function toArray(bool $withId = true): array
    {
        $attributes = get_object_vars($this);
        
        if ($withId === false) {
            unset($attributes['id']);
        }
        
        return $attributes;
    }
}
