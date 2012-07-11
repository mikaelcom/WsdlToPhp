<?php
/**
 * Class file for XiInsiderTypeInsiderOwnerships
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeInsiderOwnerships
 * @date 08/07/2012
 */
class XiInsiderTypeInsiderOwnerships extends XiInsiderTypeCommon
{
	/**
	 * The Insider
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeInsider
	 */
	public $Insider;
	/**
	 * The Ownerships
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeArrayOfInsiderOwnership
	 */
	public $Ownerships;
	/**
	 * Constructor
	 * @param XiInsiderTypeInsider Insider
	 * @param XiInsiderTypeArrayOfInsiderOwnership Ownerships
	 * @return XiInsiderTypeInsiderOwnerships
	 */
	public function __construct($_Insider = null,$_Ownerships = null)
	{
		XiInsiderWsdlClass::__construct(array('Insider'=>$_Insider,'Ownerships'=>new XiInsiderTypeArrayOfInsiderOwnership($_Ownerships)));
	}
	/**
	 * Set Insider
	 * @param Insider Insider
	 * @return Insider
	 */
	public function setInsider($_Insider)
	{
		return ($this->Insider = $_Insider);
	}
	/**
	 * Get Insider
	 * @return XiInsiderTypeInsider
	 */
	public function getInsider()
	{
		return $this->Insider;
	}
	/**
	 * Set Ownerships
	 * @param ArrayOfInsiderOwnership Ownerships
	 * @return ArrayOfInsiderOwnership
	 */
	public function setOwnerships($_Ownerships)
	{
		return ($this->Ownerships = $_Ownerships);
	}
	/**
	 * Get Ownerships
	 * @return XiInsiderTypeArrayOfInsiderOwnership
	 */
	public function getOwnerships()
	{
		return $this->Ownerships;
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