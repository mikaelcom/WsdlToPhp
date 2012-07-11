<?php
/**
 * Class file for AmazonAlexaTypeErrors
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeErrors
 * @date 10/07/2012
 */
class AmazonAlexaTypeErrors extends AmazonAlexaWsdlClass
{
	/**
	 * The Error
	 * @var AmazonAlexaTypeError
	 */
	public $Error;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeError Error
	 * @return AmazonAlexaTypeErrors
	 */
	public function __construct($_Error = null)
	{
		parent::__construct(array('Error'=>$_Error));
	}
	/**
	 * Set Error
	 * @param Error Error
	 * @return Error
	 */
	public function setError($_Error)
	{
		return ($this->Error = $_Error);
	}
	/**
	 * Get Error
	 * @return AmazonAlexaTypeError
	 */
	public function getError()
	{
		return $this->Error;
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