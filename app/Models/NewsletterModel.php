<?php namespace App\Models;

use CodeIgniter\Model;

/**
 *
 */
class NewsletterModel extends Model
{
    protected $table      = 'newsletter';
    protected $primaryKey = 'id';

    protected $retunType      = 'objet';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['email'];

    protected $createdField = 'created_at';
    protected $deletedField = 'deleted_at';

}
