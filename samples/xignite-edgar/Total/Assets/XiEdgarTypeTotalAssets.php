<?php
/**
 * Class file for XiEdgarTypeTotalAssets
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeTotalAssets
 * @date 08/07/2012
 */
class XiEdgarTypeTotalAssets extends XiEdgarTypeCommon
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEdgarTypeSecurity
	 */
	public $Security;
	/**
	 * The Source
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Source;
	/**
	 * The SourceDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SourceDate;
	/**
	 * The SourceUrl
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SourceUrl;
	/**
	 * The SourceType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SourceType;
	/**
	 * The Value
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Value;
	/**
	 * The ValueDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ValueDate;
	/**
	 * Constructor
	 * @param XiEdgarTypeSecurity Security
	 * @param string Source
	 * @param string SourceDate
	 * @param string SourceUrl
	 * @param string SourceType
	 * @param double Value
	 * @param string ValueDate
	 * @return XiEdgarTypeTotalAssets
	 */
	public function __construct($_Security = null,$_Source = null,$_SourceDate = null,$_SourceUrl = null,$_SourceType = null,$_Value,$_ValueDate = null)
	{
		XiEdgarWsdlClass::__construct(array('Security'=>$_Security,'Source'=>$_Source,'SourceDate'=>$_SourceDate,'SourceUrl'=>$_SourceUrl,'SourceType'=>$_SourceType,'Value'=>$_Value,'ValueDate'=>$_ValueDate));
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
	 * @return XiEdgarTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
	}
	/**
	 * Set Source
	 * @param string Source
	 * @return string
	 */
	public function setSource($_Source)
	{
		return ($this->Source = $_Source);
	}
	/**
	 * Get Source
	 * @return string
	 */
	public function getSource()
	{
		return $this->Source;
	}
	/**
	 * Set SourceDate
	 * @param string SourceDate
	 * @return string
	 */
	public function setSourceDate($_SourceDate)
	{
		return ($this->SourceDate = $_SourceDate);
	}
	/**
	 * Get SourceDate
	 * @return string
	 */
	public function getSourceDate()
	{
		return $this->SourceDate;
	}
	/**
	 * Set SourceUrl
	 * @param string SourceUrl
	 * @return string
	 */
	public function setSourceUrl($_SourceUrl)
	{
		return ($this->SourceUrl = $_SourceUrl);
	}
	/**
	 * Get SourceUrl
	 * @return string
	 */
	public function getSourceUrl()
	{
		return $this->SourceUrl;
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
	 * Set Value
	 * @param double Value
	 * @return double
	 */
	public function setValue($_Value)
	{
		return ($this->Value = $_Value);
	}
	/**
	 * Get Value
	 * @return double
	 */
	public function getValue()
	{
		return $this->Value;
	}
	/**
	 * Set ValueDate
	 * @param string ValueDate
	 * @return string
	 */
	public function setValueDate($_ValueDate)
	{
		return ($this->ValueDate = $_ValueDate);
	}
	/**
	 * Get ValueDate
	 * @return string
	 */
	public function getValueDate()
	{
		return $this->ValueDate;
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