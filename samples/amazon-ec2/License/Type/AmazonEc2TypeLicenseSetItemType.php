<?php
/**
 * Class file for AmazonEc2TypeLicenseSetItemType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeLicenseSetItemType
 * @date 10/07/2012
 */
class AmazonEc2TypeLicenseSetItemType extends AmazonEc2WsdlClass
{
	/**
	 * The licenseId
	 * @var string
	 */
	public $licenseId;
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The pool
	 * @var string
	 */
	public $pool;
	/**
	 * The capacitySet
	 * @var AmazonEc2TypeLicenseCapacitySetType
	 */
	public $capacitySet;
	/**
	 * The tagSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeResourceTagSetType
	 */
	public $tagSet;
	/**
	 * Constructor
	 * @param string licenseId
	 * @param string type
	 * @param string pool
	 * @param AmazonEc2TypeLicenseCapacitySetType capacitySet
	 * @param AmazonEc2TypeResourceTagSetType tagSet
	 * @return AmazonEc2TypeLicenseSetItemType
	 */
	public function __construct($_licenseId = null,$_type = null,$_pool = null,$_capacitySet = null,$_tagSet = null)
	{
		parent::__construct(array('licenseId'=>$_licenseId,'type'=>$_type,'pool'=>$_pool,'capacitySet'=>$_capacitySet,'tagSet'=>$_tagSet));
	}
	/**
	 * Set licenseId
	 * @param string licenseId
	 * @return string
	 */
	public function setLicenseId($_licenseId)
	{
		return ($this->licenseId = $_licenseId);
	}
	/**
	 * Get licenseId
	 * @return string
	 */
	public function getLicenseId()
	{
		return $this->licenseId;
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
	 * Set pool
	 * @param string pool
	 * @return string
	 */
	public function setPool($_pool)
	{
		return ($this->pool = $_pool);
	}
	/**
	 * Get pool
	 * @return string
	 */
	public function getPool()
	{
		return $this->pool;
	}
	/**
	 * Set capacitySet
	 * @param LicenseCapacitySetType capacitySet
	 * @return LicenseCapacitySetType
	 */
	public function setCapacitySet($_capacitySet)
	{
		return ($this->capacitySet = $_capacitySet);
	}
	/**
	 * Get capacitySet
	 * @return AmazonEc2TypeLicenseCapacitySetType
	 */
	public function getCapacitySet()
	{
		return $this->capacitySet;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>