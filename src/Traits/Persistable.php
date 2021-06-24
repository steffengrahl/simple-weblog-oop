<?php

namespace App\Traits;

trait Persistable
{
    public function save(): void
    {
        if ($this->id > 0) {
            $this->update();
        } else {
            $this->insert();
        }
    }
    
    private function update(): void
    {
        $attribute   = $this->toArray(false);
        $schluessel  = array_keys($attribute);
        $platzhalter = array_map(
            static function (string $wert) {
                return $wert . '=:' . $wert;
            },
            $schluessel
        );
        $daten       = [
            self::getTable(),
            implode(', ', $platzhalter),
        ];
        $query       = vsprintf(
            'UPDATE %s SET %s WHERE id=:id',
            $daten
        );
        
        $stmt = self::$db->prepare($query);
        $stmt->execute($this->toArray());
    }
    
    private function insert(): void
    {
        $attribute   = $this->toArray(false);
        $schluessel  = array_keys($attribute);
        $platzhalter = array_map(
            static function ($wert) {
                return ':' . $wert;
            },
            $schluessel
        );
        $daten       = [
            self::getTable(),
            implode(', ', $schluessel),
            implode(', ', $platzhalter),
        ];
        $query       = vsprintf(
            'INSERT INTO %s(%s) VALUES(%s)',
            $daten
        );
        
        $stmt = self::$db->prepare($query);
        $stmt->execute($attribute);
        
        $this->id = self::$db->lastInsertId();
    }
}
