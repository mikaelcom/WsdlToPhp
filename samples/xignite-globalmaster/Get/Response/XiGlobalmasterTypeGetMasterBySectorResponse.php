<?php
/**
 * Class file for XiGlobalmasterTypeGetMasterBySectorResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterTypeGetMasterBySectorResponse
 * @date 08/07/2012
 */
class XiGlobalmasterTypeGetMasterBySectorResponse extends XiGlobalmasterWsdlClass
{
	/**
	 * The GetMasterBySectorResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalmasterTypeArrayOfRecord
	 */
	public $GetMasterBySectorResult;
	/**
	 * Constructor
	 * @param XiGlobalmasterTypeArrayOfRecord GetMasterBySectorResult
	 * @return XiGlobalmasterTypeGetMasterBySectorResponse
	 */
	public function __construct($_GetMasterBySectorResult = null)
	{
		parent::__construct(array('GetMasterBySectorResult'=>new XiGlobalmasterTypeArrayOfRecord($_GetMasterBySectorResult)));
	}
	/**
	 * Set GetMasterBySectorResult
	 * @param ArrayOfRecord GetMasterBySectorResult
	 * @return ArrayOfRecord
	 */
	public function setGetMasterBySectorResult($_GetMasterBySectorResult)
	{
		return ($this->GetMasterBySectorResult = $_GetMasterBySectorResult);
	}
	/**
	 * Get GetMasterBySectorResult
	 * @return XiGlobalmasterTypeArrayOfRecord
	 */
	public function getGetMasterBySectorResult()
	{
		return $this->GetMasterBySectorResult;
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