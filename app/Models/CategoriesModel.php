<?php namespace App\Models;

use CodeIgniter\Model;

/**
 *
 */
class CategoriesModel extends Model
{
    protected $table      = 'categories';
    protected $primaryKey = 'id';

    protected $retunType      = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['name'];

    protected $deletedField = 'deleted_at';
    
}
