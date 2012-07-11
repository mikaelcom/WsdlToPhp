<?php
/**
 * Class file for OvhTypeRpsGetIOStatsDetailStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeRpsGetIOStatsDetailStruct
 * @date 02/07/2012
 */
class OvhTypeRpsGetIOStatsDetailStruct extends OvhWsdlClass
{
	/**
	 * The serviceTime
	 * @var OvhTypeRpsGetIOStatsDetailRawStruct
	 */
	public $serviceTime;
	/**
	 * The IoRequests
	 * @var OvhTypeRpsGetIOStatsDetailIoRequestsStruct
	 */
	public $IoRequests;
	/**
	 * Constructor
	 * @param OvhTypeRpsGetIOStatsDetailRawStruct serviceTime
	 * @param OvhTypeRpsGetIOStatsDetailIoRequestsStruct IoRequests
	 * @return OvhTypeRpsGetIOStatsDetailStruct
	 */
	public function __construct($_serviceTime = null,$_IoRequests = null)
	{
		parent::__construct(array('serviceTime'=>$_serviceTime,'IoRequests'=>$_IoRequests));
	}
	/**
	 * Set serviceTime
	 * @param rpsGetIOStatsDetailRawStruct serviceTime
	 * @return rpsGetIOStatsDetailRawStruct
	 */
	public function setServiceTime($_serviceTime)
	{
		return ($this->serviceTime = $_serviceTime);
	}
	/**
	 * Get serviceTime
	 * @return OvhTyperpsGetIOStatsDetailRawStruct
	 */
	public function getServiceTime()
	{
		return $this->serviceTime;
	}
	/**
	 * Set IoRequests
	 * @param rpsGetIOStatsDetailIoRequestsStruct IoRequests
	 * @return rpsGetIOStatsDetailIoRequestsStruct
	 */
	public function setIoRequests($_IoRequests)
	{
		return ($this->IoRequests = $_IoRequests);
	}
	/**
	 * Get IoRequests
	 * @return OvhTyperpsGetIOStatsDetailIoRequestsStruct
	 */
	public function getIoRequests()
	{
		return $this->IoRequests;
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