<?php
/**
 * Class file for XiMoneyMarketsTypeGetEuroDollarFRAStripResponse
 * @date 08/07/2012
 */
/**
 * Class XiMoneyMarketsTypeGetEuroDollarFRAStripResponse
 * @date 08/07/2012
 */
class XiMoneyMarketsTypeGetEuroDollarFRAStripResponse extends XiMoneyMarketsWsdlClass
{
	/**
	 * The GetEuroDollarFRAStripResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMoneyMarketsTypeArrayOfEuroDollarFRA
	 */
	public $GetEuroDollarFRAStripResult;
	/**
	 * Constructor
	 * @param XiMoneyMarketsTypeArrayOfEuroDollarFRA GetEuroDollarFRAStripResult
	 * @return XiMoneyMarketsTypeGetEuroDollarFRAStripResponse
	 */
	public function __construct($_GetEuroDollarFRAStripResult = null)
	{
		parent::__construct(array('GetEuroDollarFRAStripResult'=>new XiMoneyMarketsTypeArrayOfEuroDollarFRA($_GetEuroDollarFRAStripResult)));
	}
	/**
	 * Set GetEuroDollarFRAStripResult
	 * @param ArrayOfEuroDollarFRA GetEuroDollarFRAStripResult
	 * @return ArrayOfEuroDollarFRA
	 */
	public function setGetEuroDollarFRAStripResult($_GetEuroDollarFRAStripResult)
	{
		return ($this->GetEuroDollarFRAStripResult = $_GetEuroDollarFRAStripResult);
	}
	/**
	 * Get GetEuroDollarFRAStripResult
	 * @return XiMoneyMarketsTypeArrayOfEuroDollarFRA
	 */
	public function getGetEuroDollarFRAStripResult()
	{
		return $this->GetEuroDollarFRAStripResult;
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