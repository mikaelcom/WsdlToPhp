<?php
/**
 * Class file for LifePicsTypeRemoveItemFromCart
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeRemoveItemFromCart
 * @date 02/08/2012
 */
class LifePicsTypeRemoveItemFromCart extends LifePicsWsdlClass
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
	 * Constructor
	 * @param string SessionID
	 * @param string CartItemID
	 * @return LifePicsTypeRemoveItemFromCart
	 */
	public function __construct($_SessionID = null,$_CartItemID = null)
	{
		parent::__construct(array('SessionID'=>$_SessionID,'CartItemID'=>$_CartItemID));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>