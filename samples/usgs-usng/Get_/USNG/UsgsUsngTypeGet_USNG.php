<?php
/**
 * Class file for UsgsUsngTypeGet_USNG
 * @date 08/07/2012
 */
/**
 * Class UsgsUsngTypeGet_USNG
 * @date 08/07/2012
 */
class UsgsUsngTypeGet_USNG extends UsgsUsngWsdlClass
{
	/**
	 * The X_Value
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $X_Value;
	/**
	 * The Y_Value
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Y_Value;
	/**
	 * Constructor
	 * @param string X_Value
	 * @param string Y_Value
	 * @return UsgsUsngTypeGet_USNG
	 */
	public function __construct($_X_Value = null,$_Y_Value = null)
	{
		parent::__construct(array('X_Value'=>$_X_Value,'Y_Value'=>$_Y_Value));
	}
	/**
	 * Set X_Value
	 * @param string X_Value
	 * @return string
	 */
	public function setX_Value($_X_Value)
	{
		return ($this->X_Value = $_X_Value);
	}
	/**
	 * Get X_Value
	 * @return string
	 */
	public function getX_Value()
	{
		return $this->X_Value;
	}
	/**
	 * Set Y_Value
	 * @param string Y_Value
	 * @return string
	 */
	public function setY_Value($_Y_Value)
	{
		return ($this->Y_Value = $_Y_Value);
	}
	/**
	 * Get Y_Value
	 * @return string
	 */
	public function getY_Value()
	{
		return $this->Y_Value;
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