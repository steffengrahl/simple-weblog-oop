<?php

namespace App\Entity;

use App\Traits\ActiveRecordable;
use App\Traits\Findable;
use App\Traits\Persistable;

class Tag extends BaseEntity
{
    use ActiveRecordable;
    use Findable;
    use Persistable;
    
    private static $table = 'tags';
    
    /**
     * @var string|null
     */
    private $name;
    
    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    
    /**
     * @param string $name
     *
     * @return Tag
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        
        return $this;
    }
}