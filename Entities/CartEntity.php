<?php

class CartEntity {

    /**
     * @var int
     */
    private $useIid;

    /**
     * @var int
     */
    private $produtId;

    
    public function getUserId() {

        return $this->userId;
    
    }

    public function getProductId() {

        return $this->productId;

    }
}