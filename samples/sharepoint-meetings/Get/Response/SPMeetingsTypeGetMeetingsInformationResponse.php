<?php
/**
 * Class file for SPMeetingsTypeGetMeetingsInformationResponse
 * @date 06/07/2012
 */
/**
 * Class SPMeetingsTypeGetMeetingsInformationResponse
 * @date 06/07/2012
 */
class SPMeetingsTypeGetMeetingsInformationResponse extends SPMeetingsWsdlClass
{
	/**
	 * The GetMeetingsInformationResult
	 * @var SPMeetingsTypeGetMeetingsInformationResult
	 */
	public $GetMeetingsInformationResult;
	/**
	 * Constructor
	 * @param SPMeetingsTypeGetMeetingsInformationResult GetMeetingsInformationResult
	 * @return SPMeetingsTypeGetMeetingsInformationResponse
	 */
	public function __construct($_GetMeetingsInformationResult = null)
	{
		parent::__construct(array('GetMeetingsInformationResult'=>$_GetMeetingsInformationResult));
	}
	/**
	 * Set GetMeetingsInformationResult
	 * @param GetMeetingsInformationResult GetMeetingsInformationResult
	 * @return GetMeetingsInformationResult
	 */
	public function setGetMeetingsInformationResult($_GetMeetingsInformationResult)
	{
		return ($this->GetMeetingsInformationResult = $_GetMeetingsInformationResult);
	}
	/**
	 * Get GetMeetingsInformationResult
	 * @return SPMeetingsTypeGetMeetingsInformationResult
	 */
	public function getGetMeetingsInformationResult()
	{
		return $this->GetMeetingsInformationResult;
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