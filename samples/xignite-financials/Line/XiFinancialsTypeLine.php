<?php
/**
 * Class file for XiFinancialsTypeLine
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeLine
 * @date 08/07/2012
 */
class XiFinancialsTypeLine extends XiFinancialsWsdlClass
{
	/**
	 * The LineType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeLineTypes
	 */
	public $LineType;
	/**
	 * The FundamentalType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeStandardItemTypes
	 */
	public $FundamentalType;
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Name;
	/**
	 * The Value1
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Value1;
	/**
	 * The Value2
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Value2;
	/**
	 * The Value3
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Value3;
	/**
	 * The Value4
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Value4;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Description;
	/**
	 * Constructor
	 * @param XiFinancialsTypeLineTypes LineType
	 * @param XiFinancialsTypeStandardItemTypes FundamentalType
	 * @param string Name
	 * @param string Value1
	 * @param string Value2
	 * @param string Value3
	 * @param string Value4
	 * @param string Description
	 * @return XiFinancialsTypeLine
	 */
	public function __construct($_LineType,$_FundamentalType,$_Name = null,$_Value1 = null,$_Value2 = null,$_Value3 = null,$_Value4 = null,$_Description = null)
	{
		parent::__construct(array('LineType'=>$_LineType,'FundamentalType'=>$_FundamentalType,'Name'=>$_Name,'Value1'=>$_Value1,'Value2'=>$_Value2,'Value3'=>$_Value3,'Value4'=>$_Value4,'Description'=>$_Description));
	}
	/**
	 * Set LineType
	 * @param LineTypes LineType
	 * @return LineTypes
	 */
	public function setLineType($_LineType)
	{
		return ($this->LineType = XiFinancialsTypeLineTypes::valueIsValid($_LineType)?$_LineType:null);
	}
	/**
	 * Get LineType
	 * @return XiFinancialsTypeLineTypes
	 */
	public function getLineType()
	{
		return $this->LineType;
	}
	/**
	 * Set FundamentalType
	 * @param StandardItemTypes FundamentalType
	 * @return StandardItemTypes
	 */
	public function setFundamentalType($_FundamentalType)
	{
		return ($this->FundamentalType = XiFinancialsTypeStandardItemTypes::valueIsValid($_FundamentalType)?$_FundamentalType:null);
	}
	/**
	 * Get FundamentalType
	 * @return XiFinancialsTypeStandardItemTypes
	 */
	public function getFundamentalType()
	{
		return $this->FundamentalType;
	}
	/**
	 * Set Name
	 * @param string Name
	 * @return string
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return string
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set Value1
	 * @param string Value1
	 * @return string
	 */
	public function setValue1($_Value1)
	{
		return ($this->Value1 = $_Value1);
	}
	/**
	 * Get Value1
	 * @return string
	 */
	public function getValue1()
	{
		return $this->Value1;
	}
	/**
	 * Set Value2
	 * @param string Value2
	 * @return string
	 */
	public function setValue2($_Value2)
	{
		return ($this->Value2 = $_Value2);
	}
	/**
	 * Get Value2
	 * @return string
	 */
	public function getValue2()
	{
		return $this->Value2;
	}
	/**
	 * Set Value3
	 * @param string Value3
	 * @return string
	 */
	public function setValue3($_Value3)
	{
		return ($this->Value3 = $_Value3);
	}
	/**
	 * Get Value3
	 * @return string
	 */
	public function getValue3()
	{
		return $this->Value3;
	}
	/**
	 * Set Value4
	 * @param string Value4
	 * @return string
	 */
	public function setValue4($_Value4)
	{
		return ($this->Value4 = $_Value4);
	}
	/**
	 * Get Value4
	 * @return string
	 */
	public function getValue4()
	{
		return $this->Value4;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>