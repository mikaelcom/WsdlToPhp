<?php
/**
 * Class file for AmazonEc2TypeCancelSpotInstanceRequestsType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeCancelSpotInstanceRequestsType
 * @date 10/07/2012
 */
class AmazonEc2TypeCancelSpotInstanceRequestsType extends AmazonEc2WsdlClass
{
	/**
	 * The spotInstanceRequestIdSet
	 * @var AmazonEc2TypeSpotInstanceRequestIdSetType
	 */
	public $spotInstanceRequestIdSet;
	/**
	 * Constructor
	 * @param AmazonEc2TypeSpotInstanceRequestIdSetType spotInstanceRequestIdSet
	 * @return AmazonEc2TypeCancelSpotInstanceRequestsType
	 */
	public function __construct($_spotInstanceRequestIdSet = null)
	{
		parent::__construct(array('spotInstanceRequestIdSet'=>$_spotInstanceRequestIdSet));
	}
	/**
	 * Set spotInstanceRequestIdSet
	 * @param SpotInstanceRequestIdSetType spotInstanceRequestIdSet
	 * @return SpotInstanceRequestIdSetType
	 */
	public function setSpotInstanceRequestIdSet($_spotInstanceRequestIdSet)
	{
		return ($this->spotInstanceRequestIdSet = $_spotInstanceRequestIdSet);
	}
	/**
	 * Get spotInstanceRequestIdSet
	 * @return AmazonEc2TypeSpotInstanceRequestIdSetType
	 */
	public function getSpotInstanceRequestIdSet()
	{
		return $this->spotInstanceRequestIdSet;
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