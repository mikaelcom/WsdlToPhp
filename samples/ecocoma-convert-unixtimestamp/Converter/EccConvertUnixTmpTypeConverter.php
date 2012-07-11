<?php
/**
 * Class file for EccConvertUnixTmpTypeConverter
 * @date 03/07/2012
 */
/**
 * Class EccConvertUnixTmpTypeConverter
 * @date 03/07/2012
 */
class EccConvertUnixTmpTypeConverter extends EccConvertUnixTmpWsdlClass
{
	/**
	 * The result
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $result;
	/**
	 * Constructor
	 * @param string result
	 * @return EccConvertUnixTmpTypeConverter
	 */
	public function __construct($_result = null)
	{
		parent::__construct(array('result'=>$_result));
	}
	/**
	 * Set result
	 * @param string result
	 * @return string
	 */
	public function setResult($_result)
	{
		return ($this->result = $_result);
	}
	/**
	 * Get result
	 * @return string
	 */
	public function getResult()
	{
		return $this->result;
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