<?php
/**
 * Class file for OvhTypeDedicatedDelServiceMonitoringAlert
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedDelServiceMonitoringAlert
 * @date 02/07/2012
 */
class OvhTypeDedicatedDelServiceMonitoringAlert extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The ip
	 * @var string
	 */
	public $ip;
	/**
	 * The port
	 * @var int
	 */
	public $port;
	/**
	 * The itemId
	 * @var int
	 */
	public $itemId;
	/**
	 * The media
	 * @var string
	 */
	public $media;
	/**
	 * The destination
	 * @var string
	 */
	public $destination;
	/**
	 * Constructor
	 * @param string session
	 * @param string ip
	 * @param int port
	 * @param int itemId
	 * @param string media
	 * @param string destination
	 * @return OvhTypeDedicatedDelServiceMonitoringAlert
	 */
	public function __construct($_session = null,$_ip = null,$_port = null,$_itemId = null,$_media = null,$_destination = null)
	{
		parent::__construct(array('session'=>$_session,'ip'=>$_ip,'port'=>$_port,'itemId'=>$_itemId,'media'=>$_media,'destination'=>$_destination));
	}
	/**
	 * Set session
	 * @param string session
	 * @return string
	 */
	public function setSession($_session)
	{
		return ($this->session = $_session);
	}
	/**
	 * Get session
	 * @return string
	 */
	public function getSession()
	{
		return $this->session;
	}
	/**
	 * Set ip
	 * @param string ip
	 * @return string
	 */
	public function setIp($_ip)
	{
		return ($this->ip = $_ip);
	}
	/**
	 * Get ip
	 * @return string
	 */
	public function getIp()
	{
		return $this->ip;
	}
	/**
	 * Set port
	 * @param int port
	 * @return int
	 */
	public function setPort($_port)
	{
		return ($this->port = $_port);
	}
	/**
	 * Get port
	 * @return int
	 */
	public function getPort()
	{
		return $this->port;
	}
	/**
	 * Set itemId
	 * @param int itemId
	 * @return int
	 */
	public function setItemId($_itemId)
	{
		return ($this->itemId = $_itemId);
	}
	/**
	 * Get itemId
	 * @return int
	 */
	public function getItemId()
	{
		return $this->itemId;
	}
	/**
	 * Set media
	 * @param string media
	 * @return string
	 */
	public function setMedia($_media)
	{
		return ($this->media = $_media);
	}
	/**
	 * Get media
	 * @return string
	 */
	public function getMedia()
	{
		return $this->media;
	}
	/**
	 * Set destination
	 * @param string destination
	 * @return string
	 */
	public function setDestination($_destination)
	{
		return ($this->destination = $_destination);
	}
	/**
	 * Get destination
	 * @return string
	 */
	public function getDestination()
	{
		return $this->destination;
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