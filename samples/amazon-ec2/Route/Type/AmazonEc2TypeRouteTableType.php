<?php
/**
 * Class file for AmazonEc2TypeRouteTableType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeRouteTableType
 * @date 10/07/2012
 */
class AmazonEc2TypeRouteTableType extends AmazonEc2WsdlClass
{
	/**
	 * The routeTableId
	 * @var string
	 */
	public $routeTableId;
	/**
	 * The vpcId
	 * @var string
	 */
	public $vpcId;
	/**
	 * The routeSet
	 * @var AmazonEc2TypeRouteSetType
	 */
	public $routeSet;
	/**
	 * The associationSet
	 * @var AmazonEc2TypeRouteTableAssociationSetType
	 */
	public $associationSet;
	/**
	 * The tagSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeResourceTagSetType
	 */
	public $tagSet;
	/**
	 * Constructor
	 * @param string routeTableId
	 * @param string vpcId
	 * @param AmazonEc2TypeRouteSetType routeSet
	 * @param AmazonEc2TypeRouteTableAssociationSetType associationSet
	 * @param AmazonEc2TypeResourceTagSetType tagSet
	 * @return AmazonEc2TypeRouteTableType
	 */
	public function __construct($_routeTableId = null,$_vpcId = null,$_routeSet = null,$_associationSet = null,$_tagSet = null)
	{
		parent::__construct(array('routeTableId'=>$_routeTableId,'vpcId'=>$_vpcId,'routeSet'=>$_routeSet,'associationSet'=>$_associationSet,'tagSet'=>$_tagSet));
	}
	/**
	 * Set routeTableId
	 * @param string routeTableId
	 * @return string
	 */
	public function setRouteTableId($_routeTableId)
	{
		return ($this->routeTableId = $_routeTableId);
	}
	/**
	 * Get routeTableId
	 * @return string
	 */
	public function getRouteTableId()
	{
		return $this->routeTableId;
	}
	/**
	 * Set vpcId
	 * @param string vpcId
	 * @return string
	 */
	public function setVpcId($_vpcId)
	{
		return ($this->vpcId = $_vpcId);
	}
	/**
	 * Get vpcId
	 * @return string
	 */
	public function getVpcId()
	{
		return $this->vpcId;
	}
	/**
	 * Set routeSet
	 * @param RouteSetType routeSet
	 * @return RouteSetType
	 */
	public function setRouteSet($_routeSet)
	{
		return ($this->routeSet = $_routeSet);
	}
	/**
	 * Get routeSet
	 * @return AmazonEc2TypeRouteSetType
	 */
	public function getRouteSet()
	{
		return $this->routeSet;
	}
	/**
	 * Set associationSet
	 * @param RouteTableAssociationSetType associationSet
	 * @return RouteTableAssociationSetType
	 */
	public function setAssociationSet($_associationSet)
	{
		return ($this->associationSet = $_associationSet);
	}
	/**
	 * Get associationSet
	 * @return AmazonEc2TypeRouteTableAssociationSetType
	 */
	public function getAssociationSet()
	{
		return $this->associationSet;
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