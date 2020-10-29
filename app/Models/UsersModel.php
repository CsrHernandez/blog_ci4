<?php namespace App\Models;

use CodeIgniter\Model;

/**
 *
 */
class UsersModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'Id';

    protected $retunType      = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['name', 'username', 'password', 'role'];

    protected $useTimestamps = true;

    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

}
