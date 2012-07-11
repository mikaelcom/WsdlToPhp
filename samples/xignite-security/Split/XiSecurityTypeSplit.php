<?php
/**
 * Class file for XiSecurityTypeSplit
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeSplit
 * @date 08/07/2012
 */
class XiSecurityTypeSplit extends XiSecurityWsdlClass
{
	/**
	 * The Date
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Date;
	/**
	 * The Ratio
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Ratio;
	/**
	 * The CumulatedRatio
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $CumulatedRatio;
	/**
	 * The Text
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Text;
	/**
	 * Constructor
	 * @param string Date
	 * @param double Ratio
	 * @param double CumulatedRatio
	 * @param string Text
	 * @return XiSecurityTypeSplit
	 */
	public function __construct($_Date = null,$_Ratio,$_CumulatedRatio,$_Text = null)
	{
		parent::__construct(array('Date'=>$_Date,'Ratio'=>$_Ratio,'CumulatedRatio'=>$_CumulatedRatio,'Text'=>$_Text));
	}
	/**
	 * Set Date
	 * @param string Date
	 * @return string
	 */
	public function setDate($_Date)
	{
		return ($this->Date = $_Date);
	}
	/**
	 * Get Date
	 * @return string
	 */
	public function getDate()
	{
		return $this->Date;
	}
	/**
	 * Set Ratio
	 * @param double Ratio
	 * @return double
	 */
	public function setRatio($_Ratio)
	{
		return ($this->Ratio = $_Ratio);
	}
	/**
	 * Get Ratio
	 * @return double
	 */
	public function getRatio()
	{
		return $this->Ratio;
	}
	/**
	 * Set CumulatedRatio
	 * @param double CumulatedRatio
	 * @return double
	 */
	public function setCumulatedRatio($_CumulatedRatio)
	{
		return ($this->CumulatedRatio = $_CumulatedRatio);
	}
	/**
	 * Get CumulatedRatio
	 * @return double
	 */
	public function getCumulatedRatio()
	{
		return $this->CumulatedRatio;
	}
	/**
	 * Set Text
	 * @param string Text
	 * @return string
	 */
	public function setText($_Text)
	{
		return ($this->Text = $_Text);
	}
	/**
	 * Get Text
	 * @return string
	 */
	public function getText()
	{
		return $this->Text;
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