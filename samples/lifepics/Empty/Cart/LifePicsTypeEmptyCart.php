<?php
/**
 * Class file for LifePicsTypeEmptyCart
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeEmptyCart
 * @date 02/08/2012
 */
class LifePicsTypeEmptyCart extends LifePicsWsdlClass
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
	 * The CartID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CartID;
	/**
	 * Constructor
	 * @param string SessionID
	 * @param string CartID
	 * @return LifePicsTypeEmptyCart
	 */
	public function __construct($_SessionID = null,$_CartID = null)
	{
		parent::__construct(array('SessionID'=>$_SessionID,'CartID'=>$_CartID));
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
	 * Set CartID
	 * @param string CartID
	 * @return string
	 */
	public function setCartID($_CartID)
	{
		return ($this->CartID = $_CartID);
	}
	/**
	 * Get CartID
	 * @return string
	 */
	public function getCartID()
	{
		return $this->CartID;
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