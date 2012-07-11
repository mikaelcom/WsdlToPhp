<?php
/**
 * Class file for XiNewsTypeGetLastBriefingResponse
 * @date 08/07/2012
 */
/**
 * Class XiNewsTypeGetLastBriefingResponse
 * @date 08/07/2012
 */
class XiNewsTypeGetLastBriefingResponse extends XiNewsWsdlClass
{
	/**
	 * The GetLastBriefingResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiNewsTypeBriefing
	 */
	public $GetLastBriefingResult;
	/**
	 * Constructor
	 * @param XiNewsTypeBriefing GetLastBriefingResult
	 * @return XiNewsTypeGetLastBriefingResponse
	 */
	public function __construct($_GetLastBriefingResult = null)
	{
		parent::__construct(array('GetLastBriefingResult'=>$_GetLastBriefingResult));
	}
	/**
	 * Set GetLastBriefingResult
	 * @param Briefing GetLastBriefingResult
	 * @return Briefing
	 */
	public function setGetLastBriefingResult($_GetLastBriefingResult)
	{
		return ($this->GetLastBriefingResult = $_GetLastBriefingResult);
	}
	/**
	 * Get GetLastBriefingResult
	 * @return XiNewsTypeBriefing
	 */
	public function getGetLastBriefingResult()
	{
		return $this->GetLastBriefingResult;
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