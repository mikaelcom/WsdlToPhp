<?php
/**
 * Class file for AmazonEc2TypeTagSetItemType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeTagSetItemType
 * @date 10/07/2012
 */
class AmazonEc2TypeTagSetItemType extends AmazonEc2WsdlClass
{
	/**
	 * The resourceId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $resourceId;
	/**
	 * The resourceType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $resourceType;
	/**
	 * The key
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $key;
	/**
	 * The value
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $value;
	/**
	 * Constructor
	 * @param string resourceId
	 * @param string resourceType
	 * @param string key
	 * @param string value
	 * @return AmazonEc2TypeTagSetItemType
	 */
	public function __construct($_resourceId = null,$_resourceType = null,$_key = null,$_value = null)
	{
		parent::__construct(array('resourceId'=>$_resourceId,'resourceType'=>$_resourceType,'key'=>$_key,'value'=>$_value));
	}
	/**
	 * Set resourceId
	 * @param string resourceId
	 * @return string
	 */
	public function setResourceId($_resourceId)
	{
		return ($this->resourceId = $_resourceId);
	}
	/**
	 * Get resourceId
	 * @return string
	 */
	public function getResourceId()
	{
		return $this->resourceId;
	}
	/**
	 * Set resourceType
	 * @param string resourceType
	 * @return string
	 */
	public function setResourceType($_resourceType)
	{
		return ($this->resourceType = $_resourceType);
	}
	/**
	 * Get resourceType
	 * @return string
	 */
	public function getResourceType()
	{
		return $this->resourceType;
	}
	/**
	 * Set key
	 * @param string key
	 * @return string
	 */
	public function setKey($_key)
	{
		return ($this->key = $_key);
	}
	/**
	 * Get key
	 * @return string
	 */
	public function getKey()
	{
		return $this->key;
	}
	/**
	 * Set value
	 * @param string value
	 * @return string
	 */
	public function setValue($_value)
	{
		return ($this->value = $_value);
	}
	/**
	 * Get value
	 * @return string
	 */
	public function getValue()
	{
		return $this->value;
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