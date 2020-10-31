<?php namespace App\Models;

/**
 *
 */
class DBAllModel
{
    private $db = null;

    function getShowPostsHome()
    {
        $this->db = \Config\Database::connect();
        $query = $this->db->query('SELECT title, intro, banner, slug, posts.created_at, users.name FROM posts, users WHERE show_home = 1 AND created_by = users.id');
        $results = $query->getResult();
        return $results;
    }
}
