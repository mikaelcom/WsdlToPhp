<?php
/**
 * Class file for XiTranscriptsTypeTranscripts
 * @date 08/07/2012
 */
/**
 * Class XiTranscriptsTypeTranscripts
 * @date 08/07/2012
 */
class XiTranscriptsTypeTranscripts extends XiTranscriptsTypeCommon
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiTranscriptsTypeSecurity
	 */
	public $Security;
	/**
	 * The Transcripts
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiTranscriptsTypeArrayOfTranscript
	 */
	public $Transcripts;
	/**
	 * Constructor
	 * @param XiTranscriptsTypeSecurity Security
	 * @param XiTranscriptsTypeArrayOfTranscript Transcripts
	 * @return XiTranscriptsTypeTranscripts
	 */
	public function __construct($_Security = null,$_Transcripts = null)
	{
		XiTranscriptsWsdlClass::__construct(array('Security'=>$_Security,'Transcripts'=>new XiTranscriptsTypeArrayOfTranscript($_Transcripts)));
	}
	/**
	 * Set Security
	 * @param Security Security
	 * @return Security
	 */
	public function setSecurity($_Security)
	{
		return ($this->Security = $_Security);
	}
	/**
	 * Get Security
	 * @return XiTranscriptsTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
	}
	/**
	 * Set Transcripts
	 * @param ArrayOfTranscript Transcripts
	 * @return ArrayOfTranscript
	 */
	public function setTranscripts($_Transcripts)
	{
		return ($this->Transcripts = $_Transcripts);
	}
	/**
	 * Get Transcripts
	 * @return XiTranscriptsTypeArrayOfTranscript
	 */
	public function getTranscripts()
	{
		return $this->Transcripts;
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