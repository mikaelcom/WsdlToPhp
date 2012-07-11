<?php
/**
 * Class file for EbayTradingTypeReminderCustomizationType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeReminderCustomizationType
 * Documentation : Specifies how to return certain reminder types from the user's My eBay account.
 * @date 04/07/2012
 */
class EbayTradingTypeReminderCustomizationType extends EbayTradingWsdlClass
{
	/**
	 * The DurationInDays
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The length of time the reminder has existed in the user's My eBay account, in days. Valid values are 1-60.
	 * @var int
	 */
	public $DurationInDays;
	/**
	 * The Include
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Whether to include information about this type of reminder in the response. When true, the container is returned with default input parameters.
	 * @var boolean
	 */
	public $Include;
	/**
	 * Constructor
	 * @param int DurationInDays
	 * @param boolean Include
	 * @return EbayTradingTypeReminderCustomizationType
	 */
	public function __construct($_DurationInDays = null,$_Include = null)
	{
		parent::__construct(array('DurationInDays'=>$_DurationInDays,'Include'=>$_Include));
	}
	/**
	 * Set DurationInDays
	 * @param int DurationInDays
	 * @return int
	 */
	public function setDurationInDays($_DurationInDays)
	{
		return ($this->DurationInDays = $_DurationInDays);
	}
	/**
	 * Get DurationInDays
	 * @return int
	 */
	public function getDurationInDays()
	{
		return $this->DurationInDays;
	}
	/**
	 * Set Include
	 * @param boolean Include
	 * @return boolean
	 */
	public function setInclude($_Include)
	{
		return ($this->Include = $_Include);
	}
	/**
	 * Get Include
	 * @return boolean
	 */
	public function getInclude()
	{
		return $this->Include;
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