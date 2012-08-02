<?php
/**
 * Class file for LifePicsTypeApplyDiscount
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeApplyDiscount
 * @date 02/08/2012
 */
class LifePicsTypeApplyDiscount extends LifePicsWsdlClass
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
	 * The PromotionCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PromotionCode;
	/**
	 * The PreferredCustomerNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PreferredCustomerNumber;
	/**
	 * Constructor
	 * @param string SessionID
	 * @param string CartID
	 * @param string PromotionCode
	 * @param string PreferredCustomerNumber
	 * @return LifePicsTypeApplyDiscount
	 */
	public function __construct($_SessionID = null,$_CartID = null,$_PromotionCode = null,$_PreferredCustomerNumber = null)
	{
		parent::__construct(array('SessionID'=>$_SessionID,'CartID'=>$_CartID,'PromotionCode'=>$_PromotionCode,'PreferredCustomerNumber'=>$_PreferredCustomerNumber));
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
	 * Set PromotionCode
	 * @param string PromotionCode
	 * @return string
	 */
	public function setPromotionCode($_PromotionCode)
	{
		return ($this->PromotionCode = $_PromotionCode);
	}
	/**
	 * Get PromotionCode
	 * @return string
	 */
	public function getPromotionCode()
	{
		return $this->PromotionCode;
	}
	/**
	 * Set PreferredCustomerNumber
	 * @param string PreferredCustomerNumber
	 * @return string
	 */
	public function setPreferredCustomerNumber($_PreferredCustomerNumber)
	{
		return ($this->PreferredCustomerNumber = $_PreferredCustomerNumber);
	}
	/**
	 * Get PreferredCustomerNumber
	 * @return string
	 */
	public function getPreferredCustomerNumber()
	{
		return $this->PreferredCustomerNumber;
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