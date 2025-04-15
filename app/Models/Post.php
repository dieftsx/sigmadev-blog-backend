<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Post extends Model
{
    const UPDATED_AT = 'updatedAt';
    const CREATED_AT = 'createdAt';


    public function author():BelongsTo{
        return $this->BelongsTo(User::class, 'authorId');
    }
}
