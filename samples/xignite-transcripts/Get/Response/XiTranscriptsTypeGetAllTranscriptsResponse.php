<?php
/**
 * Class file for XiTranscriptsTypeGetAllTranscriptsResponse
 * @date 08/07/2012
 */
/**
 * Class XiTranscriptsTypeGetAllTranscriptsResponse
 * @date 08/07/2012
 */
class XiTranscriptsTypeGetAllTranscriptsResponse extends XiTranscriptsWsdlClass
{
	/**
	 * The GetAllTranscriptsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiTranscriptsTypeTranscripts
	 */
	public $GetAllTranscriptsResult;
	/**
	 * Constructor
	 * @param XiTranscriptsTypeTranscripts GetAllTranscriptsResult
	 * @return XiTranscriptsTypeGetAllTranscriptsResponse
	 */
	public function __construct($_GetAllTranscriptsResult = null)
	{
		parent::__construct(array('GetAllTranscriptsResult'=>$_GetAllTranscriptsResult));
	}
	/**
	 * Set GetAllTranscriptsResult
	 * @param Transcripts GetAllTranscriptsResult
	 * @return Transcripts
	 */
	public function setGetAllTranscriptsResult($_GetAllTranscriptsResult)
	{
		return ($this->GetAllTranscriptsResult = $_GetAllTranscriptsResult);
	}
	/**
	 * Get GetAllTranscriptsResult
	 * @return XiTranscriptsTypeTranscripts
	 */
	public function getGetAllTranscriptsResult()
	{
		return $this->GetAllTranscriptsResult;
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