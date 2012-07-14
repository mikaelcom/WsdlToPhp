<?php
/**
 * Class file for PayPalTypeBuyerDetailType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeBuyerDetailType
 * @date 14/07/2012
 */
class PayPalTypeBuyerDetailType extends PayPalWsdlClass
{
	/**
	 * The IdentificationInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Information that is used to indentify the Buyer. This is used for auto authorization. Mandatory if Authorization is requested.
	 * @var PayPalTypeIdentificationInfoType
	 */
	public $IdentificationInfo;
	/**
	 * Constructor
	 * @param PayPalTypeIdentificationInfoType IdentificationInfo
	 * @return PayPalTypeBuyerDetailType
	 */
	public function __construct($_IdentificationInfo = null)
	{
		parent::__construct(array('IdentificationInfo'=>$_IdentificationInfo));
	}
	/**
	 * Set IdentificationInfo
	 * @param IdentificationInfoType IdentificationInfo
	 * @return IdentificationInfoType
	 */
	public function setIdentificationInfo($_IdentificationInfo)
	{
		return ($this->IdentificationInfo = $_IdentificationInfo);
	}
	/**
	 * Get IdentificationInfo
	 * @return PayPalTypeIdentificationInfoType
	 */
	public function getIdentificationInfo()
	{
		return $this->IdentificationInfo;
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