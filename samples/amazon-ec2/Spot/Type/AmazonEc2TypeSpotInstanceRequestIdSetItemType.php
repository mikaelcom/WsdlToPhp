<?php
/**
 * Class file for AmazonEc2TypeSpotInstanceRequestIdSetItemType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeSpotInstanceRequestIdSetItemType
 * @date 10/07/2012
 */
class AmazonEc2TypeSpotInstanceRequestIdSetItemType extends AmazonEc2WsdlClass
{
	/**
	 * The spotInstanceRequestId
	 * @var string
	 */
	public $spotInstanceRequestId;
	/**
	 * Constructor
	 * @param string spotInstanceRequestId
	 * @return AmazonEc2TypeSpotInstanceRequestIdSetItemType
	 */
	public function __construct($_spotInstanceRequestId = null)
	{
		parent::__construct(array('spotInstanceRequestId'=>$_spotInstanceRequestId));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>