<?php
/**
 * Class file for AmazonEc2TypeDeleteVolumeType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDeleteVolumeType
 * @date 10/07/2012
 */
class AmazonEc2TypeDeleteVolumeType extends AmazonEc2WsdlClass
{
	/**
	 * The volumeId
	 * @var string
	 */
	public $volumeId;
	/**
	 * Constructor
	 * @param string volumeId
	 * @return AmazonEc2TypeDeleteVolumeType
	 */
	public function __construct($_volumeId = null)
	{
		parent::__construct(array('volumeId'=>$_volumeId));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>