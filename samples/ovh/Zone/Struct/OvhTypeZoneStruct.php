<?php
/**
 * Class file for OvhTypeZoneStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeZoneStruct
 * @date 02/07/2012
 */
class OvhTypeZoneStruct extends OvhWsdlClass
{
	/**
	 * The subdomain
	 * @var string
	 */
	public $subdomain;
	/**
	 * The fieldtype
	 * @var string
	 */
	public $fieldtype;
	/**
	 * The target
	 * @var string
	 */
	public $target;
	/**
	 * Constructor
	 * @param string subdomain
	 * @param string fieldtype
	 * @param string target
	 * @return OvhTypeZoneStruct
	 */
	public function __construct($_subdomain = null,$_fieldtype = null,$_target = null)
	{
		parent::__construct(array('subdomain'=>$_subdomain,'fieldtype'=>$_fieldtype,'target'=>$_target));
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
	 * Set fieldtype
	 * @param string fieldtype
	 * @return string
	 */
	public function setFieldtype($_fieldtype)
	{
		return ($this->fieldtype = $_fieldtype);
	}
	/**
	 * Get fieldtype
	 * @return string
	 */
	public function getFieldtype()
	{
		return $this->fieldtype;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>