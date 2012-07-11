<?php
/**
 * Class file for XiEdgarTypeSharesAsOf
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeSharesAsOf
 * @date 08/07/2012
 */
class XiEdgarTypeSharesAsOf extends XiEdgarTypeCommon
{
	/**
	 * The AsOfDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AsOfDate;
	/**
	 * The Quantity
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Quantity;
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
	 * Constructor
	 * @param string AsOfDate
	 * @param double Quantity
	 * @param string Source
	 * @param string SourceDate
	 * @param string SourceUrl
	 * @return XiEdgarTypeSharesAsOf
	 */
	public function __construct($_AsOfDate = null,$_Quantity,$_Source = null,$_SourceDate = null,$_SourceUrl = null)
	{
		XiEdgarWsdlClass::__construct(array('AsOfDate'=>$_AsOfDate,'Quantity'=>$_Quantity,'Source'=>$_Source,'SourceDate'=>$_SourceDate,'SourceUrl'=>$_SourceUrl));
	}
	/**
	 * Set AsOfDate
	 * @param string AsOfDate
	 * @return string
	 */
	public function setAsOfDate($_AsOfDate)
	{
		return ($this->AsOfDate = $_AsOfDate);
	}
	/**
	 * Get AsOfDate
	 * @return string
	 */
	public function getAsOfDate()
	{
		return $this->AsOfDate;
	}
	/**
	 * Set Quantity
	 * @param double Quantity
	 * @return double
	 */
	public function setQuantity($_Quantity)
	{
		return ($this->Quantity = $_Quantity);
	}
	/**
	 * Get Quantity
	 * @return double
	 */
	public function getQuantity()
	{
		return $this->Quantity;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>