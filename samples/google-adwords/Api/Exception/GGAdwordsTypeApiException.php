<?php
/**
 * Class file for GGAdwordsTypeApiException
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeApiException
 * Documentation : Exception class for holding a list of service errors.
 * @date 03/07/2012
 */
class GGAdwordsTypeApiException extends GGAdwordsTypeApplicationException
{
	/**
	 * The errors
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * 	- documentation : List of errors.
	 * @var GGAdwordsTypeApiError
	 */
	public $errors;
	/**
	 * Constructor
	 * @param GGAdwordsTypeApiError errors
	 * @return GGAdwordsTypeApiException
	 */
	public function __construct($_errors = null)
	{
		GGAdwordsWsdlClass::__construct(array('errors'=>$_errors));
	}
	/**
	 * Set errors
	 * @param ApiError errors
	 * @return ApiError
	 */
	public function setErrors($_errors)
	{
		return ($this->errors = $_errors);
	}
	/**
	 * Get errors
	 * @return GGAdwordsTypeApiError
	 */
	public function getErrors()
	{
		return $this->errors;
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