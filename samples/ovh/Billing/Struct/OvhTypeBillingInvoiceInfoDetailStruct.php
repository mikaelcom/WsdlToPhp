<?php
/**
 * Class file for OvhTypeBillingInvoiceInfoDetailStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeBillingInvoiceInfoDetailStruct
 * @date 02/07/2012
 */
class OvhTypeBillingInvoiceInfoDetailStruct extends OvhWsdlClass
{
	/**
	 * The quantity
	 * @var int
	 */
	public $quantity;
	/**
	 * The service
	 * @var string
	 */
	public $service;
	/**
	 * The description
	 * @var string
	 */
	public $description;
	/**
	 * The end
	 * @var string
	 */
	public $end;
	/**
	 * The domain
	 * @var string
	 */
	public $domain;
	/**
	 * The baseprice
	 * @var float
	 */
	public $baseprice;
	/**
	 * The totalprice
	 * @var float
	 */
	public $totalprice;
	/**
	 * The start
	 * @var string
	 */
	public $start;
	/**
	 * Constructor
	 * @param int quantity
	 * @param string service
	 * @param string description
	 * @param string end
	 * @param string domain
	 * @param float baseprice
	 * @param float totalprice
	 * @param string start
	 * @return OvhTypeBillingInvoiceInfoDetailStruct
	 */
	public function __construct($_quantity = null,$_service = null,$_description = null,$_end = null,$_domain = null,$_baseprice = null,$_totalprice = null,$_start = null)
	{
		parent::__construct(array('quantity'=>$_quantity,'service'=>$_service,'description'=>$_description,'end'=>$_end,'domain'=>$_domain,'baseprice'=>$_baseprice,'totalprice'=>$_totalprice,'start'=>$_start));
	}
	/**
	 * Set quantity
	 * @param int quantity
	 * @return int
	 */
	public function setQuantity($_quantity)
	{
		return ($this->quantity = $_quantity);
	}
	/**
	 * Get quantity
	 * @return int
	 */
	public function getQuantity()
	{
		return $this->quantity;
	}
	/**
	 * Set service
	 * @param string service
	 * @return string
	 */
	public function setService($_service)
	{
		return ($this->service = $_service);
	}
	/**
	 * Get service
	 * @return string
	 */
	public function getService()
	{
		return $this->service;
	}
	/**
	 * Set description
	 * @param string description
	 * @return string
	 */
	public function setDescription($_description)
	{
		return ($this->description = $_description);
	}
	/**
	 * Get description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
	}
	/**
	 * Set end
	 * @param string end
	 * @return string
	 */
	public function setEnd($_end)
	{
		return ($this->end = $_end);
	}
	/**
	 * Get end
	 * @return string
	 */
	public function getEnd()
	{
		return $this->end;
	}
	/**
	 * Set domain
	 * @param string domain
	 * @return string
	 */
	public function setDomain($_domain)
	{
		return ($this->domain = $_domain);
	}
	/**
	 * Get domain
	 * @return string
	 */
	public function getDomain()
	{
		return $this->domain;
	}
	/**
	 * Set baseprice
	 * @param float baseprice
	 * @return float
	 */
	public function setBaseprice($_baseprice)
	{
		return ($this->baseprice = $_baseprice);
	}
	/**
	 * Get baseprice
	 * @return float
	 */
	public function getBaseprice()
	{
		return $this->baseprice;
	}
	/**
	 * Set totalprice
	 * @param float totalprice
	 * @return float
	 */
	public function setTotalprice($_totalprice)
	{
		return ($this->totalprice = $_totalprice);
	}
	/**
	 * Get totalprice
	 * @return float
	 */
	public function getTotalprice()
	{
		return $this->totalprice;
	}
	/**
	 * Set start
	 * @param string start
	 * @return string
	 */
	public function setStart($_start)
	{
		return ($this->start = $_start);
	}
	/**
	 * Get start
	 * @return string
	 */
	public function getStart()
	{
		return $this->start;
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