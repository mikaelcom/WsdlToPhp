<?php
/**
 * Class file for AmazonEc2TypeSpotPriceHistorySetItemType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeSpotPriceHistorySetItemType
 * @date 10/07/2012
 */
class AmazonEc2TypeSpotPriceHistorySetItemType extends AmazonEc2WsdlClass
{
	/**
	 * The instanceType
	 * @var string
	 */
	public $instanceType;
	/**
	 * The productDescription
	 * @var string
	 */
	public $productDescription;
	/**
	 * The spotPrice
	 * @var string
	 */
	public $spotPrice;
	/**
	 * The timestamp
	 * @var dateTime
	 */
	public $timestamp;
	/**
	 * The availabilityZone
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $availabilityZone;
	/**
	 * Constructor
	 * @param string instanceType
	 * @param string productDescription
	 * @param string spotPrice
	 * @param dateTime timestamp
	 * @param string availabilityZone
	 * @return AmazonEc2TypeSpotPriceHistorySetItemType
	 */
	public function __construct($_instanceType = null,$_productDescription = null,$_spotPrice = null,$_timestamp = null,$_availabilityZone = null)
	{
		parent::__construct(array('instanceType'=>$_instanceType,'productDescription'=>$_productDescription,'spotPrice'=>$_spotPrice,'timestamp'=>$_timestamp,'availabilityZone'=>$_availabilityZone));
	}
	/**
	 * Set instanceType
	 * @param string instanceType
	 * @return string
	 */
	public function setInstanceType($_instanceType)
	{
		return ($this->instanceType = $_instanceType);
	}
	/**
	 * Get instanceType
	 * @return string
	 */
	public function getInstanceType()
	{
		return $this->instanceType;
	}
	/**
	 * Set productDescription
	 * @param string productDescription
	 * @return string
	 */
	public function setProductDescription($_productDescription)
	{
		return ($this->productDescription = $_productDescription);
	}
	/**
	 * Get productDescription
	 * @return string
	 */
	public function getProductDescription()
	{
		return $this->productDescription;
	}
	/**
	 * Set spotPrice
	 * @param string spotPrice
	 * @return string
	 */
	public function setSpotPrice($_spotPrice)
	{
		return ($this->spotPrice = $_spotPrice);
	}
	/**
	 * Get spotPrice
	 * @return string
	 */
	public function getSpotPrice()
	{
		return $this->spotPrice;
	}
	/**
	 * Set timestamp
	 * @param dateTime timestamp
	 * @return dateTime
	 */
	public function setTimestamp($_timestamp)
	{
		return ($this->timestamp = $_timestamp);
	}
	/**
	 * Get timestamp
	 * @return dateTime
	 */
	public function getTimestamp()
	{
		return $this->timestamp;
	}
	/**
	 * Set availabilityZone
	 * @param string availabilityZone
	 * @return string
	 */
	public function setAvailabilityZone($_availabilityZone)
	{
		return ($this->availabilityZone = $_availabilityZone);
	}
	/**
	 * Get availabilityZone
	 * @return string
	 */
	public function getAvailabilityZone()
	{
		return $this->availabilityZone;
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