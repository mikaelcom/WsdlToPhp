<?php
/**
 * Class file for AmazonEc2TypeCreateTagsType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeCreateTagsType
 * @date 10/07/2012
 */
class AmazonEc2TypeCreateTagsType extends AmazonEc2WsdlClass
{
	/**
	 * The resourcesSet
	 * @var AmazonEc2TypeResourceIdSetType
	 */
	public $resourcesSet;
	/**
	 * The tagSet
	 * @var AmazonEc2TypeResourceTagSetType
	 */
	public $tagSet;
	/**
	 * Constructor
	 * @param AmazonEc2TypeResourceIdSetType resourcesSet
	 * @param AmazonEc2TypeResourceTagSetType tagSet
	 * @return AmazonEc2TypeCreateTagsType
	 */
	public function __construct($_resourcesSet = null,$_tagSet = null)
	{
		parent::__construct(array('resourcesSet'=>$_resourcesSet,'tagSet'=>$_tagSet));
	}
	/**
	 * Set resourcesSet
	 * @param ResourceIdSetType resourcesSet
	 * @return ResourceIdSetType
	 */
	public function setResourcesSet($_resourcesSet)
	{
		return ($this->resourcesSet = $_resourcesSet);
	}
	/**
	 * Get resourcesSet
	 * @return AmazonEc2TypeResourceIdSetType
	 */
	public function getResourcesSet()
	{
		return $this->resourcesSet;
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