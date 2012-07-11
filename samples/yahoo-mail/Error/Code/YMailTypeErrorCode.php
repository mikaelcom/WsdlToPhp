<?php
/**
 * Class file for YMailTypeErrorCode
 * @date 02/07/2012
 */
/**
 * Class YMailTypeErrorCode
 * @date 02/07/2012
 */
class YMailTypeErrorCode extends YMailWsdlClass
{
	/**
	 * The mid
	 * Meta informations :
	 * 	- use : optional
	 * @var string
	 */
	public $mid;
	/**
	 * The code
	 * Meta informations :
	 * 	- default : ERROR
	 * @var string
	 */
	public $code;
	/**
	 * Constructor
	 * @param string mid
	 * @param string code
	 * @return YMailTypeErrorCode
	 */
	public function __construct($_mid = null,$_code = 'ERROR')
	{
		parent::__construct(array('mid'=>$_mid,'code'=>$_code));
	}
	/**
	 * Set mid
	 * @param string mid
	 * @return string
	 */
	public function setMid($_mid)
	{
		return ($this->mid = $_mid);
	}
	/**
	 * Get mid
	 * @return string
	 */
	public function getMid()
	{
		return $this->mid;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>