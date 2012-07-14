<?php
/**
 * Class file for PayPalTypeTaxIdDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeTaxIdDetailsType
 * Documentation : Details about the payer's tax info passed in by the merchant or partner. Optional.
 * @date 14/07/2012
 */
class PayPalTypeTaxIdDetailsType extends PayPalWsdlClass
{
	/**
	 * The TaxIdType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The payer's Tax ID type; CNPJ/CPF for BR country.
	 * @var string
	 */
	public $TaxIdType;
	/**
	 * The TaxId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The payer's Tax ID
	 * @var string
	 */
	public $TaxId;
	/**
	 * Constructor
	 * @param string TaxIdType
	 * @param string TaxId
	 * @return PayPalTypeTaxIdDetailsType
	 */
	public function __construct($_TaxIdType = null,$_TaxId = null)
	{
		parent::__construct(array('TaxIdType'=>$_TaxIdType,'TaxId'=>$_TaxId));
	}
	/**
	 * Set TaxIdType
	 * @param string TaxIdType
	 * @return string
	 */
	public function setTaxIdType($_TaxIdType)
	{
		return ($this->TaxIdType = $_TaxIdType);
	}
	/**
	 * Get TaxIdType
	 * @return string
	 */
	public function getTaxIdType()
	{
		return $this->TaxIdType;
	}
	/**
	 * Set TaxId
	 * @param string TaxId
	 * @return string
	 */
	public function setTaxId($_TaxId)
	{
		return ($this->TaxId = $_TaxId);
	}
	/**
	 * Get TaxId
	 * @return string
	 */
	public function getTaxId()
	{
		return $this->TaxId;
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