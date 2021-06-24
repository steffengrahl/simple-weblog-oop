<?php

namespace App\Entity;

use DateTime;
use Exception;

class BaseEntity
{
    /**
     * @var int
     */
    protected $id = 0;
    
    /**
     * @var string
     */
    protected $created_at;
    
    /**
     * @var string
     */
    protected $updated_at;
    
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    
    /**
     * @return DateTime
     * @throws Exception
     */
    public function getCreatedAt(): DateTime
    {
        return new DateTime($this->created_at);
    }
    
    /**
     * @param DateTime $created_at
     */
    public function setCreatedAt(DateTime $created_at): self
    {
        $this->created_at = $created_at->format('c');
        
        return $this;
    }
    
    /**
     * @return DateTime
     * @throws Exception
     */
    public function getUpdatedAt(): DateTime
    {
        return new DateTime($this->updated_at);
    }
    
    /**
     * @param DateTime $updated_at
     */
    public function setUpdatedAt(DateTime $updated_at): self
    {
        $this->updated_at = $updated_at->format('c');
        
        return $this;
    }
}
