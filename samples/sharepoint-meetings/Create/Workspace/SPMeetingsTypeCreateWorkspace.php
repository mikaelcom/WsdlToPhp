<?php
/**
 * Class file for SPMeetingsTypeCreateWorkspace
 * @date 06/07/2012
 */
/**
 * Class SPMeetingsTypeCreateWorkspace
 * @date 06/07/2012
 */
class SPMeetingsTypeCreateWorkspace extends SPMeetingsWsdlClass
{
	/**
	 * The title
	 * @var string
	 */
	public $title;
	/**
	 * The templateName
	 * @var string
	 */
	public $templateName;
	/**
	 * The lcid
	 * @var unsignedInt
	 */
	public $lcid;
	/**
	 * The timeZoneInformation
	 * @var SPMeetingsTypeTimeZoneInf
	 */
	public $timeZoneInformation;
	/**
	 * Constructor
	 * @param string title
	 * @param string templateName
	 * @param unsignedInt lcid
	 * @param SPMeetingsTypeTimeZoneInf timeZoneInformation
	 * @return SPMeetingsTypeCreateWorkspace
	 */
	public function __construct($_title = null,$_templateName = null,$_lcid = null,$_timeZoneInformation = null)
	{
		parent::__construct(array('title'=>$_title,'templateName'=>$_templateName,'lcid'=>$_lcid,'timeZoneInformation'=>$_timeZoneInformation));
	}
	/**
	 * Set title
	 * @param string title
	 * @return string
	 */
	public function setTitle($_title)
	{
		return ($this->title = $_title);
	}
	/**
	 * Get title
	 * @return string
	 */
	public function getTitle()
	{
		return $this->title;
	}
	/**
	 * Set templateName
	 * @param string templateName
	 * @return string
	 */
	public function setTemplateName($_templateName)
	{
		return ($this->templateName = $_templateName);
	}
	/**
	 * Get templateName
	 * @return string
	 */
	public function getTemplateName()
	{
		return $this->templateName;
	}
	/**
	 * Set lcid
	 * @param unsignedInt lcid
	 * @return unsignedInt
	 */
	public function setLcid($_lcid)
	{
		return ($this->lcid = $_lcid);
	}
	/**
	 * Get lcid
	 * @return unsignedInt
	 */
	public function getLcid()
	{
		return $this->lcid;
	}
	/**
	 * Set timeZoneInformation
	 * @param TimeZoneInf timeZoneInformation
	 * @return TimeZoneInf
	 */
	public function setTimeZoneInformation($_timeZoneInformation)
	{
		return ($this->timeZoneInformation = $_timeZoneInformation);
	}
	/**
	 * Get timeZoneInformation
	 * @return SPMeetingsTypeTimeZoneInf
	 */
	public function getTimeZoneInformation()
	{
		return $this->timeZoneInformation;
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