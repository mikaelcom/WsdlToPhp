<?php
/**
 * Class file for EbayTradingTypeSchedulingInfoType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSchedulingInfoType
 * Documentation : Contains information for scheduling limits for the user.
 * @date 04/07/2012
 */
class EbayTradingTypeSchedulingInfoType extends EbayTradingWsdlClass
{
	/**
	 * The MaxScheduledMinutes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Maximum number of minutes that a listing may be scheduled in advance of its going live.
	 * @var int
	 */
	public $MaxScheduledMinutes;
	/**
	 * The MinScheduledMinutes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Minimum number of minutes that a listing may be scheduled in advance of its going live.
	 * @var int
	 */
	public $MinScheduledMinutes;
	/**
	 * The MaxScheduledItems
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Maximum number of Items that a user may schedule.
	 * @var int
	 */
	public $MaxScheduledItems;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param int MaxScheduledMinutes
	 * @param int MinScheduledMinutes
	 * @param int MaxScheduledItems
	 * @param DOMDocument any
	 * @return EbayTradingTypeSchedulingInfoType
	 */
	public function __construct($_MaxScheduledMinutes = null,$_MinScheduledMinutes = null,$_MaxScheduledItems = null,$_any = null)
	{
		parent::__construct(array('MaxScheduledMinutes'=>$_MaxScheduledMinutes,'MinScheduledMinutes'=>$_MinScheduledMinutes,'MaxScheduledItems'=>$_MaxScheduledItems,'any'=>$_any));
	}
	/**
	 * Set MaxScheduledMinutes
	 * @param int MaxScheduledMinutes
	 * @return int
	 */
	public function setMaxScheduledMinutes($_MaxScheduledMinutes)
	{
		return ($this->MaxScheduledMinutes = $_MaxScheduledMinutes);
	}
	/**
	 * Get MaxScheduledMinutes
	 * @return int
	 */
	public function getMaxScheduledMinutes()
	{
		return $this->MaxScheduledMinutes;
	}
	/**
	 * Set MinScheduledMinutes
	 * @param int MinScheduledMinutes
	 * @return int
	 */
	public function setMinScheduledMinutes($_MinScheduledMinutes)
	{
		return ($this->MinScheduledMinutes = $_MinScheduledMinutes);
	}
	/**
	 * Get MinScheduledMinutes
	 * @return int
	 */
	public function getMinScheduledMinutes()
	{
		return $this->MinScheduledMinutes;
	}
	/**
	 * Set MaxScheduledItems
	 * @param int MaxScheduledItems
	 * @return int
	 */
	public function setMaxScheduledItems($_MaxScheduledItems)
	{
		return ($this->MaxScheduledItems = $_MaxScheduledItems);
	}
	/**
	 * Get MaxScheduledItems
	 * @return int
	 */
	public function getMaxScheduledItems()
	{
		return $this->MaxScheduledItems;
	}
	/**
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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