<?php
include "Node.php";

class LinkedList
{
    private $firstNode;

    private $lastNode;

    private $count;

    public function __construct()
    {
        $this->firstNode;
        $this->lastNode;
        $this->count;
    }

    public function insertFirst($data)
    {
        $link = new Node($data);
        $link->next = $this->firstNode;
        $this->firstNode = $link;
        if($this->lastNode == NULL){
            $this->lastNode = $link;
            $this->count++;
        }

    }

}
