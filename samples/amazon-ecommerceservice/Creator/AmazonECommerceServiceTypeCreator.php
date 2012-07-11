<?php
/**
 * Class file for AmazonECommerceServiceTypeCreator
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeCreator
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeCreator extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The _
	 * @var string
	 */
	public $_;
	/**
	 * The Role
	 * Meta informations :
	 * 	- use : required
	 * @var string
	 */
	public $Role;
	/**
	 * Constructor
	 * @param string _
	 * @param string Role
	 * @return AmazonECommerceServiceTypeCreator
	 */
	public function __construct($__ = null,$_Role = null)
	{
		parent::__construct(array('_'=>$__,'Role'=>$_Role));
	}
	/**
	 * Set _
	 * @param string _
	 * @return string
	 */
	public function set_($__)
	{
		return ($this->_ = $__);
	}
	/**
	 * Get _
	 * @return string
	 */
	public function get_()
	{
		return $this->_;
	}
	/**
	 * Set Role
	 * @param string Role
	 * @return string
	 */
	public function setRole($_Role)
	{
		return ($this->Role = $_Role);
	}
	/**
	 * Get Role
	 * @return string
	 */
	public function getRole()
	{
		return $this->Role;
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