<?php
/**
 * Class file for AmazonEc2TypeInstanceEbsBlockDeviceType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeInstanceEbsBlockDeviceType
 * @date 10/07/2012
 */
class AmazonEc2TypeInstanceEbsBlockDeviceType extends AmazonEc2WsdlClass
{
	/**
	 * The volumeId
	 * @var string
	 */
	public $volumeId;
	/**
	 * The deleteOnTermination
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var boolean
	 */
	public $deleteOnTermination;
	/**
	 * Constructor
	 * @param string volumeId
	 * @param boolean deleteOnTermination
	 * @return AmazonEc2TypeInstanceEbsBlockDeviceType
	 */
	public function __construct($_volumeId = null,$_deleteOnTermination = null)
	{
		parent::__construct(array('volumeId'=>$_volumeId,'deleteOnTermination'=>$_deleteOnTermination));
	}
	/**
	 * Set volumeId
	 * @param string volumeId
	 * @return string
	 */
	public function setVolumeId($_volumeId)
	{
		return ($this->volumeId = $_volumeId);
	}
	/**
	 * Get volumeId
	 * @return string
	 */
	public function getVolumeId()
	{
		return $this->volumeId;
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