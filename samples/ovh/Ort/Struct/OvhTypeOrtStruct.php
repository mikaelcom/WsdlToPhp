<?php
/**
 * Class file for OvhTypeOrtStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeOrtStruct
 * @date 02/07/2012
 */
class OvhTypeOrtStruct extends OvhWsdlClass
{
	/**
	 * The subdomain
	 * @var string
	 */
	public $subdomain;
	/**
	 * The target
	 * @var string
	 */
	public $target;
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * Constructor
	 * @param string subdomain
	 * @param string target
	 * @param string type
	 * @return OvhTypeOrtStruct
	 */
	public function __construct($_subdomain = null,$_target = null,$_type = null)
	{
		parent::__construct(array('subdomain'=>$_subdomain,'target'=>$_target,'type'=>$_type));
	}
	/**
	 * Set subdomain
	 * @param string subdomain
	 * @return string
	 */
	public function setSubdomain($_subdomain)
	{
		return ($this->subdomain = $_subdomain);
	}
	/**
	 * Get subdomain
	 * @return string
	 */
	public function getSubdomain()
	{
		return $this->subdomain;
	}
	/**
	 * Set target
	 * @param string target
	 * @return string
	 */
	public function setTarget($_target)
	{
		return ($this->target = $_target);
	}
	/**
	 * Get target
	 * @return string
	 */
	public function getTarget()
	{
		return $this->target;
	}
	/**
	 * Set type
	 * @param string type
	 * @return string
	 */
	public function setType($_type)
	{
		return ($this->type = $_type);
	}
	/**
	 * Get type
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
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