<?php
/**
 * Class file for AmazonEc2TypeDescribePlacementGroupsType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribePlacementGroupsType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribePlacementGroupsType extends AmazonEc2WsdlClass
{
	/**
	 * The placementGroupSet
	 * @var AmazonEc2TypeDescribePlacementGroupsInfoType
	 */
	public $placementGroupSet;
	/**
	 * The filterSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeFilterSetType
	 */
	public $filterSet;
	/**
	 * Constructor
	 * @param AmazonEc2TypeDescribePlacementGroupsInfoType placementGroupSet
	 * @param AmazonEc2TypeFilterSetType filterSet
	 * @return AmazonEc2TypeDescribePlacementGroupsType
	 */
	public function __construct($_placementGroupSet = null,$_filterSet = null)
	{
		parent::__construct(array('placementGroupSet'=>$_placementGroupSet,'filterSet'=>$_filterSet));
	}
	/**
	 * Set placementGroupSet
	 * @param DescribePlacementGroupsInfoType placementGroupSet
	 * @return DescribePlacementGroupsInfoType
	 */
	public function setPlacementGroupSet($_placementGroupSet)
	{
		return ($this->placementGroupSet = $_placementGroupSet);
	}
	/**
	 * Get placementGroupSet
	 * @return AmazonEc2TypeDescribePlacementGroupsInfoType
	 */
	public function getPlacementGroupSet()
	{
		return $this->placementGroupSet;
	}
	/**
	 * Set filterSet
	 * @param FilterSetType filterSet
	 * @return FilterSetType
	 */
	public function setFilterSet($_filterSet)
	{
		return ($this->filterSet = $_filterSet);
	}
	/**
	 * Get filterSet
	 * @return AmazonEc2TypeFilterSetType
	 */
	public function getFilterSet()
	{
		return $this->filterSet;
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