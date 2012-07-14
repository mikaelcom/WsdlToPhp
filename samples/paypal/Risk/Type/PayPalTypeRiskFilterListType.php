<?php
/**
 * Class file for PayPalTypeRiskFilterListType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeRiskFilterListType
 * Documentation : Details of Risk Filter.
 * @date 14/07/2012
 */
class PayPalTypeRiskFilterListType extends PayPalWsdlClass
{
	/**
	 * The Filters
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : unbounded
	 * @var PayPalTypeRiskFilterDetailsType
	 */
	public $Filters;
	/**
	 * Constructor
	 * @param PayPalTypeRiskFilterDetailsType Filters
	 * @return PayPalTypeRiskFilterListType
	 */
	public function __construct($_Filters)
	{
		parent::__construct(array('Filters'=>$_Filters));
	}
	/**
	 * Set Filters
	 * @param RiskFilterDetailsType Filters
	 * @return RiskFilterDetailsType
	 */
	public function setFilters($_Filters)
	{
		return ($this->Filters = $_Filters);
	}
	/**
	 * Get Filters
	 * @return PayPalTypeRiskFilterDetailsType
	 */
	public function getFilters()
	{
		return $this->Filters;
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