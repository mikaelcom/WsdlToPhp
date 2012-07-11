<?php
/**
 * Class file for EccGeoCityZipTypeZip
 * @date 03/07/2012
 */
/**
 * Class EccGeoCityZipTypeZip
 * @date 03/07/2012
 */
class EccGeoCityZipTypeZip extends EccGeoCityZipWsdlClass
{
	/**
	 * The Code
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Code;
	/**
	 * Constructor
	 * @param string Code
	 * @return EccGeoCityZipTypeZip
	 */
	public function __construct($_Code = null)
	{
		parent::__construct(array('Code'=>$_Code));
	}
	/**
	 * Set Code
	 * @param string Code
	 * @return string
	 */
	public function setCode($_Code)
	{
		return ($this->Code = $_Code);
	}
	/**
	 * Get Code
	 * @return string
	 */
	public function getCode()
	{
		return $this->Code;
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