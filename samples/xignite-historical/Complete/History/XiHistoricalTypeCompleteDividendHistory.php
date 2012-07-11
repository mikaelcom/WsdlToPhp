<?php
/**
 * Class file for XiHistoricalTypeCompleteDividendHistory
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeCompleteDividendHistory
 * @date 08/07/2012
 */
class XiHistoricalTypeCompleteDividendHistory extends XiHistoricalTypeCommon
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeSecurity
	 */
	public $Security;
	/**
	 * The CompleteDividends
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeArrayOfCompleteDividend
	 */
	public $CompleteDividends;
	/**
	 * Constructor
	 * @param XiHistoricalTypeSecurity Security
	 * @param XiHistoricalTypeArrayOfCompleteDividend CompleteDividends
	 * @return XiHistoricalTypeCompleteDividendHistory
	 */
	public function __construct($_Security = null,$_CompleteDividends = null)
	{
		XiHistoricalWsdlClass::__construct(array('Security'=>$_Security,'CompleteDividends'=>new XiHistoricalTypeArrayOfCompleteDividend($_CompleteDividends)));
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
	 * @return XiHistoricalTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
	}
	/**
	 * Set CompleteDividends
	 * @param ArrayOfCompleteDividend CompleteDividends
	 * @return ArrayOfCompleteDividend
	 */
	public function setCompleteDividends($_CompleteDividends)
	{
		return ($this->CompleteDividends = $_CompleteDividends);
	}
	/**
	 * Get CompleteDividends
	 * @return XiHistoricalTypeArrayOfCompleteDividend
	 */
	public function getCompleteDividends()
	{
		return $this->CompleteDividends;
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