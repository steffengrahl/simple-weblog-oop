<?php

namespace App\Entity;

use App\Traits\ActiveRecordable;
use App\Traits\Deletable;
use App\Traits\Findable;
use App\Traits\Persistable;

class Post extends BaseEntity
{
    use ActiveRecordable;
    use Deletable;
    use Findable;
    use Persistable;
    
    private static $table = 'posts';
    
    /**
     * @var string|null
     */
    private $title;
    
    /**
     * @var string|null
     */
    private $content;
    
    /**
     * @var int
     */
    private $category_id = 0;
    
    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    
    /**
     * @param string $title
     *
     * @return Post
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;
        
        return $this;
    }
    
    /**
     * @return string|null
     */
    public function getContent(): ?string
    {
        return $this->content;
    }
    
    /**
     * @param string $content
     *
     * @return Post
     */
    public function setContent(string $content): Post
    {
        $this->content = $content;
        
        return $this;
    }
    
    /**
     * @return int
     */
    public function getCategoryId(): int
    {
        return $this->category_id;
    }
    
    /**
     * @param int $category_id
     *
     * @return Post
     */
    public function setCategoryId(int $category_id): Post
    {
        $this->category_id = $category_id;
        
        return $this;
    }
}