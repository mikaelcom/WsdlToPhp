<?php
/**
 * Class file for EbayTradingTypeNotificationStatisticsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeNotificationStatisticsType
 * Documentation : Summary information about notifications delivered, failed, errors, queued for a given application ID and time period.
 * @date 04/07/2012
 */
class EbayTradingTypeNotificationStatisticsType extends EbayTradingWsdlClass
{
	/**
	 * The DeliveredCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the number of notifications delivered successfully during the given time period.
	 * @var int
	 */
	public $DeliveredCount;
	/**
	 * The QueuedNewCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the number of new notifications that were queued during the given time period.
	 * @var int
	 */
	public $QueuedNewCount;
	/**
	 * The QueuedPendingCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the number of pending notifications in the queue during the given time period.
	 * @var int
	 */
	public $QueuedPendingCount;
	/**
	 * The ExpiredCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the number of notifications that permanently failed during the given time period.
	 * @var int
	 */
	public $ExpiredCount;
	/**
	 * The ErrorCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the number of notifications for which there were delivery errors during the given time period.
	 * @var int
	 */
	public $ErrorCount;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param int DeliveredCount
	 * @param int QueuedNewCount
	 * @param int QueuedPendingCount
	 * @param int ExpiredCount
	 * @param int ErrorCount
	 * @param DOMDocument any
	 * @return EbayTradingTypeNotificationStatisticsType
	 */
	public function __construct($_DeliveredCount = null,$_QueuedNewCount = null,$_QueuedPendingCount = null,$_ExpiredCount = null,$_ErrorCount = null,$_any = null)
	{
		parent::__construct(array('DeliveredCount'=>$_DeliveredCount,'QueuedNewCount'=>$_QueuedNewCount,'QueuedPendingCount'=>$_QueuedPendingCount,'ExpiredCount'=>$_ExpiredCount,'ErrorCount'=>$_ErrorCount,'any'=>$_any));
	}
	/**
	 * Set DeliveredCount
	 * @param int DeliveredCount
	 * @return int
	 */
	public function setDeliveredCount($_DeliveredCount)
	{
		return ($this->DeliveredCount = $_DeliveredCount);
	}
	/**
	 * Get DeliveredCount
	 * @return int
	 */
	public function getDeliveredCount()
	{
		return $this->DeliveredCount;
	}
	/**
	 * Set QueuedNewCount
	 * @param int QueuedNewCount
	 * @return int
	 */
	public function setQueuedNewCount($_QueuedNewCount)
	{
		return ($this->QueuedNewCount = $_QueuedNewCount);
	}
	/**
	 * Get QueuedNewCount
	 * @return int
	 */
	public function getQueuedNewCount()
	{
		return $this->QueuedNewCount;
	}
	/**
	 * Set QueuedPendingCount
	 * @param int QueuedPendingCount
	 * @return int
	 */
	public function setQueuedPendingCount($_QueuedPendingCount)
	{
		return ($this->QueuedPendingCount = $_QueuedPendingCount);
	}
	/**
	 * Get QueuedPendingCount
	 * @return int
	 */
	public function getQueuedPendingCount()
	{
		return $this->QueuedPendingCount;
	}
	/**
	 * Set ExpiredCount
	 * @param int ExpiredCount
	 * @return int
	 */
	public function setExpiredCount($_ExpiredCount)
	{
		return ($this->ExpiredCount = $_ExpiredCount);
	}
	/**
	 * Get ExpiredCount
	 * @return int
	 */
	public function getExpiredCount()
	{
		return $this->ExpiredCount;
	}
	/**
	 * Set ErrorCount
	 * @param int ErrorCount
	 * @return int
	 */
	public function setErrorCount($_ErrorCount)
	{
		return ($this->ErrorCount = $_ErrorCount);
	}
	/**
	 * Get ErrorCount
	 * @return int
	 */
	public function getErrorCount()
	{
		return $this->ErrorCount;
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