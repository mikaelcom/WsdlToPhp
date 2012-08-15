<?php
/**
 * Class file for RFUNSPSCTypeUNSPSC
 * @date 15/08/2012
 */
/**
 * Class RFUNSPSCTypeUNSPSC
 * @date 15/08/2012
 */
class RFUNSPSCTypeUNSPSC extends RFUNSPSCWsdlClass
{
	/**
	 * The Egci
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var int
	 */
	public $Egci;
	/**
	 * The Segment
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Segment;
	/**
	 * The Family
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Family;
	/**
	 * The Class
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Class;
	/**
	 * The Commodity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Commodity;
	/**
	 * The Title
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Title;
	/**
	 * Constructor
	 * @param int Egci
	 * @param string Segment
	 * @param string Family
	 * @param string Class
	 * @param string Commodity
	 * @param string Title
	 * @return RFUNSPSCTypeUNSPSC
	 */
	public function __construct($_Egci = null,$_Segment = null,$_Family = null,$_Class = null,$_Commodity = null,$_Title = null)
	{
		parent::__construct(array('Egci'=>$_Egci,'Segment'=>$_Segment,'Family'=>$_Family,'Class'=>$_Class,'Commodity'=>$_Commodity,'Title'=>$_Title));
	}
	/**
	 * Set Egci
	 * @param int Egci
	 * @return int
	 */
	public function setEgci($_Egci)
	{
		return ($this->Egci = $_Egci);
	}
	/**
	 * Get Egci
	 * @return int
	 */
	public function getEgci()
	{
		return $this->Egci;
	}
	/**
	 * Set Segment
	 * @param string Segment
	 * @return string
	 */
	public function setSegment($_Segment)
	{
		return ($this->Segment = $_Segment);
	}
	/**
	 * Get Segment
	 * @return string
	 */
	public function getSegment()
	{
		return $this->Segment;
	}
	/**
	 * Set Family
	 * @param string Family
	 * @return string
	 */
	public function setFamily($_Family)
	{
		return ($this->Family = $_Family);
	}
	/**
	 * Get Family
	 * @return string
	 */
	public function getFamily()
	{
		return $this->Family;
	}
	/**
	 * Set Class
	 * @param string Class
	 * @return string
	 */
	public function setClass($_Class)
	{
		return ($this->Class = $_Class);
	}
	/**
	 * Get Class
	 * @return string
	 */
	public function getClass()
	{
		return $this->Class;
	}
	/**
	 * Set Commodity
	 * @param string Commodity
	 * @return string
	 */
	public function setCommodity($_Commodity)
	{
		return ($this->Commodity = $_Commodity);
	}
	/**
	 * Get Commodity
	 * @return string
	 */
	public function getCommodity()
	{
		return $this->Commodity;
	}
	/**
	 * Set Title
	 * @param string Title
	 * @return string
	 */
	public function setTitle($_Title)
	{
		return ($this->Title = $_Title);
	}
	/**
	 * Get Title
	 * @return string
	 */
	public function getTitle()
	{
		return $this->Title;
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