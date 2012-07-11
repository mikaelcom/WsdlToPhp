<?php
/**
 * Class file for XiRatesTypeGetEuroDollarFRAStripResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetEuroDollarFRAStripResponse
 * @date 08/07/2012
 */
class XiRatesTypeGetEuroDollarFRAStripResponse extends XiRatesWsdlClass
{
	/**
	 * The GetEuroDollarFRAStripResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeArrayOfEuroDollarFRA
	 */
	public $GetEuroDollarFRAStripResult;
	/**
	 * Constructor
	 * @param XiRatesTypeArrayOfEuroDollarFRA GetEuroDollarFRAStripResult
	 * @return XiRatesTypeGetEuroDollarFRAStripResponse
	 */
	public function __construct($_GetEuroDollarFRAStripResult = null)
	{
		parent::__construct(array('GetEuroDollarFRAStripResult'=>new XiRatesTypeArrayOfEuroDollarFRA($_GetEuroDollarFRAStripResult)));
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
	 * @return XiRatesTypeArrayOfEuroDollarFRA
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