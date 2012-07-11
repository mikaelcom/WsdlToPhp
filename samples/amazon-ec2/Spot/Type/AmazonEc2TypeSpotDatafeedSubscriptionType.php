<?php
/**
 * Class file for AmazonEc2TypeSpotDatafeedSubscriptionType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeSpotDatafeedSubscriptionType
 * @date 10/07/2012
 */
class AmazonEc2TypeSpotDatafeedSubscriptionType extends AmazonEc2WsdlClass
{
	/**
	 * The ownerId
	 * @var string
	 */
	public $ownerId;
	/**
	 * The bucket
	 * @var string
	 */
	public $bucket;
	/**
	 * The prefix
	 * @var string
	 */
	public $prefix;
	/**
	 * The state
	 * @var string
	 */
	public $state;
	/**
	 * The fault
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeSpotInstanceStateFaultType
	 */
	public $fault;
	/**
	 * Constructor
	 * @param string ownerId
	 * @param string bucket
	 * @param string prefix
	 * @param string state
	 * @param AmazonEc2TypeSpotInstanceStateFaultType fault
	 * @return AmazonEc2TypeSpotDatafeedSubscriptionType
	 */
	public function __construct($_ownerId = null,$_bucket = null,$_prefix = null,$_state = null,$_fault = null)
	{
		parent::__construct(array('ownerId'=>$_ownerId,'bucket'=>$_bucket,'prefix'=>$_prefix,'state'=>$_state,'fault'=>$_fault));
	}
	/**
	 * Set ownerId
	 * @param string ownerId
	 * @return string
	 */
	public function setOwnerId($_ownerId)
	{
		return ($this->ownerId = $_ownerId);
	}
	/**
	 * Get ownerId
	 * @return string
	 */
	public function getOwnerId()
	{
		return $this->ownerId;
	}
	/**
	 * Set bucket
	 * @param string bucket
	 * @return string
	 */
	public function setBucket($_bucket)
	{
		return ($this->bucket = $_bucket);
	}
	/**
	 * Get bucket
	 * @return string
	 */
	public function getBucket()
	{
		return $this->bucket;
	}
	/**
	 * Set prefix
	 * @param string prefix
	 * @return string
	 */
	public function setPrefix($_prefix)
	{
		return ($this->prefix = $_prefix);
	}
	/**
	 * Get prefix
	 * @return string
	 */
	public function getPrefix()
	{
		return $this->prefix;
	}
	/**
	 * Set state
	 * @param string state
	 * @return string
	 */
	public function setState($_state)
	{
		return ($this->state = $_state);
	}
	/**
	 * Get state
	 * @return string
	 */
	public function getState()
	{
		return $this->state;
	}
	/**
	 * Set fault
	 * @param SpotInstanceStateFaultType fault
	 * @return SpotInstanceStateFaultType
	 */
	public function setFault($_fault)
	{
		return ($this->fault = $_fault);
	}
	/**
	 * Get fault
	 * @return AmazonEc2TypeSpotInstanceStateFaultType
	 */
	public function getFault()
	{
		return $this->fault;
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