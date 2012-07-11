<?php
/**
 * Class file for GGAdwordsTypeApiError
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeApiError
 * Documentation : The API error base class that provides details about an error that occurred while processing a service request. <p>The OGNL field path is provided for parsers to identify the request data element that may have caused the error.</p>
 * @date 03/07/2012
 */
class GGAdwordsTypeApiError extends GGAdwordsWsdlClass
{
	/**
	 * The fieldPath
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : The OGNL field path to identify cause of error.
	 * @var string
	 */
	public $fieldPath;
	/**
	 * The trigger
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : The data that caused the error.
	 * @var string
	 */
	public $trigger;
	/**
	 * The errorString
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : A simple string representation of the error and reason.
	 * @var string
	 */
	public $errorString;
	/**
	 * The ApiErrorType
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates that this instance is a subtype of ApiError. Although this field is returned in the response, it is ignored on input and cannot be selected. Specify xsi:type instead.
	 * @var string
	 */
	public $ApiErrorType;
	/**
	 * Constructor
	 * @param string fieldPath
	 * @param string trigger
	 * @param string errorString
	 * @param string ApiErrorType
	 * @return GGAdwordsTypeApiError
	 */
	public function __construct($_fieldPath = null,$_trigger = null,$_errorString = null,$_ApiErrorType = null)
	{
		parent::__construct(array('fieldPath'=>$_fieldPath,'trigger'=>$_trigger,'errorString'=>$_errorString,'ApiErrorType'=>$_ApiErrorType));
	}
	/**
	 * Set fieldPath
	 * @param string fieldPath
	 * @return string
	 */
	public function setFieldPath($_fieldPath)
	{
		return ($this->fieldPath = $_fieldPath);
	}
	/**
	 * Get fieldPath
	 * @return string
	 */
	public function getFieldPath()
	{
		return $this->fieldPath;
	}
	/**
	 * Set trigger
	 * @param string trigger
	 * @return string
	 */
	public function setTrigger($_trigger)
	{
		return ($this->trigger = $_trigger);
	}
	/**
	 * Get trigger
	 * @return string
	 */
	public function getTrigger()
	{
		return $this->trigger;
	}
	/**
	 * Set errorString
	 * @param string errorString
	 * @return string
	 */
	public function setErrorString($_errorString)
	{
		return ($this->errorString = $_errorString);
	}
	/**
	 * Get errorString
	 * @return string
	 */
	public function getErrorString()
	{
		return $this->errorString;
	}
	/**
	 * Set ApiErrorType
	 * @param string ApiErrorType
	 * @return string
	 */
	public function setApiErrorType($_ApiErrorType)
	{
		return ($this->ApiErrorType = $_ApiErrorType);
	}
	/**
	 * Get ApiErrorType
	 * @return string
	 */
	public function getApiErrorType()
	{
		return $this->ApiErrorType;
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