<?php namespace App\Models;

/**
 *
 */
class DBAllModel
{
    private $db = \Config\Database::connect();

    function getShowPostsHome()
    {
        $query = $this->db->query('SELECT title, intro, banner, slug, created_at, users.name FROM posts, users WHERE show_home = 1 AND created_by = users.id');
        $results = $query->getResult();
        return $results;
    }
}
