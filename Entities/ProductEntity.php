<?php

class ProductEntity {

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $categoryId;

    /**
     * @var string
     */
    private $brand;

    /**
     * @var string
     */
    private $originCountry;

    /**
     * @var int
     */
    private $stock;

    /**
     * @var int
     */
    private $price;

    /**
     * @return boolean
     */
    private $promotion;

    /**
     * @var string
     */
    private $image;


    /**
     * Get the value of id
     *
     * @return  int
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of name
     *
     * @return  string
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param  string  $name
     *
     * @return  self
     */ 
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of categoryId
     *
     * @return  int
     */ 
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Get the value of brand
     *
     * @return  string
     */ 
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set the value of brand
     *
     * @param  string  $brand
     *
     * @return  self
     */ 
    public function setBrand(string $brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get the value of originCountry
     *
     * @return  string
     */ 
    public function getOriginCountry()
    {
        return $this->originCountry;
    }

    /**
     * Set the value of originCountry
     *
     * @param  string  $originCountry
     *
     * @return  self
     */ 
    public function setOriginCountry(string $originCountry)
    {
        $this->originCountry = $originCountry;

        return $this;
    }

    /**
     * Get the value of stock
     *
     * @return  int
     */ 
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set the value of stock
     *
     * @param  int  $stock
     *
     * @return  self
     */ 
    public function setStock(int $stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get the value of price
     *
     * @return  int
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @param  int  $price
     *
     * @return  self
     */ 
    public function setPrice(int $price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of promotion
     */ 
    public function getPromotion()
    {
        return $this->promotion;
    }

    /**
     * Set the value of promotion
     *
     * @return  self
     */ 
    public function setPromotion($promotion)
    {
        $this->promotion = $promotion;

        return $this;
    }

    /**
     * Get the value of image
     *
     * @return  string
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @param  string  $image
     *
     * @return  self
     */ 
    public function setImage(string $image)
    {
        $this->image = $image;

        return $this;
    }
}