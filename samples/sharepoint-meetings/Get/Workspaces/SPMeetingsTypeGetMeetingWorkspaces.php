<?php
/**
 * Class file for SPMeetingsTypeGetMeetingWorkspaces
 * @date 06/07/2012
 */
/**
 * Class SPMeetingsTypeGetMeetingWorkspaces
 * @date 06/07/2012
 */
class SPMeetingsTypeGetMeetingWorkspaces extends SPMeetingsWsdlClass
{
	/**
	 * The recurring
	 * @var boolean
	 */
	public $recurring;
	/**
	 * Constructor
	 * @param boolean recurring
	 * @return SPMeetingsTypeGetMeetingWorkspaces
	 */
	public function __construct($_recurring = null)
	{
		parent::__construct(array('recurring'=>$_recurring));
	}
	/**
	 * Set recurring
	 * @param boolean recurring
	 * @return boolean
	 */
	public function setRecurring($_recurring)
	{
		return ($this->recurring = $_recurring);
	}
	/**
	 * Get recurring
	 * @return boolean
	 */
	public function getRecurring()
	{
		return $this->recurring;
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