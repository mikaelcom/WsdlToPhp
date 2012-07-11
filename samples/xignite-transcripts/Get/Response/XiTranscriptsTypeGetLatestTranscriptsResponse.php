<?php
/**
 * Class file for XiTranscriptsTypeGetLatestTranscriptsResponse
 * @date 08/07/2012
 */
/**
 * Class XiTranscriptsTypeGetLatestTranscriptsResponse
 * @date 08/07/2012
 */
class XiTranscriptsTypeGetLatestTranscriptsResponse extends XiTranscriptsWsdlClass
{
	/**
	 * The GetLatestTranscriptsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiTranscriptsTypeArrayOfTranscript
	 */
	public $GetLatestTranscriptsResult;
	/**
	 * Constructor
	 * @param XiTranscriptsTypeArrayOfTranscript GetLatestTranscriptsResult
	 * @return XiTranscriptsTypeGetLatestTranscriptsResponse
	 */
	public function __construct($_GetLatestTranscriptsResult = null)
	{
		parent::__construct(array('GetLatestTranscriptsResult'=>new XiTranscriptsTypeArrayOfTranscript($_GetLatestTranscriptsResult)));
	}
	/**
	 * Set GetLatestTranscriptsResult
	 * @param ArrayOfTranscript GetLatestTranscriptsResult
	 * @return ArrayOfTranscript
	 */
	public function setGetLatestTranscriptsResult($_GetLatestTranscriptsResult)
	{
		return ($this->GetLatestTranscriptsResult = $_GetLatestTranscriptsResult);
	}
	/**
	 * Get GetLatestTranscriptsResult
	 * @return XiTranscriptsTypeArrayOfTranscript
	 */
	public function getGetLatestTranscriptsResult()
	{
		return $this->GetLatestTranscriptsResult;
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