<?php
/**
 * Class file for AmazonEc2TypeDiskImageVolumeType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDiskImageVolumeType
 * @date 10/07/2012
 */
class AmazonEc2TypeDiskImageVolumeType extends AmazonEc2WsdlClass
{
	/**
	 * The size
	 * @var integer
	 */
	public $size;
	/**
	 * Constructor
	 * @param integer size
	 * @return AmazonEc2TypeDiskImageVolumeType
	 */
	public function __construct($_size = null)
	{
		parent::__construct(array('size'=>$_size));
	}
	/**
	 * Set size
	 * @param integer size
	 * @return integer
	 */
	public function setSize($_size)
	{
		return ($this->size = $_size);
	}
	/**
	 * Get size
	 * @return integer
	 */
	public function getSize()
	{
		return $this->size;
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