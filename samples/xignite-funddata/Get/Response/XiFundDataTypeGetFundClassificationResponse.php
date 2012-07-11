<?php
/**
 * Class file for XiFundDataTypeGetFundClassificationResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeGetFundClassificationResponse
 * @date 08/07/2012
 */
class XiFundDataTypeGetFundClassificationResponse extends XiFundDataWsdlClass
{
	/**
	 * The GetFundClassificationResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeFundClassification
	 */
	public $GetFundClassificationResult;
	/**
	 * Constructor
	 * @param XiFundDataTypeFundClassification GetFundClassificationResult
	 * @return XiFundDataTypeGetFundClassificationResponse
	 */
	public function __construct($_GetFundClassificationResult = null)
	{
		parent::__construct(array('GetFundClassificationResult'=>$_GetFundClassificationResult));
	}
	/**
	 * Set GetFundClassificationResult
	 * @param FundClassification GetFundClassificationResult
	 * @return FundClassification
	 */
	public function setGetFundClassificationResult($_GetFundClassificationResult)
	{
		return ($this->GetFundClassificationResult = $_GetFundClassificationResult);
	}
	/**
	 * Get GetFundClassificationResult
	 * @return XiFundDataTypeFundClassification
	 */
	public function getGetFundClassificationResult()
	{
		return $this->GetFundClassificationResult;
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