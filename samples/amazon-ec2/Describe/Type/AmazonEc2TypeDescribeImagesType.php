<?php
/**
 * Class file for AmazonEc2TypeDescribeImagesType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeImagesType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeImagesType extends AmazonEc2WsdlClass
{
	/**
	 * The executableBySet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeDescribeImagesExecutableBySetType
	 */
	public $executableBySet;
	/**
	 * The imagesSet
	 * @var AmazonEc2TypeDescribeImagesInfoType
	 */
	public $imagesSet;
	/**
	 * The ownersSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeDescribeImagesOwnersType
	 */
	public $ownersSet;
	/**
	 * The filterSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeFilterSetType
	 */
	public $filterSet;
	/**
	 * Constructor
	 * @param AmazonEc2TypeDescribeImagesExecutableBySetType executableBySet
	 * @param AmazonEc2TypeDescribeImagesInfoType imagesSet
	 * @param AmazonEc2TypeDescribeImagesOwnersType ownersSet
	 * @param AmazonEc2TypeFilterSetType filterSet
	 * @return AmazonEc2TypeDescribeImagesType
	 */
	public function __construct($_executableBySet = null,$_imagesSet = null,$_ownersSet = null,$_filterSet = null)
	{
		parent::__construct(array('executableBySet'=>$_executableBySet,'imagesSet'=>$_imagesSet,'ownersSet'=>$_ownersSet,'filterSet'=>$_filterSet));
	}
	/**
	 * Set executableBySet
	 * @param DescribeImagesExecutableBySetType executableBySet
	 * @return DescribeImagesExecutableBySetType
	 */
	public function setExecutableBySet($_executableBySet)
	{
		return ($this->executableBySet = $_executableBySet);
	}
	/**
	 * Get executableBySet
	 * @return AmazonEc2TypeDescribeImagesExecutableBySetType
	 */
	public function getExecutableBySet()
	{
		return $this->executableBySet;
	}
	/**
	 * Set imagesSet
	 * @param DescribeImagesInfoType imagesSet
	 * @return DescribeImagesInfoType
	 */
	public function setImagesSet($_imagesSet)
	{
		return ($this->imagesSet = $_imagesSet);
	}
	/**
	 * Get imagesSet
	 * @return AmazonEc2TypeDescribeImagesInfoType
	 */
	public function getImagesSet()
	{
		return $this->imagesSet;
	}
	/**
	 * Set ownersSet
	 * @param DescribeImagesOwnersType ownersSet
	 * @return DescribeImagesOwnersType
	 */
	public function setOwnersSet($_ownersSet)
	{
		return ($this->ownersSet = $_ownersSet);
	}
	/**
	 * Get ownersSet
	 * @return AmazonEc2TypeDescribeImagesOwnersType
	 */
	public function getOwnersSet()
	{
		return $this->ownersSet;
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