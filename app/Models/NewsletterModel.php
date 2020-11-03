<?php namespace App\Models;

use CodeIgniter\Model;

/**
 *
 */
class NewsletterModel extends Model
{
    protected $table      = 'newsletter';
    protected $primaryKey = 'id';

    protected $retunType      = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['email'];

    protected $createdField = 'created_at';
    protected $deletedField = 'delected_at';

    function new_suscriptor()
    {
        $data = $_POST['email'];
        $resutl = $this->db->table($this->table)->insert($data);
        return $resutl?true:false;
    }
}
