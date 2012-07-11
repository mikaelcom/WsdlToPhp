<?php
/**
 * Class file for AmazonEc2TypeVolumeStatusEventItemType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeVolumeStatusEventItemType
 * @date 10/07/2012
 */
class AmazonEc2TypeVolumeStatusEventItemType extends AmazonEc2WsdlClass
{
	/**
	 * The description
	 * @var string
	 */
	public $description;
	/**
	 * The notBefore
	 * @var dateTime
	 */
	public $notBefore;
	/**
	 * The notAfter
	 * @var dateTime
	 */
	public $notAfter;
	/**
	 * The eventId
	 * @var string
	 */
	public $eventId;
	/**
	 * The eventType
	 * @var string
	 */
	public $eventType;
	/**
	 * Constructor
	 * @param string description
	 * @param dateTime notBefore
	 * @param dateTime notAfter
	 * @param string eventId
	 * @param string eventType
	 * @return AmazonEc2TypeVolumeStatusEventItemType
	 */
	public function __construct($_description = null,$_notBefore = null,$_notAfter = null,$_eventId = null,$_eventType = null)
	{
		parent::__construct(array('description'=>$_description,'notBefore'=>$_notBefore,'notAfter'=>$_notAfter,'eventId'=>$_eventId,'eventType'=>$_eventType));
	}
	/**
	 * Set description
	 * @param string description
	 * @return string
	 */
	public function setDescription($_description)
	{
		return ($this->description = $_description);
	}
	/**
	 * Get description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
	}
	/**
	 * Set notBefore
	 * @param dateTime notBefore
	 * @return dateTime
	 */
	public function setNotBefore($_notBefore)
	{
		return ($this->notBefore = $_notBefore);
	}
	/**
	 * Get notBefore
	 * @return dateTime
	 */
	public function getNotBefore()
	{
		return $this->notBefore;
	}
	/**
	 * Set notAfter
	 * @param dateTime notAfter
	 * @return dateTime
	 */
	public function setNotAfter($_notAfter)
	{
		return ($this->notAfter = $_notAfter);
	}
	/**
	 * Get notAfter
	 * @return dateTime
	 */
	public function getNotAfter()
	{
		return $this->notAfter;
	}
	/**
	 * Set eventId
	 * @param string eventId
	 * @return string
	 */
	public function setEventId($_eventId)
	{
		return ($this->eventId = $_eventId);
	}
	/**
	 * Get eventId
	 * @return string
	 */
	public function getEventId()
	{
		return $this->eventId;
	}
	/**
	 * Set eventType
	 * @param string eventType
	 * @return string
	 */
	public function setEventType($_eventType)
	{
		return ($this->eventType = $_eventType);
	}
	/**
	 * Get eventType
	 * @return string
	 */
	public function getEventType()
	{
		return $this->eventType;
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