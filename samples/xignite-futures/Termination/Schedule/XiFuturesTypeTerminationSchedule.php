<?php
/**
 * Class file for XiFuturesTypeTerminationSchedule
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeTerminationSchedule
 * @date 08/07/2012
 */
class XiFuturesTypeTerminationSchedule extends XiFuturesTypeCommon
{
	/**
	 * The Future
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeFuture
	 */
	public $Future;
	/**
	 * The TerminationDay
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TerminationDay;
	/**
	 * The NoticeDay
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $NoticeDay;
	/**
	 * The AllocationOfDeliveries
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AllocationOfDeliveries;
	/**
	 * The FirstDeliveryDay
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FirstDeliveryDay;
	/**
	 * The LastDeliveryday
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LastDeliveryday;
	/**
	 * The Status
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeStatus
	 */
	public $Status;
	/**
	 * Constructor
	 * @param XiFuturesTypeFuture Future
	 * @param string TerminationDay
	 * @param string NoticeDay
	 * @param string AllocationOfDeliveries
	 * @param string FirstDeliveryDay
	 * @param string LastDeliveryday
	 * @param XiFuturesTypeStatus Status
	 * @return XiFuturesTypeTerminationSchedule
	 */
	public function __construct($_Future = null,$_TerminationDay = null,$_NoticeDay = null,$_AllocationOfDeliveries = null,$_FirstDeliveryDay = null,$_LastDeliveryday = null,$_Status)
	{
		XiFuturesWsdlClass::__construct(array('Future'=>$_Future,'TerminationDay'=>$_TerminationDay,'NoticeDay'=>$_NoticeDay,'AllocationOfDeliveries'=>$_AllocationOfDeliveries,'FirstDeliveryDay'=>$_FirstDeliveryDay,'LastDeliveryday'=>$_LastDeliveryday,'Status'=>$_Status));
	}
	/**
	 * Set Future
	 * @param Future Future
	 * @return Future
	 */
	public function setFuture($_Future)
	{
		return ($this->Future = $_Future);
	}
	/**
	 * Get Future
	 * @return XiFuturesTypeFuture
	 */
	public function getFuture()
	{
		return $this->Future;
	}
	/**
	 * Set TerminationDay
	 * @param string TerminationDay
	 * @return string
	 */
	public function setTerminationDay($_TerminationDay)
	{
		return ($this->TerminationDay = $_TerminationDay);
	}
	/**
	 * Get TerminationDay
	 * @return string
	 */
	public function getTerminationDay()
	{
		return $this->TerminationDay;
	}
	/**
	 * Set NoticeDay
	 * @param string NoticeDay
	 * @return string
	 */
	public function setNoticeDay($_NoticeDay)
	{
		return ($this->NoticeDay = $_NoticeDay);
	}
	/**
	 * Get NoticeDay
	 * @return string
	 */
	public function getNoticeDay()
	{
		return $this->NoticeDay;
	}
	/**
	 * Set AllocationOfDeliveries
	 * @param string AllocationOfDeliveries
	 * @return string
	 */
	public function setAllocationOfDeliveries($_AllocationOfDeliveries)
	{
		return ($this->AllocationOfDeliveries = $_AllocationOfDeliveries);
	}
	/**
	 * Get AllocationOfDeliveries
	 * @return string
	 */
	public function getAllocationOfDeliveries()
	{
		return $this->AllocationOfDeliveries;
	}
	/**
	 * Set FirstDeliveryDay
	 * @param string FirstDeliveryDay
	 * @return string
	 */
	public function setFirstDeliveryDay($_FirstDeliveryDay)
	{
		return ($this->FirstDeliveryDay = $_FirstDeliveryDay);
	}
	/**
	 * Get FirstDeliveryDay
	 * @return string
	 */
	public function getFirstDeliveryDay()
	{
		return $this->FirstDeliveryDay;
	}
	/**
	 * Set LastDeliveryday
	 * @param string LastDeliveryday
	 * @return string
	 */
	public function setLastDeliveryday($_LastDeliveryday)
	{
		return ($this->LastDeliveryday = $_LastDeliveryday);
	}
	/**
	 * Get LastDeliveryday
	 * @return string
	 */
	public function getLastDeliveryday()
	{
		return $this->LastDeliveryday;
	}
	/**
	 * Set Status
	 * @param Status Status
	 * @return Status
	 */
	public function setStatus($_Status)
	{
		return ($this->Status = XiFuturesTypeStatus::valueIsValid($_Status)?$_Status:null);
	}
	/**
	 * Get Status
	 * @return XiFuturesTypeStatus
	 */
	public function getStatus()
	{
		return $this->Status;
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