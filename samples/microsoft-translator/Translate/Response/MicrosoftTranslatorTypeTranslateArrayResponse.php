<?php
/**
 * Class file for MicrosoftTranslatorTypeTranslateArrayResponse
 * @date 05/07/2012
 */
/**
 * Class MicrosoftTranslatorTypeTranslateArrayResponse
 * @date 05/07/2012
 */
class MicrosoftTranslatorTypeTranslateArrayResponse extends MicrosoftTranslatorWsdlClass
{
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Error;
	/**
	 * The From
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $From;
	/**
	 * The OriginalTextSentenceLengths
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var MicrosoftTranslatorTypeArrayOfint
	 */
	public $OriginalTextSentenceLengths;
	/**
	 * The State
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $State;
	/**
	 * The TranslatedText
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $TranslatedText;
	/**
	 * The TranslatedTextSentenceLengths
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var MicrosoftTranslatorTypeArrayOfint
	 */
	public $TranslatedTextSentenceLengths;
	/**
	 * Constructor
	 * @param string Error
	 * @param string From
	 * @param MicrosoftTranslatorTypeArrayOfint OriginalTextSentenceLengths
	 * @param string State
	 * @param string TranslatedText
	 * @param MicrosoftTranslatorTypeArrayOfint TranslatedTextSentenceLengths
	 * @return MicrosoftTranslatorTypeTranslateArrayResponse
	 */
	public function __construct($_Error = null,$_From = null,$_OriginalTextSentenceLengths = null,$_State = null,$_TranslatedText = null,$_TranslatedTextSentenceLengths = null)
	{
		parent::__construct(array('Error'=>$_Error,'From'=>$_From,'OriginalTextSentenceLengths'=>new MicrosoftTranslatorTypeArrayOfint($_OriginalTextSentenceLengths),'State'=>$_State,'TranslatedText'=>$_TranslatedText,'TranslatedTextSentenceLengths'=>new MicrosoftTranslatorTypeArrayOfint($_TranslatedTextSentenceLengths)));
	}
	/**
	 * Set Error
	 * @param string Error
	 * @return string
	 */
	public function setError($_Error)
	{
		return ($this->Error = $_Error);
	}
	/**
	 * Get Error
	 * @return string
	 */
	public function getError()
	{
		return $this->Error;
	}
	/**
	 * Set From
	 * @param string From
	 * @return string
	 */
	public function setFrom($_From)
	{
		return ($this->From = $_From);
	}
	/**
	 * Get From
	 * @return string
	 */
	public function getFrom()
	{
		return $this->From;
	}
	/**
	 * Set OriginalTextSentenceLengths
	 * @param ArrayOfint OriginalTextSentenceLengths
	 * @return ArrayOfint
	 */
	public function setOriginalTextSentenceLengths($_OriginalTextSentenceLengths)
	{
		return ($this->OriginalTextSentenceLengths = $_OriginalTextSentenceLengths);
	}
	/**
	 * Get OriginalTextSentenceLengths
	 * @return MicrosoftTranslatorTypeArrayOfint
	 */
	public function getOriginalTextSentenceLengths()
	{
		return $this->OriginalTextSentenceLengths;
	}
	/**
	 * Set State
	 * @param string State
	 * @return string
	 */
	public function setState($_State)
	{
		return ($this->State = $_State);
	}
	/**
	 * Get State
	 * @return string
	 */
	public function getState()
	{
		return $this->State;
	}
	/**
	 * Set TranslatedText
	 * @param string TranslatedText
	 * @return string
	 */
	public function setTranslatedText($_TranslatedText)
	{
		return ($this->TranslatedText = $_TranslatedText);
	}
	/**
	 * Get TranslatedText
	 * @return string
	 */
	public function getTranslatedText()
	{
		return $this->TranslatedText;
	}
	/**
	 * Set TranslatedTextSentenceLengths
	 * @param ArrayOfint TranslatedTextSentenceLengths
	 * @return ArrayOfint
	 */
	public function setTranslatedTextSentenceLengths($_TranslatedTextSentenceLengths)
	{
		return ($this->TranslatedTextSentenceLengths = $_TranslatedTextSentenceLengths);
	}
	/**
	 * Get TranslatedTextSentenceLengths
	 * @return MicrosoftTranslatorTypeArrayOfint
	 */
	public function getTranslatedTextSentenceLengths()
	{
		return $this->TranslatedTextSentenceLengths;
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