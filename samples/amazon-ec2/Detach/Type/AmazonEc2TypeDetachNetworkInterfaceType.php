<?php
/**
 * Class file for AmazonEc2TypeDetachNetworkInterfaceType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDetachNetworkInterfaceType
 * @date 10/07/2012
 */
class AmazonEc2TypeDetachNetworkInterfaceType extends AmazonEc2WsdlClass
{
	/**
	 * The attachmentId
	 * @var string
	 */
	public $attachmentId;
	/**
	 * The force
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var boolean
	 */
	public $force;
	/**
	 * Constructor
	 * @param string attachmentId
	 * @param boolean force
	 * @return AmazonEc2TypeDetachNetworkInterfaceType
	 */
	public function __construct($_attachmentId = null,$_force = null)
	{
		parent::__construct(array('attachmentId'=>$_attachmentId,'force'=>$_force));
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
	 * Set force
	 * @param boolean force
	 * @return boolean
	 */
	public function setForce($_force)
	{
		return ($this->force = $_force);
	}
	/**
	 * Get force
	 * @return boolean
	 */
	public function getForce()
	{
		return $this->force;
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