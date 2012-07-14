<?php
/**
 * Class file for PayPalTypeVATDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeVATDetailsType
 * Documentation : Contains information required To list a business item. BusinessSeller - only for add item, the RestrictedToBusiness and VATPercent for both get and add, for revise all must be optional
 * @date 14/07/2012
 */
class PayPalTypeVATDetailsType extends PayPalWsdlClass
{
	/**
	 * The BusinessSeller
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var boolean
	 */
	public $BusinessSeller;
	/**
	 * The RestrictedToBusiness
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var boolean
	 */
	public $RestrictedToBusiness;
	/**
	 * The VATPercent
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var float
	 */
	public $VATPercent;
	/**
	 * Constructor
	 * @param boolean BusinessSeller
	 * @param boolean RestrictedToBusiness
	 * @param float VATPercent
	 * @return PayPalTypeVATDetailsType
	 */
	public function __construct($_BusinessSeller = null,$_RestrictedToBusiness = null,$_VATPercent = null)
	{
		parent::__construct(array('BusinessSeller'=>$_BusinessSeller,'RestrictedToBusiness'=>$_RestrictedToBusiness,'VATPercent'=>$_VATPercent));
	}
	/**
	 * Set BusinessSeller
	 * @param boolean BusinessSeller
	 * @return boolean
	 */
	public function setBusinessSeller($_BusinessSeller)
	{
		return ($this->BusinessSeller = $_BusinessSeller);
	}
	/**
	 * Get BusinessSeller
	 * @return boolean
	 */
	public function getBusinessSeller()
	{
		return $this->BusinessSeller;
	}
	/**
	 * Set RestrictedToBusiness
	 * @param boolean RestrictedToBusiness
	 * @return boolean
	 */
	public function setRestrictedToBusiness($_RestrictedToBusiness)
	{
		return ($this->RestrictedToBusiness = $_RestrictedToBusiness);
	}
	/**
	 * Get RestrictedToBusiness
	 * @return boolean
	 */
	public function getRestrictedToBusiness()
	{
		return $this->RestrictedToBusiness;
	}
	/**
	 * Set VATPercent
	 * @param float VATPercent
	 * @return float
	 */
	public function setVATPercent($_VATPercent)
	{
		return ($this->VATPercent = $_VATPercent);
	}
	/**
	 * Get VATPercent
	 * @return float
	 */
	public function getVATPercent()
	{
		return $this->VATPercent;
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