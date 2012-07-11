<?php
/**
 * Class file for PaylineWebPaymentTypeOrderDetail
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeOrderDetail
 * Documentation : This element contains information about the order product
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeOrderDetail extends PaylineWebPaymentWsdlClass
{
	/**
	 * The ref
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $ref;
	/**
	 * The price
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $price;
	/**
	 * The quantity
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $quantity;
	/**
	 * The comment
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $comment;
	/**
	 * Constructor
	 * @param string ref
	 * @param string price
	 * @param string quantity
	 * @param string comment
	 * @return PaylineWebPaymentTypeOrderDetail
	 */
	public function __construct($_ref = null,$_price = null,$_quantity = null,$_comment = null)
	{
		parent::__construct(array('ref'=>$_ref,'price'=>$_price,'quantity'=>$_quantity,'comment'=>$_comment));
	}
	/**
	 * Set ref
	 * @param string ref
	 * @return string
	 */
	public function setRef($_ref)
	{
		return ($this->ref = $_ref);
	}
	/**
	 * Get ref
	 * @return string
	 */
	public function getRef()
	{
		return $this->ref;
	}
	/**
	 * Set price
	 * @param string price
	 * @return string
	 */
	public function setPrice($_price)
	{
		return ($this->price = $_price);
	}
	/**
	 * Get price
	 * @return string
	 */
	public function getPrice()
	{
		return $this->price;
	}
	/**
	 * Set quantity
	 * @param string quantity
	 * @return string
	 */
	public function setQuantity($_quantity)
	{
		return ($this->quantity = $_quantity);
	}
	/**
	 * Get quantity
	 * @return string
	 */
	public function getQuantity()
	{
		return $this->quantity;
	}
	/**
	 * Set comment
	 * @param string comment
	 * @return string
	 */
	public function setComment($_comment)
	{
		return ($this->comment = $_comment);
	}
	/**
	 * Get comment
	 * @return string
	 */
	public function getComment()
	{
		return $this->comment;
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>