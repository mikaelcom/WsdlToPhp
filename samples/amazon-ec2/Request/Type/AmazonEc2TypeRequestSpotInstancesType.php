<?php
/**
 * Class file for AmazonEc2TypeRequestSpotInstancesType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeRequestSpotInstancesType
 * @date 10/07/2012
 */
class AmazonEc2TypeRequestSpotInstancesType extends AmazonEc2WsdlClass
{
	/**
	 * The spotPrice
	 * @var string
	 */
	public $spotPrice;
	/**
	 * The instanceCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var integer
	 */
	public $instanceCount;
	/**
	 * The type
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $type;
	/**
	 * The validFrom
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var dateTime
	 */
	public $validFrom;
	/**
	 * The validUntil
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var dateTime
	 */
	public $validUntil;
	/**
	 * The launchGroup
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $launchGroup;
	/**
	 * The availabilityZoneGroup
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $availabilityZoneGroup;
	/**
	 * The launchSpecification
	 * @var AmazonEc2TypeLaunchSpecificationRequestType
	 */
	public $launchSpecification;
	/**
	 * Constructor
	 * @param string spotPrice
	 * @param integer instanceCount
	 * @param string type
	 * @param dateTime validFrom
	 * @param dateTime validUntil
	 * @param string launchGroup
	 * @param string availabilityZoneGroup
	 * @param AmazonEc2TypeLaunchSpecificationRequestType launchSpecification
	 * @return AmazonEc2TypeRequestSpotInstancesType
	 */
	public function __construct($_spotPrice = null,$_instanceCount = null,$_type = null,$_validFrom = null,$_validUntil = null,$_launchGroup = null,$_availabilityZoneGroup = null,$_launchSpecification = null)
	{
		parent::__construct(array('spotPrice'=>$_spotPrice,'instanceCount'=>$_instanceCount,'type'=>$_type,'validFrom'=>$_validFrom,'validUntil'=>$_validUntil,'launchGroup'=>$_launchGroup,'availabilityZoneGroup'=>$_availabilityZoneGroup,'launchSpecification'=>$_launchSpecification));
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
	 * Set instanceCount
	 * @param integer instanceCount
	 * @return integer
	 */
	public function setInstanceCount($_instanceCount)
	{
		return ($this->instanceCount = $_instanceCount);
	}
	/**
	 * Get instanceCount
	 * @return integer
	 */
	public function getInstanceCount()
	{
		return $this->instanceCount;
	}
	/**
	 * Set type
	 * @param string type
	 * @return string
	 */
	public function setType($_type)
	{
		return ($this->type = $_type);
	}
	/**
	 * Get type
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}
	/**
	 * Set validFrom
	 * @param dateTime validFrom
	 * @return dateTime
	 */
	public function setValidFrom($_validFrom)
	{
		return ($this->validFrom = $_validFrom);
	}
	/**
	 * Get validFrom
	 * @return dateTime
	 */
	public function getValidFrom()
	{
		return $this->validFrom;
	}
	/**
	 * Set validUntil
	 * @param dateTime validUntil
	 * @return dateTime
	 */
	public function setValidUntil($_validUntil)
	{
		return ($this->validUntil = $_validUntil);
	}
	/**
	 * Get validUntil
	 * @return dateTime
	 */
	public function getValidUntil()
	{
		return $this->validUntil;
	}
	/**
	 * Set launchGroup
	 * @param string launchGroup
	 * @return string
	 */
	public function setLaunchGroup($_launchGroup)
	{
		return ($this->launchGroup = $_launchGroup);
	}
	/**
	 * Get launchGroup
	 * @return string
	 */
	public function getLaunchGroup()
	{
		return $this->launchGroup;
	}
	/**
	 * Set availabilityZoneGroup
	 * @param string availabilityZoneGroup
	 * @return string
	 */
	public function setAvailabilityZoneGroup($_availabilityZoneGroup)
	{
		return ($this->availabilityZoneGroup = $_availabilityZoneGroup);
	}
	/**
	 * Get availabilityZoneGroup
	 * @return string
	 */
	public function getAvailabilityZoneGroup()
	{
		return $this->availabilityZoneGroup;
	}
	/**
	 * Set launchSpecification
	 * @param LaunchSpecificationRequestType launchSpecification
	 * @return LaunchSpecificationRequestType
	 */
	public function setLaunchSpecification($_launchSpecification)
	{
		return ($this->launchSpecification = $_launchSpecification);
	}
	/**
	 * Get launchSpecification
	 * @return AmazonEc2TypeLaunchSpecificationRequestType
	 */
	public function getLaunchSpecification()
	{
		return $this->launchSpecification;
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