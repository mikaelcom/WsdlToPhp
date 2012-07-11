<?php
/**
 * Class file for SPMeetingsTypeGetMeetingWorkspacesResponse
 * @date 06/07/2012
 */
/**
 * Class SPMeetingsTypeGetMeetingWorkspacesResponse
 * @date 06/07/2012
 */
class SPMeetingsTypeGetMeetingWorkspacesResponse extends SPMeetingsWsdlClass
{
	/**
	 * The GetMeetingWorkspacesResult
	 * @var SPMeetingsTypeGetMeetingWorkspacesResult
	 */
	public $GetMeetingWorkspacesResult;
	/**
	 * Constructor
	 * @param SPMeetingsTypeGetMeetingWorkspacesResult GetMeetingWorkspacesResult
	 * @return SPMeetingsTypeGetMeetingWorkspacesResponse
	 */
	public function __construct($_GetMeetingWorkspacesResult = null)
	{
		parent::__construct(array('GetMeetingWorkspacesResult'=>$_GetMeetingWorkspacesResult));
	}
	/**
	 * Set GetMeetingWorkspacesResult
	 * @param GetMeetingWorkspacesResult GetMeetingWorkspacesResult
	 * @return GetMeetingWorkspacesResult
	 */
	public function setGetMeetingWorkspacesResult($_GetMeetingWorkspacesResult)
	{
		return ($this->GetMeetingWorkspacesResult = $_GetMeetingWorkspacesResult);
	}
	/**
	 * Get GetMeetingWorkspacesResult
	 * @return SPMeetingsTypeGetMeetingWorkspacesResult
	 */
	public function getGetMeetingWorkspacesResult()
	{
		return $this->GetMeetingWorkspacesResult;
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