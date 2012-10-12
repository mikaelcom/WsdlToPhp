<?php
/**
 * Class file for ScienceGovSearchTypeSavedSearchResponse
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchTypeSavedSearchResponse
 * @date 13/10/2012
 */
class ScienceGovSearchTypeSavedSearchResponse extends ScienceGovSearchWsdlClass
{
	/**
	 * The errorMessage
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $errorMessage;
	/**
	 * The successful
	 * @var boolean
	 */
	public $successful;
	/**
	 * Constructor
	 * @param string errorMessage
	 * @param boolean successful
	 * @return ScienceGovSearchTypeSavedSearchResponse
	 */
	public function __construct($_errorMessage = null,$_successful = null)
	{
		parent::__construct(array('errorMessage'=>$_errorMessage,'successful'=>$_successful));
	}
	/**
	 * Set errorMessage
	 * @param string errorMessage
	 * @return string
	 */
	public function setErrorMessage($_errorMessage)
	{
		return ($this->errorMessage = $_errorMessage);
	}
	/**
	 * Get errorMessage
	 * @return string
	 */
	public function getErrorMessage()
	{
		return $this->errorMessage;
	}
	/**
	 * Set successful
	 * @param boolean successful
	 * @return boolean
	 */
	public function setSuccessful($_successful)
	{
		return ($this->successful = $_successful);
	}
	/**
	 * Get successful
	 * @return boolean
	 */
	public function getSuccessful()
	{
		return $this->successful;
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