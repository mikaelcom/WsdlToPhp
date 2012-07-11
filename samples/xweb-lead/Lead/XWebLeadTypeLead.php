<?php
/**
 * Class file for XWebLeadTypeLead
 * @date 09/07/2012
 */
/**
 * Class XWebLeadTypeLead
 * @date 09/07/2012
 */
class XWebLeadTypeLead extends XWebLeadWsdlClass
{
	/**
	 * The Source_Identifier
	 * @var Source_Identifier
	 */
	public $Source_Identifier;
	/**
	 * The Description
	 * @var Description
	 */
	public $Description;
	/**
	 * The Body
	 * @var Body
	 */
	public $Body;
	/**
	 * The Lead_ID
	 * @var anonymous4
	 */
	public $Lead_ID;
	/**
	 * The Date_Created
	 * @var anonymous5
	 */
	public $Date_Created;
	/**
	 * Constructor
	 * @param Source_Identifier Source_Identifier
	 * @param Description Description
	 * @param Body Body
	 * @param anonymous4 Lead_ID
	 * @param anonymous5 Date_Created
	 * @return XWebLeadTypeLead
	 */
	public function __construct($_Source_Identifier = null,$_Description = null,$_Body = null,$_Lead_ID = null,$_Date_Created = null)
	{
		parent::__construct(array('Source_Identifier'=>$_Source_Identifier,'Description'=>$_Description,'Body'=>$_Body,'Lead_ID'=>$_Lead_ID,'Date_Created'=>$_Date_Created));
	}
	/**
	 * Set Source_Identifier
	 * @param Source_Identifier Source_Identifier
	 * @return Source_Identifier
	 */
	public function setSource_Identifier($_Source_Identifier)
	{
		return ($this->Source_Identifier = $_Source_Identifier);
	}
	/**
	 * Get Source_Identifier
	 * @return Source_Identifier
	 */
	public function getSource_Identifier()
	{
		return $this->Source_Identifier;
	}
	/**
	 * Set Description
	 * @param Description Description
	 * @return Description
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return Description
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set Body
	 * @param Body Body
	 * @return Body
	 */
	public function setBody($_Body)
	{
		return ($this->Body = $_Body);
	}
	/**
	 * Get Body
	 * @return Body
	 */
	public function getBody()
	{
		return $this->Body;
	}
	/**
	 * Set Lead_ID
	 * @param anonymous4 Lead_ID
	 * @return anonymous4
	 */
	public function setLead_ID($_Lead_ID)
	{
		return ($this->Lead_ID = $_Lead_ID);
	}
	/**
	 * Get Lead_ID
	 * @return anonymous4
	 */
	public function getLead_ID()
	{
		return $this->Lead_ID;
	}
	/**
	 * Set Date_Created
	 * @param anonymous5 Date_Created
	 * @return anonymous5
	 */
	public function setDate_Created($_Date_Created)
	{
		return ($this->Date_Created = $_Date_Created);
	}
	/**
	 * Get Date_Created
	 * @return anonymous5
	 */
	public function getDate_Created()
	{
		return $this->Date_Created;
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