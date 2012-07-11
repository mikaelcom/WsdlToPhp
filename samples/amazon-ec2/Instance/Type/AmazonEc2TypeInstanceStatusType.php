<?php
/**
 * Class file for AmazonEc2TypeInstanceStatusType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeInstanceStatusType
 * @date 10/07/2012
 */
class AmazonEc2TypeInstanceStatusType extends AmazonEc2WsdlClass
{
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The details
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeInstanceStatusDetailsSetType
	 */
	public $details;
	/**
	 * Constructor
	 * @param string status
	 * @param AmazonEc2TypeInstanceStatusDetailsSetType details
	 * @return AmazonEc2TypeInstanceStatusType
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
	 * @param InstanceStatusDetailsSetType details
	 * @return InstanceStatusDetailsSetType
	 */
	public function setDetails($_details)
	{
		return ($this->details = $_details);
	}
	/**
	 * Get details
	 * @return AmazonEc2TypeInstanceStatusDetailsSetType
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