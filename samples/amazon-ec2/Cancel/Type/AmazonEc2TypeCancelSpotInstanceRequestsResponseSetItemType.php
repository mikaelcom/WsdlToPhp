<?php
/**
 * Class file for AmazonEc2TypeCancelSpotInstanceRequestsResponseSetItemType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeCancelSpotInstanceRequestsResponseSetItemType
 * @date 10/07/2012
 */
class AmazonEc2TypeCancelSpotInstanceRequestsResponseSetItemType extends AmazonEc2WsdlClass
{
	/**
	 * The spotInstanceRequestId
	 * @var string
	 */
	public $spotInstanceRequestId;
	/**
	 * The state
	 * @var string
	 */
	public $state;
	/**
	 * Constructor
	 * @param string spotInstanceRequestId
	 * @param string state
	 * @return AmazonEc2TypeCancelSpotInstanceRequestsResponseSetItemType
	 */
	public function __construct($_spotInstanceRequestId = null,$_state = null)
	{
		parent::__construct(array('spotInstanceRequestId'=>$_spotInstanceRequestId,'state'=>$_state));
	}
	/**
	 * Set spotInstanceRequestId
	 * @param string spotInstanceRequestId
	 * @return string
	 */
	public function setSpotInstanceRequestId($_spotInstanceRequestId)
	{
		return ($this->spotInstanceRequestId = $_spotInstanceRequestId);
	}
	/**
	 * Get spotInstanceRequestId
	 * @return string
	 */
	public function getSpotInstanceRequestId()
	{
		return $this->spotInstanceRequestId;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>