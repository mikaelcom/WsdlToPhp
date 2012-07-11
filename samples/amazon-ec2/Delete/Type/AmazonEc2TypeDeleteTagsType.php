<?php
/**
 * Class file for AmazonEc2TypeDeleteTagsType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDeleteTagsType
 * @date 10/07/2012
 */
class AmazonEc2TypeDeleteTagsType extends AmazonEc2WsdlClass
{
	/**
	 * The resourcesSet
	 * @var AmazonEc2TypeResourceIdSetType
	 */
	public $resourcesSet;
	/**
	 * The tagSet
	 * @var AmazonEc2TypeDeleteTagsSetType
	 */
	public $tagSet;
	/**
	 * Constructor
	 * @param AmazonEc2TypeResourceIdSetType resourcesSet
	 * @param AmazonEc2TypeDeleteTagsSetType tagSet
	 * @return AmazonEc2TypeDeleteTagsType
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
	 * @param DeleteTagsSetType tagSet
	 * @return DeleteTagsSetType
	 */
	public function setTagSet($_tagSet)
	{
		return ($this->tagSet = $_tagSet);
	}
	/**
	 * Get tagSet
	 * @return AmazonEc2TypeDeleteTagsSetType
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