<?php
/**
 * Class file for XiGlobalmasterTypeGetMasterByIndustryResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterTypeGetMasterByIndustryResponse
 * @date 08/07/2012
 */
class XiGlobalmasterTypeGetMasterByIndustryResponse extends XiGlobalmasterWsdlClass
{
	/**
	 * The GetMasterByIndustryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalmasterTypeArrayOfRecord
	 */
	public $GetMasterByIndustryResult;
	/**
	 * Constructor
	 * @param XiGlobalmasterTypeArrayOfRecord GetMasterByIndustryResult
	 * @return XiGlobalmasterTypeGetMasterByIndustryResponse
	 */
	public function __construct($_GetMasterByIndustryResult = null)
	{
		parent::__construct(array('GetMasterByIndustryResult'=>new XiGlobalmasterTypeArrayOfRecord($_GetMasterByIndustryResult)));
	}
	/**
	 * Set GetMasterByIndustryResult
	 * @param ArrayOfRecord GetMasterByIndustryResult
	 * @return ArrayOfRecord
	 */
	public function setGetMasterByIndustryResult($_GetMasterByIndustryResult)
	{
		return ($this->GetMasterByIndustryResult = $_GetMasterByIndustryResult);
	}
	/**
	 * Get GetMasterByIndustryResult
	 * @return XiGlobalmasterTypeArrayOfRecord
	 */
	public function getGetMasterByIndustryResult()
	{
		return $this->GetMasterByIndustryResult;
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