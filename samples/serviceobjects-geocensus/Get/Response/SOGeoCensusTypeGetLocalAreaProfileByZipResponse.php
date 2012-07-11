<?php
/**
 * Class file for SOGeoCensusTypeGetLocalAreaProfileByZipResponse
 * @date 06/07/2012
 */
/**
 * Class SOGeoCensusTypeGetLocalAreaProfileByZipResponse
 * @date 06/07/2012
 */
class SOGeoCensusTypeGetLocalAreaProfileByZipResponse extends SOGeoCensusWsdlClass
{
	/**
	 * The GetLocalAreaProfileByZipResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOGeoCensusTypeCensus
	 */
	public $GetLocalAreaProfileByZipResult;
	/**
	 * Constructor
	 * @param SOGeoCensusTypeCensus GetLocalAreaProfileByZipResult
	 * @return SOGeoCensusTypeGetLocalAreaProfileByZipResponse
	 */
	public function __construct($_GetLocalAreaProfileByZipResult = null)
	{
		parent::__construct(array('GetLocalAreaProfileByZipResult'=>$_GetLocalAreaProfileByZipResult));
	}
	/**
	 * Set GetLocalAreaProfileByZipResult
	 * @param Census GetLocalAreaProfileByZipResult
	 * @return Census
	 */
	public function setGetLocalAreaProfileByZipResult($_GetLocalAreaProfileByZipResult)
	{
		return ($this->GetLocalAreaProfileByZipResult = $_GetLocalAreaProfileByZipResult);
	}
	/**
	 * Get GetLocalAreaProfileByZipResult
	 * @return SOGeoCensusTypeCensus
	 */
	public function getGetLocalAreaProfileByZipResult()
	{
		return $this->GetLocalAreaProfileByZipResult;
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