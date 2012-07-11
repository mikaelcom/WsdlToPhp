<?php
/**
 * Class file for XiGlobalrealtimeoptionsTypeGetBlackScholesOptionValueResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalrealtimeoptionsTypeGetBlackScholesOptionValueResponse
 * @date 08/07/2012
 */
class XiGlobalrealtimeoptionsTypeGetBlackScholesOptionValueResponse extends XiGlobalrealtimeoptionsWsdlClass
{
	/**
	 * The GetBlackScholesOptionValueResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalrealtimeoptionsTypeNumericResult
	 */
	public $GetBlackScholesOptionValueResult;
	/**
	 * Constructor
	 * @param XiGlobalrealtimeoptionsTypeNumericResult GetBlackScholesOptionValueResult
	 * @return XiGlobalrealtimeoptionsTypeGetBlackScholesOptionValueResponse
	 */
	public function __construct($_GetBlackScholesOptionValueResult = null)
	{
		parent::__construct(array('GetBlackScholesOptionValueResult'=>$_GetBlackScholesOptionValueResult));
	}
	/**
	 * Set GetBlackScholesOptionValueResult
	 * @param NumericResult GetBlackScholesOptionValueResult
	 * @return NumericResult
	 */
	public function setGetBlackScholesOptionValueResult($_GetBlackScholesOptionValueResult)
	{
		return ($this->GetBlackScholesOptionValueResult = $_GetBlackScholesOptionValueResult);
	}
	/**
	 * Get GetBlackScholesOptionValueResult
	 * @return XiGlobalrealtimeoptionsTypeNumericResult
	 */
	public function getGetBlackScholesOptionValueResult()
	{
		return $this->GetBlackScholesOptionValueResult;
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