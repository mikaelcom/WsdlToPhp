<?php
/**
 * Class file for XiGlobalmasterTypeGetMasterByIdentifierResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterTypeGetMasterByIdentifierResponse
 * @date 08/07/2012
 */
class XiGlobalmasterTypeGetMasterByIdentifierResponse extends XiGlobalmasterWsdlClass
{
	/**
	 * The GetMasterByIdentifierResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalmasterTypeArrayOfRecord
	 */
	public $GetMasterByIdentifierResult;
	/**
	 * Constructor
	 * @param XiGlobalmasterTypeArrayOfRecord GetMasterByIdentifierResult
	 * @return XiGlobalmasterTypeGetMasterByIdentifierResponse
	 */
	public function __construct($_GetMasterByIdentifierResult = null)
	{
		parent::__construct(array('GetMasterByIdentifierResult'=>new XiGlobalmasterTypeArrayOfRecord($_GetMasterByIdentifierResult)));
	}
	/**
	 * Set GetMasterByIdentifierResult
	 * @param ArrayOfRecord GetMasterByIdentifierResult
	 * @return ArrayOfRecord
	 */
	public function setGetMasterByIdentifierResult($_GetMasterByIdentifierResult)
	{
		return ($this->GetMasterByIdentifierResult = $_GetMasterByIdentifierResult);
	}
	/**
	 * Get GetMasterByIdentifierResult
	 * @return XiGlobalmasterTypeArrayOfRecord
	 */
	public function getGetMasterByIdentifierResult()
	{
		return $this->GetMasterByIdentifierResult;
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