<?php
/**
 * Class file for BingTypeError
 * @date 02/07/2012
 */
/**
 * Class BingTypeError
 * @date 02/07/2012
 */
class BingTypeError extends BingWsdlClass
{
	/**
	 * The Code
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var unsignedInt
	 */
	public $Code;
	/**
	 * The Message
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Message;
	/**
	 * The Parameter
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Parameter;
	/**
	 * The Value
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Value;
	/**
	 * The HelpUrl
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $HelpUrl;
	/**
	 * The SourceType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SourceType;
	/**
	 * The SourceTypeErrorCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var unsignedInt
	 */
	public $SourceTypeErrorCode;
	/**
	 * Constructor
	 * @param unsignedInt Code
	 * @param string Message
	 * @param string Parameter
	 * @param string Value
	 * @param string HelpUrl
	 * @param string SourceType
	 * @param unsignedInt SourceTypeErrorCode
	 * @return BingTypeError
	 */
	public function __construct($_Code = null,$_Message = null,$_Parameter = null,$_Value = null,$_HelpUrl = null,$_SourceType = null,$_SourceTypeErrorCode = null)
	{
		parent::__construct(array('Code'=>$_Code,'Message'=>$_Message,'Parameter'=>$_Parameter,'Value'=>$_Value,'HelpUrl'=>$_HelpUrl,'SourceType'=>$_SourceType,'SourceTypeErrorCode'=>$_SourceTypeErrorCode));
	}
	/**
	 * Set Code
	 * @param unsignedInt Code
	 * @return unsignedInt
	 */
	public function setCode($_Code)
	{
		return ($this->Code = $_Code);
	}
	/**
	 * Get Code
	 * @return unsignedInt
	 */
	public function getCode()
	{
		return $this->Code;
	}
	/**
	 * Set Message
	 * @param string Message
	 * @return string
	 */
	public function setMessage($_Message)
	{
		return ($this->Message = $_Message);
	}
	/**
	 * Get Message
	 * @return string
	 */
	public function getMessage()
	{
		return $this->Message;
	}
	/**
	 * Set Parameter
	 * @param string Parameter
	 * @return string
	 */
	public function setParameter($_Parameter)
	{
		return ($this->Parameter = $_Parameter);
	}
	/**
	 * Get Parameter
	 * @return string
	 */
	public function getParameter()
	{
		return $this->Parameter;
	}
	/**
	 * Set Value
	 * @param string Value
	 * @return string
	 */
	public function setValue($_Value)
	{
		return ($this->Value = $_Value);
	}
	/**
	 * Get Value
	 * @return string
	 */
	public function getValue()
	{
		return $this->Value;
	}
	/**
	 * Set HelpUrl
	 * @param string HelpUrl
	 * @return string
	 */
	public function setHelpUrl($_HelpUrl)
	{
		return ($this->HelpUrl = $_HelpUrl);
	}
	/**
	 * Get HelpUrl
	 * @return string
	 */
	public function getHelpUrl()
	{
		return $this->HelpUrl;
	}
	/**
	 * Set SourceType
	 * @param string SourceType
	 * @return string
	 */
	public function setSourceType($_SourceType)
	{
		return ($this->SourceType = $_SourceType);
	}
	/**
	 * Get SourceType
	 * @return string
	 */
	public function getSourceType()
	{
		return $this->SourceType;
	}
	/**
	 * Set SourceTypeErrorCode
	 * @param unsignedInt SourceTypeErrorCode
	 * @return unsignedInt
	 */
	public function setSourceTypeErrorCode($_SourceTypeErrorCode)
	{
		return ($this->SourceTypeErrorCode = $_SourceTypeErrorCode);
	}
	/**
	 * Get SourceTypeErrorCode
	 * @return unsignedInt
	 */
	public function getSourceTypeErrorCode()
	{
		return $this->SourceTypeErrorCode;
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