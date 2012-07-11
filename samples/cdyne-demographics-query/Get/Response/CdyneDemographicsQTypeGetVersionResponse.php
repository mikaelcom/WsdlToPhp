<?php
/**
 * Class file for CdyneDemographicsQTypeGetVersionResponse
 * @date 03/07/2012
 */
/**
 * Class CdyneDemographicsQTypeGetVersionResponse
 * @date 03/07/2012
 */
class CdyneDemographicsQTypeGetVersionResponse extends CdyneDemographicsQWsdlClass
{
	/**
	 * The GetVersionResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $GetVersionResult;
	/**
	 * Constructor
	 * @param string GetVersionResult
	 * @return CdyneDemographicsQTypeGetVersionResponse
	 */
	public function __construct($_GetVersionResult = null)
	{
		parent::__construct(array('GetVersionResult'=>$_GetVersionResult));
	}
	/**
	 * Set GetVersionResult
	 * @param string GetVersionResult
	 * @return string
	 */
	public function setGetVersionResult($_GetVersionResult)
	{
		return ($this->GetVersionResult = $_GetVersionResult);
	}
	/**
	 * Get GetVersionResult
	 * @return string
	 */
	public function getGetVersionResult()
	{
		return $this->GetVersionResult;
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