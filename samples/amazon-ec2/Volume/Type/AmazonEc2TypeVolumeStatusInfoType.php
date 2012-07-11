<?php
/**
 * Class file for AmazonEc2TypeVolumeStatusInfoType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeVolumeStatusInfoType
 * @date 10/07/2012
 */
class AmazonEc2TypeVolumeStatusInfoType extends AmazonEc2WsdlClass
{
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The details
	 * @var AmazonEc2TypeVolumeStatusDetailsSetType
	 */
	public $details;
	/**
	 * Constructor
	 * @param string status
	 * @param AmazonEc2TypeVolumeStatusDetailsSetType details
	 * @return AmazonEc2TypeVolumeStatusInfoType
	 */
	public function __construct($_status = null,$_details = null)
	{
		parent::__construct(array('status'=>$_status,'details'=>$_details));
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
	 * Set details
	 * @param VolumeStatusDetailsSetType details
	 * @return VolumeStatusDetailsSetType
	 */
	public function setDetails($_details)
	{
		return ($this->details = $_details);
	}
	/**
	 * Get details
	 * @return AmazonEc2TypeVolumeStatusDetailsSetType
	 */
	public function getDetails()
	{
		return $this->details;
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