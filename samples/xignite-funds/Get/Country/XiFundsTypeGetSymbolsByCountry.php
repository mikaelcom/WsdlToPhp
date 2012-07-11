<?php
/**
 * Class file for XiFundsTypeGetSymbolsByCountry
 * @date 08/07/2012
 */
/**
 * Class XiFundsTypeGetSymbolsByCountry
 * @date 08/07/2012
 */
class XiFundsTypeGetSymbolsByCountry extends XiFundsWsdlClass
{
	/**
	 * The Country
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFundsTypeMutualFundCountries
	 */
	public $Country;
	/**
	 * Constructor
	 * @param XiFundsTypeMutualFundCountries Country
	 * @return XiFundsTypeGetSymbolsByCountry
	 */
	public function __construct($_Country)
	{
		parent::__construct(array('Country'=>$_Country));
	}
	/**
	 * Set Country
	 * @param MutualFundCountries Country
	 * @return MutualFundCountries
	 */
	public function setCountry($_Country)
	{
		return ($this->Country = XiFundsTypeMutualFundCountries::valueIsValid($_Country)?$_Country:null);
	}
	/**
	 * Get Country
	 * @return XiFundsTypeMutualFundCountries
	 */
	public function getCountry()
	{
		return $this->Country;
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