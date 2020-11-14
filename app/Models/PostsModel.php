<?php namespace App\Models;

use CodeIgniter\Model;

/**
 *
 */
class PostsModel extends Model
{
    protected $table      = 'posts';
    protected $primaryKey = 'id';

    protected $retunType      = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['banner', 'title', 'slug', 'intro', 'content', 'category', 'tags', 'created_by'];

    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

}
