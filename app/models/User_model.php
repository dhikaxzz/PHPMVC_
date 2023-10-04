<?php

class User_model extends Controller{
    private $nama = 'Afdhika Syahputra';
    public function getUser()
    {
        return $this->nama;
    }
}