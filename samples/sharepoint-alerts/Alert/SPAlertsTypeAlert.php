<?php
/**
 * Class file for SPAlertsTypeAlert
 * @date 06/07/2012
 */
/**
 * Class SPAlertsTypeAlert
 * @date 06/07/2012
 */
class SPAlertsTypeAlert extends SPAlertsWsdlClass
{
	/**
	 * The Id
	 * @var string
	 */
	public $Id;
	/**
	 * The Title
	 * @var string
	 */
	public $Title;
	/**
	 * The Active
	 * @var boolean
	 */
	public $Active;
	/**
	 * The EventType
	 * @var string
	 */
	public $EventType;
	/**
	 * The AlertForTitle
	 * @var string
	 */
	public $AlertForTitle;
	/**
	 * The AlertForUrl
	 * @var string
	 */
	public $AlertForUrl;
	/**
	 * The EditAlertUrl
	 * @var string
	 */
	public $EditAlertUrl;
	/**
	 * The DeliveryChannels
	 * @var SPAlertsTypeArrayOfDeliveryChannel
	 */
	public $DeliveryChannels;
	/**
	 * Constructor
	 * @param string Id
	 * @param string Title
	 * @param boolean Active
	 * @param string EventType
	 * @param string AlertForTitle
	 * @param string AlertForUrl
	 * @param string EditAlertUrl
	 * @param SPAlertsTypeArrayOfDeliveryChannel DeliveryChannels
	 * @return SPAlertsTypeAlert
	 */
	public function __construct($_Id = null,$_Title = null,$_Active = null,$_EventType = null,$_AlertForTitle = null,$_AlertForUrl = null,$_EditAlertUrl = null,$_DeliveryChannels = null)
	{
		parent::__construct(array('Id'=>$_Id,'Title'=>$_Title,'Active'=>$_Active,'EventType'=>$_EventType,'AlertForTitle'=>$_AlertForTitle,'AlertForUrl'=>$_AlertForUrl,'EditAlertUrl'=>$_EditAlertUrl,'DeliveryChannels'=>new SPAlertsTypeArrayOfDeliveryChannel($_DeliveryChannels)));
	}
	/**
	 * Set Id
	 * @param string Id
	 * @return string
	 */
	public function setId($_Id)
	{
		return ($this->Id = $_Id);
	}
	/**
	 * Get Id
	 * @return string
	 */
	public function getId()
	{
		return $this->Id;
	}
	/**
	 * Set Title
	 * @param string Title
	 * @return string
	 */
	public function setTitle($_Title)
	{
		return ($this->Title = $_Title);
	}
	/**
	 * Get Title
	 * @return string
	 */
	public function getTitle()
	{
		return $this->Title;
	}
	/**
	 * Set Active
	 * @param boolean Active
	 * @return boolean
	 */
	public function setActive($_Active)
	{
		return ($this->Active = $_Active);
	}
	/**
	 * Get Active
	 * @return boolean
	 */
	public function getActive()
	{
		return $this->Active;
	}
	/**
	 * Set EventType
	 * @param string EventType
	 * @return string
	 */
	public function setEventType($_EventType)
	{
		return ($this->EventType = $_EventType);
	}
	/**
	 * Get EventType
	 * @return string
	 */
	public function getEventType()
	{
		return $this->EventType;
	}
	/**
	 * Set AlertForTitle
	 * @param string AlertForTitle
	 * @return string
	 */
	public function setAlertForTitle($_AlertForTitle)
	{
		return ($this->AlertForTitle = $_AlertForTitle);
	}
	/**
	 * Get AlertForTitle
	 * @return string
	 */
	public function getAlertForTitle()
	{
		return $this->AlertForTitle;
	}
	/**
	 * Set AlertForUrl
	 * @param string AlertForUrl
	 * @return string
	 */
	public function setAlertForUrl($_AlertForUrl)
	{
		return ($this->AlertForUrl = $_AlertForUrl);
	}
	/**
	 * Get AlertForUrl
	 * @return string
	 */
	public function getAlertForUrl()
	{
		return $this->AlertForUrl;
	}
	/**
	 * Set EditAlertUrl
	 * @param string EditAlertUrl
	 * @return string
	 */
	public function setEditAlertUrl($_EditAlertUrl)
	{
		return ($this->EditAlertUrl = $_EditAlertUrl);
	}
	/**
	 * Get EditAlertUrl
	 * @return string
	 */
	public function getEditAlertUrl()
	{
		return $this->EditAlertUrl;
	}
	/**
	 * Set DeliveryChannels
	 * @param ArrayOfDeliveryChannel DeliveryChannels
	 * @return ArrayOfDeliveryChannel
	 */
	public function setDeliveryChannels($_DeliveryChannels)
	{
		return ($this->DeliveryChannels = $_DeliveryChannels);
	}
	/**
	 * Get DeliveryChannels
	 * @return SPAlertsTypeArrayOfDeliveryChannel
	 */
	public function getDeliveryChannels()
	{
		return $this->DeliveryChannels;
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