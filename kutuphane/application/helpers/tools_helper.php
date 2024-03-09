<?php
function getTypeName($id)
{
    $ci = &get_instance();
    $ci->load->database();
    $types = $ci->db->where(array("id" => $id))->get("types")->row();

    return $types->name;
}
function getAuthorName($id)
{
    $ci = &get_instance();
    $ci->load->database();
    $types = $ci->db->where(array("id" => $id))->get("authors")->row();

    return $types->name;
}
