<?php
/**
 * Class file for AmazonEc2TypeVolumeStatusDetailsItemType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeVolumeStatusDetailsItemType
 * @date 10/07/2012
 */
class AmazonEc2TypeVolumeStatusDetailsItemType extends AmazonEc2WsdlClass
{
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * Constructor
	 * @param string name
	 * @param string status
	 * @return AmazonEc2TypeVolumeStatusDetailsItemType
	 */
	public function __construct($_name = null,$_status = null)
	{
		parent::__construct(array('name'=>$_name,'status'=>$_status));
	}
	/**
	 * Set name
	 * @param string name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
	}
	/**
	 * Get name
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}
	/**
	 * Set status
	 * @param string status
	 * @return string
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
	}
	/**
	 * Get status
	 * @return string
	 */
	public function getStatus()
	{
		return $this->status;
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