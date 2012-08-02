<?php
/**
 * Class file for LifePicsTypeUpdateItemInCart
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeUpdateItemInCart
 * @date 02/08/2012
 */
class LifePicsTypeUpdateItemInCart extends LifePicsWsdlClass
{
	/**
	 * The SessionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SessionID;
	/**
	 * The CartItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CartItemID;
	/**
	 * The Quantity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Quantity;
	/**
	 * Constructor
	 * @param string SessionID
	 * @param string CartItemID
	 * @param string Quantity
	 * @return LifePicsTypeUpdateItemInCart
	 */
	public function __construct($_SessionID = null,$_CartItemID = null,$_Quantity = null)
	{
		parent::__construct(array('SessionID'=>$_SessionID,'CartItemID'=>$_CartItemID,'Quantity'=>$_Quantity));
	}
	/**
	 * Set SessionID
	 * @param string SessionID
	 * @return string
	 */
	public function setSessionID($_SessionID)
	{
		return ($this->SessionID = $_SessionID);
	}
	/**
	 * Get SessionID
	 * @return string
	 */
	public function getSessionID()
	{
		return $this->SessionID;
	}
	/**
	 * Set CartItemID
	 * @param string CartItemID
	 * @return string
	 */
	public function setCartItemID($_CartItemID)
	{
		return ($this->CartItemID = $_CartItemID);
	}
	/**
	 * Get CartItemID
	 * @return string
	 */
	public function getCartItemID()
	{
		return $this->CartItemID;
	}
	/**
	 * Set Quantity
	 * @param string Quantity
	 * @return string
	 */
	public function setQuantity($_Quantity)
	{
		return ($this->Quantity = $_Quantity);
	}
	/**
	 * Get Quantity
	 * @return string
	 */
	public function getQuantity()
	{
		return $this->Quantity;
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