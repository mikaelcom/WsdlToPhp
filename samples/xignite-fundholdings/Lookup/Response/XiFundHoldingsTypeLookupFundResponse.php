<?php
/**
 * Class file for XiFundHoldingsTypeLookupFundResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundHoldingsTypeLookupFundResponse
 * @date 08/07/2012
 */
class XiFundHoldingsTypeLookupFundResponse extends XiFundHoldingsWsdlClass
{
	/**
	 * The LookupFundResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundHoldingsTypeArrayOfOLFund
	 */
	public $LookupFundResult;
	/**
	 * Constructor
	 * @param XiFundHoldingsTypeArrayOfOLFund LookupFundResult
	 * @return XiFundHoldingsTypeLookupFundResponse
	 */
	public function __construct($_LookupFundResult = null)
	{
		parent::__construct(array('LookupFundResult'=>new XiFundHoldingsTypeArrayOfOLFund($_LookupFundResult)));
	}
	/**
	 * Set LookupFundResult
	 * @param ArrayOfOLFund LookupFundResult
	 * @return ArrayOfOLFund
	 */
	public function setLookupFundResult($_LookupFundResult)
	{
		return ($this->LookupFundResult = $_LookupFundResult);
	}
	/**
	 * Get LookupFundResult
	 * @return XiFundHoldingsTypeArrayOfOLFund
	 */
	public function getLookupFundResult()
	{
		return $this->LookupFundResult;
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