<?php
/**
 * Class file for AmazonEc2TypeResourceIdSetItemType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeResourceIdSetItemType
 * @date 10/07/2012
 */
class AmazonEc2TypeResourceIdSetItemType extends AmazonEc2WsdlClass
{
	/**
	 * The resourceId
	 * @var string
	 */
	public $resourceId;
	/**
	 * Constructor
	 * @param string resourceId
	 * @return AmazonEc2TypeResourceIdSetItemType
	 */
	public function __construct($_resourceId = null)
	{
		parent::__construct(array('resourceId'=>$_resourceId));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>