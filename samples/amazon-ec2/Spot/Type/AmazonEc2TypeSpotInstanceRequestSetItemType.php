<?php
/**
 * Class file for AmazonEc2TypeSpotInstanceRequestSetItemType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeSpotInstanceRequestSetItemType
 * @date 10/07/2012
 */
class AmazonEc2TypeSpotInstanceRequestSetItemType extends AmazonEc2WsdlClass
{
	/**
	 * The spotInstanceRequestId
	 * @var string
	 */
	public $spotInstanceRequestId;
	/**
	 * The spotPrice
	 * @var string
	 */
	public $spotPrice;
	/**
	 * The type
	 * @var string
	 */
	public $type;
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
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeLaunchSpecificationResponseType
	 */
	public $launchSpecification;
	/**
	 * The instanceId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $instanceId;
	/**
	 * The createTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var dateTime
	 */
	public $createTime;
	/**
	 * The productDescription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $productDescription;
	/**
	 * The tagSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeResourceTagSetType
	 */
	public $tagSet;
	/**
	 * The launchedAvailabilityZone
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $launchedAvailabilityZone;
	/**
	 * Constructor
	 * @param string spotInstanceRequestId
	 * @param string spotPrice
	 * @param string type
	 * @param string state
	 * @param AmazonEc2TypeSpotInstanceStateFaultType fault
	 * @param dateTime validFrom
	 * @param dateTime validUntil
	 * @param string launchGroup
	 * @param string availabilityZoneGroup
	 * @param AmazonEc2TypeLaunchSpecificationResponseType launchSpecification
	 * @param string instanceId
	 * @param dateTime createTime
	 * @param string productDescription
	 * @param AmazonEc2TypeResourceTagSetType tagSet
	 * @param string launchedAvailabilityZone
	 * @return AmazonEc2TypeSpotInstanceRequestSetItemType
	 */
	public function __construct($_spotInstanceRequestId = null,$_spotPrice = null,$_type = null,$_state = null,$_fault = null,$_validFrom = null,$_validUntil = null,$_launchGroup = null,$_availabilityZoneGroup = null,$_launchSpecification = null,$_instanceId = null,$_createTime = null,$_productDescription = null,$_tagSet = null,$_launchedAvailabilityZone = null)
	{
		parent::__construct(array('spotInstanceRequestId'=>$_spotInstanceRequestId,'spotPrice'=>$_spotPrice,'type'=>$_type,'state'=>$_state,'fault'=>$_fault,'validFrom'=>$_validFrom,'validUntil'=>$_validUntil,'launchGroup'=>$_launchGroup,'availabilityZoneGroup'=>$_availabilityZoneGroup,'launchSpecification'=>$_launchSpecification,'instanceId'=>$_instanceId,'createTime'=>$_createTime,'productDescription'=>$_productDescription,'tagSet'=>$_tagSet,'launchedAvailabilityZone'=>$_launchedAvailabilityZone));
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
	 * @param LaunchSpecificationResponseType launchSpecification
	 * @return LaunchSpecificationResponseType
	 */
	public function setLaunchSpecification($_launchSpecification)
	{
		return ($this->launchSpecification = $_launchSpecification);
	}
	/**
	 * Get launchSpecification
	 * @return AmazonEc2TypeLaunchSpecificationResponseType
	 */
	public function getLaunchSpecification()
	{
		return $this->launchSpecification;
	}
	/**
	 * Set instanceId
	 * @param string instanceId
	 * @return string
	 */
	public function setInstanceId($_instanceId)
	{
		return ($this->instanceId = $_instanceId);
	}
	/**
	 * Get instanceId
	 * @return string
	 */
	public function getInstanceId()
	{
		return $this->instanceId;
	}
	/**
	 * Set createTime
	 * @param dateTime createTime
	 * @return dateTime
	 */
	public function setCreateTime($_createTime)
	{
		return ($this->createTime = $_createTime);
	}
	/**
	 * Get createTime
	 * @return dateTime
	 */
	public function getCreateTime()
	{
		return $this->createTime;
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
	 * Set tagSet
	 * @param ResourceTagSetType tagSet
	 * @return ResourceTagSetType
	 */
	public function setTagSet($_tagSet)
	{
		return ($this->tagSet = $_tagSet);
	}
	/**
	 * Get tagSet
	 * @return AmazonEc2TypeResourceTagSetType
	 */
	public function getTagSet()
	{
		return $this->tagSet;
	}
	/**
	 * Set launchedAvailabilityZone
	 * @param string launchedAvailabilityZone
	 * @return string
	 */
	public function setLaunchedAvailabilityZone($_launchedAvailabilityZone)
	{
		return ($this->launchedAvailabilityZone = $_launchedAvailabilityZone);
	}
	/**
	 * Get launchedAvailabilityZone
	 * @return string
	 */
	public function getLaunchedAvailabilityZone()
	{
		return $this->launchedAvailabilityZone;
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