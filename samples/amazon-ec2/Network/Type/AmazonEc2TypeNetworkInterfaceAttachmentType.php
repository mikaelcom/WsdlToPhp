<?php
/**
 * Class file for AmazonEc2TypeNetworkInterfaceAttachmentType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeNetworkInterfaceAttachmentType
 * @date 10/07/2012
 */
class AmazonEc2TypeNetworkInterfaceAttachmentType extends AmazonEc2WsdlClass
{
	/**
	 * The attachmentId
	 * @var string
	 */
	public $attachmentId;
	/**
	 * The instanceId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $instanceId;
	/**
	 * The instanceOwnerId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $instanceOwnerId;
	/**
	 * The deviceIndex
	 * @var int
	 */
	public $deviceIndex;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The attachTime
	 * @var dateTime
	 */
	public $attachTime;
	/**
	 * The deleteOnTermination
	 * @var boolean
	 */
	public $deleteOnTermination;
	/**
	 * Constructor
	 * @param string attachmentId
	 * @param string instanceId
	 * @param string instanceOwnerId
	 * @param int deviceIndex
	 * @param string status
	 * @param dateTime attachTime
	 * @param boolean deleteOnTermination
	 * @return AmazonEc2TypeNetworkInterfaceAttachmentType
	 */
	public function __construct($_attachmentId = null,$_instanceId = null,$_instanceOwnerId = null,$_deviceIndex = null,$_status = null,$_attachTime = null,$_deleteOnTermination = null)
	{
		parent::__construct(array('attachmentId'=>$_attachmentId,'instanceId'=>$_instanceId,'instanceOwnerId'=>$_instanceOwnerId,'deviceIndex'=>$_deviceIndex,'status'=>$_status,'attachTime'=>$_attachTime,'deleteOnTermination'=>$_deleteOnTermination));
	}
	/**
	 * Set attachmentId
	 * @param string attachmentId
	 * @return string
	 */
	public function setAttachmentId($_attachmentId)
	{
		return ($this->attachmentId = $_attachmentId);
	}
	/**
	 * Get attachmentId
	 * @return string
	 */
	public function getAttachmentId()
	{
		return $this->attachmentId;
	}
	/**
	 * Set instanceId
	 * @param string instanceId
	 * @return string
	 */
	public function setInstanceId($_instanceId)
	{
		return ($this->instanceId = $_instanceId);
	}
	/**
	 * Get instanceId
	 * @return string
	 */
	public function getInstanceId()
	{
		return $this->instanceId;
	}
	/**
	 * Set instanceOwnerId
	 * @param string instanceOwnerId
	 * @return string
	 */
	public function setInstanceOwnerId($_instanceOwnerId)
	{
		return ($this->instanceOwnerId = $_instanceOwnerId);
	}
	/**
	 * Get instanceOwnerId
	 * @return string
	 */
	public function getInstanceOwnerId()
	{
		return $this->instanceOwnerId;
	}
	/**
	 * Set deviceIndex
	 * @param int deviceIndex
	 * @return int
	 */
	public function setDeviceIndex($_deviceIndex)
	{
		return ($this->deviceIndex = $_deviceIndex);
	}
	/**
	 * Get deviceIndex
	 * @return int
	 */
	public function getDeviceIndex()
	{
		return $this->deviceIndex;
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
	 * Set attachTime
	 * @param dateTime attachTime
	 * @return dateTime
	 */
	public function setAttachTime($_attachTime)
	{
		return ($this->attachTime = $_attachTime);
	}
	/**
	 * Get attachTime
	 * @return dateTime
	 */
	public function getAttachTime()
	{
		return $this->attachTime;
	}
	/**
	 * Set deleteOnTermination
	 * @param boolean deleteOnTermination
	 * @return boolean
	 */
	public function setDeleteOnTermination($_deleteOnTermination)
	{
		return ($this->deleteOnTermination = $_deleteOnTermination);
	}
	/**
	 * Get deleteOnTermination
	 * @return boolean
	 */
	public function getDeleteOnTermination()
	{
		return $this->deleteOnTermination;
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