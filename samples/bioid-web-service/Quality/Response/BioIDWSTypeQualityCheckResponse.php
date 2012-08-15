<?php
/**
 * Class file for BioIDWSTypeQualityCheckResponse
 * @date 15/08/2012
 */
/**
 * Class BioIDWSTypeQualityCheckResponse
 * @date 15/08/2012
 */
class BioIDWSTypeQualityCheckResponse extends BioIDWSWsdlClass
{
	/**
	 * The QualityCheckResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var boolean
	 */
	public $QualityCheckResult;
	/**
	 * The processedSamples
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var BioIDWSTypeArrayOfSample
	 */
	public $processedSamples;
	/**
	 * The messages
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $messages;
	/**
	 * Constructor
	 * @param boolean QualityCheckResult
	 * @param BioIDWSTypeArrayOfSample processedSamples
	 * @param string messages
	 * @return BioIDWSTypeQualityCheckResponse
	 */
	public function __construct($_QualityCheckResult = null,$_processedSamples = null,$_messages = null)
	{
		parent::__construct(array('QualityCheckResult'=>$_QualityCheckResult,'processedSamples'=>new BioIDWSTypeArrayOfSample($_processedSamples),'messages'=>$_messages));
	}
	/**
	 * Set QualityCheckResult
	 * @param boolean QualityCheckResult
	 * @return boolean
	 */
	public function setQualityCheckResult($_QualityCheckResult)
	{
		return ($this->QualityCheckResult = $_QualityCheckResult);
	}
	/**
	 * Get QualityCheckResult
	 * @return boolean
	 */
	public function getQualityCheckResult()
	{
		return $this->QualityCheckResult;
	}
	/**
	 * Set processedSamples
	 * @param ArrayOfSample processedSamples
	 * @return ArrayOfSample
	 */
	public function setProcessedSamples($_processedSamples)
	{
		return ($this->processedSamples = $_processedSamples);
	}
	/**
	 * Get processedSamples
	 * @return BioIDWSTypeArrayOfSample
	 */
	public function getProcessedSamples()
	{
		return $this->processedSamples;
	}
	/**
	 * Set messages
	 * @param string messages
	 * @return string
	 */
	public function setMessages($_messages)
	{
		return ($this->messages = $_messages);
	}
	/**
	 * Get messages
	 * @return string
	 */
	public function getMessages()
	{
		return $this->messages;
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