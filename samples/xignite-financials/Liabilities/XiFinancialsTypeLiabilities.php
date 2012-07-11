<?php
/**
 * Class file for XiFinancialsTypeLiabilities
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeLiabilities
 * @date 08/07/2012
 */
class XiFinancialsTypeLiabilities extends XiFinancialsWsdlClass
{
	/**
	 * The CurrentLiabilities
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeCurrentLiabilities
	 */
	public $CurrentLiabilities;
	/**
	 * The NonCurrentLiabilities
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeNonCurrentLiabilities
	 */
	public $NonCurrentLiabilities;
	/**
	 * The TotalLiabilities
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $TotalLiabilities;
	/**
	 * Constructor
	 * @param XiFinancialsTypeCurrentLiabilities CurrentLiabilities
	 * @param XiFinancialsTypeNonCurrentLiabilities NonCurrentLiabilities
	 * @param double TotalLiabilities
	 * @return XiFinancialsTypeLiabilities
	 */
	public function __construct($_CurrentLiabilities = null,$_NonCurrentLiabilities = null,$_TotalLiabilities)
	{
		parent::__construct(array('CurrentLiabilities'=>$_CurrentLiabilities,'NonCurrentLiabilities'=>$_NonCurrentLiabilities,'TotalLiabilities'=>$_TotalLiabilities));
	}
	/**
	 * Set CurrentLiabilities
	 * @param CurrentLiabilities CurrentLiabilities
	 * @return CurrentLiabilities
	 */
	public function setCurrentLiabilities($_CurrentLiabilities)
	{
		return ($this->CurrentLiabilities = $_CurrentLiabilities);
	}
	/**
	 * Get CurrentLiabilities
	 * @return XiFinancialsTypeCurrentLiabilities
	 */
	public function getCurrentLiabilities()
	{
		return $this->CurrentLiabilities;
	}
	/**
	 * Set NonCurrentLiabilities
	 * @param NonCurrentLiabilities NonCurrentLiabilities
	 * @return NonCurrentLiabilities
	 */
	public function setNonCurrentLiabilities($_NonCurrentLiabilities)
	{
		return ($this->NonCurrentLiabilities = $_NonCurrentLiabilities);
	}
	/**
	 * Get NonCurrentLiabilities
	 * @return XiFinancialsTypeNonCurrentLiabilities
	 */
	public function getNonCurrentLiabilities()
	{
		return $this->NonCurrentLiabilities;
	}
	/**
	 * Set TotalLiabilities
	 * @param double TotalLiabilities
	 * @return double
	 */
	public function setTotalLiabilities($_TotalLiabilities)
	{
		return ($this->TotalLiabilities = $_TotalLiabilities);
	}
	/**
	 * Get TotalLiabilities
	 * @return double
	 */
	public function getTotalLiabilities()
	{
		return $this->TotalLiabilities;
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