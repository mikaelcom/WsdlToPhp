<?php
/**
 * Class file for XiGlobalHistoricalTypeDividendHistory
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeDividendHistory
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeDividendHistory extends XiGlobalHistoricalTypeAbstractGlobalHistoricalObject
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalHistoricalTypeSecurity
	 */
	public $Security;
	/**
	 * The Dividends
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalHistoricalTypeArrayOfDividend
	 */
	public $Dividends;
	/**
	 * Constructor
	 * @param XiGlobalHistoricalTypeSecurity Security
	 * @param XiGlobalHistoricalTypeArrayOfDividend Dividends
	 * @return XiGlobalHistoricalTypeDividendHistory
	 */
	public function __construct($_Security = null,$_Dividends = null)
	{
		XiGlobalHistoricalWsdlClass::__construct(array('Security'=>$_Security,'Dividends'=>new XiGlobalHistoricalTypeArrayOfDividend($_Dividends)));
	}
	/**
	 * Set Security
	 * @param Security Security
	 * @return Security
	 */
	public function setSecurity($_Security)
	{
		return ($this->Security = $_Security);
	}
	/**
	 * Get Security
	 * @return XiGlobalHistoricalTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
	}
	/**
	 * Set Dividends
	 * @param ArrayOfDividend Dividends
	 * @return ArrayOfDividend
	 */
	public function setDividends($_Dividends)
	{
		return ($this->Dividends = $_Dividends);
	}
	/**
	 * Get Dividends
	 * @return XiGlobalHistoricalTypeArrayOfDividend
	 */
	public function getDividends()
	{
		return $this->Dividends;
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