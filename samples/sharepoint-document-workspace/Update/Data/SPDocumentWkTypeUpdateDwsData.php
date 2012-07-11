<?php
/**
 * Class file for SPDocumentWkTypeUpdateDwsData
 * @date 06/07/2012
 */
/**
 * Class SPDocumentWkTypeUpdateDwsData
 * @date 06/07/2012
 */
class SPDocumentWkTypeUpdateDwsData extends SPDocumentWkWsdlClass
{
	/**
	 * The updates
	 * @var string
	 */
	public $updates;
	/**
	 * The meetingInstance
	 * @var string
	 */
	public $meetingInstance;
	/**
	 * Constructor
	 * @param string updates
	 * @param string meetingInstance
	 * @return SPDocumentWkTypeUpdateDwsData
	 */
	public function __construct($_updates = null,$_meetingInstance = null)
	{
		parent::__construct(array('updates'=>$_updates,'meetingInstance'=>$_meetingInstance));
	}
	/**
	 * Set updates
	 * @param string updates
	 * @return string
	 */
	public function setUpdates($_updates)
	{
		return ($this->updates = $_updates);
	}
	/**
	 * Get updates
	 * @return string
	 */
	public function getUpdates()
	{
		return $this->updates;
	}
	/**
	 * Set meetingInstance
	 * @param string meetingInstance
	 * @return string
	 */
	public function setMeetingInstance($_meetingInstance)
	{
		return ($this->meetingInstance = $_meetingInstance);
	}
	/**
	 * Get meetingInstance
	 * @return string
	 */
	public function getMeetingInstance()
	{
		return $this->meetingInstance;
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