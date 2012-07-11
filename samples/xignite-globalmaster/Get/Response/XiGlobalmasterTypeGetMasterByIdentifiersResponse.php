<?php
/**
 * Class file for XiGlobalmasterTypeGetMasterByIdentifiersResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterTypeGetMasterByIdentifiersResponse
 * @date 08/07/2012
 */
class XiGlobalmasterTypeGetMasterByIdentifiersResponse extends XiGlobalmasterWsdlClass
{
	/**
	 * The GetMasterByIdentifiersResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalmasterTypeArrayOfRecord
	 */
	public $GetMasterByIdentifiersResult;
	/**
	 * Constructor
	 * @param XiGlobalmasterTypeArrayOfRecord GetMasterByIdentifiersResult
	 * @return XiGlobalmasterTypeGetMasterByIdentifiersResponse
	 */
	public function __construct($_GetMasterByIdentifiersResult = null)
	{
		parent::__construct(array('GetMasterByIdentifiersResult'=>new XiGlobalmasterTypeArrayOfRecord($_GetMasterByIdentifiersResult)));
	}
	/**
	 * Set GetMasterByIdentifiersResult
	 * @param ArrayOfRecord GetMasterByIdentifiersResult
	 * @return ArrayOfRecord
	 */
	public function setGetMasterByIdentifiersResult($_GetMasterByIdentifiersResult)
	{
		return ($this->GetMasterByIdentifiersResult = $_GetMasterByIdentifiersResult);
	}
	/**
	 * Get GetMasterByIdentifiersResult
	 * @return XiGlobalmasterTypeArrayOfRecord
	 */
	public function getGetMasterByIdentifiersResult()
	{
		return $this->GetMasterByIdentifiersResult;
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