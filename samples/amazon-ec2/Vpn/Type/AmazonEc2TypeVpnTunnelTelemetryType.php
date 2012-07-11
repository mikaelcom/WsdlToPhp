<?php
/**
 * Class file for AmazonEc2TypeVpnTunnelTelemetryType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeVpnTunnelTelemetryType
 * @date 10/07/2012
 */
class AmazonEc2TypeVpnTunnelTelemetryType extends AmazonEc2WsdlClass
{
	/**
	 * The outsideIpAddress
	 * @var string
	 */
	public $outsideIpAddress;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The lastStatusChange
	 * @var dateTime
	 */
	public $lastStatusChange;
	/**
	 * The statusMessage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $statusMessage;
	/**
	 * The acceptedRouteCount
	 * @var int
	 */
	public $acceptedRouteCount;
	/**
	 * Constructor
	 * @param string outsideIpAddress
	 * @param string status
	 * @param dateTime lastStatusChange
	 * @param string statusMessage
	 * @param int acceptedRouteCount
	 * @return AmazonEc2TypeVpnTunnelTelemetryType
	 */
	public function __construct($_outsideIpAddress = null,$_status = null,$_lastStatusChange = null,$_statusMessage = null,$_acceptedRouteCount = null)
	{
		parent::__construct(array('outsideIpAddress'=>$_outsideIpAddress,'status'=>$_status,'lastStatusChange'=>$_lastStatusChange,'statusMessage'=>$_statusMessage,'acceptedRouteCount'=>$_acceptedRouteCount));
	}
	/**
	 * Set outsideIpAddress
	 * @param string outsideIpAddress
	 * @return string
	 */
	public function setOutsideIpAddress($_outsideIpAddress)
	{
		return ($this->outsideIpAddress = $_outsideIpAddress);
	}
	/**
	 * Get outsideIpAddress
	 * @return string
	 */
	public function getOutsideIpAddress()
	{
		return $this->outsideIpAddress;
	}
	/**
	 * Set status
	 * @param string status
	 * @return string
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
	}
	/**
	 * Get status
	 * @return string
	 */
	public function getStatus()
	{
		return $this->status;
	}
	/**
	 * Set lastStatusChange
	 * @param dateTime lastStatusChange
	 * @return dateTime
	 */
	public function setLastStatusChange($_lastStatusChange)
	{
		return ($this->lastStatusChange = $_lastStatusChange);
	}
	/**
	 * Get lastStatusChange
	 * @return dateTime
	 */
	public function getLastStatusChange()
	{
		return $this->lastStatusChange;
	}
	/**
	 * Set statusMessage
	 * @param string statusMessage
	 * @return string
	 */
	public function setStatusMessage($_statusMessage)
	{
		return ($this->statusMessage = $_statusMessage);
	}
	/**
	 * Get statusMessage
	 * @return string
	 */
	public function getStatusMessage()
	{
		return $this->statusMessage;
	}
	/**
	 * Set acceptedRouteCount
	 * @param int acceptedRouteCount
	 * @return int
	 */
	public function setAcceptedRouteCount($_acceptedRouteCount)
	{
		return ($this->acceptedRouteCount = $_acceptedRouteCount);
	}
	/**
	 * Get acceptedRouteCount
	 * @return int
	 */
	public function getAcceptedRouteCount()
	{
		return $this->acceptedRouteCount;
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