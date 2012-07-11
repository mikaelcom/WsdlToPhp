<?php
/**
 * Class file for AmazonEc2TypeDescribeSnapshotsType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeSnapshotsType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeSnapshotsType extends AmazonEc2WsdlClass
{
	/**
	 * The snapshotSet
	 * @var AmazonEc2TypeDescribeSnapshotsSetType
	 */
	public $snapshotSet;
	/**
	 * The ownersSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeDescribeSnapshotsOwnersType
	 */
	public $ownersSet;
	/**
	 * The restorableBySet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeDescribeSnapshotsRestorableBySetType
	 */
	public $restorableBySet;
	/**
	 * The filterSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeFilterSetType
	 */
	public $filterSet;
	/**
	 * Constructor
	 * @param AmazonEc2TypeDescribeSnapshotsSetType snapshotSet
	 * @param AmazonEc2TypeDescribeSnapshotsOwnersType ownersSet
	 * @param AmazonEc2TypeDescribeSnapshotsRestorableBySetType restorableBySet
	 * @param AmazonEc2TypeFilterSetType filterSet
	 * @return AmazonEc2TypeDescribeSnapshotsType
	 */
	public function __construct($_snapshotSet = null,$_ownersSet = null,$_restorableBySet = null,$_filterSet = null)
	{
		parent::__construct(array('snapshotSet'=>$_snapshotSet,'ownersSet'=>$_ownersSet,'restorableBySet'=>$_restorableBySet,'filterSet'=>$_filterSet));
	}
	/**
	 * Set snapshotSet
	 * @param DescribeSnapshotsSetType snapshotSet
	 * @return DescribeSnapshotsSetType
	 */
	public function setSnapshotSet($_snapshotSet)
	{
		return ($this->snapshotSet = $_snapshotSet);
	}
	/**
	 * Get snapshotSet
	 * @return AmazonEc2TypeDescribeSnapshotsSetType
	 */
	public function getSnapshotSet()
	{
		return $this->snapshotSet;
	}
	/**
	 * Set ownersSet
	 * @param DescribeSnapshotsOwnersType ownersSet
	 * @return DescribeSnapshotsOwnersType
	 */
	public function setOwnersSet($_ownersSet)
	{
		return ($this->ownersSet = $_ownersSet);
	}
	/**
	 * Get ownersSet
	 * @return AmazonEc2TypeDescribeSnapshotsOwnersType
	 */
	public function getOwnersSet()
	{
		return $this->ownersSet;
	}
	/**
	 * Set restorableBySet
	 * @param DescribeSnapshotsRestorableBySetType restorableBySet
	 * @return DescribeSnapshotsRestorableBySetType
	 */
	public function setRestorableBySet($_restorableBySet)
	{
		return ($this->restorableBySet = $_restorableBySet);
	}
	/**
	 * Get restorableBySet
	 * @return AmazonEc2TypeDescribeSnapshotsRestorableBySetType
	 */
	public function getRestorableBySet()
	{
		return $this->restorableBySet;
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