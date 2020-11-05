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
    protected $deletedField = 'delected_at';

    function new_suscriptor()
    {
        $email = $_POST['email'];
        $builder = $this->db->table($this->table);
        $query = $builder->select(['email'])->where('email', $email)->get();
        $results = $query->getResult();
        if(count($results) == 0)
        {
            $resutl = $builder->insert($data);
            return $resutl?true:false;
        }
        return false;
    }
}
