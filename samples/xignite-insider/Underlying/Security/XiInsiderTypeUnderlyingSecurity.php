<?php
/**
 * Class file for XiInsiderTypeUnderlyingSecurity
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeUnderlyingSecurity
 * @date 08/07/2012
 */
class XiInsiderTypeUnderlyingSecurity extends XiInsiderWsdlClass
{
	/**
	 * The underlyingSecurityTitle
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeValue
	 */
	public $underlyingSecurityTitle;
	/**
	 * The underlyingSecurityShares
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeValue
	 */
	public $underlyingSecurityShares;
	/**
	 * Constructor
	 * @param XiInsiderTypeValue underlyingSecurityTitle
	 * @param XiInsiderTypeValue underlyingSecurityShares
	 * @return XiInsiderTypeUnderlyingSecurity
	 */
	public function __construct($_underlyingSecurityTitle = null,$_underlyingSecurityShares = null)
	{
		parent::__construct(array('underlyingSecurityTitle'=>$_underlyingSecurityTitle,'underlyingSecurityShares'=>$_underlyingSecurityShares));
	}
	/**
	 * Set underlyingSecurityTitle
	 * @param value underlyingSecurityTitle
	 * @return value
	 */
	public function setUnderlyingSecurityTitle($_underlyingSecurityTitle)
	{
		return ($this->underlyingSecurityTitle = $_underlyingSecurityTitle);
	}
	/**
	 * Get underlyingSecurityTitle
	 * @return XiInsiderTypevalue
	 */
	public function getUnderlyingSecurityTitle()
	{
		return $this->underlyingSecurityTitle;
	}
	/**
	 * Set underlyingSecurityShares
	 * @param value underlyingSecurityShares
	 * @return value
	 */
	public function setUnderlyingSecurityShares($_underlyingSecurityShares)
	{
		return ($this->underlyingSecurityShares = $_underlyingSecurityShares);
	}
	/**
	 * Get underlyingSecurityShares
	 * @return XiInsiderTypevalue
	 */
	public function getUnderlyingSecurityShares()
	{
		return $this->underlyingSecurityShares;
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