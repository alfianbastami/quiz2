<?php
class pagination_model extends CI_Model{

    function __construct()
    {
        parent::__construct();
    }

    //fetch books
    function get_books($limit, $start, $st = NULL)
    {
        if ($st == "NIL") $st = "";
        $sql = "select * from tbl_books left join penerbit on tbl_books.id_penerbit = penerbit.id_penerbit where name like '%$st%' limit " . $start . ", " . $limit;
        $query = $this->db->query($sql);
        return $query->result();
    }
    
    function get_books_count($st = NULL)
    {
        if ($st == "NIL") $st = "";
        $sql = "select * from tbl_books where name like '%$st%'";
        $query = $this->db->query($sql);
        return $query->num_rows();
    }
}
?>