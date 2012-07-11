<?php
/**
 * Class file for AmazonEc2TypeInstanceStatusDetailsSetItemType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeInstanceStatusDetailsSetItemType
 * @date 10/07/2012
 */
class AmazonEc2TypeInstanceStatusDetailsSetItemType extends AmazonEc2WsdlClass
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
	 * The impairedSince
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var dateTime
	 */
	public $impairedSince;
	/**
	 * Constructor
	 * @param string name
	 * @param string status
	 * @param dateTime impairedSince
	 * @return AmazonEc2TypeInstanceStatusDetailsSetItemType
	 */
	public function __construct($_name = null,$_status = null,$_impairedSince = null)
	{
		parent::__construct(array('name'=>$_name,'status'=>$_status,'impairedSince'=>$_impairedSince));
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
	 * Set impairedSince
	 * @param dateTime impairedSince
	 * @return dateTime
	 */
	public function setImpairedSince($_impairedSince)
	{
		return ($this->impairedSince = $_impairedSince);
	}
	/**
	 * Get impairedSince
	 * @return dateTime
	 */
	public function getImpairedSince()
	{
		return $this->impairedSince;
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