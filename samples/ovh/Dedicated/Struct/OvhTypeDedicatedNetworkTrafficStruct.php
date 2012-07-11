<?php
/**
 * Class file for OvhTypeDedicatedNetworkTrafficStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedNetworkTrafficStruct
 * @date 02/07/2012
 */
class OvhTypeDedicatedNetworkTrafficStruct extends OvhWsdlClass
{
	/**
	 * The lastUpdate
	 * @var string
	 */
	public $lastUpdate;
	/**
	 * The currentQuota
	 * @var OvhTypeDedicatedNetworkTrafficDetailsStruct
	 */
	public $currentQuota;
	/**
	 * The monthlyTraffic
	 * @var OvhTypeDedicatedNetworkTrafficDetailsStruct
	 */
	public $monthlyTraffic;
	/**
	 * The nextTrafficReset
	 * @var string
	 */
	public $nextTrafficReset;
	/**
	 * The monthlyQuota
	 * @var string
	 */
	public $monthlyQuota;
	/**
	 * The nextQuotaReset
	 * @var string
	 */
	public $nextQuotaReset;
	/**
	 * Constructor
	 * @param string lastUpdate
	 * @param OvhTypeDedicatedNetworkTrafficDetailsStruct currentQuota
	 * @param OvhTypeDedicatedNetworkTrafficDetailsStruct monthlyTraffic
	 * @param string nextTrafficReset
	 * @param string monthlyQuota
	 * @param string nextQuotaReset
	 * @return OvhTypeDedicatedNetworkTrafficStruct
	 */
	public function __construct($_lastUpdate = null,$_currentQuota = null,$_monthlyTraffic = null,$_nextTrafficReset = null,$_monthlyQuota = null,$_nextQuotaReset = null)
	{
		parent::__construct(array('lastUpdate'=>$_lastUpdate,'currentQuota'=>$_currentQuota,'monthlyTraffic'=>$_monthlyTraffic,'nextTrafficReset'=>$_nextTrafficReset,'monthlyQuota'=>$_monthlyQuota,'nextQuotaReset'=>$_nextQuotaReset));
	}
	/**
	 * Set lastUpdate
	 * @param string lastUpdate
	 * @return string
	 */
	public function setLastUpdate($_lastUpdate)
	{
		return ($this->lastUpdate = $_lastUpdate);
	}
	/**
	 * Get lastUpdate
	 * @return string
	 */
	public function getLastUpdate()
	{
		return $this->lastUpdate;
	}
	/**
	 * Set currentQuota
	 * @param dedicatedNetworkTrafficDetailsStruct currentQuota
	 * @return dedicatedNetworkTrafficDetailsStruct
	 */
	public function setCurrentQuota($_currentQuota)
	{
		return ($this->currentQuota = $_currentQuota);
	}
	/**
	 * Get currentQuota
	 * @return OvhTypededicatedNetworkTrafficDetailsStruct
	 */
	public function getCurrentQuota()
	{
		return $this->currentQuota;
	}
	/**
	 * Set monthlyTraffic
	 * @param dedicatedNetworkTrafficDetailsStruct monthlyTraffic
	 * @return dedicatedNetworkTrafficDetailsStruct
	 */
	public function setMonthlyTraffic($_monthlyTraffic)
	{
		return ($this->monthlyTraffic = $_monthlyTraffic);
	}
	/**
	 * Get monthlyTraffic
	 * @return OvhTypededicatedNetworkTrafficDetailsStruct
	 */
	public function getMonthlyTraffic()
	{
		return $this->monthlyTraffic;
	}
	/**
	 * Set nextTrafficReset
	 * @param string nextTrafficReset
	 * @return string
	 */
	public function setNextTrafficReset($_nextTrafficReset)
	{
		return ($this->nextTrafficReset = $_nextTrafficReset);
	}
	/**
	 * Get nextTrafficReset
	 * @return string
	 */
	public function getNextTrafficReset()
	{
		return $this->nextTrafficReset;
	}
	/**
	 * Set monthlyQuota
	 * @param string monthlyQuota
	 * @return string
	 */
	public function setMonthlyQuota($_monthlyQuota)
	{
		return ($this->monthlyQuota = $_monthlyQuota);
	}
	/**
	 * Get monthlyQuota
	 * @return string
	 */
	public function getMonthlyQuota()
	{
		return $this->monthlyQuota;
	}
	/**
	 * Set nextQuotaReset
	 * @param string nextQuotaReset
	 * @return string
	 */
	public function setNextQuotaReset($_nextQuotaReset)
	{
		return ($this->nextQuotaReset = $_nextQuotaReset);
	}
	/**
	 * Get nextQuotaReset
	 * @return string
	 */
	public function getNextQuotaReset()
	{
		return $this->nextQuotaReset;
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