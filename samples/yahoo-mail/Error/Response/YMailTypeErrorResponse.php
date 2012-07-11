<?php
/**
 * Class file for YMailTypeErrorResponse
 * @date 02/07/2012
 */
/**
 * Class YMailTypeErrorResponse
 * @date 02/07/2012
 */
class YMailTypeErrorResponse extends YMailWsdlClass
{
	/**
	 * The code
	 * @var QName
	 */
	public $code;
	/**
	 * The string
	 * @var string
	 */
	public $string;
	/**
	 * The detail
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var anyType
	 */
	public $detail;
	/**
	 * Constructor
	 * @param QName code
	 * @param string string
	 * @param anyType detail
	 * @return YMailTypeErrorResponse
	 */
	public function __construct($_code = null,$_string = null,$_detail = null)
	{
		parent::__construct(array('code'=>$_code,'string'=>$_string,'detail'=>$_detail));
	}
	/**
	 * Set code
	 * @param QName code
	 * @return QName
	 */
	public function setCode($_code)
	{
		return ($this->code = $_code);
	}
	/**
	 * Get code
	 * @return QName
	 */
	public function getCode()
	{
		return $this->code;
	}
	/**
	 * Set string
	 * @param string string
	 * @return string
	 */
	public function setString($_string)
	{
		return ($this->string = $_string);
	}
	/**
	 * Get string
	 * @return string
	 */
	public function getString()
	{
		return $this->string;
	}
	/**
	 * Set detail
	 * @param anyType detail
	 * @return anyType
	 */
	public function setDetail($_detail)
	{
		return ($this->detail = $_detail);
	}
	/**
	 * Get detail
	 * @return anyType
	 */
	public function getDetail()
	{
		return $this->detail;
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