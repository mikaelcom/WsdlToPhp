<?php
/**
 * Class file for XiGlobaloptionsTypeGetBlackScholesOptionValueResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobaloptionsTypeGetBlackScholesOptionValueResponse
 * @date 08/07/2012
 */
class XiGlobaloptionsTypeGetBlackScholesOptionValueResponse extends XiGlobaloptionsWsdlClass
{
	/**
	 * The GetBlackScholesOptionValueResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobaloptionsTypeNumericResult
	 */
	public $GetBlackScholesOptionValueResult;
	/**
	 * Constructor
	 * @param XiGlobaloptionsTypeNumericResult GetBlackScholesOptionValueResult
	 * @return XiGlobaloptionsTypeGetBlackScholesOptionValueResponse
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
	 * @return XiGlobaloptionsTypeNumericResult
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