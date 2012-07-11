<?php
/**
 * Class file for SPMeetingsTypeCreateWorkspaceResponse
 * @date 06/07/2012
 */
/**
 * Class SPMeetingsTypeCreateWorkspaceResponse
 * @date 06/07/2012
 */
class SPMeetingsTypeCreateWorkspaceResponse extends SPMeetingsWsdlClass
{
	/**
	 * The CreateWorkspaceResult
	 * @var SPMeetingsTypeCreateWorkspaceResult
	 */
	public $CreateWorkspaceResult;
	/**
	 * Constructor
	 * @param SPMeetingsTypeCreateWorkspaceResult CreateWorkspaceResult
	 * @return SPMeetingsTypeCreateWorkspaceResponse
	 */
	public function __construct($_CreateWorkspaceResult = null)
	{
		parent::__construct(array('CreateWorkspaceResult'=>$_CreateWorkspaceResult));
	}
	/**
	 * Set CreateWorkspaceResult
	 * @param CreateWorkspaceResult CreateWorkspaceResult
	 * @return CreateWorkspaceResult
	 */
	public function setCreateWorkspaceResult($_CreateWorkspaceResult)
	{
		return ($this->CreateWorkspaceResult = $_CreateWorkspaceResult);
	}
	/**
	 * Get CreateWorkspaceResult
	 * @return SPMeetingsTypeCreateWorkspaceResult
	 */
	public function getCreateWorkspaceResult()
	{
		return $this->CreateWorkspaceResult;
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