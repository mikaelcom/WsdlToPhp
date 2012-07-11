<?php
/**
 * Class file for OvhTypeDedicatedAllowedDistributionLanguageStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedAllowedDistributionLanguageStruct
 * @date 02/07/2012
 */
class OvhTypeDedicatedAllowedDistributionLanguageStruct extends OvhWsdlClass
{
	/**
	 * The code
	 * @var string
	 */
	public $code;
	/**
	 * The desc
	 * @var string
	 */
	public $desc;
	/**
	 * Constructor
	 * @param string code
	 * @param string desc
	 * @return OvhTypeDedicatedAllowedDistributionLanguageStruct
	 */
	public function __construct($_code = null,$_desc = null)
	{
		parent::__construct(array('code'=>$_code,'desc'=>$_desc));
	}
	/**
	 * Set code
	 * @param string code
	 * @return string
	 */
	public function setCode($_code)
	{
		return ($this->code = $_code);
	}
	/**
	 * Get code
	 * @return string
	 */
	public function getCode()
	{
		return $this->code;
	}
	/**
	 * Set desc
	 * @param string desc
	 * @return string
	 */
	public function setDesc($_desc)
	{
		return ($this->desc = $_desc);
	}
	/**
	 * Get desc
	 * @return string
	 */
	public function getDesc()
	{
		return $this->desc;
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