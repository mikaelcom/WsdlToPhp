<?php
/**
 * Class file for XiInsiderTypeValue
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeValue
 * @date 08/07/2012
 */
class XiInsiderTypeValue extends XiInsiderWsdlClass
{
	/**
	 * The value
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $value;
	/**
	 * The footnoteId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeFootnoteId
	 */
	public $footnoteId;
	/**
	 * Constructor
	 * @param string value
	 * @param XiInsiderTypeFootnoteId footnoteId
	 * @return XiInsiderTypeValue
	 */
	public function __construct($_value = null,$_footnoteId = null)
	{
		parent::__construct(array('value'=>$_value,'footnoteId'=>$_footnoteId));
	}
	/**
	 * Set value
	 * @param string value
	 * @return string
	 */
	public function setValue($_value)
	{
		return ($this->value = $_value);
	}
	/**
	 * Get value
	 * @return string
	 */
	public function getValue()
	{
		return $this->value;
	}
	/**
	 * Set footnoteId
	 * @param footnoteId footnoteId
	 * @return footnoteId
	 */
	public function setFootnoteId($_footnoteId)
	{
		return ($this->footnoteId = $_footnoteId);
	}
	/**
	 * Get footnoteId
	 * @return XiInsiderTypefootnoteId
	 */
	public function getFootnoteId()
	{
		return $this->footnoteId;
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