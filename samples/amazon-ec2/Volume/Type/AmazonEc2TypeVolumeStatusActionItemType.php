<?php
/**
 * Class file for AmazonEc2TypeVolumeStatusActionItemType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeVolumeStatusActionItemType
 * @date 10/07/2012
 */
class AmazonEc2TypeVolumeStatusActionItemType extends AmazonEc2WsdlClass
{
	/**
	 * The description
	 * @var string
	 */
	public $description;
	/**
	 * The code
	 * @var string
	 */
	public $code;
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
	 * @param string code
	 * @param string eventId
	 * @param string eventType
	 * @return AmazonEc2TypeVolumeStatusActionItemType
	 */
	public function __construct($_description = null,$_code = null,$_eventId = null,$_eventType = null)
	{
		parent::__construct(array('description'=>$_description,'code'=>$_code,'eventId'=>$_eventId,'eventType'=>$_eventType));
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
	 * Set code
	 * @param string code
	 * @return string
	 */
	public function setCode($_code)
	{
		return ($this->code = $_code);
	}
	/**
	 * Get code
	 * @return string
	 */
	public function getCode()
	{
		return $this->code;
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