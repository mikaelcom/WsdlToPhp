<?php
/**
 * Class file for RFBibleASVTypeGetVersesResponse
 * @date 15/08/2012
 */
/**
 * Class RFBibleASVTypeGetVersesResponse
 * @date 15/08/2012
 */
class RFBibleASVTypeGetVersesResponse extends RFBibleASVWsdlClass
{
	/**
	 * The GetVersesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var RFBibleASVTypeArrayOfBibleVerse
	 */
	public $GetVersesResult;
	/**
	 * Constructor
	 * @param RFBibleASVTypeArrayOfBibleVerse GetVersesResult
	 * @return RFBibleASVTypeGetVersesResponse
	 */
	public function __construct($_GetVersesResult = null)
	{
		parent::__construct(array('GetVersesResult'=>new RFBibleASVTypeArrayOfBibleVerse($_GetVersesResult)));
	}
	/**
	 * Set GetVersesResult
	 * @param ArrayOfBibleVerse GetVersesResult
	 * @return ArrayOfBibleVerse
	 */
	public function setGetVersesResult($_GetVersesResult)
	{
		return ($this->GetVersesResult = $_GetVersesResult);
	}
	/**
	 * Get GetVersesResult
	 * @return RFBibleASVTypeArrayOfBibleVerse
	 */
	public function getGetVersesResult()
	{
		return $this->GetVersesResult;
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