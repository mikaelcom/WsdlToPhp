<?php
/**
 * Class file for MicrosoftSmDhTypeSanityResponse
 * @date 05/07/2012
 */
/**
 * Class MicrosoftSmDhTypeSanityResponse
 * @date 05/07/2012
 */
class MicrosoftSmDhTypeSanityResponse extends MicrosoftSmDhWsdlClass
{
	/**
	 * The SanityResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SanityResult;
	/**
	 * Constructor
	 * @param string SanityResult
	 * @return MicrosoftSmDhTypeSanityResponse
	 */
	public function __construct($_SanityResult = null)
	{
		parent::__construct(array('SanityResult'=>$_SanityResult));
	}
	/**
	 * Set SanityResult
	 * @param string SanityResult
	 * @return string
	 */
	public function setSanityResult($_SanityResult)
	{
		return ($this->SanityResult = $_SanityResult);
	}
	/**
	 * Get SanityResult
	 * @return string
	 */
	public function getSanityResult()
	{
		return $this->SanityResult;
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