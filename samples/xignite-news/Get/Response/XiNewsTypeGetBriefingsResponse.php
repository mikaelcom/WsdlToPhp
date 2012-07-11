<?php
/**
 * Class file for XiNewsTypeGetBriefingsResponse
 * @date 08/07/2012
 */
/**
 * Class XiNewsTypeGetBriefingsResponse
 * @date 08/07/2012
 */
class XiNewsTypeGetBriefingsResponse extends XiNewsWsdlClass
{
	/**
	 * The GetBriefingsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiNewsTypeArrayOfBriefing
	 */
	public $GetBriefingsResult;
	/**
	 * Constructor
	 * @param XiNewsTypeArrayOfBriefing GetBriefingsResult
	 * @return XiNewsTypeGetBriefingsResponse
	 */
	public function __construct($_GetBriefingsResult = null)
	{
		parent::__construct(array('GetBriefingsResult'=>new XiNewsTypeArrayOfBriefing($_GetBriefingsResult)));
	}
	/**
	 * Set GetBriefingsResult
	 * @param ArrayOfBriefing GetBriefingsResult
	 * @return ArrayOfBriefing
	 */
	public function setGetBriefingsResult($_GetBriefingsResult)
	{
		return ($this->GetBriefingsResult = $_GetBriefingsResult);
	}
	/**
	 * Get GetBriefingsResult
	 * @return XiNewsTypeArrayOfBriefing
	 */
	public function getGetBriefingsResult()
	{
		return $this->GetBriefingsResult;
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