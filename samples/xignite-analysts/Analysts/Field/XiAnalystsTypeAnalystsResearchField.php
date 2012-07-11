<?php
/**
 * Class file for XiAnalystsTypeAnalystsResearchField
 * @date 08/07/2012
 */
/**
 * Class XiAnalystsTypeAnalystsResearchField
 * @date 08/07/2012
 */
class XiAnalystsTypeAnalystsResearchField extends XiAnalystsTypeCommon
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiAnalystsTypeSecurity
	 */
	public $Security;
	/**
	 * The FieldType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiAnalystsTypeAnalystFieldTypes
	 */
	public $FieldType;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Description;
	/**
	 * The Value
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Value;
	/**
	 * The DataType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DataType;
	/**
	 * The DataFormat
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DataFormat;
	/**
	 * The DataSource
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DataSource;
	/**
	 * Constructor
	 * @param XiAnalystsTypeSecurity Security
	 * @param XiAnalystsTypeAnalystFieldTypes FieldType
	 * @param string Description
	 * @param string Value
	 * @param string DataType
	 * @param string DataFormat
	 * @param string DataSource
	 * @return XiAnalystsTypeAnalystsResearchField
	 */
	public function __construct($_Security = null,$_FieldType,$_Description = null,$_Value = null,$_DataType = null,$_DataFormat = null,$_DataSource = null)
	{
		XiAnalystsWsdlClass::__construct(array('Security'=>$_Security,'FieldType'=>$_FieldType,'Description'=>$_Description,'Value'=>$_Value,'DataType'=>$_DataType,'DataFormat'=>$_DataFormat,'DataSource'=>$_DataSource));
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
	 * @return XiAnalystsTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
	}
	/**
	 * Set FieldType
	 * @param AnalystFieldTypes FieldType
	 * @return AnalystFieldTypes
	 */
	public function setFieldType($_FieldType)
	{
		return ($this->FieldType = XiAnalystsTypeAnalystFieldTypes::valueIsValid($_FieldType)?$_FieldType:null);
	}
	/**
	 * Get FieldType
	 * @return XiAnalystsTypeAnalystFieldTypes
	 */
	public function getFieldType()
	{
		return $this->FieldType;
	}
	/**
	 * Set Description
	 * @param string Description
	 * @return string
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->Description;
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
	 * Set DataType
	 * @param string DataType
	 * @return string
	 */
	public function setDataType($_DataType)
	{
		return ($this->DataType = $_DataType);
	}
	/**
	 * Get DataType
	 * @return string
	 */
	public function getDataType()
	{
		return $this->DataType;
	}
	/**
	 * Set DataFormat
	 * @param string DataFormat
	 * @return string
	 */
	public function setDataFormat($_DataFormat)
	{
		return ($this->DataFormat = $_DataFormat);
	}
	/**
	 * Get DataFormat
	 * @return string
	 */
	public function getDataFormat()
	{
		return $this->DataFormat;
	}
	/**
	 * Set DataSource
	 * @param string DataSource
	 * @return string
	 */
	public function setDataSource($_DataSource)
	{
		return ($this->DataSource = $_DataSource);
	}
	/**
	 * Get DataSource
	 * @return string
	 */
	public function getDataSource()
	{
		return $this->DataSource;
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