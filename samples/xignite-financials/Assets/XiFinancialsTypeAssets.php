<?php
/**
 * Class file for XiFinancialsTypeAssets
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeAssets
 * @date 08/07/2012
 */
class XiFinancialsTypeAssets extends XiFinancialsWsdlClass
{
	/**
	 * The CurrentAssets
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeCurrentAssets
	 */
	public $CurrentAssets;
	/**
	 * The NonCurrentAssets
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeNonCurrentAssets
	 */
	public $NonCurrentAssets;
	/**
	 * The TotalAssets
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $TotalAssets;
	/**
	 * Constructor
	 * @param XiFinancialsTypeCurrentAssets CurrentAssets
	 * @param XiFinancialsTypeNonCurrentAssets NonCurrentAssets
	 * @param double TotalAssets
	 * @return XiFinancialsTypeAssets
	 */
	public function __construct($_CurrentAssets = null,$_NonCurrentAssets = null,$_TotalAssets)
	{
		parent::__construct(array('CurrentAssets'=>$_CurrentAssets,'NonCurrentAssets'=>$_NonCurrentAssets,'TotalAssets'=>$_TotalAssets));
	}
	/**
	 * Set CurrentAssets
	 * @param CurrentAssets CurrentAssets
	 * @return CurrentAssets
	 */
	public function setCurrentAssets($_CurrentAssets)
	{
		return ($this->CurrentAssets = $_CurrentAssets);
	}
	/**
	 * Get CurrentAssets
	 * @return XiFinancialsTypeCurrentAssets
	 */
	public function getCurrentAssets()
	{
		return $this->CurrentAssets;
	}
	/**
	 * Set NonCurrentAssets
	 * @param NonCurrentAssets NonCurrentAssets
	 * @return NonCurrentAssets
	 */
	public function setNonCurrentAssets($_NonCurrentAssets)
	{
		return ($this->NonCurrentAssets = $_NonCurrentAssets);
	}
	/**
	 * Get NonCurrentAssets
	 * @return XiFinancialsTypeNonCurrentAssets
	 */
	public function getNonCurrentAssets()
	{
		return $this->NonCurrentAssets;
	}
	/**
	 * Set TotalAssets
	 * @param double TotalAssets
	 * @return double
	 */
	public function setTotalAssets($_TotalAssets)
	{
		return ($this->TotalAssets = $_TotalAssets);
	}
	/**
	 * Get TotalAssets
	 * @return double
	 */
	public function getTotalAssets()
	{
		return $this->TotalAssets;
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