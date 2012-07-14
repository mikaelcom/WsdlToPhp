<?php
/**
 * Class file for PayPalTypeMerchantStoreDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeMerchantStoreDetailsType
 * @date 14/07/2012
 */
class PayPalTypeMerchantStoreDetailsType extends PayPalWsdlClass
{
	/**
	 * The StoreID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Store IDOptional Character length and limits: 50 single-byte characters
	 * @var string
	 */
	public $StoreID;
	/**
	 * The TerminalID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Terminal IDOptional Character length and limits: 50 single-byte characters
	 * @var string
	 */
	public $TerminalID;
	/**
	 * Constructor
	 * @param string StoreID
	 * @param string TerminalID
	 * @return PayPalTypeMerchantStoreDetailsType
	 */
	public function __construct($_StoreID,$_TerminalID = null)
	{
		parent::__construct(array('StoreID'=>$_StoreID,'TerminalID'=>$_TerminalID));
	}
	/**
	 * Set StoreID
	 * @param string StoreID
	 * @return string
	 */
	public function setStoreID($_StoreID)
	{
		return ($this->StoreID = $_StoreID);
	}
	/**
	 * Get StoreID
	 * @return string
	 */
	public function getStoreID()
	{
		return $this->StoreID;
	}
	/**
	 * Set TerminalID
	 * @param string TerminalID
	 * @return string
	 */
	public function setTerminalID($_TerminalID)
	{
		return ($this->TerminalID = $_TerminalID);
	}
	/**
	 * Get TerminalID
	 * @return string
	 */
	public function getTerminalID()
	{
		return $this->TerminalID;
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