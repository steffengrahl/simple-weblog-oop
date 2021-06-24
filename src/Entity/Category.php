<?php

namespace App\Entity;

use App\Traits\ActiveRecordable;
use App\Traits\Deletable;
use App\Traits\Findable;
use App\Traits\Persistable;

class Category extends BaseEntity
{
    use ActiveRecordable;
    use Deletable;
    use Findable;
    use Persistable;
    
    private static $table = 'categories';
    
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
     * @return Category
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        
        return $this;
    }
}
