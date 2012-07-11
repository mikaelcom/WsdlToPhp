<?php
/**
 * Class file for EbayShoppingTypeErrorParameterType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeErrorParameterType
 * Documentation : The index of the parameter in the error.
 * @date 05/07/2012
 */
class EbayShoppingTypeErrorParameterType extends EbayShoppingWsdlClass
{
	/**
	 * The Value
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The value of the variable.
	 * @var string
	 */
	public $Value;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * The ParamID
	 * @var string
	 */
	public $ParamID;
	/**
	 * Constructor
	 * @param string Value
	 * @param DOMDocument any
	 * @param string ParamID
	 * @return EbayShoppingTypeErrorParameterType
	 */
	public function __construct($_Value = null,$_any = null,$_ParamID = null)
	{
		parent::__construct(array('Value'=>$_Value,'any'=>$_any,'ParamID'=>$_ParamID));
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
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
	}
	/**
	 * Set ParamID
	 * @param string ParamID
	 * @return string
	 */
	public function setParamID($_ParamID)
	{
		return ($this->ParamID = $_ParamID);
	}
	/**
	 * Get ParamID
	 * @return string
	 */
	public function getParamID()
	{
		return $this->ParamID;
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