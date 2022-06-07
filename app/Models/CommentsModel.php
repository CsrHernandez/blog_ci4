<?php namespace App\Models;

use CodeIgniter\Model;

/**
 *
 */
class CommentsModel extends Model
{
    protected $table      = 'comments';
    protected $primaryKey = 'Id';

    protected $retunType      = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['post_id', 'name', 'email', 'comment'];

}
