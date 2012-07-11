<?php
/**
 * Class file for AmazonEc2TypeDiskImageVolumeDescriptionType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDiskImageVolumeDescriptionType
 * @date 10/07/2012
 */
class AmazonEc2TypeDiskImageVolumeDescriptionType extends AmazonEc2WsdlClass
{
	/**
	 * The size
	 * @var integer
	 */
	public $size;
	/**
	 * The id
	 * @var string
	 */
	public $id;
	/**
	 * Constructor
	 * @param integer size
	 * @param string id
	 * @return AmazonEc2TypeDiskImageVolumeDescriptionType
	 */
	public function __construct($_size = null,$_id = null)
	{
		parent::__construct(array('size'=>$_size,'id'=>$_id));
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
	 * Set id
	 * @param string id
	 * @return string
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
	}
	/**
	 * Get id
	 * @return string
	 */
	public function getId()
	{
		return $this->id;
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