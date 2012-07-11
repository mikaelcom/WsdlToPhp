<?php
/**
 * Class file for EbayTradingTypeShippingServiceCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeShippingServiceCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeShippingServiceCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'UPSGround'
	 * Meta informations :
	 * 	- documentation : UPS Ground
	 * @return string 'UPSGround'
	 */
	const VALUE_UPSGROUND = 'UPSGround';
	/**
	 * Constant for value 'UPS3rdDay'
	 * Meta informations :
	 * 	- documentation : UPS 3rd Day
	 * @return string 'UPS3rdDay'
	 */
	const VALUE_UPS3RDDAY = 'UPS3rdDay';
	/**
	 * Constant for value 'UPS2ndDay'
	 * Meta informations :
	 * 	- documentation : UPS 2nd Day
	 * @return string 'UPS2ndDay'
	 */
	const VALUE_UPS2NDDAY = 'UPS2ndDay';
	/**
	 * Constant for value 'UPSNextDay'
	 * Meta informations :
	 * 	- documentation : UPS Next Day
	 * @return string 'UPSNextDay'
	 */
	const VALUE_UPSNEXTDAY = 'UPSNextDay';
	/**
	 * Constant for value 'USPSPriority'
	 * Meta informations :
	 * 	- documentation : USPS Priority
	 * @return string 'USPSPriority'
	 */
	const VALUE_USPSPRIORITY = 'USPSPriority';
	/**
	 * Constant for value 'USPSParcel'
	 * Meta informations :
	 * 	- documentation : USPS Parcel
	 * @return string 'USPSParcel'
	 */
	const VALUE_USPSPARCEL = 'USPSParcel';
	/**
	 * Constant for value 'USPSMedia'
	 * Meta informations :
	 * 	- documentation : USPS Media
	 * @return string 'USPSMedia'
	 */
	const VALUE_USPSMEDIA = 'USPSMedia';
	/**
	 * Constant for value 'USPSFirstClass'
	 * Meta informations :
	 * 	- documentation : USPS First Class
	 * @return string 'USPSFirstClass'
	 */
	const VALUE_USPSFIRSTCLASS = 'USPSFirstClass';
	/**
	 * Constant for value 'ShippingMethodStandard'
	 * Meta informations :
	 * 	- documentation : Standard shipping method
	 * @return string 'ShippingMethodStandard'
	 */
	const VALUE_SHIPPINGMETHODSTANDARD = 'ShippingMethodStandard';
	/**
	 * Constant for value 'ShippingMethodExpress'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use
	 * @return string 'ShippingMethodExpress'
	 */
	const VALUE_SHIPPINGMETHODEXPRESS = 'ShippingMethodExpress';
	/**
	 * Constant for value 'USPSExpressMail'
	 * Meta informations :
	 * 	- documentation : USPS Express Mail
	 * @return string 'USPSExpressMail'
	 */
	const VALUE_USPSEXPRESSMAIL = 'USPSExpressMail';
	/**
	 * Constant for value 'UPSNextDayAir'
	 * Meta informations :
	 * 	- documentation : UPS Next Day Air
	 * @return string 'UPSNextDayAir'
	 */
	const VALUE_UPSNEXTDAYAIR = 'UPSNextDayAir';
	/**
	 * Constant for value 'UPS2DayAirAM'
	 * Meta informations :
	 * 	- documentation : UPS Next Day Air
	 * @return string 'UPS2DayAirAM'
	 */
	const VALUE_UPS2DAYAIRAM = 'UPS2DayAirAM';
	/**
	 * Constant for value 'USPSExpressMailFlatRateEnvelope'
	 * Meta informations :
	 * 	- documentation : USPS Express Mail Flat Rate Envelope To use this service, a seller must specify the package weight so that eBay can validate the weight against the maximum weight limit for the service. The seller must also specify a package size of Package/Thick Envelope when using a calculated shipping service.
	 * @return string 'USPSExpressMailFlatRateEnvelope'
	 */
	const VALUE_USPSEXPRESSMAILFLATRATEENVELOPE = 'USPSExpressMailFlatRateEnvelope';
	/**
	 * Constant for value 'USPSPriorityMailFlatRateEnvelope'
	 * Meta informations :
	 * 	- documentation : USPS Priority Mail Flat Rate Envelope To use this service, a seller must specify the package weight so that eBay can validate the weight against the maximum weight limit for the service. The seller must also specify a package size of Package/Thick Envelope when using a calculated shipping service.
	 * @return string 'USPSPriorityMailFlatRateEnvelope'
	 */
	const VALUE_USPSPRIORITYMAILFLATRATEENVELOPE = 'USPSPriorityMailFlatRateEnvelope';
	/**
	 * Constant for value 'USPSPriorityMailSmallFlatRateBox'
	 * Meta informations :
	 * 	- documentation : USPS Priority Mail Small Flat Rate Box To use this service, a seller must specify the package weight so that eBay can validate the weight against the maximum weight limit for the service. The seller must also specify a package size of Package/Thick Envelope when using a calculated shipping service.
	 * @return string 'USPSPriorityMailSmallFlatRateBox'
	 */
	const VALUE_USPSPRIORITYMAILSMALLFLATRATEBOX = 'USPSPriorityMailSmallFlatRateBox';
	/**
	 * Constant for value 'USPSPriorityMailFlatRateBox'
	 * Meta informations :
	 * 	- documentation : USPS Priority Mail Flat Rate Box To use this service, a seller must specify the package weight so that eBay can validate the weight against the maximum weight limit for the service. The seller must also specify a package size of Package/Thick Envelope when using a calculated shipping service.
	 * @return string 'USPSPriorityMailFlatRateBox'
	 */
	const VALUE_USPSPRIORITYMAILFLATRATEBOX = 'USPSPriorityMailFlatRateBox';
	/**
	 * Constant for value 'USPSPriorityMailLargeFlatRateBox'
	 * Meta informations :
	 * 	- documentation : USPS Priority Mail Large Flat Rate Box To use this service, a seller must specify the package weight so that eBay can validate the weight against the maximum weight limit for the service.
	 * @return string 'USPSPriorityMailLargeFlatRateBox'
	 */
	const VALUE_USPSPRIORITYMAILLARGEFLATRATEBOX = 'USPSPriorityMailLargeFlatRateBox';
	/**
	 * Constant for value 'USPSPriorityMailPaddedFlatRateEnvelope'
	 * Meta informations :
	 * 	- documentation : USPS Priority Mail Padded Flat Rate Envelope To use this service, a seller must specify the package weight so that eBay can validate the weight against the maximum weight limit for the service.
	 * @return string 'USPSPriorityMailPaddedFlatRateEnvelope'
	 */
	const VALUE_USPSPRIORITYMAILPADDEDFLATRATEENVELOPE = 'USPSPriorityMailPaddedFlatRateEnvelope';
	/**
	 * Constant for value 'USPSPriorityMailLegalFlatRateEnvelope'
	 * Meta informations :
	 * 	- documentation : USPS Priority Mail Legal Flat Rate Envelope To use this service, a seller must specify the package weight so that eBay can validate the weight against the maximum weight limit for the service.
	 * @return string 'USPSPriorityMailLegalFlatRateEnvelope'
	 */
	const VALUE_USPSPRIORITYMAILLEGALFLATRATEENVELOPE = 'USPSPriorityMailLegalFlatRateEnvelope';
	/**
	 * Constant for value 'USPSExpressMailLegalFlatRateEnvelope'
	 * Meta informations :
	 * 	- documentation : USPS Priority Mail Legal Flat Rate Envelope To use this service, a seller must specify the package weight so that eBay can validate the weight against the maximum weight limit for the service.
	 * @return string 'USPSExpressMailLegalFlatRateEnvelope'
	 */
	const VALUE_USPSEXPRESSMAILLEGALFLATRATEENVELOPE = 'USPSExpressMailLegalFlatRateEnvelope';
	/**
	 * Constant for value 'USPSPriorityMailRegionalBoxA'
	 * Meta informations :
	 * 	- documentation : USPS Priority Mail Regional Box A To use this service, a seller must specify the package weight so that eBay can validate the weight against the maximum weight limit for the service.
	 * @return string 'USPSPriorityMailRegionalBoxA'
	 */
	const VALUE_USPSPRIORITYMAILREGIONALBOXA = 'USPSPriorityMailRegionalBoxA';
	/**
	 * Constant for value 'USPSPriorityMailRegionalBoxB'
	 * Meta informations :
	 * 	- documentation : USPS Priority Mail Regional Box B To use this service, a seller must specify the package weight so that eBay can validate the weight against the maximum weight limit for the service.
	 * @return string 'USPSPriorityMailRegionalBoxB'
	 */
	const VALUE_USPSPRIORITYMAILREGIONALBOXB = 'USPSPriorityMailRegionalBoxB';
	/**
	 * Constant for value 'Other'
	 * Meta informations :
	 * 	- documentation : Other (see description)
	 * @return string 'Other'
	 */
	const VALUE_OTHER = 'Other';
	/**
	 * Constant for value 'LocalDelivery'
	 * Meta informations :
	 * 	- documentation : Local Delivery/Pickup
	 * @return string 'LocalDelivery'
	 */
	const VALUE_LOCALDELIVERY = 'LocalDelivery';
	/**
	 * Constant for value 'NotSelected'
	 * Meta informations :
	 * 	- documentation : Not Selected
	 * @return string 'NotSelected'
	 */
	const VALUE_NOTSELECTED = 'NotSelected';
	/**
	 * Constant for value 'InternationalNotSelected'
	 * Meta informations :
	 * 	- documentation : International Not Selected
	 * @return string 'InternationalNotSelected'
	 */
	const VALUE_INTERNATIONALNOTSELECTED = 'InternationalNotSelected';
	/**
	 * Constant for value 'StandardInternational'
	 * Meta informations :
	 * 	- documentation : Standard International Flat Rate Shipping
	 * @return string 'StandardInternational'
	 */
	const VALUE_STANDARDINTERNATIONAL = 'StandardInternational';
	/**
	 * Constant for value 'ExpeditedInternational'
	 * Meta informations :
	 * 	- documentation : Expedited International Flat Rate Shipping
	 * @return string 'ExpeditedInternational'
	 */
	const VALUE_EXPEDITEDINTERNATIONAL = 'ExpeditedInternational';
	/**
	 * Constant for value 'USPSGlobalExpress'
	 * Meta informations :
	 * 	- documentation : USPS Global Express Mail
	 * @return string 'USPSGlobalExpress'
	 */
	const VALUE_USPSGLOBALEXPRESS = 'USPSGlobalExpress';
	/**
	 * Constant for value 'USPSGlobalPriority'
	 * Meta informations :
	 * 	- documentation : USPS Global Priority Mail
	 * @return string 'USPSGlobalPriority'
	 */
	const VALUE_USPSGLOBALPRIORITY = 'USPSGlobalPriority';
	/**
	 * Constant for value 'USPSEconomyParcel'
	 * Meta informations :
	 * 	- documentation : USPS Economy Parcel Post
	 * @return string 'USPSEconomyParcel'
	 */
	const VALUE_USPSECONOMYPARCEL = 'USPSEconomyParcel';
	/**
	 * Constant for value 'USPSEconomyLetter'
	 * Meta informations :
	 * 	- documentation : USPS Economy Letter Post
	 * @return string 'USPSEconomyLetter'
	 */
	const VALUE_USPSECONOMYLETTER = 'USPSEconomyLetter';
	/**
	 * Constant for value 'USPSAirmailLetter'
	 * Meta informations :
	 * 	- documentation : USPS Airmail Letter Post
	 * @return string 'USPSAirmailLetter'
	 */
	const VALUE_USPSAIRMAILLETTER = 'USPSAirmailLetter';
	/**
	 * Constant for value 'USPSAirmailParcel'
	 * Meta informations :
	 * 	- documentation : USPS Airmail Parcel Post
	 * @return string 'USPSAirmailParcel'
	 */
	const VALUE_USPSAIRMAILPARCEL = 'USPSAirmailParcel';
	/**
	 * Constant for value 'UPSWorldWideExpressPlus'
	 * Meta informations :
	 * 	- documentation : UPS Worldwide Express Plus
	 * @return string 'UPSWorldWideExpressPlus'
	 */
	const VALUE_UPSWORLDWIDEEXPRESSPLUS = 'UPSWorldWideExpressPlus';
	/**
	 * Constant for value 'UPSWorldWideExpress'
	 * Meta informations :
	 * 	- documentation : UPS Worldwide Express
	 * @return string 'UPSWorldWideExpress'
	 */
	const VALUE_UPSWORLDWIDEEXPRESS = 'UPSWorldWideExpress';
	/**
	 * Constant for value 'UPSWorldWideExpedited'
	 * Meta informations :
	 * 	- documentation : UPS Worldwide Expedited
	 * @return string 'UPSWorldWideExpedited'
	 */
	const VALUE_UPSWORLDWIDEEXPEDITED = 'UPSWorldWideExpedited';
	/**
	 * Constant for value 'UPSWorldwideSaver'
	 * Meta informations :
	 * 	- documentation : UPS Worldwide Saver
	 * @return string 'UPSWorldwideSaver'
	 */
	const VALUE_UPSWORLDWIDESAVER = 'UPSWorldwideSaver';
	/**
	 * Constant for value 'UPSStandardToCanada'
	 * Meta informations :
	 * 	- documentation : UPS Standard To Canada
	 * @return string 'UPSStandardToCanada'
	 */
	const VALUE_UPSSTANDARDTOCANADA = 'UPSStandardToCanada';
	/**
	 * Constant for value 'USPSExpressMailInternationalFlatRateEnvelope'
	 * Meta informations :
	 * 	- documentation : USPS Express Mail International Flat Rate Envelope To use this service, a seller must specify the package weight so that eBay can validate the weight against the maximum weight limit for the service. The seller must also specify a package size of Package/Thick Envelope when using a calculated shipping service.
	 * @return string 'USPSExpressMailInternationalFlatRateEnvelope'
	 */
	const VALUE_USPSEXPRESSMAILINTERNATIONALFLATRATEENVELOPE = 'USPSExpressMailInternationalFlatRateEnvelope';
	/**
	 * Constant for value 'USPSPriorityMailInternationalFlatRateEnvelope'
	 * Meta informations :
	 * 	- documentation : USPS Priority Mail International Flat Rate Envelope To use this service, a seller must specify the package weight so that eBay can validate the weight against the maximum weight limit for the service. The seller must also specify a package size of Package/Thick Envelope when using a calculated shipping service.
	 * @return string 'USPSPriorityMailInternationalFlatRateEnvelope'
	 */
	const VALUE_USPSPRIORITYMAILINTERNATIONALFLATRATEENVELOPE = 'USPSPriorityMailInternationalFlatRateEnvelope';
	/**
	 * Constant for value 'USPSPriorityMailInternationalSmallFlatRateBox'
	 * Meta informations :
	 * 	- documentation : USPS Priority Mail International Small Flat Rate Box To use this service, a seller must specify the package weight so that eBay can validate the weight against the maximum weight limit for the service. The seller must also specify a package size of Package/Thick Envelope when using a calculated shipping service.
	 * @return string 'USPSPriorityMailInternationalSmallFlatRateBox'
	 */
	const VALUE_USPSPRIORITYMAILINTERNATIONALSMALLFLATRATEBOX = 'USPSPriorityMailInternationalSmallFlatRateBox';
	/**
	 * Constant for value 'USPSPriorityMailInternationalFlatRateBox'
	 * Meta informations :
	 * 	- documentation : USPS Priority Mail International Flat Rate Box To use this service, a seller must specify the package weight so that eBay can validate the weight against the maximum weight limit for the service. The seller must also specify a package size of Package/Thick Envelope when using a calculated shipping service.
	 * @return string 'USPSPriorityMailInternationalFlatRateBox'
	 */
	const VALUE_USPSPRIORITYMAILINTERNATIONALFLATRATEBOX = 'USPSPriorityMailInternationalFlatRateBox';
	/**
	 * Constant for value 'USPSPriorityMailInternationalLargeFlatRateBox'
	 * Meta informations :
	 * 	- documentation : USPS Priority Mail International Large Flat Rate Box To use this service, a seller must specify the package weight so that eBay can validate the weight against the maximum weight limit for the service.
	 * @return string 'USPSPriorityMailInternationalLargeFlatRateBox'
	 */
	const VALUE_USPSPRIORITYMAILINTERNATIONALLARGEFLATRATEBOX = 'USPSPriorityMailInternationalLargeFlatRateBox';
	/**
	 * Constant for value 'USPSPriorityMailInternationalPaddedFlatRateEnvelope'
	 * Meta informations :
	 * 	- documentation : USPS Priority Mail International Padded Flat Rate Envelope To use this service, a seller must specify the package weight so that eBay can validate the weight against the maximum weight limit for the service.
	 * @return string 'USPSPriorityMailInternationalPaddedFlatRateEnvelope'
	 */
	const VALUE_USPSPRIORITYMAILINTERNATIONALPADDEDFLATRATEENVELOPE = 'USPSPriorityMailInternationalPaddedFlatRateEnvelope';
	/**
	 * Constant for value 'USPSPriorityMailInternationalLegalFlatRateEnvelope'
	 * Meta informations :
	 * 	- documentation : USPS Priority Mail International Legal Flat Rate Envelope To use this service, a seller must specify the package weight so that eBay can validate the weight against the maximum weight limit for the service.
	 * @return string 'USPSPriorityMailInternationalLegalFlatRateEnvelope'
	 */
	const VALUE_USPSPRIORITYMAILINTERNATIONALLEGALFLATRATEENVELOPE = 'USPSPriorityMailInternationalLegalFlatRateEnvelope';
	/**
	 * Constant for value 'USPSExpressMailInternationalLegalFlatRateEnvelope'
	 * Meta informations :
	 * 	- documentation : USPS Priority Mail International Legal Flat Rate Envelope To use this service, a seller must specify the package weight so that eBay can validate the weight against the maximum weight limit for the service.
	 * @return string 'USPSExpressMailInternationalLegalFlatRateEnvelope'
	 */
	const VALUE_USPSEXPRESSMAILINTERNATIONALLEGALFLATRATEENVELOPE = 'USPSExpressMailInternationalLegalFlatRateEnvelope';
	/**
	 * Constant for value 'OtherInternational'
	 * Meta informations :
	 * 	- documentation : Other International Shipping (see description)
	 * @return string 'OtherInternational'
	 */
	const VALUE_OTHERINTERNATIONAL = 'OtherInternational';
	/**
	 * Constant for value 'AT_StandardDispatch'
	 * Meta informations :
	 * 	- documentation : Standardversand (unversichert)
	 * @return string 'AT_StandardDispatch'
	 */
	const VALUE_AT_STANDARDDISPATCH = 'AT_StandardDispatch';
	/**
	 * Constant for value 'AT_InsuredDispatch'
	 * Meta informations :
	 * 	- documentation : Versicherter Versand
	 * @return string 'AT_InsuredDispatch'
	 */
	const VALUE_AT_INSUREDDISPATCH = 'AT_InsuredDispatch';
	/**
	 * Constant for value 'AT_Writing'
	 * @return string 'AT_Writing'
	 */
	const VALUE_AT_WRITING = 'AT_Writing';
	/**
	 * Constant for value 'AT_COD'
	 * @return string 'AT_COD'
	 */
	const VALUE_AT_COD = 'AT_COD';
	/**
	 * Constant for value 'AT_ExpressOrCourier'
	 * Meta informations :
	 * 	- documentation : Express- oder Kurierversand
	 * @return string 'AT_ExpressOrCourier'
	 */
	const VALUE_AT_EXPRESSORCOURIER = 'AT_ExpressOrCourier';
	/**
	 * Constant for value 'AT_InsuredExpressOrCourier'
	 * Meta informations :
	 * 	- documentation : Versicherter Express- oder Kurierversand
	 * @return string 'AT_InsuredExpressOrCourier'
	 */
	const VALUE_AT_INSUREDEXPRESSORCOURIER = 'AT_InsuredExpressOrCourier';
	/**
	 * Constant for value 'AT_SpecialDispatch'
	 * @return string 'AT_SpecialDispatch'
	 */
	const VALUE_AT_SPECIALDISPATCH = 'AT_SpecialDispatch';
	/**
	 * Constant for value 'AT_InsuredSpecialDispatch'
	 * @return string 'AT_InsuredSpecialDispatch'
	 */
	const VALUE_AT_INSUREDSPECIALDISPATCH = 'AT_InsuredSpecialDispatch';
	/**
	 * Constant for value 'AT_Sonstige'
	 * Meta informations :
	 * 	- documentation : Sonstige (Siehe Artikelbeschreibung)
	 * @return string 'AT_Sonstige'
	 */
	const VALUE_AT_SONSTIGE = 'AT_Sonstige';
	/**
	 * Constant for value 'AT_UnversicherterVersandInternational'
	 * Meta informations :
	 * 	- documentation : Unversicherter Versand International
	 * @return string 'AT_UnversicherterVersandInternational'
	 */
	const VALUE_AT_UNVERSICHERTERVERSANDINTERNATIONAL = 'AT_UnversicherterVersandInternational';
	/**
	 * Constant for value 'AT_VersicherterVersandInternational'
	 * Meta informations :
	 * 	- documentation : Versicherter Versand International
	 * @return string 'AT_VersicherterVersandInternational'
	 */
	const VALUE_AT_VERSICHERTERVERSANDINTERNATIONAL = 'AT_VersicherterVersandInternational';
	/**
	 * Constant for value 'AT_SonstigerVersandInternational'
	 * Meta informations :
	 * 	- documentation : Sonstiger Versand International
	 * @return string 'AT_SonstigerVersandInternational'
	 */
	const VALUE_AT_SONSTIGERVERSANDINTERNATIONAL = 'AT_SonstigerVersandInternational';
	/**
	 * Constant for value 'AT_UnversicherterExpressVersandInternational'
	 * Meta informations :
	 * 	- documentation : Unversicherter Express Versand International
	 * @return string 'AT_UnversicherterExpressVersandInternational'
	 */
	const VALUE_AT_UNVERSICHERTEREXPRESSVERSANDINTERNATIONAL = 'AT_UnversicherterExpressVersandInternational';
	/**
	 * Constant for value 'AT_VersicherterExpressVersandInternational'
	 * Meta informations :
	 * 	- documentation : Versicherter Express Versand International
	 * @return string 'AT_VersicherterExpressVersandInternational'
	 */
	const VALUE_AT_VERSICHERTEREXPRESSVERSANDINTERNATIONAL = 'AT_VersicherterExpressVersandInternational';
	/**
	 * Constant for value 'AU_Regular'
	 * Meta informations :
	 * 	- documentation : Regular
	 * @return string 'AU_Regular'
	 */
	const VALUE_AU_REGULAR = 'AU_Regular';
	/**
	 * Constant for value 'AU_Express'
	 * Meta informations :
	 * 	- documentation : Express
	 * @return string 'AU_Express'
	 */
	const VALUE_AU_EXPRESS = 'AU_Express';
	/**
	 * Constant for value 'AU_Registered'
	 * Meta informations :
	 * 	- documentation : Registered
	 * @return string 'AU_Registered'
	 */
	const VALUE_AU_REGISTERED = 'AU_Registered';
	/**
	 * Constant for value 'AU_Courier'
	 * Meta informations :
	 * 	- documentation : Courier
	 * @return string 'AU_Courier'
	 */
	const VALUE_AU_COURIER = 'AU_Courier';
	/**
	 * Constant for value 'AU_Other'
	 * Meta informations :
	 * 	- documentation : Other
	 * @return string 'AU_Other'
	 */
	const VALUE_AU_OTHER = 'AU_Other';
	/**
	 * Constant for value 'AU_EMSInternationalCourierParcels'
	 * Meta informations :
	 * 	- documentation : EMS International Courier - Parcels
	 * @return string 'AU_EMSInternationalCourierParcels'
	 */
	const VALUE_AU_EMSINTERNATIONALCOURIERPARCELS = 'AU_EMSInternationalCourierParcels';
	/**
	 * Constant for value 'AU_EMSInternationalCourierDocuments'
	 * Meta informations :
	 * 	- documentation : EMS International Courier - Documents
	 * @return string 'AU_EMSInternationalCourierDocuments'
	 */
	const VALUE_AU_EMSINTERNATIONALCOURIERDOCUMENTS = 'AU_EMSInternationalCourierDocuments';
	/**
	 * Constant for value 'AU_ExpressPostInternationalDocuments'
	 * Meta informations :
	 * 	- documentation : Express Post International - Documents
	 * @return string 'AU_ExpressPostInternationalDocuments'
	 */
	const VALUE_AU_EXPRESSPOSTINTERNATIONALDOCUMENTS = 'AU_ExpressPostInternationalDocuments';
	/**
	 * Constant for value 'AU_AirMailInternational'
	 * Meta informations :
	 * 	- documentation : Air Mail
	 * @return string 'AU_AirMailInternational'
	 */
	const VALUE_AU_AIRMAILINTERNATIONAL = 'AU_AirMailInternational';
	/**
	 * Constant for value 'AU_EconomyAirInternational'
	 * Meta informations :
	 * 	- documentation : Economy Air
	 * @return string 'AU_EconomyAirInternational'
	 */
	const VALUE_AU_ECONOMYAIRINTERNATIONAL = 'AU_EconomyAirInternational';
	/**
	 * Constant for value 'AU_SeaMailInternational'
	 * Meta informations :
	 * 	- documentation : Sea Mail
	 * @return string 'AU_SeaMailInternational'
	 */
	const VALUE_AU_SEAMAILINTERNATIONAL = 'AU_SeaMailInternational';
	/**
	 * Constant for value 'AU_StandardInternational'
	 * Meta informations :
	 * 	- documentation : Standard International Flat Rate Postage
	 * @return string 'AU_StandardInternational'
	 */
	const VALUE_AU_STANDARDINTERNATIONAL = 'AU_StandardInternational';
	/**
	 * Constant for value 'AU_ExpeditedInternational'
	 * Meta informations :
	 * 	- documentation : Expedited international flat rate postage
	 * @return string 'AU_ExpeditedInternational'
	 */
	const VALUE_AU_EXPEDITEDINTERNATIONAL = 'AU_ExpeditedInternational';
	/**
	 * Constant for value 'AU_OtherInternational'
	 * Meta informations :
	 * 	- documentation : Other international postage
	 * @return string 'AU_OtherInternational'
	 */
	const VALUE_AU_OTHERINTERNATIONAL = 'AU_OtherInternational';
	/**
	 * Constant for value 'AU_AusPostRegisteredPostInternationalPaddedBag1kg'
	 * Meta informations :
	 * 	- documentation : Australia Post Registered Post International Padded Bag 1 kg
	 * @return string 'AU_AusPostRegisteredPostInternationalPaddedBag1kg'
	 */
	const VALUE_AU_AUSPOSTREGISTEREDPOSTINTERNATIONALPADDEDBAG1KG = 'AU_AusPostRegisteredPostInternationalPaddedBag1kg';
	/**
	 * Constant for value 'AU_AusPostRegisteredPostInternationalPaddedBag500g'
	 * Meta informations :
	 * 	- documentation : Australia Post Registered Post International Padded Bag 500 g
	 * @return string 'AU_AusPostRegisteredPostInternationalPaddedBag500g'
	 */
	const VALUE_AU_AUSPOSTREGISTEREDPOSTINTERNATIONALPADDEDBAG500G = 'AU_AusPostRegisteredPostInternationalPaddedBag500g';
	/**
	 * Constant for value 'AU_AusPostRegisteredPostInternationalParcel'
	 * Meta informations :
	 * 	- documentation : Australia Post Registered Post International Parcel
	 * @return string 'AU_AusPostRegisteredPostInternationalParcel'
	 */
	const VALUE_AU_AUSPOSTREGISTEREDPOSTINTERNATIONALPARCEL = 'AU_AusPostRegisteredPostInternationalParcel';
	/**
	 * Constant for value 'AU_ExpeditedDeliveryFromOutsideAU'
	 * Meta informations :
	 * 	- documentation : Expedited delivery from outside Australia
	 * @return string 'AU_ExpeditedDeliveryFromOutsideAU'
	 */
	const VALUE_AU_EXPEDITEDDELIVERYFROMOUTSIDEAU = 'AU_ExpeditedDeliveryFromOutsideAU';
	/**
	 * Constant for value 'AU_EconomyDeliveryFromOutsideAU'
	 * Meta informations :
	 * 	- documentation : Economy delivery from outside Australia
	 * @return string 'AU_EconomyDeliveryFromOutsideAU'
	 */
	const VALUE_AU_ECONOMYDELIVERYFROMOUTSIDEAU = 'AU_EconomyDeliveryFromOutsideAU';
	/**
	 * Constant for value 'AU_AustralianAirExpressMetro15kg'
	 * Meta informations :
	 * 	- documentation : Australian Air Express Metro 15 kg
	 * @return string 'AU_AustralianAirExpressMetro15kg'
	 */
	const VALUE_AU_AUSTRALIANAIREXPRESSMETRO15KG = 'AU_AustralianAirExpressMetro15kg';
	/**
	 * Constant for value 'AU_AustralianAirExpressFlatRate5kg'
	 * Meta informations :
	 * 	- documentation : Australian Air Express Flat Rate 5 kg
	 * @return string 'AU_AustralianAirExpressFlatRate5kg'
	 */
	const VALUE_AU_AUSTRALIANAIREXPRESSFLATRATE5KG = 'AU_AustralianAirExpressFlatRate5kg';
	/**
	 * Constant for value 'AU_AustralianAirExpressFlatRate3kg'
	 * Meta informations :
	 * 	- documentation : Australian Air Express Flat Rate 3 kg
	 * @return string 'AU_AustralianAirExpressFlatRate3kg'
	 */
	const VALUE_AU_AUSTRALIANAIREXPRESSFLATRATE3KG = 'AU_AustralianAirExpressFlatRate3kg';
	/**
	 * Constant for value 'AU_AustralianAirExpressFlatRate1kg'
	 * Meta informations :
	 * 	- documentation : Australian Air Express Flat Rate 1 kg
	 * @return string 'AU_AustralianAirExpressFlatRate1kg'
	 */
	const VALUE_AU_AUSTRALIANAIREXPRESSFLATRATE1KG = 'AU_AustralianAirExpressFlatRate1kg';
	/**
	 * Constant for value 'AU_ExpressDelivery'
	 * Meta informations :
	 * 	- documentation : Express delivery (1-3 business days) in Australia
	 * @return string 'AU_ExpressDelivery'
	 */
	const VALUE_AU_EXPRESSDELIVERY = 'AU_ExpressDelivery';
	/**
	 * Constant for value 'AU_StandardDelivery'
	 * Meta informations :
	 * 	- documentation : Standard delivery (1-6 business days) in Australia
	 * @return string 'AU_StandardDelivery'
	 */
	const VALUE_AU_STANDARDDELIVERY = 'AU_StandardDelivery';
	/**
	 * Constant for value 'AU_eBayAusPost3kgFlatRateSatchel'
	 * Meta informations :
	 * 	- documentation : eBay/Australian Post 3 kg Flat Rate Satchel
	 * @return string 'AU_eBayAusPost3kgFlatRateSatchel'
	 */
	const VALUE_AU_EBAYAUSPOST3KGFLATRATESATCHEL = 'AU_eBayAusPost3kgFlatRateSatchel';
	/**
	 * Constant for value 'AU_eBayAusPost500gFlatRateSatchel'
	 * Meta informations :
	 * 	- documentation : eBay/Australian Post 500 g Flat Rate Satchel
	 * @return string 'AU_eBayAusPost500gFlatRateSatchel'
	 */
	const VALUE_AU_EBAYAUSPOST500GFLATRATESATCHEL = 'AU_eBayAusPost500gFlatRateSatchel';
	/**
	 * Constant for value 'AU_Freight'
	 * Meta informations :
	 * 	- documentation : Freight delivery in Australia. Used for heavy and bulky items.
	 * @return string 'AU_Freight'
	 */
	const VALUE_AU_FREIGHT = 'AU_Freight';
	/**
	 * Constant for value 'BEFR_StandardDelivery'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'BEFR_StandardDelivery'
	 */
	const VALUE_BEFR_STANDARDDELIVERY = 'BEFR_StandardDelivery';
	/**
	 * Constant for value 'BEFR_PriorityDelivery'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'BEFR_PriorityDelivery'
	 */
	const VALUE_BEFR_PRIORITYDELIVERY = 'BEFR_PriorityDelivery';
	/**
	 * Constant for value 'BEFR_ParcelPost'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'BEFR_ParcelPost'
	 */
	const VALUE_BEFR_PARCELPOST = 'BEFR_ParcelPost';
	/**
	 * Constant for value 'BEFR_RegisteredMail'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'BEFR_RegisteredMail'
	 */
	const VALUE_BEFR_REGISTEREDMAIL = 'BEFR_RegisteredMail';
	/**
	 * Constant for value 'BEFR_Other'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'BEFR_Other'
	 */
	const VALUE_BEFR_OTHER = 'BEFR_Other';
	/**
	 * Constant for value 'BEFR_DePostInternational'
	 * Meta informations :
	 * 	- documentation : De Post
	 * @return string 'BEFR_DePostInternational'
	 */
	const VALUE_BEFR_DEPOSTINTERNATIONAL = 'BEFR_DePostInternational';
	/**
	 * Constant for value 'BEFR_UPSInternational'
	 * Meta informations :
	 * 	- documentation : UPS
	 * @return string 'BEFR_UPSInternational'
	 */
	const VALUE_BEFR_UPSINTERNATIONAL = 'BEFR_UPSInternational';
	/**
	 * Constant for value 'BEFR_FedExInternational'
	 * Meta informations :
	 * 	- documentation : FedEx
	 * @return string 'BEFR_FedExInternational'
	 */
	const VALUE_BEFR_FEDEXINTERNATIONAL = 'BEFR_FedExInternational';
	/**
	 * Constant for value 'BEFR_DHLInternational'
	 * Meta informations :
	 * 	- documentation : DHL
	 * @return string 'BEFR_DHLInternational'
	 */
	const VALUE_BEFR_DHLINTERNATIONAL = 'BEFR_DHLInternational';
	/**
	 * Constant for value 'BEFR_TPGPostTNTInternational'
	 * Meta informations :
	 * 	- documentation : TPG Post/TNT (Netherlands)
	 * @return string 'BEFR_TPGPostTNTInternational'
	 */
	const VALUE_BEFR_TPGPOSTTNTINTERNATIONAL = 'BEFR_TPGPostTNTInternational';
	/**
	 * Constant for value 'BEFR_StandardInternational'
	 * Meta informations :
	 * 	- documentation : Frais de livraison internationale fixes
	 * @return string 'BEFR_StandardInternational'
	 */
	const VALUE_BEFR_STANDARDINTERNATIONAL = 'BEFR_StandardInternational';
	/**
	 * Constant for value 'BEFR_ExpeditedInternational'
	 * Meta informations :
	 * 	- documentation : Frais fixes pour livraison internationale express
	 * @return string 'BEFR_ExpeditedInternational'
	 */
	const VALUE_BEFR_EXPEDITEDINTERNATIONAL = 'BEFR_ExpeditedInternational';
	/**
	 * Constant for value 'BEFR_OtherInternational'
	 * Meta informations :
	 * 	- documentation : Autres livraisons internationales (voir description)
	 * @return string 'BEFR_OtherInternational'
	 */
	const VALUE_BEFR_OTHERINTERNATIONAL = 'BEFR_OtherInternational';
	/**
	 * Constant for value 'BEFR_LaPosteInternational'
	 * Meta informations :
	 * 	- documentation : La Poste (France)
	 * @return string 'BEFR_LaPosteInternational'
	 */
	const VALUE_BEFR_LAPOSTEINTERNATIONAL = 'BEFR_LaPosteInternational';
	/**
	 * Constant for value 'BEFR_LaPosteStandardShipping'
	 * Meta informations :
	 * 	- documentation : La Poste - livraison standard (1 a 2 jours ouvrables)
	 * @return string 'BEFR_LaPosteStandardShipping'
	 */
	const VALUE_BEFR_LAPOSTESTANDARDSHIPPING = 'BEFR_LaPosteStandardShipping';
	/**
	 * Constant for value 'BEFR_LaPosteCertifiedShipping'
	 * Meta informations :
	 * 	- documentation : La Poste - envoi recommande (1 jour ouvrable)
	 * @return string 'BEFR_LaPosteCertifiedShipping'
	 */
	const VALUE_BEFR_LAPOSTECERTIFIEDSHIPPING = 'BEFR_LaPosteCertifiedShipping';
	/**
	 * Constant for value 'BEFR_LaPosteTaxipostLLS'
	 * Meta informations :
	 * 	- documentation : La Poste - Taxipost LLS (2 jours ouvrables)
	 * @return string 'BEFR_LaPosteTaxipostLLS'
	 */
	const VALUE_BEFR_LAPOSTETAXIPOSTLLS = 'BEFR_LaPosteTaxipostLLS';
	/**
	 * Constant for value 'BEFR_LaPosteTaxipost24h'
	 * Meta informations :
	 * 	- documentation : La Poste - Taxipost 24h (1 jour ouvrable)
	 * @return string 'BEFR_LaPosteTaxipost24h'
	 */
	const VALUE_BEFR_LAPOSTETAXIPOST24H = 'BEFR_LaPosteTaxipost24h';
	/**
	 * Constant for value 'BEFR_LaPosteTaxipostSecur'
	 * Meta informations :
	 * 	- documentation : Autres livraisons
	 * @return string 'BEFR_LaPosteTaxipostSecur'
	 */
	const VALUE_BEFR_LAPOSTETAXIPOSTSECUR = 'BEFR_LaPosteTaxipostSecur';
	/**
	 * Constant for value 'BEFR_PostInternationalStandard'
	 * Meta informations :
	 * 	- documentation : La Poste - livraison standard
	 * @return string 'BEFR_PostInternationalStandard'
	 */
	const VALUE_BEFR_POSTINTERNATIONALSTANDARD = 'BEFR_PostInternationalStandard';
	/**
	 * Constant for value 'BEFR_PostInternationalRegistered'
	 * Meta informations :
	 * 	- documentation : La Poste - envoi recommande
	 * @return string 'BEFR_PostInternationalRegistered'
	 */
	const VALUE_BEFR_POSTINTERNATIONALREGISTERED = 'BEFR_PostInternationalRegistered';
	/**
	 * Constant for value 'BEFR_TNTInternational'
	 * Meta informations :
	 * 	- documentation : TNT
	 * @return string 'BEFR_TNTInternational'
	 */
	const VALUE_BEFR_TNTINTERNATIONAL = 'BEFR_TNTInternational';
	/**
	 * Constant for value 'BENL_StandardDelivery'
	 * Meta informations :
	 * 	- documentation : Standard Delivery
	 * @return string 'BENL_StandardDelivery'
	 */
	const VALUE_BENL_STANDARDDELIVERY = 'BENL_StandardDelivery';
	/**
	 * Constant for value 'BENL_PriorityDelivery'
	 * Meta informations :
	 * 	- documentation : Priority Delivery
	 * @return string 'BENL_PriorityDelivery'
	 */
	const VALUE_BENL_PRIORITYDELIVERY = 'BENL_PriorityDelivery';
	/**
	 * Constant for value 'BENL_ParcelPost'
	 * Meta informations :
	 * 	- documentation : Parcel Post
	 * @return string 'BENL_ParcelPost'
	 */
	const VALUE_BENL_PARCELPOST = 'BENL_ParcelPost';
	/**
	 * Constant for value 'BENL_RegisteredMail'
	 * Meta informations :
	 * 	- documentation : Registered Mail
	 * @return string 'BENL_RegisteredMail'
	 */
	const VALUE_BENL_REGISTEREDMAIL = 'BENL_RegisteredMail';
	/**
	 * Constant for value 'BENL_Other'
	 * Meta informations :
	 * 	- documentation : Other Shipping Service
	 * @return string 'BENL_Other'
	 */
	const VALUE_BENL_OTHER = 'BENL_Other';
	/**
	 * Constant for value 'BENL_DePostInternational'
	 * Meta informations :
	 * 	- documentation : De Post
	 * @return string 'BENL_DePostInternational'
	 */
	const VALUE_BENL_DEPOSTINTERNATIONAL = 'BENL_DePostInternational';
	/**
	 * Constant for value 'BENL_UPSInternational'
	 * Meta informations :
	 * 	- documentation : UPS
	 * @return string 'BENL_UPSInternational'
	 */
	const VALUE_BENL_UPSINTERNATIONAL = 'BENL_UPSInternational';
	/**
	 * Constant for value 'BENL_FedExInternational'
	 * Meta informations :
	 * 	- documentation : FedEx
	 * @return string 'BENL_FedExInternational'
	 */
	const VALUE_BENL_FEDEXINTERNATIONAL = 'BENL_FedExInternational';
	/**
	 * Constant for value 'BENL_DHLInternational'
	 * Meta informations :
	 * 	- documentation : DHL
	 * @return string 'BENL_DHLInternational'
	 */
	const VALUE_BENL_DHLINTERNATIONAL = 'BENL_DHLInternational';
	/**
	 * Constant for value 'BENL_TPGPostTNTInternational'
	 * Meta informations :
	 * 	- documentation : TPG Post/TNT (Netherlands)
	 * @return string 'BENL_TPGPostTNTInternational'
	 */
	const VALUE_BENL_TPGPOSTTNTINTERNATIONAL = 'BENL_TPGPostTNTInternational';
	/**
	 * Constant for value 'BENL_StandardInternational'
	 * Meta informations :
	 * 	- documentation : Standard International
	 * @return string 'BENL_StandardInternational'
	 */
	const VALUE_BENL_STANDARDINTERNATIONAL = 'BENL_StandardInternational';
	/**
	 * Constant for value 'BENL_ExpeditedInternational'
	 * Meta informations :
	 * 	- documentation : Expedited International
	 * @return string 'BENL_ExpeditedInternational'
	 */
	const VALUE_BENL_EXPEDITEDINTERNATIONAL = 'BENL_ExpeditedInternational';
	/**
	 * Constant for value 'BENL_OtherInternational'
	 * Meta informations :
	 * 	- documentation : Other International Shipping Services
	 * @return string 'BENL_OtherInternational'
	 */
	const VALUE_BENL_OTHERINTERNATIONAL = 'BENL_OtherInternational';
	/**
	 * Constant for value 'BENL_LaPosteInternational'
	 * Meta informations :
	 * 	- documentation : La Poste (France)
	 * @return string 'BENL_LaPosteInternational'
	 */
	const VALUE_BENL_LAPOSTEINTERNATIONAL = 'BENL_LaPosteInternational';
	/**
	 * Constant for value 'BENL_DePostStandardShipping'
	 * Meta informations :
	 * 	- documentation : De Post - standaardverzending (1 tot 2 werkdagen)
	 * @return string 'BENL_DePostStandardShipping'
	 */
	const VALUE_BENL_DEPOSTSTANDARDSHIPPING = 'BENL_DePostStandardShipping';
	/**
	 * Constant for value 'BENL_DePostCertifiedShipping'
	 * Meta informations :
	 * 	- documentation : De Post - aangetekende zending (1 werkdag)
	 * @return string 'BENL_DePostCertifiedShipping'
	 */
	const VALUE_BENL_DEPOSTCERTIFIEDSHIPPING = 'BENL_DePostCertifiedShipping';
	/**
	 * Constant for value 'BENL_DePostTaxipostLLS'
	 * Meta informations :
	 * 	- documentation : De Post - Taxipost LLS (2 werkdagen)
	 * @return string 'BENL_DePostTaxipostLLS'
	 */
	const VALUE_BENL_DEPOSTTAXIPOSTLLS = 'BENL_DePostTaxipostLLS';
	/**
	 * Constant for value 'BENL_DePostTaxipost24h'
	 * Meta informations :
	 * 	- documentation : De Post - Taxipost 24u (1 werkdag)
	 * @return string 'BENL_DePostTaxipost24h'
	 */
	const VALUE_BENL_DEPOSTTAXIPOST24H = 'BENL_DePostTaxipost24h';
	/**
	 * Constant for value 'BENL_DePostTaxipostSecur'
	 * Meta informations :
	 * 	- documentation : De Post - Taxipost Secur (1 werkdag)
	 * @return string 'BENL_DePostTaxipostSecur'
	 */
	const VALUE_BENL_DEPOSTTAXIPOSTSECUR = 'BENL_DePostTaxipostSecur';
	/**
	 * Constant for value 'BENL_OtherShippingMethods'
	 * Meta informations :
	 * 	- documentation : Andere verzending
	 * @return string 'BENL_OtherShippingMethods'
	 */
	const VALUE_BENL_OTHERSHIPPINGMETHODS = 'BENL_OtherShippingMethods';
	/**
	 * Constant for value 'BENL_PostInternationalStandard'
	 * Meta informations :
	 * 	- documentation : De Post - standaardverzending
	 * @return string 'BENL_PostInternationalStandard'
	 */
	const VALUE_BENL_POSTINTERNATIONALSTANDARD = 'BENL_PostInternationalStandard';
	/**
	 * Constant for value 'BENL_PostInternationalRegistered'
	 * Meta informations :
	 * 	- documentation : De Post - aangetekende zending
	 * @return string 'BENL_PostInternationalRegistered'
	 */
	const VALUE_BENL_POSTINTERNATIONALREGISTERED = 'BENL_PostInternationalRegistered';
	/**
	 * Constant for value 'BENL_TNTInternational'
	 * Meta informations :
	 * 	- documentation : TNT
	 * @return string 'BENL_TNTInternational'
	 */
	const VALUE_BENL_TNTINTERNATIONAL = 'BENL_TNTInternational';
	/**
	 * Constant for value 'CA_StandardDelivery'
	 * Meta informations :
	 * 	- documentation : Standard Delivery
	 * @return string 'CA_StandardDelivery'
	 */
	const VALUE_CA_STANDARDDELIVERY = 'CA_StandardDelivery';
	/**
	 * Constant for value 'CA_ExpeditedDelivery'
	 * @return string 'CA_ExpeditedDelivery'
	 */
	const VALUE_CA_EXPEDITEDDELIVERY = 'CA_ExpeditedDelivery';
	/**
	 * Constant for value 'CA_PostLettermail'
	 * Meta informations :
	 * 	- documentation : Canada Post Lettermail
	 * @return string 'CA_PostLettermail'
	 */
	const VALUE_CA_POSTLETTERMAIL = 'CA_PostLettermail';
	/**
	 * Constant for value 'CA_PostRegularParcel'
	 * Meta informations :
	 * 	- documentation : Canada Post Regular Parcel
	 * @return string 'CA_PostRegularParcel'
	 */
	const VALUE_CA_POSTREGULARPARCEL = 'CA_PostRegularParcel';
	/**
	 * Constant for value 'CA_PostExpeditedParcel'
	 * Meta informations :
	 * 	- documentation : Canada Post Expedited Parcel
	 * @return string 'CA_PostExpeditedParcel'
	 */
	const VALUE_CA_POSTEXPEDITEDPARCEL = 'CA_PostExpeditedParcel';
	/**
	 * Constant for value 'CA_PostXpresspost'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'CA_PostXpresspost'
	 */
	const VALUE_CA_POSTXPRESSPOST = 'CA_PostXpresspost';
	/**
	 * Constant for value 'CA_PostPriorityCourier'
	 * Meta informations :
	 * 	- documentation : Canada Post Priority Courier
	 * @return string 'CA_PostPriorityCourier'
	 */
	const VALUE_CA_POSTPRIORITYCOURIER = 'CA_PostPriorityCourier';
	/**
	 * Constant for value 'CanadaPostExpeditedFlatRateBox'
	 * Meta informations :
	 * 	- documentation : Canada Post Expedited Flat Rate Box
	 * @return string 'CanadaPostExpeditedFlatRateBox'
	 */
	const VALUE_CANADAPOSTEXPEDITEDFLATRATEBOX = 'CanadaPostExpeditedFlatRateBox';
	/**
	 * Constant for value 'CA_PostExpeditedFlatRateBox'
	 * Meta informations :
	 * 	- documentation : Canada Post Expedited Flat Rate Box.
	 * @return string 'CA_PostExpeditedFlatRateBox'
	 */
	const VALUE_CA_POSTEXPEDITEDFLATRATEBOX = 'CA_PostExpeditedFlatRateBox';
	/**
	 * Constant for value 'CA_StandardInternational'
	 * Meta informations :
	 * 	- documentation : Standard International Flat Rate Shipping
	 * @return string 'CA_StandardInternational'
	 */
	const VALUE_CA_STANDARDINTERNATIONAL = 'CA_StandardInternational';
	/**
	 * Constant for value 'CA_ExpeditedInternational'
	 * Meta informations :
	 * 	- documentation : Expedited International Flat Rate Shipping
	 * @return string 'CA_ExpeditedInternational'
	 */
	const VALUE_CA_EXPEDITEDINTERNATIONAL = 'CA_ExpeditedInternational';
	/**
	 * Constant for value 'CA_OtherInternational'
	 * Meta informations :
	 * 	- documentation : Other International Shipping (see description)
	 * @return string 'CA_OtherInternational'
	 */
	const VALUE_CA_OTHERINTERNATIONAL = 'CA_OtherInternational';
	/**
	 * Constant for value 'CA_PostExpeditedParcelUSA'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'CA_PostExpeditedParcelUSA'
	 */
	const VALUE_CA_POSTEXPEDITEDPARCELUSA = 'CA_PostExpeditedParcelUSA';
	/**
	 * Constant for value 'CA_PostSmallPacketsUSA'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'CA_PostSmallPacketsUSA'
	 */
	const VALUE_CA_POSTSMALLPACKETSUSA = 'CA_PostSmallPacketsUSA';
	/**
	 * Constant for value 'CA_PostXpresspostUSA'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'CA_PostXpresspostUSA'
	 */
	const VALUE_CA_POSTXPRESSPOSTUSA = 'CA_PostXpresspostUSA';
	/**
	 * Constant for value 'CA_PostXpresspostInternational'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'CA_PostXpresspostInternational'
	 */
	const VALUE_CA_POSTXPRESSPOSTINTERNATIONAL = 'CA_PostXpresspostInternational';
	/**
	 * Constant for value 'CA_PostInternationalParcelSurface'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'CA_PostInternationalParcelSurface'
	 */
	const VALUE_CA_POSTINTERNATIONALPARCELSURFACE = 'CA_PostInternationalParcelSurface';
	/**
	 * Constant for value 'CA_PostInternationalParcelAir'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'CA_PostInternationalParcelAir'
	 */
	const VALUE_CA_POSTINTERNATIONALPARCELAIR = 'CA_PostInternationalParcelAir';
	/**
	 * Constant for value 'CA_SmallPacketsInternational'
	 * Meta informations :
	 * 	- documentation : Small Packets - International
	 * @return string 'CA_SmallPacketsInternational'
	 */
	const VALUE_CA_SMALLPACKETSINTERNATIONAL = 'CA_SmallPacketsInternational';
	/**
	 * Constant for value 'CA_PurolatorInternational'
	 * Meta informations :
	 * 	- documentation : Purolator International
	 * @return string 'CA_PurolatorInternational'
	 */
	const VALUE_CA_PUROLATORINTERNATIONAL = 'CA_PurolatorInternational';
	/**
	 * Constant for value 'CA_PostSmallPacketsUSAGround'
	 * Meta informations :
	 * 	- documentation : Canada Post Small Packets - USA - Ground
	 * @return string 'CA_PostSmallPacketsUSAGround'
	 */
	const VALUE_CA_POSTSMALLPACKETSUSAGROUND = 'CA_PostSmallPacketsUSAGround';
	/**
	 * Constant for value 'CA_PostSmallPacketsUSAAir'
	 * Meta informations :
	 * 	- documentation : Canada Post Small Packets - USA - Air
	 * @return string 'CA_PostSmallPacketsUSAAir'
	 */
	const VALUE_CA_POSTSMALLPACKETSUSAAIR = 'CA_PostSmallPacketsUSAAir';
	/**
	 * Constant for value 'CA_SmallPacketsInternationalGround'
	 * Meta informations :
	 * 	- documentation : Small Packets - International - Ground
	 * @return string 'CA_SmallPacketsInternationalGround'
	 */
	const VALUE_CA_SMALLPACKETSINTERNATIONALGROUND = 'CA_SmallPacketsInternationalGround';
	/**
	 * Constant for value 'CA_SmallPacketsInternationalAir'
	 * Meta informations :
	 * 	- documentation : Small Packets - International - Air
	 * @return string 'CA_SmallPacketsInternationalAir'
	 */
	const VALUE_CA_SMALLPACKETSINTERNATIONALAIR = 'CA_SmallPacketsInternationalAir';
	/**
	 * Constant for value 'CA_PostUSALetterPost'
	 * Meta informations :
	 * 	- documentation : Canada Post USA Letter-post
	 * @return string 'CA_PostUSALetterPost'
	 */
	const VALUE_CA_POSTUSALETTERPOST = 'CA_PostUSALetterPost';
	/**
	 * Constant for value 'CA_PostInternationalLetterPost'
	 * Meta informations :
	 * 	- documentation : Canada Post International Letter-post
	 * @return string 'CA_PostInternationalLetterPost'
	 */
	const VALUE_CA_POSTINTERNATIONALLETTERPOST = 'CA_PostInternationalLetterPost';
	/**
	 * Constant for value 'CA_PostExpeditedFlatRateBoxUSA'
	 * Meta informations :
	 * 	- documentation : Canada Post Expedited Flat Rate Box USA.
	 * @return string 'CA_PostExpeditedFlatRateBoxUSA'
	 */
	const VALUE_CA_POSTEXPEDITEDFLATRATEBOXUSA = 'CA_PostExpeditedFlatRateBoxUSA';
	/**
	 * Constant for value 'CA_UPSExpressCanada'
	 * Meta informations :
	 * 	- documentation : UPS Express Canada
	 * @return string 'CA_UPSExpressCanada'
	 */
	const VALUE_CA_UPSEXPRESSCANADA = 'CA_UPSExpressCanada';
	/**
	 * Constant for value 'CA_UPSExpressSaverCanada'
	 * Meta informations :
	 * 	- documentation : UPS Express Saver Canada
	 * @return string 'CA_UPSExpressSaverCanada'
	 */
	const VALUE_CA_UPSEXPRESSSAVERCANADA = 'CA_UPSExpressSaverCanada';
	/**
	 * Constant for value 'CA_UPSExpeditedCanada'
	 * Meta informations :
	 * 	- documentation : UPS Expedited Canada
	 * @return string 'CA_UPSExpeditedCanada'
	 */
	const VALUE_CA_UPSEXPEDITEDCANADA = 'CA_UPSExpeditedCanada';
	/**
	 * Constant for value 'CA_UPSStandardCanada'
	 * Meta informations :
	 * 	- documentation : UPS Standard Canada
	 * @return string 'CA_UPSStandardCanada'
	 */
	const VALUE_CA_UPSSTANDARDCANADA = 'CA_UPSStandardCanada';
	/**
	 * Constant for value 'CA_UPSExpressUnitedStates'
	 * Meta informations :
	 * 	- documentation : UPS Express United States
	 * @return string 'CA_UPSExpressUnitedStates'
	 */
	const VALUE_CA_UPSEXPRESSUNITEDSTATES = 'CA_UPSExpressUnitedStates';
	/**
	 * Constant for value 'CA_UPSExpeditedUnitedStates'
	 * Meta informations :
	 * 	- documentation : UPS Expedited United States
	 * @return string 'CA_UPSExpeditedUnitedStates'
	 */
	const VALUE_CA_UPSEXPEDITEDUNITEDSTATES = 'CA_UPSExpeditedUnitedStates';
	/**
	 * Constant for value 'CA_UPS3DaySelectUnitedStates'
	 * Meta informations :
	 * 	- documentation : UPS 3 Day Select United States
	 * @return string 'CA_UPS3DaySelectUnitedStates'
	 */
	const VALUE_CA_UPS3DAYSELECTUNITEDSTATES = 'CA_UPS3DaySelectUnitedStates';
	/**
	 * Constant for value 'CA_UPSStandardUnitedStates'
	 * Meta informations :
	 * 	- documentation : UPS Standard United States
	 * @return string 'CA_UPSStandardUnitedStates'
	 */
	const VALUE_CA_UPSSTANDARDUNITEDSTATES = 'CA_UPSStandardUnitedStates';
	/**
	 * Constant for value 'CA_UPSWorldWideExpress'
	 * Meta informations :
	 * 	- documentation : UPS Worldwide Express
	 * @return string 'CA_UPSWorldWideExpress'
	 */
	const VALUE_CA_UPSWORLDWIDEEXPRESS = 'CA_UPSWorldWideExpress';
	/**
	 * Constant for value 'CA_UPSWorldWideExpedited'
	 * Meta informations :
	 * 	- documentation : UPS Worldwide Expedited
	 * @return string 'CA_UPSWorldWideExpedited'
	 */
	const VALUE_CA_UPSWORLDWIDEEXPEDITED = 'CA_UPSWorldWideExpedited';
	/**
	 * Constant for value 'CA_PriorityWorldwide'
	 * Meta informations :
	 * 	- documentation : Canada Post Priority Worldwide
	 * @return string 'CA_PriorityWorldwide'
	 */
	const VALUE_CA_PRIORITYWORLDWIDE = 'CA_PriorityWorldwide';
	/**
	 * Constant for value 'CanadaPostExpeditedFlatRateBoxUSA'
	 * Meta informations :
	 * 	- documentation : Canada Post Expedited Flat Rate Box USA
	 * @return string 'CanadaPostExpeditedFlatRateBoxUSA'
	 */
	const VALUE_CANADAPOSTEXPEDITEDFLATRATEBOXUSA = 'CanadaPostExpeditedFlatRateBoxUSA';
	/**
	 * Constant for value 'CA_Freight'
	 * Meta informations :
	 * 	- documentation : Freight
	 * @return string 'CA_Freight'
	 */
	const VALUE_CA_FREIGHT = 'CA_Freight';
	/**
	 * Constant for value 'CH_StandardDispatchAPost'
	 * Meta informations :
	 * 	- documentation : Standardversand (A-Post/Priority)
	 * @return string 'CH_StandardDispatchAPost'
	 */
	const VALUE_CH_STANDARDDISPATCHAPOST = 'CH_StandardDispatchAPost';
	/**
	 * Constant for value 'CH_StandardDispatchBPost'
	 * Meta informations :
	 * 	- documentation : Standardversand (B-Post/Economy)
	 * @return string 'CH_StandardDispatchBPost'
	 */
	const VALUE_CH_STANDARDDISPATCHBPOST = 'CH_StandardDispatchBPost';
	/**
	 * Constant for value 'CH_InsuredDispatch'
	 * Meta informations :
	 * 	- documentation : Versicherter Versand (z.B. Assurance/Fragile)
	 * @return string 'CH_InsuredDispatch'
	 */
	const VALUE_CH_INSUREDDISPATCH = 'CH_InsuredDispatch';
	/**
	 * Constant for value 'CH_Writing'
	 * @return string 'CH_Writing'
	 */
	const VALUE_CH_WRITING = 'CH_Writing';
	/**
	 * Constant for value 'CH_COD'
	 * @return string 'CH_COD'
	 */
	const VALUE_CH_COD = 'CH_COD';
	/**
	 * Constant for value 'CH_ExpressOrCourier'
	 * Meta informations :
	 * 	- documentation : Express- oder Kurierversand
	 * @return string 'CH_ExpressOrCourier'
	 */
	const VALUE_CH_EXPRESSORCOURIER = 'CH_ExpressOrCourier';
	/**
	 * Constant for value 'CH_InsuredExpressOrCourier'
	 * Meta informations :
	 * 	- documentation : Versicherter Express- oder Kurierversand
	 * @return string 'CH_InsuredExpressOrCourier'
	 */
	const VALUE_CH_INSUREDEXPRESSORCOURIER = 'CH_InsuredExpressOrCourier';
	/**
	 * Constant for value 'CH_SpecialDispatch'
	 * @return string 'CH_SpecialDispatch'
	 */
	const VALUE_CH_SPECIALDISPATCH = 'CH_SpecialDispatch';
	/**
	 * Constant for value 'CH_InsuredSpecialDispatch'
	 * @return string 'CH_InsuredSpecialDispatch'
	 */
	const VALUE_CH_INSUREDSPECIALDISPATCH = 'CH_InsuredSpecialDispatch';
	/**
	 * Constant for value 'CH_Sonstige'
	 * Meta informations :
	 * 	- documentation : Sonstige (Siehe Artikelbeschreibung)
	 * @return string 'CH_Sonstige'
	 */
	const VALUE_CH_SONSTIGE = 'CH_Sonstige';
	/**
	 * Constant for value 'CH_SonstigerVersandInternational'
	 * Meta informations :
	 * 	- documentation : Sonstiger Versand (Siehe Artikelbeschreibung)
	 * @return string 'CH_SonstigerVersandInternational'
	 */
	const VALUE_CH_SONSTIGERVERSANDINTERNATIONAL = 'CH_SonstigerVersandInternational';
	/**
	 * Constant for value 'CH_EconomySendungenInternational'
	 * Meta informations :
	 * 	- documentation : ECONOMY Sendungen
	 * @return string 'CH_EconomySendungenInternational'
	 */
	const VALUE_CH_ECONOMYSENDUNGENINTERNATIONAL = 'CH_EconomySendungenInternational';
	/**
	 * Constant for value 'CH_PrioritySendungenInternational'
	 * Meta informations :
	 * 	- documentation : PRIORITY Sendungen
	 * @return string 'CH_PrioritySendungenInternational'
	 */
	const VALUE_CH_PRIORITYSENDUNGENINTERNATIONAL = 'CH_PrioritySendungenInternational';
	/**
	 * Constant for value 'CH_UrgentSendungenInternational'
	 * Meta informations :
	 * 	- documentation : URGENT Sendungen
	 * @return string 'CH_UrgentSendungenInternational'
	 */
	const VALUE_CH_URGENTSENDUNGENINTERNATIONAL = 'CH_UrgentSendungenInternational';
	/**
	 * Constant for value 'CN_PersonalDelivery'
	 * @return string 'CN_PersonalDelivery'
	 */
	const VALUE_CN_PERSONALDELIVERY = 'CN_PersonalDelivery';
	/**
	 * Constant for value 'CN_RegularPackage'
	 * @return string 'CN_RegularPackage'
	 */
	const VALUE_CN_REGULARPACKAGE = 'CN_RegularPackage';
	/**
	 * Constant for value 'CN_DeliveryCompanyExpress'
	 * @return string 'CN_DeliveryCompanyExpress'
	 */
	const VALUE_CN_DELIVERYCOMPANYEXPRESS = 'CN_DeliveryCompanyExpress';
	/**
	 * Constant for value 'CN_PostOfficeExpress'
	 * @return string 'CN_PostOfficeExpress'
	 */
	const VALUE_CN_POSTOFFICEEXPRESS = 'CN_PostOfficeExpress';
	/**
	 * Constant for value 'CN_Others'
	 * @return string 'CN_Others'
	 */
	const VALUE_CN_OTHERS = 'CN_Others';
	/**
	 * Constant for value 'CN_FastPostOffice'
	 * @return string 'CN_FastPostOffice'
	 */
	const VALUE_CN_FASTPOSTOFFICE = 'CN_FastPostOffice';
	/**
	 * Constant for value 'CN_ExpressDeliverySameCity'
	 * @return string 'CN_ExpressDeliverySameCity'
	 */
	const VALUE_CN_EXPRESSDELIVERYSAMECITY = 'CN_ExpressDeliverySameCity';
	/**
	 * Constant for value 'CN_ExpressDeliveryOtherCities'
	 * @return string 'CN_ExpressDeliveryOtherCities'
	 */
	const VALUE_CN_EXPRESSDELIVERYOTHERCITIES = 'CN_ExpressDeliveryOtherCities';
	/**
	 * Constant for value 'CN_StandardInternational'
	 * @return string 'CN_StandardInternational'
	 */
	const VALUE_CN_STANDARDINTERNATIONAL = 'CN_StandardInternational';
	/**
	 * Constant for value 'CN_ExpeditedInternational'
	 * @return string 'CN_ExpeditedInternational'
	 */
	const VALUE_CN_EXPEDITEDINTERNATIONAL = 'CN_ExpeditedInternational';
	/**
	 * Constant for value 'CN_OtherInternational'
	 * @return string 'CN_OtherInternational'
	 */
	const VALUE_CN_OTHERINTERNATIONAL = 'CN_OtherInternational';
	/**
	 * Constant for value 'CN_CODInternational'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'CN_CODInternational'
	 */
	const VALUE_CN_CODINTERNATIONAL = 'CN_CODInternational';
	/**
	 * Constant for value 'CN_StandardMailingInternational'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'CN_StandardMailingInternational'
	 */
	const VALUE_CN_STANDARDMAILINGINTERNATIONAL = 'CN_StandardMailingInternational';
	/**
	 * Constant for value 'CN_RegularLogisticsInternational'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'CN_RegularLogisticsInternational'
	 */
	const VALUE_CN_REGULARLOGISTICSINTERNATIONAL = 'CN_RegularLogisticsInternational';
	/**
	 * Constant for value 'CN_EMSInternational'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'CN_EMSInternational'
	 */
	const VALUE_CN_EMSINTERNATIONAL = 'CN_EMSInternational';
	/**
	 * Constant for value 'CN_OthersInternational'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'CN_OthersInternational'
	 */
	const VALUE_CN_OTHERSINTERNATIONAL = 'CN_OthersInternational';
	/**
	 * Constant for value 'DE_StandardDispatch'
	 * Meta informations :
	 * 	- documentation : Unversicherter Versand
	 * @return string 'DE_StandardDispatch'
	 */
	const VALUE_DE_STANDARDDISPATCH = 'DE_StandardDispatch';
	/**
	 * Constant for value 'DE_InsuredDispatch'
	 * Meta informations :
	 * 	- documentation : Versicherter Versand
	 * @return string 'DE_InsuredDispatch'
	 */
	const VALUE_DE_INSUREDDISPATCH = 'DE_InsuredDispatch';
	/**
	 * Constant for value 'DE_Writing'
	 * @return string 'DE_Writing'
	 */
	const VALUE_DE_WRITING = 'DE_Writing';
	/**
	 * Constant for value 'DE_COD'
	 * @return string 'DE_COD'
	 */
	const VALUE_DE_COD = 'DE_COD';
	/**
	 * Constant for value 'DE_ExpressOrCourier'
	 * Meta informations :
	 * 	- documentation : Express- oder Kurierversand
	 * @return string 'DE_ExpressOrCourier'
	 */
	const VALUE_DE_EXPRESSORCOURIER = 'DE_ExpressOrCourier';
	/**
	 * Constant for value 'DE_InsuredExpressOrCourier'
	 * Meta informations :
	 * 	- documentation : Versicherter Express- oder Kurierversand
	 * @return string 'DE_InsuredExpressOrCourier'
	 */
	const VALUE_DE_INSUREDEXPRESSORCOURIER = 'DE_InsuredExpressOrCourier';
	/**
	 * Constant for value 'DE_SpecialDispatch'
	 * @return string 'DE_SpecialDispatch'
	 */
	const VALUE_DE_SPECIALDISPATCH = 'DE_SpecialDispatch';
	/**
	 * Constant for value 'DE_InsuredSpecialDispatch'
	 * @return string 'DE_InsuredSpecialDispatch'
	 */
	const VALUE_DE_INSUREDSPECIALDISPATCH = 'DE_InsuredSpecialDispatch';
	/**
	 * Constant for value 'DE_UnversicherterVersand'
	 * Meta informations :
	 * 	- documentation : Unversicherter Versand
	 * @return string 'DE_UnversicherterVersand'
	 */
	const VALUE_DE_UNVERSICHERTERVERSAND = 'DE_UnversicherterVersand';
	/**
	 * Constant for value 'DE_DeutschePostBrief'
	 * Meta informations :
	 * 	- documentation : Deutsche Post Brief
	 * @return string 'DE_DeutschePostBrief'
	 */
	const VALUE_DE_DEUTSCHEPOSTBRIEF = 'DE_DeutschePostBrief';
	/**
	 * Constant for value 'DE_eBayDHLPaket24x7'
	 * Meta informations :
	 * 	- documentation : eBay DHL Paket 24/7 (Abgabe und Lieferung an Packstation)
	 * @return string 'DE_eBayDHLPaket24x7'
	 */
	const VALUE_DE_EBAYDHLPAKET24X7 = 'DE_eBayDHLPaket24x7';
	/**
	 * Constant for value 'DE_DHLPostpaket'
	 * Meta informations :
	 * 	- documentation : DHL Postpaket
	 * @return string 'DE_DHLPostpaket'
	 */
	const VALUE_DE_DHLPOSTPAKET = 'DE_DHLPostpaket';
	/**
	 * Constant for value 'DE_DHLPackchen'
	 * @return string 'DE_DHLPackchen'
	 */
	const VALUE_DE_DHLPACKCHEN = 'DE_DHLPackchen';
	/**
	 * Constant for value 'DE_DeutschePostWarensendung'
	 * Meta informations :
	 * 	- documentation : Deutsche Post Warensendung
	 * @return string 'DE_DeutschePostWarensendung'
	 */
	const VALUE_DE_DEUTSCHEPOSTWARENSENDUNG = 'DE_DeutschePostWarensendung';
	/**
	 * Constant for value 'DE_DeutschePostBuchersendung'
	 * @return string 'DE_DeutschePostBuchersendung'
	 */
	const VALUE_DE_DEUTSCHEPOSTBUCHERSENDUNG = 'DE_DeutschePostBuchersendung';
	/**
	 * Constant for value 'DE_HermesPaketUnversichert'
	 * Meta informations :
	 * 	- documentation : Hermes Paket (unversichert)
	 * @return string 'DE_HermesPaketUnversichert'
	 */
	const VALUE_DE_HERMESPAKETUNVERSICHERT = 'DE_HermesPaketUnversichert';
	/**
	 * Constant for value 'DE_HermesPaketVersichert'
	 * Meta informations :
	 * 	- documentation : Hermes Paket (versichert)
	 * @return string 'DE_HermesPaketVersichert'
	 */
	const VALUE_DE_HERMESPAKETVERSICHERT = 'DE_HermesPaketVersichert';
	/**
	 * Constant for value 'DE_IloxxTransportXXL'
	 * Meta informations :
	 * 	- documentation : iloxx Transport XXL
	 * @return string 'DE_IloxxTransportXXL'
	 */
	const VALUE_DE_ILOXXTRANSPORTXXL = 'DE_IloxxTransportXXL';
	/**
	 * Constant for value 'DE_IloxxUbernachtExpress'
	 * @return string 'DE_IloxxUbernachtExpress'
	 */
	const VALUE_DE_ILOXXUBERNACHTEXPRESS = 'DE_IloxxUbernachtExpress';
	/**
	 * Constant for value 'DE_IloxxStandard'
	 * Meta informations :
	 * 	- documentation : iloxx Standard
	 * @return string 'DE_IloxxStandard'
	 */
	const VALUE_DE_ILOXXSTANDARD = 'DE_IloxxStandard';
	/**
	 * Constant for value 'DE_Sonstige'
	 * Meta informations :
	 * 	- documentation : Sonstige (Siehe Artikelbeschreibung)
	 * @return string 'DE_Sonstige'
	 */
	const VALUE_DE_SONSTIGE = 'DE_Sonstige';
	/**
	 * Constant for value 'DE_UnversicherterVersandInternational'
	 * Meta informations :
	 * 	- documentation : Unversicherter Versand
	 * @return string 'DE_UnversicherterVersandInternational'
	 */
	const VALUE_DE_UNVERSICHERTERVERSANDINTERNATIONAL = 'DE_UnversicherterVersandInternational';
	/**
	 * Constant for value 'DE_VersicherterVersandInternational'
	 * Meta informations :
	 * 	- documentation : Versicherter Versand
	 * @return string 'DE_VersicherterVersandInternational'
	 */
	const VALUE_DE_VERSICHERTERVERSANDINTERNATIONAL = 'DE_VersicherterVersandInternational';
	/**
	 * Constant for value 'DE_DHLPostpaketInternational'
	 * Meta informations :
	 * 	- documentation : DHL Postpaket International
	 * @return string 'DE_DHLPostpaketInternational'
	 */
	const VALUE_DE_DHLPOSTPAKETINTERNATIONAL = 'DE_DHLPostpaketInternational';
	/**
	 * Constant for value 'DE_DHLPackchenInternational'
	 * @return string 'DE_DHLPackchenInternational'
	 */
	const VALUE_DE_DHLPACKCHENINTERNATIONAL = 'DE_DHLPackchenInternational';
	/**
	 * Constant for value 'DE_SonstigerVersandInternational'
	 * Meta informations :
	 * 	- documentation : Sonstiger Versand (Siehe Artikelbeschreibung)
	 * @return string 'DE_SonstigerVersandInternational'
	 */
	const VALUE_DE_SONSTIGERVERSANDINTERNATIONAL = 'DE_SonstigerVersandInternational';
	/**
	 * Constant for value 'DE_UnversicherterExpressVersandInternational'
	 * Meta informations :
	 * 	- documentation : Unversicherter Express - Versand
	 * @return string 'DE_UnversicherterExpressVersandInternational'
	 */
	const VALUE_DE_UNVERSICHERTEREXPRESSVERSANDINTERNATIONAL = 'DE_UnversicherterExpressVersandInternational';
	/**
	 * Constant for value 'DE_VersicherterExpressVersandInternational'
	 * Meta informations :
	 * 	- documentation : Versicherter Express - Versand
	 * @return string 'DE_VersicherterExpressVersandInternational'
	 */
	const VALUE_DE_VERSICHERTEREXPRESSVERSANDINTERNATIONAL = 'DE_VersicherterExpressVersandInternational';
	/**
	 * Constant for value 'DE_DeutschePostBriefLandInternational'
	 * Meta informations :
	 * 	- documentation : Deutsche Post Brief (Land)
	 * @return string 'DE_DeutschePostBriefLandInternational'
	 */
	const VALUE_DE_DEUTSCHEPOSTBRIEFLANDINTERNATIONAL = 'DE_DeutschePostBriefLandInternational';
	/**
	 * Constant for value 'DE_DeutschePostBriefLuftInternational'
	 * Meta informations :
	 * 	- documentation : Deutsche Post Brief (Luft)
	 * @return string 'DE_DeutschePostBriefLuftInternational'
	 */
	const VALUE_DE_DEUTSCHEPOSTBRIEFLUFTINTERNATIONAL = 'DE_DeutschePostBriefLuftInternational';
	/**
	 * Constant for value 'DE_IloxxEuropaInternational'
	 * Meta informations :
	 * 	- documentation : iloxx Europa
	 * @return string 'DE_IloxxEuropaInternational'
	 */
	const VALUE_DE_ILOXXEUROPAINTERNATIONAL = 'DE_IloxxEuropaInternational';
	/**
	 * Constant for value 'DE_IloxxWorldWideInternational'
	 * Meta informations :
	 * 	- documentation : iloxx World Wide
	 * @return string 'DE_IloxxWorldWideInternational'
	 */
	const VALUE_DE_ILOXXWORLDWIDEINTERNATIONAL = 'DE_IloxxWorldWideInternational';
	/**
	 * Constant for value 'DE_Paket'
	 * Meta informations :
	 * 	- documentation : Paketversand
	 * @return string 'DE_Paket'
	 */
	const VALUE_DE_PAKET = 'DE_Paket';
	/**
	 * Constant for value 'DE_Express'
	 * Meta informations :
	 * 	- documentation : Expressversand
	 * @return string 'DE_Express'
	 */
	const VALUE_DE_EXPRESS = 'DE_Express';
	/**
	 * Constant for value 'DE_DHLPaket'
	 * Meta informations :
	 * 	- documentation : DHL Paket
	 * @return string 'DE_DHLPaket'
	 */
	const VALUE_DE_DHLPAKET = 'DE_DHLPaket';
	/**
	 * Constant for value 'DE_DPBuecherWarensendung'
	 * Meta informations :
	 * 	- documentation : Deutsche Post Buecher-/Warensendung
	 * @return string 'DE_DPBuecherWarensendung'
	 */
	const VALUE_DE_DPBUECHERWARENSENDUNG = 'DE_DPBuecherWarensendung';
	/**
	 * Constant for value 'DE_HermesPaket'
	 * Meta informations :
	 * 	- documentation : Hermes Paket
	 * @return string 'DE_HermesPaket'
	 */
	const VALUE_DE_HERMESPAKET = 'DE_HermesPaket';
	/**
	 * Constant for value 'DE_IloxxTransport'
	 * Meta informations :
	 * 	- documentation : iloxx Transport
	 * @return string 'DE_IloxxTransport'
	 */
	const VALUE_DE_ILOXXTRANSPORT = 'DE_IloxxTransport';
	/**
	 * Constant for value 'DE_SonstigeDomestic'
	 * Meta informations :
	 * 	- documentation : Sonstige
	 * @return string 'DE_SonstigeDomestic'
	 */
	const VALUE_DE_SONSTIGEDOMESTIC = 'DE_SonstigeDomestic';
	/**
	 * Constant for value 'DE_Einschreiben'
	 * Meta informations :
	 * 	- documentation : Einschreiben (inkl. aller Gebuehren)
	 * @return string 'DE_Einschreiben'
	 */
	const VALUE_DE_EINSCHREIBEN = 'DE_Einschreiben';
	/**
	 * Constant for value 'DE_Nachname'
	 * Meta informations :
	 * 	- documentation : Nachnahme (inkl. aller Gebuehren)
	 * @return string 'DE_Nachname'
	 */
	const VALUE_DE_NACHNAME = 'DE_Nachname';
	/**
	 * Constant for value 'DE_SpecialDelivery'
	 * Meta informations :
	 * 	- documentation : Sonderversand
	 * @return string 'DE_SpecialDelivery'
	 */
	const VALUE_DE_SPECIALDELIVERY = 'DE_SpecialDelivery';
	/**
	 * Constant for value 'DE_UPS'
	 * Meta informations :
	 * 	- documentation : UPS
	 * @return string 'DE_UPS'
	 */
	const VALUE_DE_UPS = 'DE_UPS';
	/**
	 * Constant for value 'DE_DPD'
	 * Meta informations :
	 * 	- documentation : DPD
	 * @return string 'DE_DPD'
	 */
	const VALUE_DE_DPD = 'DE_DPD';
	/**
	 * Constant for value 'DE_GLS'
	 * Meta informations :
	 * 	- documentation : GLS
	 * @return string 'DE_GLS'
	 */
	const VALUE_DE_GLS = 'DE_GLS';
	/**
	 * Constant for value 'DE_PaketInternational'
	 * Meta informations :
	 * 	- documentation : Paketversand
	 * @return string 'DE_PaketInternational'
	 */
	const VALUE_DE_PAKETINTERNATIONAL = 'DE_PaketInternational';
	/**
	 * Constant for value 'DE_DHLPaketInternational'
	 * Meta informations :
	 * 	- documentation : DHL Paket International
	 * @return string 'DE_DHLPaketInternational'
	 */
	const VALUE_DE_DHLPAKETINTERNATIONAL = 'DE_DHLPaketInternational';
	/**
	 * Constant for value 'DE_SonstigeInternational'
	 * Meta informations :
	 * 	- documentation : Sonstige
	 * @return string 'DE_SonstigeInternational'
	 */
	const VALUE_DE_SONSTIGEINTERNATIONAL = 'DE_SonstigeInternational';
	/**
	 * Constant for value 'DE_ExpressInternational'
	 * Meta informations :
	 * 	- documentation : Expressversand
	 * @return string 'DE_ExpressInternational'
	 */
	const VALUE_DE_EXPRESSINTERNATIONAL = 'DE_ExpressInternational';
	/**
	 * Constant for value 'DE_DPBriefInternational'
	 * Meta informations :
	 * 	- documentation : Deutsche Post Brief
	 * @return string 'DE_DPBriefInternational'
	 */
	const VALUE_DE_DPBRIEFINTERNATIONAL = 'DE_DPBriefInternational';
	/**
	 * Constant for value 'DE_IloxxTransportInternational'
	 * Meta informations :
	 * 	- documentation : iloxx Transport International
	 * @return string 'DE_IloxxTransportInternational'
	 */
	const VALUE_DE_ILOXXTRANSPORTINTERNATIONAL = 'DE_IloxxTransportInternational';
	/**
	 * Constant for value 'DE_HermesPaketInternational'
	 * Meta informations :
	 * 	- documentation : Hermes Paket International
	 * @return string 'DE_HermesPaketInternational'
	 */
	const VALUE_DE_HERMESPAKETINTERNATIONAL = 'DE_HermesPaketInternational';
	/**
	 * Constant for value 'DE_UPSInternational'
	 * Meta informations :
	 * 	- documentation : UPS International
	 * @return string 'DE_UPSInternational'
	 */
	const VALUE_DE_UPSINTERNATIONAL = 'DE_UPSInternational';
	/**
	 * Constant for value 'DE_DPDInternational'
	 * Meta informations :
	 * 	- documentation : DPD International
	 * @return string 'DE_DPDInternational'
	 */
	const VALUE_DE_DPDINTERNATIONAL = 'DE_DPDInternational';
	/**
	 * Constant for value 'DE_GLSInternational'
	 * Meta informations :
	 * 	- documentation : GLS International
	 * @return string 'DE_GLSInternational'
	 */
	const VALUE_DE_GLSINTERNATIONAL = 'DE_GLSInternational';
	/**
	 * Constant for value 'DE_eBayHermesPaketShop2ShopKaeufer'
	 * Meta informations :
	 * 	- documentation : eBay Hermes Paket Shop2Shop (Kaeufer erhaelt E-Mail von Hermes bei Zustellung)
	 * @return string 'DE_eBayHermesPaketShop2ShopKaeufer'
	 */
	const VALUE_DE_EBAYHERMESPAKETSHOP2SHOPKAEUFER = 'DE_eBayHermesPaketShop2ShopKaeufer';
	/**
	 * Constant for value 'DE_HermesPaketShop2ShopKaeufer'
	 * Meta informations :
	 * 	- documentation : Hermes Paket Shop2Shop (Kaeufer erhaelt E-Mail von Hermes bei Zustellung)
	 * @return string 'DE_HermesPaketShop2ShopKaeufer'
	 */
	const VALUE_DE_HERMESPAKETSHOP2SHOPKAEUFER = 'DE_HermesPaketShop2ShopKaeufer';
	/**
	 * Constant for value 'DE_eBayHermesPaketShop2Shop'
	 * Meta informations :
	 * 	- documentation : eBay Hermes Paket Shop2Shop
	 * @return string 'DE_eBayHermesPaketShop2Shop'
	 */
	const VALUE_DE_EBAYHERMESPAKETSHOP2SHOP = 'DE_eBayHermesPaketShop2Shop';
	/**
	 * Constant for value 'DE_HermesPaketShop2Shop'
	 * Meta informations :
	 * 	- documentation : Hermes Paket Shop2Shop
	 * @return string 'DE_HermesPaketShop2Shop'
	 */
	const VALUE_DE_HERMESPAKETSHOP2SHOP = 'DE_HermesPaketShop2Shop';
	/**
	 * Constant for value 'DE_HermesPaketSperrgut'
	 * Meta informations :
	 * 	- documentation : Hermes Paket Sperrgut
	 * @return string 'DE_HermesPaketSperrgut'
	 */
	const VALUE_DE_HERMESPAKETSPERRGUT = 'DE_HermesPaketSperrgut';
	/**
	 * Constant for value 'DE_eBayHermesPaketSperrgutShop2Shop'
	 * Meta informations :
	 * 	- documentation : eBay Hermes Paket Sperrgut Shop2Shop (Abgabe und Zustellung im Paketshop)
	 * @return string 'DE_eBayHermesPaketSperrgutShop2Shop'
	 */
	const VALUE_DE_EBAYHERMESPAKETSPERRGUTSHOP2SHOP = 'DE_eBayHermesPaketSperrgutShop2Shop';
	/**
	 * Constant for value 'DE_DHLPaeckchenPackstation'
	 * Meta informations :
	 * 	- documentation : DHL Paeckchen Packstation
	 * @return string 'DE_DHLPaeckchenPackstation'
	 */
	const VALUE_DE_DHLPAECKCHENPACKSTATION = 'DE_DHLPaeckchenPackstation';
	/**
	 * Constant for value 'DE_DHLPaketPackstation'
	 * Meta informations :
	 * 	- documentation : DHL Paket Packstation
	 * @return string 'DE_DHLPaketPackstation'
	 */
	const VALUE_DE_DHLPAKETPACKSTATION = 'DE_DHLPaketPackstation';
	/**
	 * Constant for value 'DE_eBayDHLPaeckchen'
	 * Meta informations :
	 * 	- documentation : eBay DHL Paeckchen
	 * @return string 'DE_eBayDHLPaeckchen'
	 */
	const VALUE_DE_EBAYDHLPAECKCHEN = 'DE_eBayDHLPaeckchen';
	/**
	 * Constant for value 'DE_DHLStarPaeckchen'
	 * Meta informations :
	 * 	- documentation : DHL Star-Paeckchen
	 * @return string 'DE_DHLStarPaeckchen'
	 */
	const VALUE_DE_DHLSTARPAECKCHEN = 'DE_DHLStarPaeckchen';
	/**
	 * Constant for value 'ES_CartasNacionalesHasta20'
	 * Meta informations :
	 * 	- documentation : Cartas nacionales hasta 20 gr
	 * @return string 'ES_CartasNacionalesHasta20'
	 */
	const VALUE_ES_CARTASNACIONALESHASTA20 = 'ES_CartasNacionalesHasta20';
	/**
	 * Constant for value 'ES_CartasNacionalesDeMas20'
	 * @return string 'ES_CartasNacionalesDeMas20'
	 */
	const VALUE_ES_CARTASNACIONALESDEMAS20 = 'ES_CartasNacionalesDeMas20';
	/**
	 * Constant for value 'ES_CartasInternacionalesHasta20'
	 * Meta informations :
	 * 	- documentation : Cartas internacionales hasta 20 gr
	 * @return string 'ES_CartasInternacionalesHasta20'
	 */
	const VALUE_ES_CARTASINTERNACIONALESHASTA20 = 'ES_CartasInternacionalesHasta20';
	/**
	 * Constant for value 'ES_CartasInternacionalesDeMas20'
	 * Meta informations :
	 * 	- documentation : Cartas internacionales de mas de 20 gr
	 * @return string 'ES_CartasInternacionalesDeMas20'
	 */
	const VALUE_ES_CARTASINTERNACIONALESDEMAS20 = 'ES_CartasInternacionalesDeMas20';
	/**
	 * Constant for value 'ES_PaqueteAzulHasta2kg'
	 * Meta informations :
	 * 	- documentation : Paquete Azul (nacional) hasta 2 kg
	 * @return string 'ES_PaqueteAzulHasta2kg'
	 */
	const VALUE_ES_PAQUETEAZULHASTA2KG = 'ES_PaqueteAzulHasta2kg';
	/**
	 * Constant for value 'ES_PaqueteAzulDeMas2kg'
	 * @return string 'ES_PaqueteAzulDeMas2kg'
	 */
	const VALUE_ES_PAQUETEAZULDEMAS2KG = 'ES_PaqueteAzulDeMas2kg';
	/**
	 * Constant for value 'ES_PaqueteInternacionalEconomico'
	 * @return string 'ES_PaqueteInternacionalEconomico'
	 */
	const VALUE_ES_PAQUETEINTERNACIONALECONOMICO = 'ES_PaqueteInternacionalEconomico';
	/**
	 * Constant for value 'ES_Urgente'
	 * @return string 'ES_Urgente'
	 */
	const VALUE_ES_URGENTE = 'ES_Urgente';
	/**
	 * Constant for value 'ES_Otros'
	 * @return string 'ES_Otros'
	 */
	const VALUE_ES_OTROS = 'ES_Otros';
	/**
	 * Constant for value 'ES_StandardInternational'
	 * @return string 'ES_StandardInternational'
	 */
	const VALUE_ES_STANDARDINTERNATIONAL = 'ES_StandardInternational';
	/**
	 * Constant for value 'ES_ExpeditedInternational'
	 * @return string 'ES_ExpeditedInternational'
	 */
	const VALUE_ES_EXPEDITEDINTERNATIONAL = 'ES_ExpeditedInternational';
	/**
	 * Constant for value 'ES_OtherInternational'
	 * @return string 'ES_OtherInternational'
	 */
	const VALUE_ES_OTHERINTERNATIONAL = 'ES_OtherInternational';
	/**
	 * Constant for value 'ES_CartasPostalInternational'
	 * Meta informations :
	 * 	- documentation : Cartas y tarjetas postales internacionales
	 * @return string 'ES_CartasPostalInternational'
	 */
	const VALUE_ES_CARTASPOSTALINTERNATIONAL = 'ES_CartasPostalInternational';
	/**
	 * Constant for value 'ES_EmsPostalExpressInternational'
	 * Meta informations :
	 * 	- documentation : Ems postal expres internacional
	 * @return string 'ES_EmsPostalExpressInternational'
	 */
	const VALUE_ES_EMSPOSTALEXPRESSINTERNATIONAL = 'ES_EmsPostalExpressInternational';
	/**
	 * Constant for value 'ES_EconomyPacketInternational'
	 * Meta informations :
	 * 	- documentation : Paquete internacional economico
	 * @return string 'ES_EconomyPacketInternational'
	 */
	const VALUE_ES_ECONOMYPACKETINTERNATIONAL = 'ES_EconomyPacketInternational';
	/**
	 * Constant for value 'FR_ChronoposteInternationalClassic'
	 * Meta informations :
	 * 	- documentation : Chronoposte International Classic
	 * @return string 'FR_ChronoposteInternationalClassic'
	 */
	const VALUE_FR_CHRONOPOSTEINTERNATIONALCLASSIC = 'FR_ChronoposteInternationalClassic';
	/**
	 * Constant for value 'FR_ColiposteColissimoDirect'
	 * Meta informations :
	 * 	- documentation : Coliposte Colissimo Direct
	 * @return string 'FR_ColiposteColissimoDirect'
	 */
	const VALUE_FR_COLIPOSTECOLISSIMODIRECT = 'FR_ColiposteColissimoDirect';
	/**
	 * Constant for value 'FR_DHLExpressEuropack'
	 * Meta informations :
	 * 	- documentation : DHL Express Europack
	 * @return string 'FR_DHLExpressEuropack'
	 */
	const VALUE_FR_DHLEXPRESSEUROPACK = 'FR_DHLExpressEuropack';
	/**
	 * Constant for value 'FR_UPSStandard'
	 * Meta informations :
	 * 	- documentation : UPS Standard
	 * @return string 'FR_UPSStandard'
	 */
	const VALUE_FR_UPSSTANDARD = 'FR_UPSStandard';
	/**
	 * Constant for value 'FR_PostOfficeLetter'
	 * Meta informations :
	 * 	- documentation : Lettre
	 * @return string 'FR_PostOfficeLetter'
	 */
	const VALUE_FR_POSTOFFICELETTER = 'FR_PostOfficeLetter';
	/**
	 * Constant for value 'FR_PostOfficeLetterFollowed'
	 * Meta informations :
	 * 	- documentation : Lettre avec suivi
	 * @return string 'FR_PostOfficeLetterFollowed'
	 */
	const VALUE_FR_POSTOFFICELETTERFOLLOWED = 'FR_PostOfficeLetterFollowed';
	/**
	 * Constant for value 'FR_PostOfficeLetterRecommended'
	 * @return string 'FR_PostOfficeLetterRecommended'
	 */
	const VALUE_FR_POSTOFFICELETTERRECOMMENDED = 'FR_PostOfficeLetterRecommended';
	/**
	 * Constant for value 'FR_ColiposteColissimo'
	 * Meta informations :
	 * 	- documentation : Colissimo
	 * @return string 'FR_ColiposteColissimo'
	 */
	const VALUE_FR_COLIPOSTECOLISSIMO = 'FR_ColiposteColissimo';
	/**
	 * Constant for value 'FR_ColiposteColissimoRecommended'
	 * @return string 'FR_ColiposteColissimoRecommended'
	 */
	const VALUE_FR_COLIPOSTECOLISSIMORECOMMENDED = 'FR_ColiposteColissimoRecommended';
	/**
	 * Constant for value 'FR_UPSStandardAgainstRefund'
	 * Meta informations :
	 * 	- documentation : Contre remboursement
	 * @return string 'FR_UPSStandardAgainstRefund'
	 */
	const VALUE_FR_UPSSTANDARDAGAINSTREFUND = 'FR_UPSStandardAgainstRefund';
	/**
	 * Constant for value 'FR_Autre'
	 * Meta informations :
	 * 	- documentation : Autre mode d'envoi de courrier
	 * @return string 'FR_Autre'
	 */
	const VALUE_FR_AUTRE = 'FR_Autre';
	/**
	 * Constant for value 'FR_Ecopli'
	 * Meta informations :
	 * 	- documentation : Ecopli
	 * @return string 'FR_Ecopli'
	 */
	const VALUE_FR_ECOPLI = 'FR_Ecopli';
	/**
	 * Constant for value 'FR_Colieco'
	 * @return string 'FR_Colieco'
	 */
	const VALUE_FR_COLIECO = 'FR_Colieco';
	/**
	 * Constant for value 'FR_AuteModeDenvoiDeColis'
	 * Meta informations :
	 * 	- documentation : Autre mode d'envoi de colis
	 * @return string 'FR_AuteModeDenvoiDeColis'
	 */
	const VALUE_FR_AUTEMODEDENVOIDECOLIS = 'FR_AuteModeDenvoiDeColis';
	/**
	 * Constant for value 'FR_RemiseEnMainPropre'
	 * Meta informations :
	 * 	- documentation : Remise en main propre
	 * @return string 'FR_RemiseEnMainPropre'
	 */
	const VALUE_FR_REMISEENMAINPROPRE = 'FR_RemiseEnMainPropre';
	/**
	 * Constant for value 'FR_StandardInternational'
	 * @return string 'FR_StandardInternational'
	 */
	const VALUE_FR_STANDARDINTERNATIONAL = 'FR_StandardInternational';
	/**
	 * Constant for value 'FR_ExpeditedInternational'
	 * @return string 'FR_ExpeditedInternational'
	 */
	const VALUE_FR_EXPEDITEDINTERNATIONAL = 'FR_ExpeditedInternational';
	/**
	 * Constant for value 'FR_OtherInternational'
	 * @return string 'FR_OtherInternational'
	 */
	const VALUE_FR_OTHERINTERNATIONAL = 'FR_OtherInternational';
	/**
	 * Constant for value 'FR_LaPosteInternationalPriorityCourier'
	 * Meta informations :
	 * 	- documentation : La Poste - Courrier International Prioritaire
	 * @return string 'FR_LaPosteInternationalPriorityCourier'
	 */
	const VALUE_FR_LAPOSTEINTERNATIONALPRIORITYCOURIER = 'FR_LaPosteInternationalPriorityCourier';
	/**
	 * Constant for value 'FR_LaPosteInternationalEconomyCourier'
	 * Meta informations :
	 * 	- documentation : La Poste - Courrier International Economique
	 * @return string 'FR_LaPosteInternationalEconomyCourier'
	 */
	const VALUE_FR_LAPOSTEINTERNATIONALECONOMYCOURIER = 'FR_LaPosteInternationalEconomyCourier';
	/**
	 * Constant for value 'FR_LaPosteColissimoInternational'
	 * Meta informations :
	 * 	- documentation : La Poste - Colissimo International
	 * @return string 'FR_LaPosteColissimoInternational'
	 */
	const VALUE_FR_LAPOSTECOLISSIMOINTERNATIONAL = 'FR_LaPosteColissimoInternational';
	/**
	 * Constant for value 'FR_LaPosteColisEconomiqueInternational'
	 * Meta informations :
	 * 	- documentation : La Poste - Colis Economique International
	 * @return string 'FR_LaPosteColisEconomiqueInternational'
	 */
	const VALUE_FR_LAPOSTECOLISECONOMIQUEINTERNATIONAL = 'FR_LaPosteColisEconomiqueInternational';
	/**
	 * Constant for value 'FR_LaPosteColissimoEmballageInternational'
	 * Meta informations :
	 * 	- documentation : La Poste - Colissimo Emballage International
	 * @return string 'FR_LaPosteColissimoEmballageInternational'
	 */
	const VALUE_FR_LAPOSTECOLISSIMOEMBALLAGEINTERNATIONAL = 'FR_LaPosteColissimoEmballageInternational';
	/**
	 * Constant for value 'FR_ChronopostClassicInternational'
	 * Meta informations :
	 * 	- documentation : Chronopost Classic International
	 * @return string 'FR_ChronopostClassicInternational'
	 */
	const VALUE_FR_CHRONOPOSTCLASSICINTERNATIONAL = 'FR_ChronopostClassicInternational';
	/**
	 * Constant for value 'FR_ChronopostPremiumInternational'
	 * Meta informations :
	 * 	- documentation : Chronopost Premium International
	 * @return string 'FR_ChronopostPremiumInternational'
	 */
	const VALUE_FR_CHRONOPOSTPREMIUMINTERNATIONAL = 'FR_ChronopostPremiumInternational';
	/**
	 * Constant for value 'FR_UPSStandardInternational'
	 * Meta informations :
	 * 	- documentation : UPS Standard
	 * @return string 'FR_UPSStandardInternational'
	 */
	const VALUE_FR_UPSSTANDARDINTERNATIONAL = 'FR_UPSStandardInternational';
	/**
	 * Constant for value 'FR_UPSExpressInternational'
	 * Meta informations :
	 * 	- documentation : UPS Express
	 * @return string 'FR_UPSExpressInternational'
	 */
	const VALUE_FR_UPSEXPRESSINTERNATIONAL = 'FR_UPSExpressInternational';
	/**
	 * Constant for value 'FR_DHLInternational'
	 * Meta informations :
	 * 	- documentation : DHL
	 * @return string 'FR_DHLInternational'
	 */
	const VALUE_FR_DHLINTERNATIONAL = 'FR_DHLInternational';
	/**
	 * Constant for value 'FR_LaPosteLetterMax'
	 * Meta informations :
	 * 	- documentation : La Poste Lettre Max
	 * @return string 'FR_LaPosteLetterMax'
	 */
	const VALUE_FR_LAPOSTELETTERMAX = 'FR_LaPosteLetterMax';
	/**
	 * Constant for value 'IN_Regular'
	 * Meta informations :
	 * 	- documentation : National - Regular
	 * @return string 'IN_Regular'
	 */
	const VALUE_IN_REGULAR = 'IN_Regular';
	/**
	 * Constant for value 'IN_Express'
	 * Meta informations :
	 * 	- documentation : National - Express
	 * @return string 'IN_Express'
	 */
	const VALUE_IN_EXPRESS = 'IN_Express';
	/**
	 * Constant for value 'IN_NationalCOD'
	 * Meta informations :
	 * 	- documentation : National - COD
	 * @return string 'IN_NationalCOD'
	 */
	const VALUE_IN_NATIONALCOD = 'IN_NationalCOD';
	/**
	 * Constant for value 'IN_Courier'
	 * Meta informations :
	 * 	- documentation : Local - Courier
	 * @return string 'IN_Courier'
	 */
	const VALUE_IN_COURIER = 'IN_Courier';
	/**
	 * Constant for value 'IN_LocalCOD'
	 * Meta informations :
	 * 	- documentation : Local - COD
	 * @return string 'IN_LocalCOD'
	 */
	const VALUE_IN_LOCALCOD = 'IN_LocalCOD';
	/**
	 * Constant for value 'IN_StandardInternational'
	 * Meta informations :
	 * 	- documentation : International - Standard
	 * @return string 'IN_StandardInternational'
	 */
	const VALUE_IN_STANDARDINTERNATIONAL = 'IN_StandardInternational';
	/**
	 * Constant for value 'IN_ExpeditedInternational'
	 * Meta informations :
	 * 	- documentation : International - Expedited
	 * @return string 'IN_ExpeditedInternational'
	 */
	const VALUE_IN_EXPEDITEDINTERNATIONAL = 'IN_ExpeditedInternational';
	/**
	 * Constant for value 'IN_OtherInternational'
	 * Meta informations :
	 * 	- documentation : International - other
	 * @return string 'IN_OtherInternational'
	 */
	const VALUE_IN_OTHERINTERNATIONAL = 'IN_OtherInternational';
	/**
	 * Constant for value 'IN_FlatRateCOD'
	 * Meta informations :
	 * 	- documentation : Flat Rate COD
	 * @return string 'IN_FlatRateCOD'
	 */
	const VALUE_IN_FLATRATECOD = 'IN_FlatRateCOD';
	/**
	 * Constant for value 'IN_BuyerPicksUpAndPays'
	 * Meta informations :
	 * 	- documentation : Buyer picks up and pays
	 * @return string 'IN_BuyerPicksUpAndPays'
	 */
	const VALUE_IN_BUYERPICKSUPANDPAYS = 'IN_BuyerPicksUpAndPays';
	/**
	 * Constant for value 'IT_RegularMail'
	 * Meta informations :
	 * 	- documentation : Posta ordinaria
	 * @return string 'IT_RegularMail'
	 */
	const VALUE_IT_REGULARMAIL = 'IT_RegularMail';
	/**
	 * Constant for value 'IT_PriorityMail'
	 * Meta informations :
	 * 	- documentation : Posta prioritaria
	 * @return string 'IT_PriorityMail'
	 */
	const VALUE_IT_PRIORITYMAIL = 'IT_PriorityMail';
	/**
	 * Constant for value 'IT_MailRegisteredLetter'
	 * Meta informations :
	 * 	- documentation : Posta raccomandata
	 * @return string 'IT_MailRegisteredLetter'
	 */
	const VALUE_IT_MAILREGISTEREDLETTER = 'IT_MailRegisteredLetter';
	/**
	 * Constant for value 'IT_MailRegisteredLetterWithMark'
	 * Meta informations :
	 * 	- documentation : Posta raccomandata con contrassegno
	 * @return string 'IT_MailRegisteredLetterWithMark'
	 */
	const VALUE_IT_MAILREGISTEREDLETTERWITHMARK = 'IT_MailRegisteredLetterWithMark';
	/**
	 * Constant for value 'IT_InsuredMail'
	 * Meta informations :
	 * 	- documentation : Posta assicurata
	 * @return string 'IT_InsuredMail'
	 */
	const VALUE_IT_INSUREDMAIL = 'IT_InsuredMail';
	/**
	 * Constant for value 'IT_QuickMail'
	 * Meta informations :
	 * 	- documentation : Posta celere
	 * @return string 'IT_QuickMail'
	 */
	const VALUE_IT_QUICKMAIL = 'IT_QuickMail';
	/**
	 * Constant for value 'IT_RegularPackage'
	 * Meta informations :
	 * 	- documentation : Pacco ordinario
	 * @return string 'IT_RegularPackage'
	 */
	const VALUE_IT_REGULARPACKAGE = 'IT_RegularPackage';
	/**
	 * Constant for value 'IT_QuickPackage1'
	 * Meta informations :
	 * 	- documentation : Pacco celere 1
	 * @return string 'IT_QuickPackage1'
	 */
	const VALUE_IT_QUICKPACKAGE1 = 'IT_QuickPackage1';
	/**
	 * Constant for value 'IT_QuickPackage3'
	 * Meta informations :
	 * 	- documentation : Pacco celere 3
	 * @return string 'IT_QuickPackage3'
	 */
	const VALUE_IT_QUICKPACKAGE3 = 'IT_QuickPackage3';
	/**
	 * Constant for value 'IT_ExpressCourier'
	 * Meta informations :
	 * 	- documentation : Corriere espresso
	 * @return string 'IT_ExpressCourier'
	 */
	const VALUE_IT_EXPRESSCOURIER = 'IT_ExpressCourier';
	/**
	 * Constant for value 'IT_ExpressPackageMaxi'
	 * Meta informations :
	 * 	- documentation : Paccocelere Maxi
	 * @return string 'IT_ExpressPackageMaxi'
	 */
	const VALUE_IT_EXPRESSPACKAGEMAXI = 'IT_ExpressPackageMaxi';
	/**
	 * Constant for value 'IT_StandardInternational'
	 * Meta informations :
	 * 	- documentation : Spedizione internazionale standard a prezzo fisso
	 * @return string 'IT_StandardInternational'
	 */
	const VALUE_IT_STANDARDINTERNATIONAL = 'IT_StandardInternational';
	/**
	 * Constant for value 'IT_ExpeditedInternational'
	 * Meta informations :
	 * 	- documentation : Spedizione internazionale celere a prezzo fisso
	 * @return string 'IT_ExpeditedInternational'
	 */
	const VALUE_IT_EXPEDITEDINTERNATIONAL = 'IT_ExpeditedInternational';
	/**
	 * Constant for value 'IT_OtherInternational'
	 * Meta informations :
	 * 	- documentation : Altre spedizioni internazionali (vedi descrizione)
	 * @return string 'IT_OtherInternational'
	 */
	const VALUE_IT_OTHERINTERNATIONAL = 'IT_OtherInternational';
	/**
	 * Constant for value 'NL_StandardDelivery'
	 * Meta informations :
	 * 	- documentation : Standaardverzending
	 * @return string 'NL_StandardDelivery'
	 */
	const VALUE_NL_STANDARDDELIVERY = 'NL_StandardDelivery';
	/**
	 * Constant for value 'NL_ParcelPost'
	 * Meta informations :
	 * 	- documentation : Pakketpost
	 * @return string 'NL_ParcelPost'
	 */
	const VALUE_NL_PARCELPOST = 'NL_ParcelPost';
	/**
	 * Constant for value 'NL_RegisteredMail'
	 * Meta informations :
	 * 	- documentation : Verzending met ontvangstbevestiging
	 * @return string 'NL_RegisteredMail'
	 */
	const VALUE_NL_REGISTEREDMAIL = 'NL_RegisteredMail';
	/**
	 * Constant for value 'NL_Other'
	 * Meta informations :
	 * 	- documentation : Andere verzendservice
	 * @return string 'NL_Other'
	 */
	const VALUE_NL_OTHER = 'NL_Other';
	/**
	 * Constant for value 'NL_TPGPostTNTInternational'
	 * Meta informations :
	 * 	- documentation : TPG Post/TNT
	 * @return string 'NL_TPGPostTNTInternational'
	 */
	const VALUE_NL_TPGPOSTTNTINTERNATIONAL = 'NL_TPGPostTNTInternational';
	/**
	 * Constant for value 'NL_UPSInternational'
	 * Meta informations :
	 * 	- documentation : UPS
	 * @return string 'NL_UPSInternational'
	 */
	const VALUE_NL_UPSINTERNATIONAL = 'NL_UPSInternational';
	/**
	 * Constant for value 'NL_FedExInternational'
	 * Meta informations :
	 * 	- documentation : FedEx
	 * @return string 'NL_FedExInternational'
	 */
	const VALUE_NL_FEDEXINTERNATIONAL = 'NL_FedExInternational';
	/**
	 * Constant for value 'NL_DHLInternational'
	 * Meta informations :
	 * 	- documentation : DHL
	 * @return string 'NL_DHLInternational'
	 */
	const VALUE_NL_DHLINTERNATIONAL = 'NL_DHLInternational';
	/**
	 * Constant for value 'NL_DPDGBRInternational'
	 * Meta informations :
	 * 	- documentation : DPD (Germany)
	 * @return string 'NL_DPDGBRInternational'
	 */
	const VALUE_NL_DPDGBRINTERNATIONAL = 'NL_DPDGBRInternational';
	/**
	 * Constant for value 'NL_GLSBusinessInternational'
	 * Meta informations :
	 * 	- documentation : GLS (Business only)
	 * @return string 'NL_GLSBusinessInternational'
	 */
	const VALUE_NL_GLSBUSINESSINTERNATIONAL = 'NL_GLSBusinessInternational';
	/**
	 * Constant for value 'NL_StandardInternational'
	 * Meta informations :
	 * 	- documentation : Vaste kosten standaard internationale verzending
	 * @return string 'NL_StandardInternational'
	 */
	const VALUE_NL_STANDARDINTERNATIONAL = 'NL_StandardInternational';
	/**
	 * Constant for value 'NL_ExpeditedInternational'
	 * Meta informations :
	 * 	- documentation : Vaste kosten versnelde internationale verzending
	 * @return string 'NL_ExpeditedInternational'
	 */
	const VALUE_NL_EXPEDITEDINTERNATIONAL = 'NL_ExpeditedInternational';
	/**
	 * Constant for value 'NL_OtherInternational'
	 * Meta informations :
	 * 	- documentation : Andere internationale verzending (zie beschrijving)
	 * @return string 'NL_OtherInternational'
	 */
	const VALUE_NL_OTHERINTERNATIONAL = 'NL_OtherInternational';
	/**
	 * Constant for value 'TW_RegisteredMail'
	 * @return string 'TW_RegisteredMail'
	 */
	const VALUE_TW_REGISTEREDMAIL = 'TW_RegisteredMail';
	/**
	 * Constant for value 'TW_UnregisteredMail'
	 * @return string 'TW_UnregisteredMail'
	 */
	const VALUE_TW_UNREGISTEREDMAIL = 'TW_UnregisteredMail';
	/**
	 * Constant for value 'TW_COD'
	 * @return string 'TW_COD'
	 */
	const VALUE_TW_COD = 'TW_COD';
	/**
	 * Constant for value 'TW_DwellingMatchPost'
	 * @return string 'TW_DwellingMatchPost'
	 */
	const VALUE_TW_DWELLINGMATCHPOST = 'TW_DwellingMatchPost';
	/**
	 * Constant for value 'TW_DwellingMatchCOD'
	 * @return string 'TW_DwellingMatchCOD'
	 */
	const VALUE_TW_DWELLINGMATCHCOD = 'TW_DwellingMatchCOD';
	/**
	 * Constant for value 'TW_SelfPickup'
	 * @return string 'TW_SelfPickup'
	 */
	const VALUE_TW_SELFPICKUP = 'TW_SelfPickup';
	/**
	 * Constant for value 'TW_ParcelPost'
	 * @return string 'TW_ParcelPost'
	 */
	const VALUE_TW_PARCELPOST = 'TW_ParcelPost';
	/**
	 * Constant for value 'TW_ExpressMail'
	 * @return string 'TW_ExpressMail'
	 */
	const VALUE_TW_EXPRESSMAIL = 'TW_ExpressMail';
	/**
	 * Constant for value 'TW_Other'
	 * @return string 'TW_Other'
	 */
	const VALUE_TW_OTHER = 'TW_Other';
	/**
	 * Constant for value 'TW_CPInternationalLetterPost'
	 * @return string 'TW_CPInternationalLetterPost'
	 */
	const VALUE_TW_CPINTERNATIONALLETTERPOST = 'TW_CPInternationalLetterPost';
	/**
	 * Constant for value 'TW_CPInternationalParcelPost'
	 * @return string 'TW_CPInternationalParcelPost'
	 */
	const VALUE_TW_CPINTERNATIONALPARCELPOST = 'TW_CPInternationalParcelPost';
	/**
	 * Constant for value 'TW_CPInternationalRegisteredLetterPost'
	 * @return string 'TW_CPInternationalRegisteredLetterPost'
	 */
	const VALUE_TW_CPINTERNATIONALREGISTEREDLETTERPOST = 'TW_CPInternationalRegisteredLetterPost';
	/**
	 * Constant for value 'TW_CPInternationalRegisteredParcelPost'
	 * @return string 'TW_CPInternationalRegisteredParcelPost'
	 */
	const VALUE_TW_CPINTERNATIONALREGISTEREDPARCELPOST = 'TW_CPInternationalRegisteredParcelPost';
	/**
	 * Constant for value 'TW_CPInternationalEMS'
	 * @return string 'TW_CPInternationalEMS'
	 */
	const VALUE_TW_CPINTERNATIONALEMS = 'TW_CPInternationalEMS';
	/**
	 * Constant for value 'TW_CPInternationalOceanShippingParcel'
	 * @return string 'TW_CPInternationalOceanShippingParcel'
	 */
	const VALUE_TW_CPINTERNATIONALOCEANSHIPPINGPARCEL = 'TW_CPInternationalOceanShippingParcel';
	/**
	 * Constant for value 'TW_FedExInternationalPriority'
	 * Meta informations :
	 * 	- documentation : FedEx International Priority
	 * @return string 'TW_FedExInternationalPriority'
	 */
	const VALUE_TW_FEDEXINTERNATIONALPRIORITY = 'TW_FedExInternationalPriority';
	/**
	 * Constant for value 'TW_FedExInternationalEconomy'
	 * Meta informations :
	 * 	- documentation : FedEx International Economy
	 * @return string 'TW_FedExInternationalEconomy'
	 */
	const VALUE_TW_FEDEXINTERNATIONALECONOMY = 'TW_FedExInternationalEconomy';
	/**
	 * Constant for value 'TW_UPSWorldwideExpedited'
	 * Meta informations :
	 * 	- documentation : UPS Worldwide Expedited
	 * @return string 'TW_UPSWorldwideExpedited'
	 */
	const VALUE_TW_UPSWORLDWIDEEXPEDITED = 'TW_UPSWorldwideExpedited';
	/**
	 * Constant for value 'TW_UPSWorldwideExpress'
	 * Meta informations :
	 * 	- documentation : UPS Worldwide Express
	 * @return string 'TW_UPSWorldwideExpress'
	 */
	const VALUE_TW_UPSWORLDWIDEEXPRESS = 'TW_UPSWorldwideExpress';
	/**
	 * Constant for value 'TW_UPSWorldwideExpressPlus'
	 * Meta informations :
	 * 	- documentation : UPS Worldwide Express Plus
	 * @return string 'TW_UPSWorldwideExpressPlus'
	 */
	const VALUE_TW_UPSWORLDWIDEEXPRESSPLUS = 'TW_UPSWorldwideExpressPlus';
	/**
	 * Constant for value 'TW_OtherInternational'
	 * @return string 'TW_OtherInternational'
	 */
	const VALUE_TW_OTHERINTERNATIONAL = 'TW_OtherInternational';
	/**
	 * Constant for value 'UK_RoyalMailFirstClassStandard'
	 * Meta informations :
	 * 	- documentation : Royal Mail 1st Class Standard
	 * @return string 'UK_RoyalMailFirstClassStandard'
	 */
	const VALUE_UK_ROYALMAILFIRSTCLASSSTANDARD = 'UK_RoyalMailFirstClassStandard';
	/**
	 * Constant for value 'UK_RoyalMailSecondClassStandard'
	 * Meta informations :
	 * 	- documentation : Royal Mail 2nd Class Standard
	 * @return string 'UK_RoyalMailSecondClassStandard'
	 */
	const VALUE_UK_ROYALMAILSECONDCLASSSTANDARD = 'UK_RoyalMailSecondClassStandard';
	/**
	 * Constant for value 'UK_RoyalMailFirstClassRecorded'
	 * Meta informations :
	 * 	- documentation : Royal Mail 1st Class Recorded
	 * @return string 'UK_RoyalMailFirstClassRecorded'
	 */
	const VALUE_UK_ROYALMAILFIRSTCLASSRECORDED = 'UK_RoyalMailFirstClassRecorded';
	/**
	 * Constant for value 'UK_RoyalMailSecondClassRecorded'
	 * Meta informations :
	 * 	- documentation : Royal Mail 2nd Class Recorded
	 * @return string 'UK_RoyalMailSecondClassRecorded'
	 */
	const VALUE_UK_ROYALMAILSECONDCLASSRECORDED = 'UK_RoyalMailSecondClassRecorded';
	/**
	 * Constant for value 'UK_RoyalMailSpecialDelivery'
	 * Meta informations :
	 * 	- documentation : Royal Mail Special Delivery
	 * @return string 'UK_RoyalMailSpecialDelivery'
	 */
	const VALUE_UK_ROYALMAILSPECIALDELIVERY = 'UK_RoyalMailSpecialDelivery';
	/**
	 * Constant for value 'UK_RoyalMailStandardParcel'
	 * Meta informations :
	 * 	- documentation : Royal Mail Standard Parcels
	 * @return string 'UK_RoyalMailStandardParcel'
	 */
	const VALUE_UK_ROYALMAILSTANDARDPARCEL = 'UK_RoyalMailStandardParcel';
	/**
	 * Constant for value 'UK_Parcelforce24'
	 * Meta informations :
	 * 	- documentation : Parcelforce 24
	 * @return string 'UK_Parcelforce24'
	 */
	const VALUE_UK_PARCELFORCE24 = 'UK_Parcelforce24';
	/**
	 * Constant for value 'UK_Parcelforce48'
	 * Meta informations :
	 * 	- documentation : Parcelforce 48
	 * @return string 'UK_Parcelforce48'
	 */
	const VALUE_UK_PARCELFORCE48 = 'UK_Parcelforce48';
	/**
	 * Constant for value 'UK_OtherCourier'
	 * Meta informations :
	 * 	- documentation : Other Courier
	 * @return string 'UK_OtherCourier'
	 */
	const VALUE_UK_OTHERCOURIER = 'UK_OtherCourier';
	/**
	 * Constant for value 'UK_myHermesDoorToDoorService'
	 * Meta informations :
	 * 	- documentation : myHermes - door to door service
	 * @return string 'UK_myHermesDoorToDoorService'
	 */
	const VALUE_UK_MYHERMESDOORTODOORSERVICE = 'UK_myHermesDoorToDoorService';
	/**
	 * Constant for value 'UK_CollectDropAtStoreDeliveryToDoor'
	 * Meta informations :
	 * 	- documentation : Collect+ : drop at store-delivery to door
	 * @return string 'UK_CollectDropAtStoreDeliveryToDoor'
	 */
	const VALUE_UK_COLLECTDROPATSTOREDELIVERYTODOOR = 'UK_CollectDropAtStoreDeliveryToDoor';
	/**
	 * Constant for value 'UK_SellersStandardRate'
	 * Meta informations :
	 * 	- documentation : Seller's Standard Rate
	 * @return string 'UK_SellersStandardRate'
	 */
	const VALUE_UK_SELLERSSTANDARDRATE = 'UK_SellersStandardRate';
	/**
	 * Constant for value 'UK_CollectInPerson'
	 * Meta informations :
	 * 	- documentation : Collection in Person
	 * @return string 'UK_CollectInPerson'
	 */
	const VALUE_UK_COLLECTINPERSON = 'UK_CollectInPerson';
	/**
	 * Constant for value 'UK_SellersStandardInternationalRate'
	 * Meta informations :
	 * 	- documentation : Sellers Standard International Rate
	 * @return string 'UK_SellersStandardInternationalRate'
	 */
	const VALUE_UK_SELLERSSTANDARDINTERNATIONALRATE = 'UK_SellersStandardInternationalRate';
	/**
	 * Constant for value 'UK_RoyalMailAirmailInternational'
	 * Meta informations :
	 * 	- documentation : Royal Mail Airmail
	 * @return string 'UK_RoyalMailAirmailInternational'
	 */
	const VALUE_UK_ROYALMAILAIRMAILINTERNATIONAL = 'UK_RoyalMailAirmailInternational';
	/**
	 * Constant for value 'UK_RoyalMailAirsureInternational'
	 * Meta informations :
	 * 	- documentation : Royal Mail Airsure
	 * @return string 'UK_RoyalMailAirsureInternational'
	 */
	const VALUE_UK_ROYALMAILAIRSUREINTERNATIONAL = 'UK_RoyalMailAirsureInternational';
	/**
	 * Constant for value 'UK_RoyalMailSurfaceMailInternational'
	 * Meta informations :
	 * 	- documentation : Royal Mail Surface Mail
	 * @return string 'UK_RoyalMailSurfaceMailInternational'
	 */
	const VALUE_UK_ROYALMAILSURFACEMAILINTERNATIONAL = 'UK_RoyalMailSurfaceMailInternational';
	/**
	 * Constant for value 'UK_RoyalMailInternationalSignedFor'
	 * Meta informations :
	 * 	- documentation : Royal Mail International Signed-for
	 * @return string 'UK_RoyalMailInternationalSignedFor'
	 */
	const VALUE_UK_ROYALMAILINTERNATIONALSIGNEDFOR = 'UK_RoyalMailInternationalSignedFor';
	/**
	 * Constant for value 'UK_RoyalMailHMForcesMailInternational'
	 * Meta informations :
	 * 	- documentation : Royal Mail HM Forces Mail
	 * @return string 'UK_RoyalMailHMForcesMailInternational'
	 */
	const VALUE_UK_ROYALMAILHMFORCESMAILINTERNATIONAL = 'UK_RoyalMailHMForcesMailInternational';
	/**
	 * Constant for value 'UK_ParcelForceInternationalDatapost'
	 * Meta informations :
	 * 	- documentation : Parcelforce International Datapost
	 * @return string 'UK_ParcelForceInternationalDatapost'
	 */
	const VALUE_UK_PARCELFORCEINTERNATIONALDATAPOST = 'UK_ParcelForceInternationalDatapost';
	/**
	 * Constant for value 'UK_ParcelForceIreland24International'
	 * Meta informations :
	 * 	- documentation : Parcelforce Ireland 24
	 * @return string 'UK_ParcelForceIreland24International'
	 */
	const VALUE_UK_PARCELFORCEIRELAND24INTERNATIONAL = 'UK_ParcelForceIreland24International';
	/**
	 * Constant for value 'UK_ParcelForceEuro48International'
	 * Meta informations :
	 * 	- documentation : Parcelforce Euro 48
	 * @return string 'UK_ParcelForceEuro48International'
	 */
	const VALUE_UK_PARCELFORCEEURO48INTERNATIONAL = 'UK_ParcelForceEuro48International';
	/**
	 * Constant for value 'UK_ParcelForceInternationalScheduled'
	 * Meta informations :
	 * 	- documentation : Parcelforce International Scheduled
	 * @return string 'UK_ParcelForceInternationalScheduled'
	 */
	const VALUE_UK_PARCELFORCEINTERNATIONALSCHEDULED = 'UK_ParcelForceInternationalScheduled';
	/**
	 * Constant for value 'UK_OtherCourierOrDeliveryInternational'
	 * Meta informations :
	 * 	- documentation : Other courier or delivery service
	 * @return string 'UK_OtherCourierOrDeliveryInternational'
	 */
	const VALUE_UK_OTHERCOURIERORDELIVERYINTERNATIONAL = 'UK_OtherCourierOrDeliveryInternational';
	/**
	 * Constant for value 'UK_CollectInPersonInternational'
	 * Meta informations :
	 * 	- documentation : Collect in person
	 * @return string 'UK_CollectInPersonInternational'
	 */
	const VALUE_UK_COLLECTINPERSONINTERNATIONAL = 'UK_CollectInPersonInternational';
	/**
	 * Constant for value 'IE_SellersStandardRate'
	 * Meta informations :
	 * 	- documentation : Seller's standard rate
	 * @return string 'IE_SellersStandardRate'
	 */
	const VALUE_IE_SELLERSSTANDARDRATE = 'IE_SellersStandardRate';
	/**
	 * Constant for value 'IE_FirstClassLetterService'
	 * Meta informations :
	 * 	- documentation : First Class Letter Service
	 * @return string 'IE_FirstClassLetterService'
	 */
	const VALUE_IE_FIRSTCLASSLETTERSERVICE = 'IE_FirstClassLetterService';
	/**
	 * Constant for value 'IE_SwiftPostNational'
	 * Meta informations :
	 * 	- documentation : SwiftPost National
	 * @return string 'IE_SwiftPostNational'
	 */
	const VALUE_IE_SWIFTPOSTNATIONAL = 'IE_SwiftPostNational';
	/**
	 * Constant for value 'IE_RegisteredPost'
	 * Meta informations :
	 * 	- documentation : Registered Post
	 * @return string 'IE_RegisteredPost'
	 */
	const VALUE_IE_REGISTEREDPOST = 'IE_RegisteredPost';
	/**
	 * Constant for value 'IE_EMSSDSCourier'
	 * Meta informations :
	 * 	- documentation : EMS SDS Courier
	 * @return string 'IE_EMSSDSCourier'
	 */
	const VALUE_IE_EMSSDSCOURIER = 'IE_EMSSDSCourier';
	/**
	 * Constant for value 'IE_EconomySDSCourier'
	 * Meta informations :
	 * 	- documentation : Economy SDS Courier
	 * @return string 'IE_EconomySDSCourier'
	 */
	const VALUE_IE_ECONOMYSDSCOURIER = 'IE_EconomySDSCourier';
	/**
	 * Constant for value 'IE_OtherCourier'
	 * Meta informations :
	 * 	- documentation : Other courier
	 * @return string 'IE_OtherCourier'
	 */
	const VALUE_IE_OTHERCOURIER = 'IE_OtherCourier';
	/**
	 * Constant for value 'IE_CollectionInPerson'
	 * Meta informations :
	 * 	- documentation : Collection in person
	 * @return string 'IE_CollectionInPerson'
	 */
	const VALUE_IE_COLLECTIONINPERSON = 'IE_CollectionInPerson';
	/**
	 * Constant for value 'IE_SellersStandardRateInternational'
	 * Meta informations :
	 * 	- documentation : Seller's Standard International Rate
	 * @return string 'IE_SellersStandardRateInternational'
	 */
	const VALUE_IE_SELLERSSTANDARDRATEINTERNATIONAL = 'IE_SellersStandardRateInternational';
	/**
	 * Constant for value 'IE_InternationalEconomyService'
	 * Meta informations :
	 * 	- documentation : International Economy Service
	 * @return string 'IE_InternationalEconomyService'
	 */
	const VALUE_IE_INTERNATIONALECONOMYSERVICE = 'IE_InternationalEconomyService';
	/**
	 * Constant for value 'IE_InternationalPriorityService'
	 * Meta informations :
	 * 	- documentation : International Priority Service
	 * @return string 'IE_InternationalPriorityService'
	 */
	const VALUE_IE_INTERNATIONALPRIORITYSERVICE = 'IE_InternationalPriorityService';
	/**
	 * Constant for value 'IE_SwiftPostExpressInternational'
	 * Meta informations :
	 * 	- documentation : SwiftPost Express
	 * @return string 'IE_SwiftPostExpressInternational'
	 */
	const VALUE_IE_SWIFTPOSTEXPRESSINTERNATIONAL = 'IE_SwiftPostExpressInternational';
	/**
	 * Constant for value 'IE_SwiftPostInternational'
	 * Meta informations :
	 * 	- documentation : SwiftPost International
	 * @return string 'IE_SwiftPostInternational'
	 */
	const VALUE_IE_SWIFTPOSTINTERNATIONAL = 'IE_SwiftPostInternational';
	/**
	 * Constant for value 'IE_EMSSDSCourierInternational'
	 * Meta informations :
	 * 	- documentation : EMS SDS Courier
	 * @return string 'IE_EMSSDSCourierInternational'
	 */
	const VALUE_IE_EMSSDSCOURIERINTERNATIONAL = 'IE_EMSSDSCourierInternational';
	/**
	 * Constant for value 'IE_EconomySDSCourierInternational'
	 * Meta informations :
	 * 	- documentation : Economy SDS Courier
	 * @return string 'IE_EconomySDSCourierInternational'
	 */
	const VALUE_IE_ECONOMYSDSCOURIERINTERNATIONAL = 'IE_EconomySDSCourierInternational';
	/**
	 * Constant for value 'IE_OtherCourierInternational'
	 * Meta informations :
	 * 	- documentation : Other courier or delivery service
	 * @return string 'IE_OtherCourierInternational'
	 */
	const VALUE_IE_OTHERCOURIERINTERNATIONAL = 'IE_OtherCourierInternational';
	/**
	 * Constant for value 'IE_CollectionInPersonInternational'
	 * Meta informations :
	 * 	- documentation : International collection in person
	 * @return string 'IE_CollectionInPersonInternational'
	 */
	const VALUE_IE_COLLECTIONINPERSONINTERNATIONAL = 'IE_CollectionInPersonInternational';
	/**
	 * Constant for value 'PL_DomesticRegular'
	 * Meta informations :
	 * 	- documentation : Domestic Regular shipping
	 * @return string 'PL_DomesticRegular'
	 */
	const VALUE_PL_DOMESTICREGULAR = 'PL_DomesticRegular';
	/**
	 * Constant for value 'PL_DomesticSpecial'
	 * Meta informations :
	 * 	- documentation : Domestic Special shipping
	 * @return string 'PL_DomesticSpecial'
	 */
	const VALUE_PL_DOMESTICSPECIAL = 'PL_DomesticSpecial';
	/**
	 * Constant for value 'FreightShipping'
	 * Meta informations :
	 * 	- documentation : Service associated with FreightQuote.com
	 * @return string 'FreightShipping'
	 */
	const VALUE_FREIGHTSHIPPING = 'FreightShipping';
	/**
	 * Constant for value 'FreightOtherShipping'
	 * Meta informations :
	 * 	- documentation : Freight Other Shipping
	 * @return string 'FreightOtherShipping'
	 */
	const VALUE_FREIGHTOTHERSHIPPING = 'FreightOtherShipping';
	/**
	 * Constant for value 'Freight'
	 * Meta informations :
	 * 	- documentation : Service associated with any freight service other than FreightQuote.com
	 * @return string 'Freight'
	 */
	const VALUE_FREIGHT = 'Freight';
	/**
	 * Constant for value 'FreightShippingInternational'
	 * Meta informations :
	 * 	- documentation : Freight Shipping International
	 * @return string 'FreightShippingInternational'
	 */
	const VALUE_FREIGHTSHIPPINGINTERNATIONAL = 'FreightShippingInternational';
	/**
	 * Constant for value 'USPSGround'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'USPSGround'
	 */
	const VALUE_USPSGROUND = 'USPSGround';
	/**
	 * Constant for value 'ShippingMethodOvernight'
	 * Meta informations :
	 * 	- documentation : Overnight flat rate shipping service (domestic only)
	 * @return string 'ShippingMethodOvernight'
	 */
	const VALUE_SHIPPINGMETHODOVERNIGHT = 'ShippingMethodOvernight';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constant for value 'USPSPriorityFlatRateEnvelope'
	 * Meta informations :
	 * 	- documentation : USPS Priority Flat Rate Envelope
	 * @return string 'USPSPriorityFlatRateEnvelope'
	 */
	const VALUE_USPSPRIORITYFLATRATEENVELOPE = 'USPSPriorityFlatRateEnvelope';
	/**
	 * Constant for value 'USPSPriorityFlatRateBox'
	 * Meta informations :
	 * 	- documentation : USPS Priority Flat Rate Box
	 * @return string 'USPSPriorityFlatRateBox'
	 */
	const VALUE_USPSPRIORITYFLATRATEBOX = 'USPSPriorityFlatRateBox';
	/**
	 * Constant for value 'USPSGlobalPrioritySmallEnvelope'
	 * Meta informations :
	 * 	- documentation : USPS Global Priority Mail Small Envelope
	 * @return string 'USPSGlobalPrioritySmallEnvelope'
	 */
	const VALUE_USPSGLOBALPRIORITYSMALLENVELOPE = 'USPSGlobalPrioritySmallEnvelope';
	/**
	 * Constant for value 'USPSGlobalPriorityLargeEnvelope'
	 * Meta informations :
	 * 	- documentation : USPS Global Priority Mail Large Envelope
	 * @return string 'USPSGlobalPriorityLargeEnvelope'
	 */
	const VALUE_USPSGLOBALPRIORITYLARGEENVELOPE = 'USPSGlobalPriorityLargeEnvelope';
	/**
	 * Constant for value 'USPSExpressFlatRateEnvelope'
	 * Meta informations :
	 * 	- documentation : USPS Express Mail Flat Rate Envelope
	 * @return string 'USPSExpressFlatRateEnvelope'
	 */
	const VALUE_USPSEXPRESSFLATRATEENVELOPE = 'USPSExpressFlatRateEnvelope';
	/**
	 * Constant for value 'UPSWorldWideExpressBox10kg'
	 * Meta informations :
	 * 	- documentation : UPS Worldwide Express Box 10 Kg
	 * @return string 'UPSWorldWideExpressBox10kg'
	 */
	const VALUE_UPSWORLDWIDEEXPRESSBOX10KG = 'UPSWorldWideExpressBox10kg';
	/**
	 * Constant for value 'UPSWorldWideExpressBox25kg'
	 * Meta informations :
	 * 	- documentation : UPS Worldwide Express Box 25 Kg
	 * @return string 'UPSWorldWideExpressBox25kg'
	 */
	const VALUE_UPSWORLDWIDEEXPRESSBOX25KG = 'UPSWorldWideExpressBox25kg';
	/**
	 * Constant for value 'UPSWorldWideExpressPlusBox10kg'
	 * Meta informations :
	 * 	- documentation : UPS Worldwide Express Plus Box 10 Kg
	 * @return string 'UPSWorldWideExpressPlusBox10kg'
	 */
	const VALUE_UPSWORLDWIDEEXPRESSPLUSBOX10KG = 'UPSWorldWideExpressPlusBox10kg';
	/**
	 * Constant for value 'UPSWorldWideExpressPlusBox25kg'
	 * Meta informations :
	 * 	- documentation : UPS Worldwide Express Plus box 25 Kg
	 * @return string 'UPSWorldWideExpressPlusBox25kg'
	 */
	const VALUE_UPSWORLDWIDEEXPRESSPLUSBOX25KG = 'UPSWorldWideExpressPlusBox25kg';
	/**
	 * Constant for value 'HK_LocalPickUpOnly'
	 * Meta informations :
	 * 	- documentation : Local pick up only
	 * @return string 'HK_LocalPickUpOnly'
	 */
	const VALUE_HK_LOCALPICKUPONLY = 'HK_LocalPickUpOnly';
	/**
	 * Constant for value 'HK_LocalCourier'
	 * Meta informations :
	 * 	- documentation : Local courier
	 * @return string 'HK_LocalCourier'
	 */
	const VALUE_HK_LOCALCOURIER = 'HK_LocalCourier';
	/**
	 * Constant for value 'HK_DomesticRegularShipping'
	 * Meta informations :
	 * 	- documentation : Domestic regular shipping
	 * @return string 'HK_DomesticRegularShipping'
	 */
	const VALUE_HK_DOMESTICREGULARSHIPPING = 'HK_DomesticRegularShipping';
	/**
	 * Constant for value 'HK_DomesticSpecialShipping'
	 * Meta informations :
	 * 	- documentation : Domestic special shipping
	 * @return string 'HK_DomesticSpecialShipping'
	 */
	const VALUE_HK_DOMESTICSPECIALSHIPPING = 'HK_DomesticSpecialShipping';
	/**
	 * Constant for value 'HK_InternationalRegularShipping'
	 * Meta informations :
	 * 	- documentation : International regular shipping
	 * @return string 'HK_InternationalRegularShipping'
	 */
	const VALUE_HK_INTERNATIONALREGULARSHIPPING = 'HK_InternationalRegularShipping';
	/**
	 * Constant for value 'HK_InternationalSpecialShipping'
	 * Meta informations :
	 * 	- documentation : International special shipping
	 * @return string 'HK_InternationalSpecialShipping'
	 */
	const VALUE_HK_INTERNATIONALSPECIALSHIPPING = 'HK_InternationalSpecialShipping';
	/**
	 * Constant for value 'SG_LocalPickUpOnly'
	 * Meta informations :
	 * 	- documentation : Local pick up only
	 * @return string 'SG_LocalPickUpOnly'
	 */
	const VALUE_SG_LOCALPICKUPONLY = 'SG_LocalPickUpOnly';
	/**
	 * Constant for value 'SG_LocalCourier'
	 * Meta informations :
	 * 	- documentation : Local courier
	 * @return string 'SG_LocalCourier'
	 */
	const VALUE_SG_LOCALCOURIER = 'SG_LocalCourier';
	/**
	 * Constant for value 'SG_DomesticStandardMail'
	 * Meta informations :
	 * 	- documentation : Domestic standard mail
	 * @return string 'SG_DomesticStandardMail'
	 */
	const VALUE_SG_DOMESTICSTANDARDMAIL = 'SG_DomesticStandardMail';
	/**
	 * Constant for value 'SG_DomesticNonStandardMail'
	 * Meta informations :
	 * 	- documentation : Domestic non standard mail
	 * @return string 'SG_DomesticNonStandardMail'
	 */
	const VALUE_SG_DOMESTICNONSTANDARDMAIL = 'SG_DomesticNonStandardMail';
	/**
	 * Constant for value 'SG_DomesticSpeedpostIslandwide'
	 * Meta informations :
	 * 	- documentation : Domestic Speedpost Islandwide
	 * @return string 'SG_DomesticSpeedpostIslandwide'
	 */
	const VALUE_SG_DOMESTICSPEEDPOSTISLANDWIDE = 'SG_DomesticSpeedpostIslandwide';
	/**
	 * Constant for value 'SG_InternationalStandardMail'
	 * Meta informations :
	 * 	- documentation : International standard mail
	 * @return string 'SG_InternationalStandardMail'
	 */
	const VALUE_SG_INTERNATIONALSTANDARDMAIL = 'SG_InternationalStandardMail';
	/**
	 * Constant for value 'SG_InternationalExpressMailService'
	 * Meta informations :
	 * 	- documentation : International Express Mail Service (EMS)
	 * @return string 'SG_InternationalExpressMailService'
	 */
	const VALUE_SG_INTERNATIONALEXPRESSMAILSERVICE = 'SG_InternationalExpressMailService';
	/**
	 * Constant for value 'SG_InternationalCourier'
	 * Meta informations :
	 * 	- documentation : International courier (DHL, FedEx, UPS)
	 * @return string 'SG_InternationalCourier'
	 */
	const VALUE_SG_INTERNATIONALCOURIER = 'SG_InternationalCourier';
	/**
	 * Constant for value 'BENL_DePostZendingNONPRIOR'
	 * Meta informations :
	 * 	- documentation : De Post zending - NON PRIOR (2 werkdagen)
	 * @return string 'BENL_DePostZendingNONPRIOR'
	 */
	const VALUE_BENL_DEPOSTZENDINGNONPRIOR = 'BENL_DePostZendingNONPRIOR';
	/**
	 * Constant for value 'BENL_DePostZendingPRIOR'
	 * Meta informations :
	 * 	- documentation : De Post zending - PRIOR (1 werkdag)
	 * @return string 'BENL_DePostZendingPRIOR'
	 */
	const VALUE_BENL_DEPOSTZENDINGPRIOR = 'BENL_DePostZendingPRIOR';
	/**
	 * Constant for value 'BENL_DePostZendingAangetekend'
	 * Meta informations :
	 * 	- documentation : De Post zending - aangetekend (1 werkdag)
	 * @return string 'BENL_DePostZendingAangetekend'
	 */
	const VALUE_BENL_DEPOSTZENDINGAANGETEKEND = 'BENL_DePostZendingAangetekend';
	/**
	 * Constant for value 'BENL_KilopostPakje'
	 * Meta informations :
	 * 	- documentation : Kilopost pakje (2 werkdagen)
	 * @return string 'BENL_KilopostPakje'
	 */
	const VALUE_BENL_KILOPOSTPAKJE = 'BENL_KilopostPakje';
	/**
	 * Constant for value 'BENL_Taxipost'
	 * Meta informations :
	 * 	- documentation : Taxipost (express)
	 * @return string 'BENL_Taxipost'
	 */
	const VALUE_BENL_TAXIPOST = 'BENL_Taxipost';
	/**
	 * Constant for value 'BENL_KialaAfhaalpunt'
	 * Meta informations :
	 * 	- documentation : Kiala afhaalpunt (1 tot 4 werkdagen)
	 * @return string 'BENL_KialaAfhaalpunt'
	 */
	const VALUE_BENL_KIALAAFHAALPUNT = 'BENL_KialaAfhaalpunt';
	/**
	 * Constant for value 'BENL_VasteKostenStandaardVerzending'
	 * Meta informations :
	 * 	- documentation : Vaste kosten standaard verzending
	 * @return string 'BENL_VasteKostenStandaardVerzending'
	 */
	const VALUE_BENL_VASTEKOSTENSTANDAARDVERZENDING = 'BENL_VasteKostenStandaardVerzending';
	/**
	 * Constant for value 'BENL_VasteKostenVersneldeVerzending'
	 * Meta informations :
	 * 	- documentation : Vaste kosten versnelde verzending
	 * @return string 'BENL_VasteKostenVersneldeVerzending'
	 */
	const VALUE_BENL_VASTEKOSTENVERSNELDEVERZENDING = 'BENL_VasteKostenVersneldeVerzending';
	/**
	 * Constant for value 'BENL_VerzekerdeVerzending'
	 * Meta informations :
	 * 	- documentation : Verzekerde verzending
	 * @return string 'BENL_VerzekerdeVerzending'
	 */
	const VALUE_BENL_VERZEKERDEVERZENDING = 'BENL_VerzekerdeVerzending';
	/**
	 * Constant for value 'BEFR_LaPosteEnvoiNONPRIOR'
	 * Meta informations :
	 * 	- documentation : La Poste envoi NON PRIOR (2 jours ouvrables)
	 * @return string 'BEFR_LaPosteEnvoiNONPRIOR'
	 */
	const VALUE_BEFR_LAPOSTEENVOINONPRIOR = 'BEFR_LaPosteEnvoiNONPRIOR';
	/**
	 * Constant for value 'BEFR_LaPosteEnvoiPRIOR'
	 * Meta informations :
	 * 	- documentation : La Poste envoi PRIOR (1 jour ouvrable)
	 * @return string 'BEFR_LaPosteEnvoiPRIOR'
	 */
	const VALUE_BEFR_LAPOSTEENVOIPRIOR = 'BEFR_LaPosteEnvoiPRIOR';
	/**
	 * Constant for value 'BEFR_LaPosteEnvoiRecommande'
	 * Meta informations :
	 * 	- documentation : La Poste envoi recommande (1 jour ouvrable)
	 * @return string 'BEFR_LaPosteEnvoiRecommande'
	 */
	const VALUE_BEFR_LAPOSTEENVOIRECOMMANDE = 'BEFR_LaPosteEnvoiRecommande';
	/**
	 * Constant for value 'BEFR_PaquetKilopost'
	 * Meta informations :
	 * 	- documentation : Paquet Kilopost (2 jours ouvrables)
	 * @return string 'BEFR_PaquetKilopost'
	 */
	const VALUE_BEFR_PAQUETKILOPOST = 'BEFR_PaquetKilopost';
	/**
	 * Constant for value 'BEFR_Taxipost'
	 * Meta informations :
	 * 	- documentation : Taxipost (express)
	 * @return string 'BEFR_Taxipost'
	 */
	const VALUE_BEFR_TAXIPOST = 'BEFR_Taxipost';
	/**
	 * Constant for value 'BEFR_PointRetraitKiala'
	 * Meta informations :
	 * 	- documentation : Point retrait Kiala (1 a 4 jours ouvrables)
	 * @return string 'BEFR_PointRetraitKiala'
	 */
	const VALUE_BEFR_POINTRETRAITKIALA = 'BEFR_PointRetraitKiala';
	/**
	 * Constant for value 'BEFR_LivraisonStandardPrixforFaitaire'
	 * Meta informations :
	 * 	- documentation : Livraison standard - prix forfaitaire
	 * @return string 'BEFR_LivraisonStandardPrixforFaitaire'
	 */
	const VALUE_BEFR_LIVRAISONSTANDARDPRIXFORFAITAIRE = 'BEFR_LivraisonStandardPrixforFaitaire';
	/**
	 * Constant for value 'BEFR_LivraisonExpressPrixforFaitaire'
	 * Meta informations :
	 * 	- documentation : Livraison express - prix forfaitaire
	 * @return string 'BEFR_LivraisonExpressPrixforFaitaire'
	 */
	const VALUE_BEFR_LIVRAISONEXPRESSPRIXFORFAITAIRE = 'BEFR_LivraisonExpressPrixforFaitaire';
	/**
	 * Constant for value 'BEFR_LivraisonSecurise'
	 * Meta informations :
	 * 	- documentation : Livraison securisee
	 * @return string 'BEFR_LivraisonSecurise'
	 */
	const VALUE_BEFR_LIVRAISONSECURISE = 'BEFR_LivraisonSecurise';
	/**
	 * Constant for value 'BENL_DePostZendingPRIORInternational'
	 * Meta informations :
	 * 	- documentation : De Post zending - PRIOR
	 * @return string 'BENL_DePostZendingPRIORInternational'
	 */
	const VALUE_BENL_DEPOSTZENDINGPRIORINTERNATIONAL = 'BENL_DePostZendingPRIORInternational';
	/**
	 * Constant for value 'BENL_DePostZendingNONPRIORInternational'
	 * Meta informations :
	 * 	- documentation : De Post zending - NON PRIOR
	 * @return string 'BENL_DePostZendingNONPRIORInternational'
	 */
	const VALUE_BENL_DEPOSTZENDINGNONPRIORINTERNATIONAL = 'BENL_DePostZendingNONPRIORInternational';
	/**
	 * Constant for value 'BENL_DePostZendingAangetekendInternational'
	 * Meta informations :
	 * 	- documentation : De Post zending - aangetekend
	 * @return string 'BENL_DePostZendingAangetekendInternational'
	 */
	const VALUE_BENL_DEPOSTZENDINGAANGETEKENDINTERNATIONAL = 'BENL_DePostZendingAangetekendInternational';
	/**
	 * Constant for value 'BENL_KilopostPakjeInternational'
	 * Meta informations :
	 * 	- documentation : Kilopost pakje Internationaal
	 * @return string 'BENL_KilopostPakjeInternational'
	 */
	const VALUE_BENL_KILOPOSTPAKJEINTERNATIONAL = 'BENL_KilopostPakjeInternational';
	/**
	 * Constant for value 'BENL_TaxipostExpressverzending'
	 * Meta informations :
	 * 	- documentation : Taxipost expressverzending
	 * @return string 'BENL_TaxipostExpressverzending'
	 */
	const VALUE_BENL_TAXIPOSTEXPRESSVERZENDING = 'BENL_TaxipostExpressverzending';
	/**
	 * Constant for value 'BENL_VerzekerdeVerzendingInternational'
	 * Meta informations :
	 * 	- documentation : Verzekerde verzending
	 * @return string 'BENL_VerzekerdeVerzendingInternational'
	 */
	const VALUE_BENL_VERZEKERDEVERZENDINGINTERNATIONAL = 'BENL_VerzekerdeVerzendingInternational';
	/**
	 * Constant for value 'BEFR_LaPosteenvoiePRIOR'
	 * Meta informations :
	 * 	- documentation : La Poste envoie PRIOR
	 * @return string 'BEFR_LaPosteenvoiePRIOR'
	 */
	const VALUE_BEFR_LAPOSTEENVOIEPRIOR = 'BEFR_LaPosteenvoiePRIOR';
	/**
	 * Constant for value 'BEFR_LaPosteenvoieNONPRIOR'
	 * Meta informations :
	 * 	- documentation : La Poste envoie NON PRIOR
	 * @return string 'BEFR_LaPosteenvoieNONPRIOR'
	 */
	const VALUE_BEFR_LAPOSTEENVOIENONPRIOR = 'BEFR_LaPosteenvoieNONPRIOR';
	/**
	 * Constant for value 'BEFR_LaPosteenvoieRecommande'
	 * Meta informations :
	 * 	- documentation : La Poste envoie recommande
	 * @return string 'BEFR_LaPosteenvoieRecommande'
	 */
	const VALUE_BEFR_LAPOSTEENVOIERECOMMANDE = 'BEFR_LaPosteenvoieRecommande';
	/**
	 * Constant for value 'BEFR_PaquetKilopostInternationale'
	 * Meta informations :
	 * 	- documentation : Paquet Kilopost Internationale
	 * @return string 'BEFR_PaquetKilopostInternationale'
	 */
	const VALUE_BEFR_PAQUETKILOPOSTINTERNATIONALE = 'BEFR_PaquetKilopostInternationale';
	/**
	 * Constant for value 'BEFR_ExpressTaxipost'
	 * Meta informations :
	 * 	- documentation : BEFR_Express Taxipost
	 * @return string 'BEFR_ExpressTaxipost'
	 */
	const VALUE_BEFR_EXPRESSTAXIPOST = 'BEFR_ExpressTaxipost';
	/**
	 * Constant for value 'BEFR_LivraisonStandardInternationalePrixforFaitaire'
	 * Meta informations :
	 * 	- documentation : Livraison standard internationale - prix forfaitaire
	 * @return string 'BEFR_LivraisonStandardInternationalePrixforFaitaire'
	 */
	const VALUE_BEFR_LIVRAISONSTANDARDINTERNATIONALEPRIXFORFAITAIRE = 'BEFR_LivraisonStandardInternationalePrixforFaitaire';
	/**
	 * Constant for value 'BEFR_LivraisonExpressInternationalePrixforFaitaire'
	 * Meta informations :
	 * 	- documentation : Livraison express internationale - prix forfaitaire
	 * @return string 'BEFR_LivraisonExpressInternationalePrixforFaitaire'
	 */
	const VALUE_BEFR_LIVRAISONEXPRESSINTERNATIONALEPRIXFORFAITAIRE = 'BEFR_LivraisonExpressInternationalePrixforFaitaire';
	/**
	 * Constant for value 'BEFR_LivraisonSecuriseInternational'
	 * Meta informations :
	 * 	- documentation : Livraison securisee
	 * @return string 'BEFR_LivraisonSecuriseInternational'
	 */
	const VALUE_BEFR_LIVRAISONSECURISEINTERNATIONAL = 'BEFR_LivraisonSecuriseInternational';
	/**
	 * Constant for value 'FR_Chronopost'
	 * Meta informations :
	 * 	- documentation : Chronopost
	 * @return string 'FR_Chronopost'
	 */
	const VALUE_FR_CHRONOPOST = 'FR_Chronopost';
	/**
	 * Constant for value 'UK_RoyalMailSpecialDeliveryNextDay'
	 * Meta informations :
	 * 	- documentation : Royal Mail Special Delivery Next Day
	 * @return string 'UK_RoyalMailSpecialDeliveryNextDay'
	 */
	const VALUE_UK_ROYALMAILSPECIALDELIVERYNEXTDAY = 'UK_RoyalMailSpecialDeliveryNextDay';
	/**
	 * Constant for value 'CA_PostLightPacketInternational'
	 * Meta informations :
	 * 	- documentation : Canada Post Light Packet International
	 * @return string 'CA_PostLightPacketInternational'
	 */
	const VALUE_CA_POSTLIGHTPACKETINTERNATIONAL = 'CA_PostLightPacketInternational';
	/**
	 * Constant for value 'CA_PostLightPacketUSA'
	 * Meta informations :
	 * 	- documentation : Canada Post Light Packet USA
	 * @return string 'CA_PostLightPacketUSA'
	 */
	const VALUE_CA_POSTLIGHTPACKETUSA = 'CA_PostLightPacketUSA';
	/**
	 * Constant for value 'PL_DHLInternational'
	 * Meta informations :
	 * 	- documentation : DHL
	 * @return string 'PL_DHLInternational'
	 */
	const VALUE_PL_DHLINTERNATIONAL = 'PL_DHLInternational';
	/**
	 * Constant for value 'PL_InternationalRegular'
	 * Meta informations :
	 * 	- documentation : Przesylka zagraniczna - zwykla
	 * @return string 'PL_InternationalRegular'
	 */
	const VALUE_PL_INTERNATIONALREGULAR = 'PL_InternationalRegular';
	/**
	 * Constant for value 'PL_InternationalSpecial'
	 * Meta informations :
	 * 	- documentation : Przesylka zagraniczna - priorytetowa
	 * @return string 'PL_InternationalSpecial'
	 */
	const VALUE_PL_INTERNATIONALSPECIAL = 'PL_InternationalSpecial';
	/**
	 * Constant for value 'PL_UPSInternational'
	 * Meta informations :
	 * 	- documentation : UPS
	 * @return string 'PL_UPSInternational'
	 */
	const VALUE_PL_UPSINTERNATIONAL = 'PL_UPSInternational';
	/**
	 * Constant for value 'CAFR_StandardDelivery'
	 * Meta informations :
	 * 	- documentation : Normes de livraison postale
	 * @return string 'CAFR_StandardDelivery'
	 */
	const VALUE_CAFR_STANDARDDELIVERY = 'CAFR_StandardDelivery';
	/**
	 * Constant for value 'CAFR_ExpeditedDelivery'
	 * Meta informations :
	 * 	- documentation : Expedition acceleree
	 * @return string 'CAFR_ExpeditedDelivery'
	 */
	const VALUE_CAFR_EXPEDITEDDELIVERY = 'CAFR_ExpeditedDelivery';
	/**
	 * Constant for value 'CAFR_PostLettermail'
	 * Meta informations :
	 * 	- documentation : Postes Canada, Poste-lettres
	 * @return string 'CAFR_PostLettermail'
	 */
	const VALUE_CAFR_POSTLETTERMAIL = 'CAFR_PostLettermail';
	/**
	 * Constant for value 'CAFR_PostRegularParcel'
	 * Meta informations :
	 * 	- documentation : Postes Canada, Colis standard
	 * @return string 'CAFR_PostRegularParcel'
	 */
	const VALUE_CAFR_POSTREGULARPARCEL = 'CAFR_PostRegularParcel';
	/**
	 * Constant for value 'CAFR_PostExpeditedParcel'
	 * Meta informations :
	 * 	- documentation : Postes Canada, Colis acceleres
	 * @return string 'CAFR_PostExpeditedParcel'
	 */
	const VALUE_CAFR_POSTEXPEDITEDPARCEL = 'CAFR_PostExpeditedParcel';
	/**
	 * Constant for value 'CAFR_PostXpresspost'
	 * Meta informations :
	 * 	- documentation : Postes Canada, Xpresspost
	 * @return string 'CAFR_PostXpresspost'
	 */
	const VALUE_CAFR_POSTXPRESSPOST = 'CAFR_PostXpresspost';
	/**
	 * Constant for value 'CAFR_PostPriorityCourier'
	 * Meta informations :
	 * 	- documentation : Postes Canada, Messageries prioritaires
	 * @return string 'CAFR_PostPriorityCourier'
	 */
	const VALUE_CAFR_POSTPRIORITYCOURIER = 'CAFR_PostPriorityCourier';
	/**
	 * Constant for value 'CAFR_StandardInternational'
	 * Meta informations :
	 * 	- documentation : Expedition standard - International, tarif fixe
	 * @return string 'CAFR_StandardInternational'
	 */
	const VALUE_CAFR_STANDARDINTERNATIONAL = 'CAFR_StandardInternational';
	/**
	 * Constant for value 'CAFR_ExpeditedInternational'
	 * Meta informations :
	 * 	- documentation : Expedition acceleree - International, tarif fixe
	 * @return string 'CAFR_ExpeditedInternational'
	 */
	const VALUE_CAFR_EXPEDITEDINTERNATIONAL = 'CAFR_ExpeditedInternational';
	/**
	 * Constant for value 'CAFR_OtherInternational'
	 * Meta informations :
	 * 	- documentation : Autres services d'expedition internationale (voir description)
	 * @return string 'CAFR_OtherInternational'
	 */
	const VALUE_CAFR_OTHERINTERNATIONAL = 'CAFR_OtherInternational';
	/**
	 * Constant for value 'CAFR_PostExpeditedParcelUSA'
	 * Meta informations :
	 * 	- documentation : Postes Canada, Colis acceleres - E.U.
	 * @return string 'CAFR_PostExpeditedParcelUSA'
	 */
	const VALUE_CAFR_POSTEXPEDITEDPARCELUSA = 'CAFR_PostExpeditedParcelUSA';
	/**
	 * Constant for value 'CAFR_PostSmallPacketsUSA'
	 * Meta informations :
	 * 	- documentation : Postes Canada, Petits paquets - E.U.
	 * @return string 'CAFR_PostSmallPacketsUSA'
	 */
	const VALUE_CAFR_POSTSMALLPACKETSUSA = 'CAFR_PostSmallPacketsUSA';
	/**
	 * Constant for value 'CAFR_PostXpresspostUSA'
	 * Meta informations :
	 * 	- documentation : Postes Canada, Xpresspost - E.U.
	 * @return string 'CAFR_PostXpresspostUSA'
	 */
	const VALUE_CAFR_POSTXPRESSPOSTUSA = 'CAFR_PostXpresspostUSA';
	/**
	 * Constant for value 'CAFR_PostXpresspostInternational'
	 * Meta informations :
	 * 	- documentation : Postes Canada, Xpresspost - International
	 * @return string 'CAFR_PostXpresspostInternational'
	 */
	const VALUE_CAFR_POSTXPRESSPOSTINTERNATIONAL = 'CAFR_PostXpresspostInternational';
	/**
	 * Constant for value 'CAFR_PostInternationalParcelSurface'
	 * Meta informations :
	 * 	- documentation : Postes Canada, Colis international de surface
	 * @return string 'CAFR_PostInternationalParcelSurface'
	 */
	const VALUE_CAFR_POSTINTERNATIONALPARCELSURFACE = 'CAFR_PostInternationalParcelSurface';
	/**
	 * Constant for value 'CAFR_PostInternationalParcelAir'
	 * Meta informations :
	 * 	- documentation : Postes Canada, Colis-avion - International
	 * @return string 'CAFR_PostInternationalParcelAir'
	 */
	const VALUE_CAFR_POSTINTERNATIONALPARCELAIR = 'CAFR_PostInternationalParcelAir';
	/**
	 * Constant for value 'CAFR_SmallPacketsInternational'
	 * Meta informations :
	 * 	- documentation : Petits paquets - International
	 * @return string 'CAFR_SmallPacketsInternational'
	 */
	const VALUE_CAFR_SMALLPACKETSINTERNATIONAL = 'CAFR_SmallPacketsInternational';
	/**
	 * Constant for value 'CAFR_PurolatorInternational'
	 * Meta informations :
	 * 	- documentation : Purolator International
	 * @return string 'CAFR_PurolatorInternational'
	 */
	const VALUE_CAFR_PUROLATORINTERNATIONAL = 'CAFR_PurolatorInternational';
	/**
	 * Constant for value 'CAFR_PostSmallPacketsUSAGround'
	 * Meta informations :
	 * 	- documentation : Postes Canada, Petits paquets - E.U. service de surface
	 * @return string 'CAFR_PostSmallPacketsUSAGround'
	 */
	const VALUE_CAFR_POSTSMALLPACKETSUSAGROUND = 'CAFR_PostSmallPacketsUSAGround';
	/**
	 * Constant for value 'CAFR_PostSmallPacketsUSAAir'
	 * Meta informations :
	 * 	- documentation : Postes Canada, Petits paquets - E.U. par avion
	 * @return string 'CAFR_PostSmallPacketsUSAAir'
	 */
	const VALUE_CAFR_POSTSMALLPACKETSUSAAIR = 'CAFR_PostSmallPacketsUSAAir';
	/**
	 * Constant for value 'CAFR_SmallPacketsInternationalGround'
	 * Meta informations :
	 * 	- documentation : Petits paquets - International, courrier-surface
	 * @return string 'CAFR_SmallPacketsInternationalGround'
	 */
	const VALUE_CAFR_SMALLPACKETSINTERNATIONALGROUND = 'CAFR_SmallPacketsInternationalGround';
	/**
	 * Constant for value 'CAFR_SmallPacketsInternationalAir'
	 * Meta informations :
	 * 	- documentation : Petits paquets - International, courrier-avion
	 * @return string 'CAFR_SmallPacketsInternationalAir'
	 */
	const VALUE_CAFR_SMALLPACKETSINTERNATIONALAIR = 'CAFR_SmallPacketsInternationalAir';
	/**
	 * Constant for value 'CAFR_PostUSALetterPost'
	 * Meta informations :
	 * 	- documentation : Postes Canada, Poste aux lettres - E.U.
	 * @return string 'CAFR_PostUSALetterPost'
	 */
	const VALUE_CAFR_POSTUSALETTERPOST = 'CAFR_PostUSALetterPost';
	/**
	 * Constant for value 'CAFR_PostInternationalLetterPost'
	 * Meta informations :
	 * 	- documentation : Postes Canada, Poste aux lettres - International
	 * @return string 'CAFR_PostInternationalLetterPost'
	 */
	const VALUE_CAFR_POSTINTERNATIONALLETTERPOST = 'CAFR_PostInternationalLetterPost';
	/**
	 * Constant for value 'CAFR_UPSExpressCanada'
	 * Meta informations :
	 * 	- documentation : UPS Express Saver
	 * @return string 'CAFR_UPSExpressCanada'
	 */
	const VALUE_CAFR_UPSEXPRESSCANADA = 'CAFR_UPSExpressCanada';
	/**
	 * Constant for value 'CAFR_UPSExpressSaverCanada'
	 * Meta informations :
	 * 	- documentation : UPS Express Saver Canada
	 * @return string 'CAFR_UPSExpressSaverCanada'
	 */
	const VALUE_CAFR_UPSEXPRESSSAVERCANADA = 'CAFR_UPSExpressSaverCanada';
	/**
	 * Constant for value 'CAFR_UPSExpeditedCanada'
	 * Meta informations :
	 * 	- documentation : UPS Expedited Canada
	 * @return string 'CAFR_UPSExpeditedCanada'
	 */
	const VALUE_CAFR_UPSEXPEDITEDCANADA = 'CAFR_UPSExpeditedCanada';
	/**
	 * Constant for value 'CAFR_UPSStandardCanada'
	 * Meta informations :
	 * 	- documentation : UPS Standard au Canada
	 * @return string 'CAFR_UPSStandardCanada'
	 */
	const VALUE_CAFR_UPSSTANDARDCANADA = 'CAFR_UPSStandardCanada';
	/**
	 * Constant for value 'CAFR_UPSExpressUnitedStates'
	 * Meta informations :
	 * 	- documentation : UPS Express Etats-Unis
	 * @return string 'CAFR_UPSExpressUnitedStates'
	 */
	const VALUE_CAFR_UPSEXPRESSUNITEDSTATES = 'CAFR_UPSExpressUnitedStates';
	/**
	 * Constant for value 'CAFR_UPSExpeditedUnitedStates'
	 * Meta informations :
	 * 	- documentation : UPS Expedited Etats-Unis
	 * @return string 'CAFR_UPSExpeditedUnitedStates'
	 */
	const VALUE_CAFR_UPSEXPEDITEDUNITEDSTATES = 'CAFR_UPSExpeditedUnitedStates';
	/**
	 * Constant for value 'CAFR_UPS3DaySelectUnitedStates'
	 * Meta informations :
	 * 	- documentation : 3Day Select aux Etats-Unis
	 * @return string 'CAFR_UPS3DaySelectUnitedStates'
	 */
	const VALUE_CAFR_UPS3DAYSELECTUNITEDSTATES = 'CAFR_UPS3DaySelectUnitedStates';
	/**
	 * Constant for value 'CAFR_UPSStandardUnitedStates'
	 * Meta informations :
	 * 	- documentation : UPS Standard aux Etats-Unis
	 * @return string 'CAFR_UPSStandardUnitedStates'
	 */
	const VALUE_CAFR_UPSSTANDARDUNITEDSTATES = 'CAFR_UPSStandardUnitedStates';
	/**
	 * Constant for value 'CAFR_UPSWorldWideExpress'
	 * Meta informations :
	 * 	- documentation : UPS Worlwide Express
	 * @return string 'CAFR_UPSWorldWideExpress'
	 */
	const VALUE_CAFR_UPSWORLDWIDEEXPRESS = 'CAFR_UPSWorldWideExpress';
	/**
	 * Constant for value 'CAFR_UPSWorldWideExpedited'
	 * Meta informations :
	 * 	- documentation : UPS Worlwide Expedited
	 * @return string 'CAFR_UPSWorldWideExpedited'
	 */
	const VALUE_CAFR_UPSWORLDWIDEEXPEDITED = 'CAFR_UPSWorldWideExpedited';
	/**
	 * Constant for value 'UK_RoyalMailSpecialDelivery9am'
	 * Meta informations :
	 * 	- documentation : Royal Mail Special Delivery 9:00 am
	 * @return string 'UK_RoyalMailSpecialDelivery9am'
	 */
	const VALUE_UK_ROYALMAILSPECIALDELIVERY9AM = 'UK_RoyalMailSpecialDelivery9am';
	/**
	 * Constant for value 'USPSFirstClassMailInternational'
	 * Meta informations :
	 * 	- documentation : USPS First Class Mail International
	 * @return string 'USPSFirstClassMailInternational'
	 */
	const VALUE_USPSFIRSTCLASSMAILINTERNATIONAL = 'USPSFirstClassMailInternational';
	/**
	 * Constant for value 'USPSPriorityMailInternational'
	 * Meta informations :
	 * 	- documentation : USPS Priority Mail International
	 * @return string 'USPSPriorityMailInternational'
	 */
	const VALUE_USPSPRIORITYMAILINTERNATIONAL = 'USPSPriorityMailInternational';
	/**
	 * Constant for value 'USPSExpressMailInternational'
	 * Meta informations :
	 * 	- documentation : USPS Express Mail International
	 * @return string 'USPSExpressMailInternational'
	 */
	const VALUE_USPSEXPRESSMAILINTERNATIONAL = 'USPSExpressMailInternational';
	/**
	 * Constant for value 'CH_StandardInternational'
	 * Meta informations :
	 * 	- documentation : Standardpauschale fur internationalen Versand
	 * @return string 'CH_StandardInternational'
	 */
	const VALUE_CH_STANDARDINTERNATIONAL = 'CH_StandardInternational';
	/**
	 * Constant for value 'CH_ExpeditedInternational'
	 * Meta informations :
	 * 	- documentation : Expresspauschale fur internationalen Versand
	 * @return string 'CH_ExpeditedInternational'
	 */
	const VALUE_CH_EXPEDITEDINTERNATIONAL = 'CH_ExpeditedInternational';
	/**
	 * Constant for value 'CH_SonstigerVersandSieheArtikelbeschreibung'
	 * Meta informations :
	 * 	- documentation : Sonstiger Versand (Siehe Artikelbeschreibung)
	 * @return string 'CH_SonstigerVersandSieheArtikelbeschreibung'
	 */
	const VALUE_CH_SONSTIGERVERSANDSIEHEARTIKELBESCHREIBUNG = 'CH_SonstigerVersandSieheArtikelbeschreibung';
	/**
	 * Constant for value 'TW_StandardInternationalFixedRate'
	 * Meta informations :
	 * 	- documentation : International Standard FixedRate for Taiwan
	 * @return string 'TW_StandardInternationalFixedRate'
	 */
	const VALUE_TW_STANDARDINTERNATIONALFIXEDRATE = 'TW_StandardInternationalFixedRate';
	/**
	 * Constant for value 'TW_ExpeditedInternationalFixedRate'
	 * Meta informations :
	 * 	- documentation : International Express FixedRate for Taiwan
	 * @return string 'TW_ExpeditedInternationalFixedRate'
	 */
	const VALUE_TW_EXPEDITEDINTERNATIONALFIXEDRATE = 'TW_ExpeditedInternationalFixedRate';
	/**
	 * Constant for value 'USPSGlobalExpressGuaranteed'
	 * Meta informations :
	 * 	- documentation : USPS Global Express Guaranteed
	 * @return string 'USPSGlobalExpressGuaranteed'
	 */
	const VALUE_USPSGLOBALEXPRESSGUARANTEED = 'USPSGlobalExpressGuaranteed';
	/**
	 * Constant for value 'AU_RegularWithInsurance'
	 * Meta informations :
	 * 	- documentation : Regular with Insurance
	 * @return string 'AU_RegularWithInsurance'
	 */
	const VALUE_AU_REGULARWITHINSURANCE = 'AU_RegularWithInsurance';
	/**
	 * Constant for value 'AU_ExpressWithInsurance'
	 * Meta informations :
	 * 	- documentation : Express with Insurance
	 * @return string 'AU_ExpressWithInsurance'
	 */
	const VALUE_AU_EXPRESSWITHINSURANCE = 'AU_ExpressWithInsurance';
	/**
	 * Constant for value 'DE_DeutschePostWarensendungInternational'
	 * Meta informations :
	 * 	- documentation : Deutsche Post Warensendung
	 * @return string 'DE_DeutschePostWarensendungInternational'
	 */
	const VALUE_DE_DEUTSCHEPOSTWARENSENDUNGINTERNATIONAL = 'DE_DeutschePostWarensendungInternational';
	/**
	 * Constant for value 'DE_DeutschePostByendung'
	 * Meta informations :
	 * 	- documentation : Deutsche Post Byendung
	 * @return string 'DE_DeutschePostByendung'
	 */
	const VALUE_DE_DEUTSCHEPOSTBYENDUNG = 'DE_DeutschePostByendung';
	/**
	 * Constant for value 'DE_HermesPaketUnversichertInternational'
	 * Meta informations :
	 * 	- documentation : Hermes Paket (unversichert)
	 * @return string 'DE_HermesPaketUnversichertInternational'
	 */
	const VALUE_DE_HERMESPAKETUNVERSICHERTINTERNATIONAL = 'DE_HermesPaketUnversichertInternational';
	/**
	 * Constant for value 'DE_HermesPaketVersichertInternational'
	 * Meta informations :
	 * 	- documentation : Hermes Paket (versichert)
	 * @return string 'DE_HermesPaketVersichertInternational'
	 */
	const VALUE_DE_HERMESPAKETVERSICHERTINTERNATIONAL = 'DE_HermesPaketVersichertInternational';
	/**
	 * Constant for value 'DE_iLoxxTransportXXLInternational'
	 * Meta informations :
	 * 	- documentation : iloxx Transport XXL
	 * @return string 'DE_iLoxxTransportXXLInternational'
	 */
	const VALUE_DE_ILOXXTRANSPORTXXLINTERNATIONAL = 'DE_iLoxxTransportXXLInternational';
	/**
	 * Constant for value 'DE_iLoxxUbernachtExpressInternational'
	 * Meta informations :
	 * 	- documentation : iloxx Ubernacht Express
	 * @return string 'DE_iLoxxUbernachtExpressInternational'
	 */
	const VALUE_DE_ILOXXUBERNACHTEXPRESSINTERNATIONAL = 'DE_iLoxxUbernachtExpressInternational';
	/**
	 * Constant for value 'DE_iLoxxStandardInternational'
	 * Meta informations :
	 * 	- documentation : iloxx Standard
	 * @return string 'DE_iLoxxStandardInternational'
	 */
	const VALUE_DE_ILOXXSTANDARDINTERNATIONAL = 'DE_iLoxxStandardInternational';
	/**
	 * Constant for value 'DE_StandardInternational'
	 * Meta informations :
	 * 	- documentation : Standardpauschale fur internationalen Versand
	 * @return string 'DE_StandardInternational'
	 */
	const VALUE_DE_STANDARDINTERNATIONAL = 'DE_StandardInternational';
	/**
	 * Constant for value 'DE_ExpeditedInternational'
	 * Meta informations :
	 * 	- documentation : Expresspauschale fur internationalen Versand
	 * @return string 'DE_ExpeditedInternational'
	 */
	const VALUE_DE_EXPEDITEDINTERNATIONAL = 'DE_ExpeditedInternational';
	/**
	 * Constant for value 'AT_BitteTreffenSieEineAuswahl'
	 * Meta informations :
	 * 	- documentation : AT_BITTE_TREFFEN_SIE_EINE_AUSWAHL
	 * @return string 'AT_BitteTreffenSieEineAuswahl'
	 */
	const VALUE_AT_BITTETREFFENSIEEINEAUSWAHL = 'AT_BitteTreffenSieEineAuswahl';
	/**
	 * Constant for value 'AT_EinschreibenVersandInklEinschreibengebuhr'
	 * Meta informations :
	 * 	- documentation : Einschreiben (Versand inkl. Einschreibengebuhr)
	 * @return string 'AT_EinschreibenVersandInklEinschreibengebuhr'
	 */
	const VALUE_AT_EINSCHREIBENVERSANDINKLEINSCHREIBENGEBUHR = 'AT_EinschreibenVersandInklEinschreibengebuhr';
	/**
	 * Constant for value 'AT_NachnahmeVersandInklNachnahmegebuhr'
	 * Meta informations :
	 * 	- documentation : Nachnahme (Versand inkl. Nachnahmegebuhr)
	 * @return string 'AT_NachnahmeVersandInklNachnahmegebuhr'
	 */
	const VALUE_AT_NACHNAHMEVERSANDINKLNACHNAHMEGEBUHR = 'AT_NachnahmeVersandInklNachnahmegebuhr';
	/**
	 * Constant for value 'AT_ExpressOrCourierInternational'
	 * Meta informations :
	 * 	- documentation : Express- oder Kurierversand
	 * @return string 'AT_ExpressOrCourierInternational'
	 */
	const VALUE_AT_EXPRESSORCOURIERINTERNATIONAL = 'AT_ExpressOrCourierInternational';
	/**
	 * Constant for value 'AT_InsuredExpressOrCourierInternational'
	 * Meta informations :
	 * 	- documentation : Versicherter Express- oder Kurierversand
	 * @return string 'AT_InsuredExpressOrCourierInternational'
	 */
	const VALUE_AT_INSUREDEXPRESSORCOURIERINTERNATIONAL = 'AT_InsuredExpressOrCourierInternational';
	/**
	 * Constant for value 'AT_SpecialDispatchInternational'
	 * Meta informations :
	 * 	- documentation : Sonderversand (z.B. Sperrgut, KFZ)
	 * @return string 'AT_SpecialDispatchInternational'
	 */
	const VALUE_AT_SPECIALDISPATCHINTERNATIONAL = 'AT_SpecialDispatchInternational';
	/**
	 * Constant for value 'AT_InsuredSpecialDispatchInternational'
	 * Meta informations :
	 * 	- documentation : Versicherter Sonderversand (z.B. Sperrgut, KFZ)
	 * @return string 'AT_InsuredSpecialDispatchInternational'
	 */
	const VALUE_AT_INSUREDSPECIALDISPATCHINTERNATIONAL = 'AT_InsuredSpecialDispatchInternational';
	/**
	 * Constant for value 'AT_StandardInternational'
	 * Meta informations :
	 * 	- documentation : Standardpauschale fur internationalen Versand
	 * @return string 'AT_StandardInternational'
	 */
	const VALUE_AT_STANDARDINTERNATIONAL = 'AT_StandardInternational';
	/**
	 * Constant for value 'AT_ExpeditedInternational'
	 * Meta informations :
	 * 	- documentation : Expresspauschale fur internationalen Versand
	 * @return string 'AT_ExpeditedInternational'
	 */
	const VALUE_AT_EXPEDITEDINTERNATIONAL = 'AT_ExpeditedInternational';
	/**
	 * Constant for value 'AT_OtherInternationalShipping'
	 * Meta informations :
	 * 	- documentation : Sonstiger Versand (Siehe Artikelbeschreibung)
	 * @return string 'AT_OtherInternationalShipping'
	 */
	const VALUE_AT_OTHERINTERNATIONALSHIPPING = 'AT_OtherInternationalShipping';
	/**
	 * Constant for value 'CH_BitteTreffenSieEineAuswahl'
	 * Meta informations :
	 * 	- documentation : CH_BITTE_TREFFEN_SIE_EINE_AUSWAHL
	 * @return string 'CH_BitteTreffenSieEineAuswahl'
	 */
	const VALUE_CH_BITTETREFFENSIEEINEAUSWAHL = 'CH_BitteTreffenSieEineAuswahl';
	/**
	 * Constant for value 'CH_UnversicherterVersand'
	 * Meta informations :
	 * 	- documentation : Unversicherter Versand
	 * @return string 'CH_UnversicherterVersand'
	 */
	const VALUE_CH_UNVERSICHERTERVERSAND = 'CH_UnversicherterVersand';
	/**
	 * Constant for value 'CH_VersicherterVersand'
	 * Meta informations :
	 * 	- documentation : Versicherter Versand
	 * @return string 'CH_VersicherterVersand'
	 */
	const VALUE_CH_VERSICHERTERVERSAND = 'CH_VersicherterVersand';
	/**
	 * Constant for value 'CH_EinschreibenVersandInklEinschreibengebuhr'
	 * Meta informations :
	 * 	- documentation : Einschreiben (Versand inkl. Einschreibengebuhr)
	 * @return string 'CH_EinschreibenVersandInklEinschreibengebuhr'
	 */
	const VALUE_CH_EINSCHREIBENVERSANDINKLEINSCHREIBENGEBUHR = 'CH_EinschreibenVersandInklEinschreibengebuhr';
	/**
	 * Constant for value 'CH_NachnahmeVersandInklNachnahmegebuhr'
	 * Meta informations :
	 * 	- documentation : Nachnahme (Versand inkl. Nachnahmegebuhr)
	 * @return string 'CH_NachnahmeVersandInklNachnahmegebuhr'
	 */
	const VALUE_CH_NACHNAHMEVERSANDINKLNACHNAHMEGEBUHR = 'CH_NachnahmeVersandInklNachnahmegebuhr';
	/**
	 * Constant for value 'CH_ExpressOrCourierInternational'
	 * Meta informations :
	 * 	- documentation : Express- oder Kurierversand
	 * @return string 'CH_ExpressOrCourierInternational'
	 */
	const VALUE_CH_EXPRESSORCOURIERINTERNATIONAL = 'CH_ExpressOrCourierInternational';
	/**
	 * Constant for value 'CH_InsuredExpressOrCourierInternational'
	 * Meta informations :
	 * 	- documentation : Versicherter Express- oder Kurierversand
	 * @return string 'CH_InsuredExpressOrCourierInternational'
	 */
	const VALUE_CH_INSUREDEXPRESSORCOURIERINTERNATIONAL = 'CH_InsuredExpressOrCourierInternational';
	/**
	 * Constant for value 'CH_SonderversandZBSperrgutKFZ'
	 * Meta informations :
	 * 	- documentation : Sonderversand (z.B. Sperrgut, KFZ)
	 * @return string 'CH_SonderversandZBSperrgutKFZ'
	 */
	const VALUE_CH_SONDERVERSANDZBSPERRGUTKFZ = 'CH_SonderversandZBSperrgutKFZ';
	/**
	 * Constant for value 'CH_VersicherterSonderversandZBSperrgutKFZ'
	 * Meta informations :
	 * 	- documentation : Versicherter Sonderversand (z.B. Sperrgut, KFZ)
	 * @return string 'CH_VersicherterSonderversandZBSperrgutKFZ'
	 */
	const VALUE_CH_VERSICHERTERSONDERVERSANDZBSPERRGUTKFZ = 'CH_VersicherterSonderversandZBSperrgutKFZ';
	/**
	 * Constant for value 'CH_StandardversandAPostPriority'
	 * Meta informations :
	 * 	- documentation : Standardversand (A-Post/Priority)
	 * @return string 'CH_StandardversandAPostPriority'
	 */
	const VALUE_CH_STANDARDVERSANDAPOSTPRIORITY = 'CH_StandardversandAPostPriority';
	/**
	 * Constant for value 'CH_StandardversandBPostEconomy'
	 * Meta informations :
	 * 	- documentation : Standardversand (B-Post/Economy)
	 * @return string 'CH_StandardversandBPostEconomy'
	 */
	const VALUE_CH_STANDARDVERSANDBPOSTECONOMY = 'CH_StandardversandBPostEconomy';
	/**
	 * Constant for value 'DE_BitteTreffenSieEineAuswahl'
	 * Meta informations :
	 * 	- documentation : DE_BITTE_TREFFEN_SIE_EINE_AUSWAHL
	 * @return string 'DE_BitteTreffenSieEineAuswahl'
	 */
	const VALUE_DE_BITTETREFFENSIEEINEAUSWAHL = 'DE_BitteTreffenSieEineAuswahl';
	/**
	 * Constant for value 'DE_EinschreibenVersandInklEinschreibengebuhr'
	 * Meta informations :
	 * 	- documentation : Einschreiben (Versand inkl. Einschreibengebuhr)
	 * @return string 'DE_EinschreibenVersandInklEinschreibengebuhr'
	 */
	const VALUE_DE_EINSCHREIBENVERSANDINKLEINSCHREIBENGEBUHR = 'DE_EinschreibenVersandInklEinschreibengebuhr';
	/**
	 * Constant for value 'DE_NachnahmeVersandInklNachnahmegebuhr'
	 * Meta informations :
	 * 	- documentation : Nachnahme (Versand inkl. Nachnahmegebuhr)
	 * @return string 'DE_NachnahmeVersandInklNachnahmegebuhr'
	 */
	const VALUE_DE_NACHNAHMEVERSANDINKLNACHNAHMEGEBUHR = 'DE_NachnahmeVersandInklNachnahmegebuhr';
	/**
	 * Constant for value 'DE_ExpressOrCourierInternational'
	 * Meta informations :
	 * 	- documentation : Express- oder Kurierversand
	 * @return string 'DE_ExpressOrCourierInternational'
	 */
	const VALUE_DE_EXPRESSORCOURIERINTERNATIONAL = 'DE_ExpressOrCourierInternational';
	/**
	 * Constant for value 'DE_InsuredExpressOrCourierInternational'
	 * Meta informations :
	 * 	- documentation : Versicherter Express- oder Kurierversand
	 * @return string 'DE_InsuredExpressOrCourierInternational'
	 */
	const VALUE_DE_INSUREDEXPRESSORCOURIERINTERNATIONAL = 'DE_InsuredExpressOrCourierInternational';
	/**
	 * Constant for value 'DE_SonderversandZBMobelKFZ'
	 * Meta informations :
	 * 	- documentation : Sonderversand (z.B. Mobel, KFZ)
	 * @return string 'DE_SonderversandZBMobelKFZ'
	 */
	const VALUE_DE_SONDERVERSANDZBMOBELKFZ = 'DE_SonderversandZBMobelKFZ';
	/**
	 * Constant for value 'DE_VersicherterSonderversandZBMobelKFZ'
	 * Meta informations :
	 * 	- documentation : Versicherter Sonderversand (z.B. Mobel, KFZ)
	 * @return string 'DE_VersicherterSonderversandZBMobelKFZ'
	 */
	const VALUE_DE_VERSICHERTERSONDERVERSANDZBMOBELKFZ = 'DE_VersicherterSonderversandZBMobelKFZ';
	/**
	 * Constant for value 'DE_DeutschePostBriefInternational'
	 * Meta informations :
	 * 	- documentation : Deutsche Post Brief
	 * @return string 'DE_DeutschePostBriefInternational'
	 */
	const VALUE_DE_DEUTSCHEPOSTBRIEFINTERNATIONAL = 'DE_DeutschePostBriefInternational';
	/**
	 * Constant for value 'IE_StandardInternationalFlatRatePostage'
	 * Meta informations :
	 * 	- documentation : Standard Int'l Flat Rate Postage
	 * @return string 'IE_StandardInternationalFlatRatePostage'
	 */
	const VALUE_IE_STANDARDINTERNATIONALFLATRATEPOSTAGE = 'IE_StandardInternationalFlatRatePostage';
	/**
	 * Constant for value 'IE_ExpeditedInternationalFlatRatePostage'
	 * Meta informations :
	 * 	- documentation : Expedited Int'l Flat Rate Postage
	 * @return string 'IE_ExpeditedInternationalFlatRatePostage'
	 */
	const VALUE_IE_EXPEDITEDINTERNATIONALFLATRATEPOSTAGE = 'IE_ExpeditedInternationalFlatRatePostage';
	/**
	 * Constant for value 'IE_OtherInternationalPostage'
	 * Meta informations :
	 * 	- documentation : Other Int'l Postage (see description)
	 * @return string 'IE_OtherInternationalPostage'
	 */
	const VALUE_IE_OTHERINTERNATIONALPOSTAGE = 'IE_OtherInternationalPostage';
	/**
	 * Constant for value 'UK_StandardInternationalFlatRatePostage'
	 * Meta informations :
	 * 	- documentation : Standard Int'l Flat Rate Postage
	 * @return string 'UK_StandardInternationalFlatRatePostage'
	 */
	const VALUE_UK_STANDARDINTERNATIONALFLATRATEPOSTAGE = 'UK_StandardInternationalFlatRatePostage';
	/**
	 * Constant for value 'UK_ExpeditedInternationalFlatRatePostage'
	 * Meta informations :
	 * 	- documentation : Expedited Int'l Flat Rate Postage
	 * @return string 'UK_ExpeditedInternationalFlatRatePostage'
	 */
	const VALUE_UK_EXPEDITEDINTERNATIONALFLATRATEPOSTAGE = 'UK_ExpeditedInternationalFlatRatePostage';
	/**
	 * Constant for value 'UK_OtherInternationalPostage'
	 * Meta informations :
	 * 	- documentation : Other Int'l Postage (see description)
	 * @return string 'UK_OtherInternationalPostage'
	 */
	const VALUE_UK_OTHERINTERNATIONALPOSTAGE = 'UK_OtherInternationalPostage';
	/**
	 * Constant for value 'FR_ChronopostChronoRelais'
	 * Meta informations :
	 * 	- documentation : Chronopost - Chrono Relais
	 * @return string 'FR_ChronopostChronoRelais'
	 */
	const VALUE_FR_CHRONOPOSTCHRONORELAIS = 'FR_ChronopostChronoRelais';
	/**
	 * Constant for value 'FR_Chrono10'
	 * Meta informations :
	 * 	- documentation : Chrono 10
	 * @return string 'FR_Chrono10'
	 */
	const VALUE_FR_CHRONO10 = 'FR_Chrono10';
	/**
	 * Constant for value 'FR_Chrono13'
	 * Meta informations :
	 * 	- documentation : Chrono 13
	 * @return string 'FR_Chrono13'
	 */
	const VALUE_FR_CHRONO13 = 'FR_Chrono13';
	/**
	 * Constant for value 'FR_Chrono18'
	 * Meta informations :
	 * 	- documentation : Chrono 18
	 * @return string 'FR_Chrono18'
	 */
	const VALUE_FR_CHRONO18 = 'FR_Chrono18';
	/**
	 * Constant for value 'FR_ChronopostExpressInternational'
	 * Meta informations :
	 * 	- documentation : Chronopost Express International
	 * @return string 'FR_ChronopostExpressInternational'
	 */
	const VALUE_FR_CHRONOPOSTEXPRESSINTERNATIONAL = 'FR_ChronopostExpressInternational';
	/**
	 * Constant for value 'Pickup'
	 * Meta informations :
	 * 	- documentation : PickUp Only Service
	 * @return string 'Pickup'
	 */
	const VALUE_PICKUP = 'Pickup';
	/**
	 * Constant for value 'Delivery'
	 * Meta informations :
	 * 	- documentation : Delivery
	 * @return string 'Delivery'
	 */
	const VALUE_DELIVERY = 'Delivery';
	/**
	 * Constant for value 'CA_Pickup'
	 * Meta informations :
	 * 	- documentation : Pickup Only Service
	 * @return string 'CA_Pickup'
	 */
	const VALUE_CA_PICKUP = 'CA_Pickup';
	/**
	 * Constant for value 'DE_Pickup'
	 * Meta informations :
	 * 	- documentation : Abholung
	 * @return string 'DE_Pickup'
	 */
	const VALUE_DE_PICKUP = 'DE_Pickup';
	/**
	 * Constant for value 'AU_Pickup'
	 * Meta informations :
	 * 	- documentation : Pickup
	 * @return string 'AU_Pickup'
	 */
	const VALUE_AU_PICKUP = 'AU_Pickup';
	/**
	 * Constant for value 'AU_SmallParcels'
	 * Meta informations :
	 * 	- documentation : Small Parcels
	 * @return string 'AU_SmallParcels'
	 */
	const VALUE_AU_SMALLPARCELS = 'AU_SmallParcels';
	/**
	 * Constant for value 'AU_SmallParcelWithTracking'
	 * Meta informations :
	 * 	- documentation : Small Parcel With Tracking
	 * @return string 'AU_SmallParcelWithTracking'
	 */
	const VALUE_AU_SMALLPARCELWITHTRACKING = 'AU_SmallParcelWithTracking';
	/**
	 * Constant for value 'AU_SmallParcelWithTrackingAndSignature'
	 * Meta informations :
	 * 	- documentation : Small Parcel With Tracking And Signature
	 * @return string 'AU_SmallParcelWithTrackingAndSignature'
	 */
	const VALUE_AU_SMALLPARCELWITHTRACKINGANDSIGNATURE = 'AU_SmallParcelWithTrackingAndSignature';
	/**
	 * Constant for value 'AU_RegularParcelWithTracking'
	 * Meta informations :
	 * 	- documentation : Regular Parcel With Tracking
	 * @return string 'AU_RegularParcelWithTracking'
	 */
	const VALUE_AU_REGULARPARCELWITHTRACKING = 'AU_RegularParcelWithTracking';
	/**
	 * Constant for value 'AU_RegularParcelWithTrackingAndSignature'
	 * Meta informations :
	 * 	- documentation : Regular Parcel With Tracking And Signature
	 * @return string 'AU_RegularParcelWithTrackingAndSignature'
	 */
	const VALUE_AU_REGULARPARCELWITHTRACKINGANDSIGNATURE = 'AU_RegularParcelWithTrackingAndSignature';
	/**
	 * Constant for value 'AU_PrePaidExpressPostSatchel5kg'
	 * Meta informations :
	 * 	- documentation : PrePaid Express Post Satchel 5kg
	 * @return string 'AU_PrePaidExpressPostSatchel5kg'
	 */
	const VALUE_AU_PREPAIDEXPRESSPOSTSATCHEL5KG = 'AU_PrePaidExpressPostSatchel5kg';
	/**
	 * Constant for value 'AU_PrePaidParcelPostSatchels500g'
	 * Meta informations :
	 * 	- documentation : PrePaid Parcel Post Satchels 500g
	 * @return string 'AU_PrePaidParcelPostSatchels500g'
	 */
	const VALUE_AU_PREPAIDPARCELPOSTSATCHELS500G = 'AU_PrePaidParcelPostSatchels500g';
	/**
	 * Constant for value 'AU_PrePaidParcelPostSatchels3kg'
	 * Meta informations :
	 * 	- documentation : PrePaid Parcel Post Satchels 3kg
	 * @return string 'AU_PrePaidParcelPostSatchels3kg'
	 */
	const VALUE_AU_PREPAIDPARCELPOSTSATCHELS3KG = 'AU_PrePaidParcelPostSatchels3kg';
	/**
	 * Constant for value 'AU_PrePaidExpressPostSatchel500g'
	 * Meta informations :
	 * 	- documentation : PrePaid Express Post Satchel 500g
	 * @return string 'AU_PrePaidExpressPostSatchel500g'
	 */
	const VALUE_AU_PREPAIDEXPRESSPOSTSATCHEL500G = 'AU_PrePaidExpressPostSatchel500g';
	/**
	 * Constant for value 'AU_PrePaidExpressPostSatchel3kg'
	 * Meta informations :
	 * 	- documentation : PrePaid Express Post Satchel 3kg
	 * @return string 'AU_PrePaidExpressPostSatchel3kg'
	 */
	const VALUE_AU_PREPAIDEXPRESSPOSTSATCHEL3KG = 'AU_PrePaidExpressPostSatchel3kg';
	/**
	 * Constant for value 'AU_PrePaidExpressPostPlatinum500g'
	 * Meta informations :
	 * 	- documentation : PrePaid Express Post Platinum 500g
	 * @return string 'AU_PrePaidExpressPostPlatinum500g'
	 */
	const VALUE_AU_PREPAIDEXPRESSPOSTPLATINUM500G = 'AU_PrePaidExpressPostPlatinum500g';
	/**
	 * Constant for value 'AU_PrePaidExpressPostPlatinum3kg'
	 * Meta informations :
	 * 	- documentation : PrePaid Express Post Platinum 3kg
	 * @return string 'AU_PrePaidExpressPostPlatinum3kg'
	 */
	const VALUE_AU_PREPAIDEXPRESSPOSTPLATINUM3KG = 'AU_PrePaidExpressPostPlatinum3kg';
	/**
	 * Constant for value 'AU_ExpressCourierInternational'
	 * Meta informations :
	 * 	- documentation : Express Courier International
	 * @return string 'AU_ExpressCourierInternational'
	 */
	const VALUE_AU_EXPRESSCOURIERINTERNATIONAL = 'AU_ExpressCourierInternational';
	/**
	 * Constant for value 'AU_ExpressPostInternational'
	 * Meta informations :
	 * 	- documentation : Express Post International
	 * @return string 'AU_ExpressPostInternational'
	 */
	const VALUE_AU_EXPRESSPOSTINTERNATIONAL = 'AU_ExpressPostInternational';
	/**
	 * Constant for value 'AU_PrePaidExpressPostInternationalEnvelopeC5'
	 * Meta informations :
	 * 	- documentation : PrePaid Express Post International Envelope C5
	 * @return string 'AU_PrePaidExpressPostInternationalEnvelopeC5'
	 */
	const VALUE_AU_PREPAIDEXPRESSPOSTINTERNATIONALENVELOPEC5 = 'AU_PrePaidExpressPostInternationalEnvelopeC5';
	/**
	 * Constant for value 'AU_PrePaidExpressPostInternationalEnvelopeB4'
	 * Meta informations :
	 * 	- documentation : PrePaid Express Post International Envelope B4
	 * @return string 'AU_PrePaidExpressPostInternationalEnvelopeB4'
	 */
	const VALUE_AU_PREPAIDEXPRESSPOSTINTERNATIONALENVELOPEB4 = 'AU_PrePaidExpressPostInternationalEnvelopeB4';
	/**
	 * Constant for value 'AU_PrePaidExpressPostInternationalSatchels2kg'
	 * Meta informations :
	 * 	- documentation : PrePaid Express Post International Satchels 2kg
	 * @return string 'AU_PrePaidExpressPostInternationalSatchels2kg'
	 */
	const VALUE_AU_PREPAIDEXPRESSPOSTINTERNATIONALSATCHELS2KG = 'AU_PrePaidExpressPostInternationalSatchels2kg';
	/**
	 * Constant for value 'AU_PrePaidExpressPostInternationalSatchels3kg'
	 * Meta informations :
	 * 	- documentation : PrePaid Express Post International Satchels 3kg
	 * @return string 'AU_PrePaidExpressPostInternationalSatchels3kg'
	 */
	const VALUE_AU_PREPAIDEXPRESSPOSTINTERNATIONALSATCHELS3KG = 'AU_PrePaidExpressPostInternationalSatchels3kg';
	/**
	 * Constant for value 'AU_PrePaidExpressPostInternationalBox5kg'
	 * Meta informations :
	 * 	- documentation : PrePaid Express Post International Box 5kg
	 * @return string 'AU_PrePaidExpressPostInternationalBox5kg'
	 */
	const VALUE_AU_PREPAIDEXPRESSPOSTINTERNATIONALBOX5KG = 'AU_PrePaidExpressPostInternationalBox5kg';
	/**
	 * Constant for value 'AU_PrePaidExpressPostInternationalBox10kg'
	 * Meta informations :
	 * 	- documentation : PrePaid Express Post International Box 10kg
	 * @return string 'AU_PrePaidExpressPostInternationalBox10kg'
	 */
	const VALUE_AU_PREPAIDEXPRESSPOSTINTERNATIONALBOX10KG = 'AU_PrePaidExpressPostInternationalBox10kg';
	/**
	 * Constant for value 'AU_PrePaidExpressPostInternationalBox20kg'
	 * Meta informations :
	 * 	- documentation : PrePaid Express Post International Box 20kg
	 * @return string 'AU_PrePaidExpressPostInternationalBox20kg'
	 */
	const VALUE_AU_PREPAIDEXPRESSPOSTINTERNATIONALBOX20KG = 'AU_PrePaidExpressPostInternationalBox20kg';
	/**
	 * Constant for value 'AU_RegisteredParcelPost'
	 * Meta informations :
	 * 	- documentation : Registered Parcel Post
	 * @return string 'AU_RegisteredParcelPost'
	 */
	const VALUE_AU_REGISTEREDPARCELPOST = 'AU_RegisteredParcelPost';
	/**
	 * Constant for value 'AU_RegisteredSmallParcel'
	 * Meta informations :
	 * 	- documentation : Registered Small Parcel
	 * @return string 'AU_RegisteredSmallParcel'
	 */
	const VALUE_AU_REGISTEREDSMALLPARCEL = 'AU_RegisteredSmallParcel';
	/**
	 * Constant for value 'AU_RegisteredParcelPostPrepaidSatchel500g'
	 * Meta informations :
	 * 	- documentation : Registered Parcel Post Prepaid Satchel 500g
	 * @return string 'AU_RegisteredParcelPostPrepaidSatchel500g'
	 */
	const VALUE_AU_REGISTEREDPARCELPOSTPREPAIDSATCHEL500G = 'AU_RegisteredParcelPostPrepaidSatchel500g';
	/**
	 * Constant for value 'AU_RegisteredParcelPostPrepaidSatchel3kg'
	 * Meta informations :
	 * 	- documentation : Registered Parcel Post Prepaid Satchel 3kg
	 * @return string 'AU_RegisteredParcelPostPrepaidSatchel3kg'
	 */
	const VALUE_AU_REGISTEREDPARCELPOSTPREPAIDSATCHEL3KG = 'AU_RegisteredParcelPostPrepaidSatchel3kg';
	/**
	 * Constant for value 'FR_Pickup'
	 * Meta informations :
	 * 	- documentation : Enlevement
	 * @return string 'FR_Pickup'
	 */
	const VALUE_FR_PICKUP = 'FR_Pickup';
	/**
	 * Constant for value 'AT_Pickup'
	 * Meta informations :
	 * 	- documentation : Pickup
	 * @return string 'AT_Pickup'
	 */
	const VALUE_AT_PICKUP = 'AT_Pickup';
	/**
	 * Constant for value 'BENL_Pickup'
	 * Meta informations :
	 * 	- documentation : Afhalen
	 * @return string 'BENL_Pickup'
	 */
	const VALUE_BENL_PICKUP = 'BENL_Pickup';
	/**
	 * Constant for value 'BEFR_Pickup'
	 * Meta informations :
	 * 	- documentation : Pickup
	 * @return string 'BEFR_Pickup'
	 */
	const VALUE_BEFR_PICKUP = 'BEFR_Pickup';
	/**
	 * Constant for value 'CH_Pickup'
	 * Meta informations :
	 * 	- documentation : Pickup
	 * @return string 'CH_Pickup'
	 */
	const VALUE_CH_PICKUP = 'CH_Pickup';
	/**
	 * Constant for value 'IT_Pickup'
	 * Meta informations :
	 * 	- documentation : Pickup
	 * @return string 'IT_Pickup'
	 */
	const VALUE_IT_PICKUP = 'IT_Pickup';
	/**
	 * Constant for value 'NL_Pickup'
	 * Meta informations :
	 * 	- documentation : Pickup
	 * @return string 'NL_Pickup'
	 */
	const VALUE_NL_PICKUP = 'NL_Pickup';
	/**
	 * Constant for value 'PL_Pickup'
	 * Meta informations :
	 * 	- documentation : Pickup
	 * @return string 'PL_Pickup'
	 */
	const VALUE_PL_PICKUP = 'PL_Pickup';
	/**
	 * Constant for value 'ES_Pickup'
	 * Meta informations :
	 * 	- documentation : Pickup
	 * @return string 'ES_Pickup'
	 */
	const VALUE_ES_PICKUP = 'ES_Pickup';
	/**
	 * Constant for value 'SG_Delivery'
	 * Meta informations :
	 * 	- documentation : Pickup
	 * @return string 'SG_Delivery'
	 */
	const VALUE_SG_DELIVERY = 'SG_Delivery';
	/**
	 * Constant for value 'UK_OtherCourier24'
	 * Meta informations :
	 * 	- documentation : Other 24 Hour Courier
	 * @return string 'UK_OtherCourier24'
	 */
	const VALUE_UK_OTHERCOURIER24 = 'UK_OtherCourier24';
	/**
	 * Constant for value 'UK_OtherCourier48'
	 * Meta informations :
	 * 	- documentation : Other 48 Hour Courier
	 * @return string 'UK_OtherCourier48'
	 */
	const VALUE_UK_OTHERCOURIER48 = 'UK_OtherCourier48';
	/**
	 * Constant for value 'UK_OtherCourier3Days'
	 * Meta informations :
	 * 	- documentation : Other Courier 3 days
	 * @return string 'UK_OtherCourier3Days'
	 */
	const VALUE_UK_OTHERCOURIER3DAYS = 'UK_OtherCourier3Days';
	/**
	 * Constant for value 'UK_OtherCourier5Days'
	 * Meta informations :
	 * 	- documentation : Other Courier 5 days
	 * @return string 'UK_OtherCourier5Days'
	 */
	const VALUE_UK_OTHERCOURIER5DAYS = 'UK_OtherCourier5Days';
	/**
	 * Constant for value 'Courier'
	 * Meta informations :
	 * 	- documentation : Courier Shipping
	 * @return string 'Courier'
	 */
	const VALUE_COURIER = 'Courier';
	/**
	 * Constant for value 'FedExPriorityOvernight'
	 * Meta informations :
	 * 	- documentation : FedEx Priority Overnight
	 * @return string 'FedExPriorityOvernight'
	 */
	const VALUE_FEDEXPRIORITYOVERNIGHT = 'FedExPriorityOvernight';
	/**
	 * Constant for value 'FedExStandardOvernight'
	 * Meta informations :
	 * 	- documentation : FedEx Standard Overnight
	 * @return string 'FedExStandardOvernight'
	 */
	const VALUE_FEDEXSTANDARDOVERNIGHT = 'FedExStandardOvernight';
	/**
	 * Constant for value 'FedEx2Day'
	 * Meta informations :
	 * 	- documentation : FedEx 2Day
	 * @return string 'FedEx2Day'
	 */
	const VALUE_FEDEX2DAY = 'FedEx2Day';
	/**
	 * Constant for value 'FedExGround'
	 * Meta informations :
	 * 	- documentation : FedEx Ground
	 * @return string 'FedExGround'
	 */
	const VALUE_FEDEXGROUND = 'FedExGround';
	/**
	 * Constant for value 'FedExHomeDelivery'
	 * Meta informations :
	 * 	- documentation : FedEx Home Delivery
	 * @return string 'FedExHomeDelivery'
	 */
	const VALUE_FEDEXHOMEDELIVERY = 'FedExHomeDelivery';
	/**
	 * Constant for value 'FedExExpressSaver'
	 * Meta informations :
	 * 	- documentation : FedEx Express Saver
	 * @return string 'FedExExpressSaver'
	 */
	const VALUE_FEDEXEXPRESSSAVER = 'FedExExpressSaver';
	/**
	 * Constant for value 'FedExInternationalFirst'
	 * Meta informations :
	 * 	- documentation : FedEx International First
	 * @return string 'FedExInternationalFirst'
	 */
	const VALUE_FEDEXINTERNATIONALFIRST = 'FedExInternationalFirst';
	/**
	 * Constant for value 'FedExInternationalPriority'
	 * Meta informations :
	 * 	- documentation : FedEx International Priority
	 * @return string 'FedExInternationalPriority'
	 */
	const VALUE_FEDEXINTERNATIONALPRIORITY = 'FedExInternationalPriority';
	/**
	 * Constant for value 'FedExInternationalEconomy'
	 * Meta informations :
	 * 	- documentation : FedEx International Economy
	 * @return string 'FedExInternationalEconomy'
	 */
	const VALUE_FEDEXINTERNATIONALECONOMY = 'FedExInternationalEconomy';
	/**
	 * Constant for value 'FedExInternationalGround'
	 * Meta informations :
	 * 	- documentation : FedEx International Ground
	 * @return string 'FedExInternationalGround'
	 */
	const VALUE_FEDEXINTERNATIONALGROUND = 'FedExInternationalGround';
	/**
	 * Constant for value 'EconomyShippingFromOutsideUS'
	 * Meta informations :
	 * 	- documentation : Economy shipping from outside US
	 * @return string 'EconomyShippingFromOutsideUS'
	 */
	const VALUE_ECONOMYSHIPPINGFROMOUTSIDEUS = 'EconomyShippingFromOutsideUS';
	/**
	 * Constant for value 'ExpeditedShippingFromOutsideUS'
	 * Meta informations :
	 * 	- documentation : Expedited shipping from outside US
	 * @return string 'ExpeditedShippingFromOutsideUS'
	 */
	const VALUE_EXPEDITEDSHIPPINGFROMOUTSIDEUS = 'ExpeditedShippingFromOutsideUS';
	/**
	 * Constant for value 'StandardShippingFromOutsideUS'
	 * Meta informations :
	 * 	- documentation : Standard shipping from outside US
	 * @return string 'StandardShippingFromOutsideUS'
	 */
	const VALUE_STANDARDSHIPPINGFROMOUTSIDEUS = 'StandardShippingFromOutsideUS';
	/**
	 * Constant for value 'UK_EconomyShippingFromOutside'
	 * Meta informations :
	 * 	- documentation : Economy postage from outside UK
	 * @return string 'UK_EconomyShippingFromOutside'
	 */
	const VALUE_UK_ECONOMYSHIPPINGFROMOUTSIDE = 'UK_EconomyShippingFromOutside';
	/**
	 * Constant for value 'UK_ExpeditedShippingFromOutside'
	 * Meta informations :
	 * 	- documentation : Express postage from outside UK
	 * @return string 'UK_ExpeditedShippingFromOutside'
	 */
	const VALUE_UK_EXPEDITEDSHIPPINGFROMOUTSIDE = 'UK_ExpeditedShippingFromOutside';
	/**
	 * Constant for value 'UK_StandardShippingFromOutside'
	 * Meta informations :
	 * 	- documentation : Standard postage from outside UK
	 * @return string 'UK_StandardShippingFromOutside'
	 */
	const VALUE_UK_STANDARDSHIPPINGFROMOUTSIDE = 'UK_StandardShippingFromOutside';
	/**
	 * Constant for value 'DE_SparversandAusDemAusland'
	 * Meta informations :
	 * 	- documentation : Economy postage from outside DE
	 * @return string 'DE_SparversandAusDemAusland'
	 */
	const VALUE_DE_SPARVERSANDAUSDEMAUSLAND = 'DE_SparversandAusDemAusland';
	/**
	 * Constant for value 'DE_StandardversandAusDemAusland'
	 * Meta informations :
	 * 	- documentation : Standard postage from outside DE
	 * @return string 'DE_StandardversandAusDemAusland'
	 */
	const VALUE_DE_STANDARDVERSANDAUSDEMAUSLAND = 'DE_StandardversandAusDemAusland';
	/**
	 * Constant for value 'DE_ExpressversandAusDemAusland'
	 * Meta informations :
	 * 	- documentation : Express postage from outside DE
	 * @return string 'DE_ExpressversandAusDemAusland'
	 */
	const VALUE_DE_EXPRESSVERSANDAUSDEMAUSLAND = 'DE_ExpressversandAusDemAusland';
	/**
	 * Constant for value 'DE_DHL2KGPaket'
	 * Meta informations :
	 * 	- documentation : DHL 2kg Paket (nur fuer kurze Zeit)
	 * @return string 'DE_DHL2KGPaket'
	 */
	const VALUE_DE_DHL2KGPAKET = 'DE_DHL2KGPaket';
	/**
	 * Constant for value 'InternationalPriorityShipping'
	 * Meta informations :
	 * 	- documentation : Global Exchange program <br/> This shipping service must be selected for the international leg of the shipment.
	 * @return string 'InternationalPriorityShipping'
	 */
	const VALUE_INTERNATIONALPRIORITYSHIPPING = 'InternationalPriorityShipping';
	/**
	 * Constructor
	 * @return EbayTradingTypeShippingServiceCodeType
	 */
	public function __construct()
	{
		parent::__construct(array());
	}
	/**
	 * Return true if value is allowed
	 * @param string value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(self::VALUE_UPSGROUND,self::VALUE_UPS3RDDAY,self::VALUE_UPS2NDDAY,self::VALUE_UPSNEXTDAY,self::VALUE_USPSPRIORITY,self::VALUE_USPSPARCEL,self::VALUE_USPSMEDIA,self::VALUE_USPSFIRSTCLASS,self::VALUE_SHIPPINGMETHODSTANDARD,self::VALUE_SHIPPINGMETHODEXPRESS,self::VALUE_USPSEXPRESSMAIL,self::VALUE_UPSNEXTDAYAIR,self::VALUE_UPS2DAYAIRAM,self::VALUE_USPSEXPRESSMAILFLATRATEENVELOPE,self::VALUE_USPSPRIORITYMAILFLATRATEENVELOPE,self::VALUE_USPSPRIORITYMAILSMALLFLATRATEBOX,self::VALUE_USPSPRIORITYMAILFLATRATEBOX,self::VALUE_USPSPRIORITYMAILLARGEFLATRATEBOX,self::VALUE_USPSPRIORITYMAILPADDEDFLATRATEENVELOPE,self::VALUE_USPSPRIORITYMAILLEGALFLATRATEENVELOPE,self::VALUE_USPSEXPRESSMAILLEGALFLATRATEENVELOPE,self::VALUE_USPSPRIORITYMAILREGIONALBOXA,self::VALUE_USPSPRIORITYMAILREGIONALBOXB,self::VALUE_OTHER,self::VALUE_LOCALDELIVERY,self::VALUE_NOTSELECTED,self::VALUE_INTERNATIONALNOTSELECTED,self::VALUE_STANDARDINTERNATIONAL,self::VALUE_EXPEDITEDINTERNATIONAL,self::VALUE_USPSGLOBALEXPRESS,self::VALUE_USPSGLOBALPRIORITY,self::VALUE_USPSECONOMYPARCEL,self::VALUE_USPSECONOMYLETTER,self::VALUE_USPSAIRMAILLETTER,self::VALUE_USPSAIRMAILPARCEL,self::VALUE_UPSWORLDWIDEEXPRESSPLUS,self::VALUE_UPSWORLDWIDEEXPRESS,self::VALUE_UPSWORLDWIDEEXPEDITED,self::VALUE_UPSWORLDWIDESAVER,self::VALUE_UPSSTANDARDTOCANADA,self::VALUE_USPSEXPRESSMAILINTERNATIONALFLATRATEENVELOPE,self::VALUE_USPSPRIORITYMAILINTERNATIONALFLATRATEENVELOPE,self::VALUE_USPSPRIORITYMAILINTERNATIONALSMALLFLATRATEBOX,self::VALUE_USPSPRIORITYMAILINTERNATIONALFLATRATEBOX,self::VALUE_USPSPRIORITYMAILINTERNATIONALLARGEFLATRATEBOX,self::VALUE_USPSPRIORITYMAILINTERNATIONALPADDEDFLATRATEENVELOPE,self::VALUE_USPSPRIORITYMAILINTERNATIONALLEGALFLATRATEENVELOPE,self::VALUE_USPSEXPRESSMAILINTERNATIONALLEGALFLATRATEENVELOPE,self::VALUE_OTHERINTERNATIONAL,self::VALUE_AT_STANDARDDISPATCH,self::VALUE_AT_INSUREDDISPATCH,self::VALUE_AT_WRITING,self::VALUE_AT_COD,self::VALUE_AT_EXPRESSORCOURIER,self::VALUE_AT_INSUREDEXPRESSORCOURIER,self::VALUE_AT_SPECIALDISPATCH,self::VALUE_AT_INSUREDSPECIALDISPATCH,self::VALUE_AT_SONSTIGE,self::VALUE_AT_UNVERSICHERTERVERSANDINTERNATIONAL,self::VALUE_AT_VERSICHERTERVERSANDINTERNATIONAL,self::VALUE_AT_SONSTIGERVERSANDINTERNATIONAL,self::VALUE_AT_UNVERSICHERTEREXPRESSVERSANDINTERNATIONAL,self::VALUE_AT_VERSICHERTEREXPRESSVERSANDINTERNATIONAL,self::VALUE_AU_REGULAR,self::VALUE_AU_EXPRESS,self::VALUE_AU_REGISTERED,self::VALUE_AU_COURIER,self::VALUE_AU_OTHER,self::VALUE_AU_EMSINTERNATIONALCOURIERPARCELS,self::VALUE_AU_EMSINTERNATIONALCOURIERDOCUMENTS,self::VALUE_AU_EXPRESSPOSTINTERNATIONALDOCUMENTS,self::VALUE_AU_AIRMAILINTERNATIONAL,self::VALUE_AU_ECONOMYAIRINTERNATIONAL,self::VALUE_AU_SEAMAILINTERNATIONAL,self::VALUE_AU_STANDARDINTERNATIONAL,self::VALUE_AU_EXPEDITEDINTERNATIONAL,self::VALUE_AU_OTHERINTERNATIONAL,self::VALUE_AU_AUSPOSTREGISTEREDPOSTINTERNATIONALPADDEDBAG1KG,self::VALUE_AU_AUSPOSTREGISTEREDPOSTINTERNATIONALPADDEDBAG500G,self::VALUE_AU_AUSPOSTREGISTEREDPOSTINTERNATIONALPARCEL,self::VALUE_AU_EXPEDITEDDELIVERYFROMOUTSIDEAU,self::VALUE_AU_ECONOMYDELIVERYFROMOUTSIDEAU,self::VALUE_AU_AUSTRALIANAIREXPRESSMETRO15KG,self::VALUE_AU_AUSTRALIANAIREXPRESSFLATRATE5KG,self::VALUE_AU_AUSTRALIANAIREXPRESSFLATRATE3KG,self::VALUE_AU_AUSTRALIANAIREXPRESSFLATRATE1KG,self::VALUE_AU_EXPRESSDELIVERY,self::VALUE_AU_STANDARDDELIVERY,self::VALUE_AU_EBAYAUSPOST3KGFLATRATESATCHEL,self::VALUE_AU_EBAYAUSPOST500GFLATRATESATCHEL,self::VALUE_AU_FREIGHT,self::VALUE_BEFR_STANDARDDELIVERY,self::VALUE_BEFR_PRIORITYDELIVERY,self::VALUE_BEFR_PARCELPOST,self::VALUE_BEFR_REGISTEREDMAIL,self::VALUE_BEFR_OTHER,self::VALUE_BEFR_DEPOSTINTERNATIONAL,self::VALUE_BEFR_UPSINTERNATIONAL,self::VALUE_BEFR_FEDEXINTERNATIONAL,self::VALUE_BEFR_DHLINTERNATIONAL,self::VALUE_BEFR_TPGPOSTTNTINTERNATIONAL,self::VALUE_BEFR_STANDARDINTERNATIONAL,self::VALUE_BEFR_EXPEDITEDINTERNATIONAL,self::VALUE_BEFR_OTHERINTERNATIONAL,self::VALUE_BEFR_LAPOSTEINTERNATIONAL,self::VALUE_BEFR_LAPOSTESTANDARDSHIPPING,self::VALUE_BEFR_LAPOSTECERTIFIEDSHIPPING,self::VALUE_BEFR_LAPOSTETAXIPOSTLLS,self::VALUE_BEFR_LAPOSTETAXIPOST24H,self::VALUE_BEFR_LAPOSTETAXIPOSTSECUR,self::VALUE_BEFR_POSTINTERNATIONALSTANDARD,self::VALUE_BEFR_POSTINTERNATIONALREGISTERED,self::VALUE_BEFR_TNTINTERNATIONAL,self::VALUE_BENL_STANDARDDELIVERY,self::VALUE_BENL_PRIORITYDELIVERY,self::VALUE_BENL_PARCELPOST,self::VALUE_BENL_REGISTEREDMAIL,self::VALUE_BENL_OTHER,self::VALUE_BENL_DEPOSTINTERNATIONAL,self::VALUE_BENL_UPSINTERNATIONAL,self::VALUE_BENL_FEDEXINTERNATIONAL,self::VALUE_BENL_DHLINTERNATIONAL,self::VALUE_BENL_TPGPOSTTNTINTERNATIONAL,self::VALUE_BENL_STANDARDINTERNATIONAL,self::VALUE_BENL_EXPEDITEDINTERNATIONAL,self::VALUE_BENL_OTHERINTERNATIONAL,self::VALUE_BENL_LAPOSTEINTERNATIONAL,self::VALUE_BENL_DEPOSTSTANDARDSHIPPING,self::VALUE_BENL_DEPOSTCERTIFIEDSHIPPING,self::VALUE_BENL_DEPOSTTAXIPOSTLLS,self::VALUE_BENL_DEPOSTTAXIPOST24H,self::VALUE_BENL_DEPOSTTAXIPOSTSECUR,self::VALUE_BENL_OTHERSHIPPINGMETHODS,self::VALUE_BENL_POSTINTERNATIONALSTANDARD,self::VALUE_BENL_POSTINTERNATIONALREGISTERED,self::VALUE_BENL_TNTINTERNATIONAL,self::VALUE_CA_STANDARDDELIVERY,self::VALUE_CA_EXPEDITEDDELIVERY,self::VALUE_CA_POSTLETTERMAIL,self::VALUE_CA_POSTREGULARPARCEL,self::VALUE_CA_POSTEXPEDITEDPARCEL,self::VALUE_CA_POSTXPRESSPOST,self::VALUE_CA_POSTPRIORITYCOURIER,self::VALUE_CANADAPOSTEXPEDITEDFLATRATEBOX,self::VALUE_CA_POSTEXPEDITEDFLATRATEBOX,self::VALUE_CA_STANDARDINTERNATIONAL,self::VALUE_CA_EXPEDITEDINTERNATIONAL,self::VALUE_CA_OTHERINTERNATIONAL,self::VALUE_CA_POSTEXPEDITEDPARCELUSA,self::VALUE_CA_POSTSMALLPACKETSUSA,self::VALUE_CA_POSTXPRESSPOSTUSA,self::VALUE_CA_POSTXPRESSPOSTINTERNATIONAL,self::VALUE_CA_POSTINTERNATIONALPARCELSURFACE,self::VALUE_CA_POSTINTERNATIONALPARCELAIR,self::VALUE_CA_SMALLPACKETSINTERNATIONAL,self::VALUE_CA_PUROLATORINTERNATIONAL,self::VALUE_CA_POSTSMALLPACKETSUSAGROUND,self::VALUE_CA_POSTSMALLPACKETSUSAAIR,self::VALUE_CA_SMALLPACKETSINTERNATIONALGROUND,self::VALUE_CA_SMALLPACKETSINTERNATIONALAIR,self::VALUE_CA_POSTUSALETTERPOST,self::VALUE_CA_POSTINTERNATIONALLETTERPOST,self::VALUE_CA_POSTEXPEDITEDFLATRATEBOXUSA,self::VALUE_CA_UPSEXPRESSCANADA,self::VALUE_CA_UPSEXPRESSSAVERCANADA,self::VALUE_CA_UPSEXPEDITEDCANADA,self::VALUE_CA_UPSSTANDARDCANADA,self::VALUE_CA_UPSEXPRESSUNITEDSTATES,self::VALUE_CA_UPSEXPEDITEDUNITEDSTATES,self::VALUE_CA_UPS3DAYSELECTUNITEDSTATES,self::VALUE_CA_UPSSTANDARDUNITEDSTATES,self::VALUE_CA_UPSWORLDWIDEEXPRESS,self::VALUE_CA_UPSWORLDWIDEEXPEDITED,self::VALUE_CA_PRIORITYWORLDWIDE,self::VALUE_CANADAPOSTEXPEDITEDFLATRATEBOXUSA,self::VALUE_CA_FREIGHT,self::VALUE_CH_STANDARDDISPATCHAPOST,self::VALUE_CH_STANDARDDISPATCHBPOST,self::VALUE_CH_INSUREDDISPATCH,self::VALUE_CH_WRITING,self::VALUE_CH_COD,self::VALUE_CH_EXPRESSORCOURIER,self::VALUE_CH_INSUREDEXPRESSORCOURIER,self::VALUE_CH_SPECIALDISPATCH,self::VALUE_CH_INSUREDSPECIALDISPATCH,self::VALUE_CH_SONSTIGE,self::VALUE_CH_SONSTIGERVERSANDINTERNATIONAL,self::VALUE_CH_ECONOMYSENDUNGENINTERNATIONAL,self::VALUE_CH_PRIORITYSENDUNGENINTERNATIONAL,self::VALUE_CH_URGENTSENDUNGENINTERNATIONAL,self::VALUE_CN_PERSONALDELIVERY,self::VALUE_CN_REGULARPACKAGE,self::VALUE_CN_DELIVERYCOMPANYEXPRESS,self::VALUE_CN_POSTOFFICEEXPRESS,self::VALUE_CN_OTHERS,self::VALUE_CN_FASTPOSTOFFICE,self::VALUE_CN_EXPRESSDELIVERYSAMECITY,self::VALUE_CN_EXPRESSDELIVERYOTHERCITIES,self::VALUE_CN_STANDARDINTERNATIONAL,self::VALUE_CN_EXPEDITEDINTERNATIONAL,self::VALUE_CN_OTHERINTERNATIONAL,self::VALUE_CN_CODINTERNATIONAL,self::VALUE_CN_STANDARDMAILINGINTERNATIONAL,self::VALUE_CN_REGULARLOGISTICSINTERNATIONAL,self::VALUE_CN_EMSINTERNATIONAL,self::VALUE_CN_OTHERSINTERNATIONAL,self::VALUE_DE_STANDARDDISPATCH,self::VALUE_DE_INSUREDDISPATCH,self::VALUE_DE_WRITING,self::VALUE_DE_COD,self::VALUE_DE_EXPRESSORCOURIER,self::VALUE_DE_INSUREDEXPRESSORCOURIER,self::VALUE_DE_SPECIALDISPATCH,self::VALUE_DE_INSUREDSPECIALDISPATCH,self::VALUE_DE_UNVERSICHERTERVERSAND,self::VALUE_DE_DEUTSCHEPOSTBRIEF,self::VALUE_DE_EBAYDHLPAKET24X7,self::VALUE_DE_DHLPOSTPAKET,self::VALUE_DE_DHLPACKCHEN,self::VALUE_DE_DEUTSCHEPOSTWARENSENDUNG,self::VALUE_DE_DEUTSCHEPOSTBUCHERSENDUNG,self::VALUE_DE_HERMESPAKETUNVERSICHERT,self::VALUE_DE_HERMESPAKETVERSICHERT,self::VALUE_DE_ILOXXTRANSPORTXXL,self::VALUE_DE_ILOXXUBERNACHTEXPRESS,self::VALUE_DE_ILOXXSTANDARD,self::VALUE_DE_SONSTIGE,self::VALUE_DE_UNVERSICHERTERVERSANDINTERNATIONAL,self::VALUE_DE_VERSICHERTERVERSANDINTERNATIONAL,self::VALUE_DE_DHLPOSTPAKETINTERNATIONAL,self::VALUE_DE_DHLPACKCHENINTERNATIONAL,self::VALUE_DE_SONSTIGERVERSANDINTERNATIONAL,self::VALUE_DE_UNVERSICHERTEREXPRESSVERSANDINTERNATIONAL,self::VALUE_DE_VERSICHERTEREXPRESSVERSANDINTERNATIONAL,self::VALUE_DE_DEUTSCHEPOSTBRIEFLANDINTERNATIONAL,self::VALUE_DE_DEUTSCHEPOSTBRIEFLUFTINTERNATIONAL,self::VALUE_DE_ILOXXEUROPAINTERNATIONAL,self::VALUE_DE_ILOXXWORLDWIDEINTERNATIONAL,self::VALUE_DE_PAKET,self::VALUE_DE_EXPRESS,self::VALUE_DE_DHLPAKET,self::VALUE_DE_DPBUECHERWARENSENDUNG,self::VALUE_DE_HERMESPAKET,self::VALUE_DE_ILOXXTRANSPORT,self::VALUE_DE_SONSTIGEDOMESTIC,self::VALUE_DE_EINSCHREIBEN,self::VALUE_DE_NACHNAME,self::VALUE_DE_SPECIALDELIVERY,self::VALUE_DE_UPS,self::VALUE_DE_DPD,self::VALUE_DE_GLS,self::VALUE_DE_PAKETINTERNATIONAL,self::VALUE_DE_DHLPAKETINTERNATIONAL,self::VALUE_DE_SONSTIGEINTERNATIONAL,self::VALUE_DE_EXPRESSINTERNATIONAL,self::VALUE_DE_DPBRIEFINTERNATIONAL,self::VALUE_DE_ILOXXTRANSPORTINTERNATIONAL,self::VALUE_DE_HERMESPAKETINTERNATIONAL,self::VALUE_DE_UPSINTERNATIONAL,self::VALUE_DE_DPDINTERNATIONAL,self::VALUE_DE_GLSINTERNATIONAL,self::VALUE_DE_EBAYHERMESPAKETSHOP2SHOPKAEUFER,self::VALUE_DE_HERMESPAKETSHOP2SHOPKAEUFER,self::VALUE_DE_EBAYHERMESPAKETSHOP2SHOP,self::VALUE_DE_HERMESPAKETSHOP2SHOP,self::VALUE_DE_HERMESPAKETSPERRGUT,self::VALUE_DE_EBAYHERMESPAKETSPERRGUTSHOP2SHOP,self::VALUE_DE_DHLPAECKCHENPACKSTATION,self::VALUE_DE_DHLPAKETPACKSTATION,self::VALUE_DE_EBAYDHLPAECKCHEN,self::VALUE_DE_DHLSTARPAECKCHEN,self::VALUE_ES_CARTASNACIONALESHASTA20,self::VALUE_ES_CARTASNACIONALESDEMAS20,self::VALUE_ES_CARTASINTERNACIONALESHASTA20,self::VALUE_ES_CARTASINTERNACIONALESDEMAS20,self::VALUE_ES_PAQUETEAZULHASTA2KG,self::VALUE_ES_PAQUETEAZULDEMAS2KG,self::VALUE_ES_PAQUETEINTERNACIONALECONOMICO,self::VALUE_ES_URGENTE,self::VALUE_ES_OTROS,self::VALUE_ES_STANDARDINTERNATIONAL,self::VALUE_ES_EXPEDITEDINTERNATIONAL,self::VALUE_ES_OTHERINTERNATIONAL,self::VALUE_ES_CARTASPOSTALINTERNATIONAL,self::VALUE_ES_EMSPOSTALEXPRESSINTERNATIONAL,self::VALUE_ES_ECONOMYPACKETINTERNATIONAL,self::VALUE_FR_CHRONOPOSTEINTERNATIONALCLASSIC,self::VALUE_FR_COLIPOSTECOLISSIMODIRECT,self::VALUE_FR_DHLEXPRESSEUROPACK,self::VALUE_FR_UPSSTANDARD,self::VALUE_FR_POSTOFFICELETTER,self::VALUE_FR_POSTOFFICELETTERFOLLOWED,self::VALUE_FR_POSTOFFICELETTERRECOMMENDED,self::VALUE_FR_COLIPOSTECOLISSIMO,self::VALUE_FR_COLIPOSTECOLISSIMORECOMMENDED,self::VALUE_FR_UPSSTANDARDAGAINSTREFUND,self::VALUE_FR_AUTRE,self::VALUE_FR_ECOPLI,self::VALUE_FR_COLIECO,self::VALUE_FR_AUTEMODEDENVOIDECOLIS,self::VALUE_FR_REMISEENMAINPROPRE,self::VALUE_FR_STANDARDINTERNATIONAL,self::VALUE_FR_EXPEDITEDINTERNATIONAL,self::VALUE_FR_OTHERINTERNATIONAL,self::VALUE_FR_LAPOSTEINTERNATIONALPRIORITYCOURIER,self::VALUE_FR_LAPOSTEINTERNATIONALECONOMYCOURIER,self::VALUE_FR_LAPOSTECOLISSIMOINTERNATIONAL,self::VALUE_FR_LAPOSTECOLISECONOMIQUEINTERNATIONAL,self::VALUE_FR_LAPOSTECOLISSIMOEMBALLAGEINTERNATIONAL,self::VALUE_FR_CHRONOPOSTCLASSICINTERNATIONAL,self::VALUE_FR_CHRONOPOSTPREMIUMINTERNATIONAL,self::VALUE_FR_UPSSTANDARDINTERNATIONAL,self::VALUE_FR_UPSEXPRESSINTERNATIONAL,self::VALUE_FR_DHLINTERNATIONAL,self::VALUE_FR_LAPOSTELETTERMAX,self::VALUE_IN_REGULAR,self::VALUE_IN_EXPRESS,self::VALUE_IN_NATIONALCOD,self::VALUE_IN_COURIER,self::VALUE_IN_LOCALCOD,self::VALUE_IN_STANDARDINTERNATIONAL,self::VALUE_IN_EXPEDITEDINTERNATIONAL,self::VALUE_IN_OTHERINTERNATIONAL,self::VALUE_IN_FLATRATECOD,self::VALUE_IN_BUYERPICKSUPANDPAYS,self::VALUE_IT_REGULARMAIL,self::VALUE_IT_PRIORITYMAIL,self::VALUE_IT_MAILREGISTEREDLETTER,self::VALUE_IT_MAILREGISTEREDLETTERWITHMARK,self::VALUE_IT_INSUREDMAIL,self::VALUE_IT_QUICKMAIL,self::VALUE_IT_REGULARPACKAGE,self::VALUE_IT_QUICKPACKAGE1,self::VALUE_IT_QUICKPACKAGE3,self::VALUE_IT_EXPRESSCOURIER,self::VALUE_IT_EXPRESSPACKAGEMAXI,self::VALUE_IT_STANDARDINTERNATIONAL,self::VALUE_IT_EXPEDITEDINTERNATIONAL,self::VALUE_IT_OTHERINTERNATIONAL,self::VALUE_NL_STANDARDDELIVERY,self::VALUE_NL_PARCELPOST,self::VALUE_NL_REGISTEREDMAIL,self::VALUE_NL_OTHER,self::VALUE_NL_TPGPOSTTNTINTERNATIONAL,self::VALUE_NL_UPSINTERNATIONAL,self::VALUE_NL_FEDEXINTERNATIONAL,self::VALUE_NL_DHLINTERNATIONAL,self::VALUE_NL_DPDGBRINTERNATIONAL,self::VALUE_NL_GLSBUSINESSINTERNATIONAL,self::VALUE_NL_STANDARDINTERNATIONAL,self::VALUE_NL_EXPEDITEDINTERNATIONAL,self::VALUE_NL_OTHERINTERNATIONAL,self::VALUE_TW_REGISTEREDMAIL,self::VALUE_TW_UNREGISTEREDMAIL,self::VALUE_TW_COD,self::VALUE_TW_DWELLINGMATCHPOST,self::VALUE_TW_DWELLINGMATCHCOD,self::VALUE_TW_SELFPICKUP,self::VALUE_TW_PARCELPOST,self::VALUE_TW_EXPRESSMAIL,self::VALUE_TW_OTHER,self::VALUE_TW_CPINTERNATIONALLETTERPOST,self::VALUE_TW_CPINTERNATIONALPARCELPOST,self::VALUE_TW_CPINTERNATIONALREGISTEREDLETTERPOST,self::VALUE_TW_CPINTERNATIONALREGISTEREDPARCELPOST,self::VALUE_TW_CPINTERNATIONALEMS,self::VALUE_TW_CPINTERNATIONALOCEANSHIPPINGPARCEL,self::VALUE_TW_FEDEXINTERNATIONALPRIORITY,self::VALUE_TW_FEDEXINTERNATIONALECONOMY,self::VALUE_TW_UPSWORLDWIDEEXPEDITED,self::VALUE_TW_UPSWORLDWIDEEXPRESS,self::VALUE_TW_UPSWORLDWIDEEXPRESSPLUS,self::VALUE_TW_OTHERINTERNATIONAL,self::VALUE_UK_ROYALMAILFIRSTCLASSSTANDARD,self::VALUE_UK_ROYALMAILSECONDCLASSSTANDARD,self::VALUE_UK_ROYALMAILFIRSTCLASSRECORDED,self::VALUE_UK_ROYALMAILSECONDCLASSRECORDED,self::VALUE_UK_ROYALMAILSPECIALDELIVERY,self::VALUE_UK_ROYALMAILSTANDARDPARCEL,self::VALUE_UK_PARCELFORCE24,self::VALUE_UK_PARCELFORCE48,self::VALUE_UK_OTHERCOURIER,self::VALUE_UK_MYHERMESDOORTODOORSERVICE,self::VALUE_UK_COLLECTDROPATSTOREDELIVERYTODOOR,self::VALUE_UK_SELLERSSTANDARDRATE,self::VALUE_UK_COLLECTINPERSON,self::VALUE_UK_SELLERSSTANDARDINTERNATIONALRATE,self::VALUE_UK_ROYALMAILAIRMAILINTERNATIONAL,self::VALUE_UK_ROYALMAILAIRSUREINTERNATIONAL,self::VALUE_UK_ROYALMAILSURFACEMAILINTERNATIONAL,self::VALUE_UK_ROYALMAILINTERNATIONALSIGNEDFOR,self::VALUE_UK_ROYALMAILHMFORCESMAILINTERNATIONAL,self::VALUE_UK_PARCELFORCEINTERNATIONALDATAPOST,self::VALUE_UK_PARCELFORCEIRELAND24INTERNATIONAL,self::VALUE_UK_PARCELFORCEEURO48INTERNATIONAL,self::VALUE_UK_PARCELFORCEINTERNATIONALSCHEDULED,self::VALUE_UK_OTHERCOURIERORDELIVERYINTERNATIONAL,self::VALUE_UK_COLLECTINPERSONINTERNATIONAL,self::VALUE_IE_SELLERSSTANDARDRATE,self::VALUE_IE_FIRSTCLASSLETTERSERVICE,self::VALUE_IE_SWIFTPOSTNATIONAL,self::VALUE_IE_REGISTEREDPOST,self::VALUE_IE_EMSSDSCOURIER,self::VALUE_IE_ECONOMYSDSCOURIER,self::VALUE_IE_OTHERCOURIER,self::VALUE_IE_COLLECTIONINPERSON,self::VALUE_IE_SELLERSSTANDARDRATEINTERNATIONAL,self::VALUE_IE_INTERNATIONALECONOMYSERVICE,self::VALUE_IE_INTERNATIONALPRIORITYSERVICE,self::VALUE_IE_SWIFTPOSTEXPRESSINTERNATIONAL,self::VALUE_IE_SWIFTPOSTINTERNATIONAL,self::VALUE_IE_EMSSDSCOURIERINTERNATIONAL,self::VALUE_IE_ECONOMYSDSCOURIERINTERNATIONAL,self::VALUE_IE_OTHERCOURIERINTERNATIONAL,self::VALUE_IE_COLLECTIONINPERSONINTERNATIONAL,self::VALUE_PL_DOMESTICREGULAR,self::VALUE_PL_DOMESTICSPECIAL,self::VALUE_FREIGHTSHIPPING,self::VALUE_FREIGHTOTHERSHIPPING,self::VALUE_FREIGHT,self::VALUE_FREIGHTSHIPPINGINTERNATIONAL,self::VALUE_USPSGROUND,self::VALUE_SHIPPINGMETHODOVERNIGHT,self::VALUE_CUSTOMCODE,self::VALUE_USPSPRIORITYFLATRATEENVELOPE,self::VALUE_USPSPRIORITYFLATRATEBOX,self::VALUE_USPSGLOBALPRIORITYSMALLENVELOPE,self::VALUE_USPSGLOBALPRIORITYLARGEENVELOPE,self::VALUE_USPSEXPRESSFLATRATEENVELOPE,self::VALUE_UPSWORLDWIDEEXPRESSBOX10KG,self::VALUE_UPSWORLDWIDEEXPRESSBOX25KG,self::VALUE_UPSWORLDWIDEEXPRESSPLUSBOX10KG,self::VALUE_UPSWORLDWIDEEXPRESSPLUSBOX25KG,self::VALUE_HK_LOCALPICKUPONLY,self::VALUE_HK_LOCALCOURIER,self::VALUE_HK_DOMESTICREGULARSHIPPING,self::VALUE_HK_DOMESTICSPECIALSHIPPING,self::VALUE_HK_INTERNATIONALREGULARSHIPPING,self::VALUE_HK_INTERNATIONALSPECIALSHIPPING,self::VALUE_SG_LOCALPICKUPONLY,self::VALUE_SG_LOCALCOURIER,self::VALUE_SG_DOMESTICSTANDARDMAIL,self::VALUE_SG_DOMESTICNONSTANDARDMAIL,self::VALUE_SG_DOMESTICSPEEDPOSTISLANDWIDE,self::VALUE_SG_INTERNATIONALSTANDARDMAIL,self::VALUE_SG_INTERNATIONALEXPRESSMAILSERVICE,self::VALUE_SG_INTERNATIONALCOURIER,self::VALUE_BENL_DEPOSTZENDINGNONPRIOR,self::VALUE_BENL_DEPOSTZENDINGPRIOR,self::VALUE_BENL_DEPOSTZENDINGAANGETEKEND,self::VALUE_BENL_KILOPOSTPAKJE,self::VALUE_BENL_TAXIPOST,self::VALUE_BENL_KIALAAFHAALPUNT,self::VALUE_BENL_VASTEKOSTENSTANDAARDVERZENDING,self::VALUE_BENL_VASTEKOSTENVERSNELDEVERZENDING,self::VALUE_BENL_VERZEKERDEVERZENDING,self::VALUE_BEFR_LAPOSTEENVOINONPRIOR,self::VALUE_BEFR_LAPOSTEENVOIPRIOR,self::VALUE_BEFR_LAPOSTEENVOIRECOMMANDE,self::VALUE_BEFR_PAQUETKILOPOST,self::VALUE_BEFR_TAXIPOST,self::VALUE_BEFR_POINTRETRAITKIALA,self::VALUE_BEFR_LIVRAISONSTANDARDPRIXFORFAITAIRE,self::VALUE_BEFR_LIVRAISONEXPRESSPRIXFORFAITAIRE,self::VALUE_BEFR_LIVRAISONSECURISE,self::VALUE_BENL_DEPOSTZENDINGPRIORINTERNATIONAL,self::VALUE_BENL_DEPOSTZENDINGNONPRIORINTERNATIONAL,self::VALUE_BENL_DEPOSTZENDINGAANGETEKENDINTERNATIONAL,self::VALUE_BENL_KILOPOSTPAKJEINTERNATIONAL,self::VALUE_BENL_TAXIPOSTEXPRESSVERZENDING,self::VALUE_BENL_VERZEKERDEVERZENDINGINTERNATIONAL,self::VALUE_BEFR_LAPOSTEENVOIEPRIOR,self::VALUE_BEFR_LAPOSTEENVOIENONPRIOR,self::VALUE_BEFR_LAPOSTEENVOIERECOMMANDE,self::VALUE_BEFR_PAQUETKILOPOSTINTERNATIONALE,self::VALUE_BEFR_EXPRESSTAXIPOST,self::VALUE_BEFR_LIVRAISONSTANDARDINTERNATIONALEPRIXFORFAITAIRE,self::VALUE_BEFR_LIVRAISONEXPRESSINTERNATIONALEPRIXFORFAITAIRE,self::VALUE_BEFR_LIVRAISONSECURISEINTERNATIONAL,self::VALUE_FR_CHRONOPOST,self::VALUE_UK_ROYALMAILSPECIALDELIVERYNEXTDAY,self::VALUE_CA_POSTLIGHTPACKETINTERNATIONAL,self::VALUE_CA_POSTLIGHTPACKETUSA,self::VALUE_PL_DHLINTERNATIONAL,self::VALUE_PL_INTERNATIONALREGULAR,self::VALUE_PL_INTERNATIONALSPECIAL,self::VALUE_PL_UPSINTERNATIONAL,self::VALUE_CAFR_STANDARDDELIVERY,self::VALUE_CAFR_EXPEDITEDDELIVERY,self::VALUE_CAFR_POSTLETTERMAIL,self::VALUE_CAFR_POSTREGULARPARCEL,self::VALUE_CAFR_POSTEXPEDITEDPARCEL,self::VALUE_CAFR_POSTXPRESSPOST,self::VALUE_CAFR_POSTPRIORITYCOURIER,self::VALUE_CAFR_STANDARDINTERNATIONAL,self::VALUE_CAFR_EXPEDITEDINTERNATIONAL,self::VALUE_CAFR_OTHERINTERNATIONAL,self::VALUE_CAFR_POSTEXPEDITEDPARCELUSA,self::VALUE_CAFR_POSTSMALLPACKETSUSA,self::VALUE_CAFR_POSTXPRESSPOSTUSA,self::VALUE_CAFR_POSTXPRESSPOSTINTERNATIONAL,self::VALUE_CAFR_POSTINTERNATIONALPARCELSURFACE,self::VALUE_CAFR_POSTINTERNATIONALPARCELAIR,self::VALUE_CAFR_SMALLPACKETSINTERNATIONAL,self::VALUE_CAFR_PUROLATORINTERNATIONAL,self::VALUE_CAFR_POSTSMALLPACKETSUSAGROUND,self::VALUE_CAFR_POSTSMALLPACKETSUSAAIR,self::VALUE_CAFR_SMALLPACKETSINTERNATIONALGROUND,self::VALUE_CAFR_SMALLPACKETSINTERNATIONALAIR,self::VALUE_CAFR_POSTUSALETTERPOST,self::VALUE_CAFR_POSTINTERNATIONALLETTERPOST,self::VALUE_CAFR_UPSEXPRESSCANADA,self::VALUE_CAFR_UPSEXPRESSSAVERCANADA,self::VALUE_CAFR_UPSEXPEDITEDCANADA,self::VALUE_CAFR_UPSSTANDARDCANADA,self::VALUE_CAFR_UPSEXPRESSUNITEDSTATES,self::VALUE_CAFR_UPSEXPEDITEDUNITEDSTATES,self::VALUE_CAFR_UPS3DAYSELECTUNITEDSTATES,self::VALUE_CAFR_UPSSTANDARDUNITEDSTATES,self::VALUE_CAFR_UPSWORLDWIDEEXPRESS,self::VALUE_CAFR_UPSWORLDWIDEEXPEDITED,self::VALUE_UK_ROYALMAILSPECIALDELIVERY9AM,self::VALUE_USPSFIRSTCLASSMAILINTERNATIONAL,self::VALUE_USPSPRIORITYMAILINTERNATIONAL,self::VALUE_USPSEXPRESSMAILINTERNATIONAL,self::VALUE_CH_STANDARDINTERNATIONAL,self::VALUE_CH_EXPEDITEDINTERNATIONAL,self::VALUE_CH_SONSTIGERVERSANDSIEHEARTIKELBESCHREIBUNG,self::VALUE_TW_STANDARDINTERNATIONALFIXEDRATE,self::VALUE_TW_EXPEDITEDINTERNATIONALFIXEDRATE,self::VALUE_USPSGLOBALEXPRESSGUARANTEED,self::VALUE_AU_REGULARWITHINSURANCE,self::VALUE_AU_EXPRESSWITHINSURANCE,self::VALUE_DE_DEUTSCHEPOSTWARENSENDUNGINTERNATIONAL,self::VALUE_DE_DEUTSCHEPOSTBYENDUNG,self::VALUE_DE_HERMESPAKETUNVERSICHERTINTERNATIONAL,self::VALUE_DE_HERMESPAKETVERSICHERTINTERNATIONAL,self::VALUE_DE_ILOXXTRANSPORTXXLINTERNATIONAL,self::VALUE_DE_ILOXXUBERNACHTEXPRESSINTERNATIONAL,self::VALUE_DE_ILOXXSTANDARDINTERNATIONAL,self::VALUE_DE_STANDARDINTERNATIONAL,self::VALUE_DE_EXPEDITEDINTERNATIONAL,self::VALUE_AT_BITTETREFFENSIEEINEAUSWAHL,self::VALUE_AT_EINSCHREIBENVERSANDINKLEINSCHREIBENGEBUHR,self::VALUE_AT_NACHNAHMEVERSANDINKLNACHNAHMEGEBUHR,self::VALUE_AT_EXPRESSORCOURIERINTERNATIONAL,self::VALUE_AT_INSUREDEXPRESSORCOURIERINTERNATIONAL,self::VALUE_AT_SPECIALDISPATCHINTERNATIONAL,self::VALUE_AT_INSUREDSPECIALDISPATCHINTERNATIONAL,self::VALUE_AT_STANDARDINTERNATIONAL,self::VALUE_AT_EXPEDITEDINTERNATIONAL,self::VALUE_AT_OTHERINTERNATIONALSHIPPING,self::VALUE_CH_BITTETREFFENSIEEINEAUSWAHL,self::VALUE_CH_UNVERSICHERTERVERSAND,self::VALUE_CH_VERSICHERTERVERSAND,self::VALUE_CH_EINSCHREIBENVERSANDINKLEINSCHREIBENGEBUHR,self::VALUE_CH_NACHNAHMEVERSANDINKLNACHNAHMEGEBUHR,self::VALUE_CH_EXPRESSORCOURIERINTERNATIONAL,self::VALUE_CH_INSUREDEXPRESSORCOURIERINTERNATIONAL,self::VALUE_CH_SONDERVERSANDZBSPERRGUTKFZ,self::VALUE_CH_VERSICHERTERSONDERVERSANDZBSPERRGUTKFZ,self::VALUE_CH_STANDARDVERSANDAPOSTPRIORITY,self::VALUE_CH_STANDARDVERSANDBPOSTECONOMY,self::VALUE_DE_BITTETREFFENSIEEINEAUSWAHL,self::VALUE_DE_EINSCHREIBENVERSANDINKLEINSCHREIBENGEBUHR,self::VALUE_DE_NACHNAHMEVERSANDINKLNACHNAHMEGEBUHR,self::VALUE_DE_EXPRESSORCOURIERINTERNATIONAL,self::VALUE_DE_INSUREDEXPRESSORCOURIERINTERNATIONAL,self::VALUE_DE_SONDERVERSANDZBMOBELKFZ,self::VALUE_DE_VERSICHERTERSONDERVERSANDZBMOBELKFZ,self::VALUE_DE_DEUTSCHEPOSTBRIEFINTERNATIONAL,self::VALUE_IE_STANDARDINTERNATIONALFLATRATEPOSTAGE,self::VALUE_IE_EXPEDITEDINTERNATIONALFLATRATEPOSTAGE,self::VALUE_IE_OTHERINTERNATIONALPOSTAGE,self::VALUE_UK_STANDARDINTERNATIONALFLATRATEPOSTAGE,self::VALUE_UK_EXPEDITEDINTERNATIONALFLATRATEPOSTAGE,self::VALUE_UK_OTHERINTERNATIONALPOSTAGE,self::VALUE_FR_CHRONOPOSTCHRONORELAIS,self::VALUE_FR_CHRONO10,self::VALUE_FR_CHRONO13,self::VALUE_FR_CHRONO18,self::VALUE_FR_CHRONOPOSTEXPRESSINTERNATIONAL,self::VALUE_PICKUP,self::VALUE_DELIVERY,self::VALUE_CA_PICKUP,self::VALUE_DE_PICKUP,self::VALUE_AU_PICKUP,self::VALUE_AU_SMALLPARCELS,self::VALUE_AU_SMALLPARCELWITHTRACKING,self::VALUE_AU_SMALLPARCELWITHTRACKINGANDSIGNATURE,self::VALUE_AU_REGULARPARCELWITHTRACKING,self::VALUE_AU_REGULARPARCELWITHTRACKINGANDSIGNATURE,self::VALUE_AU_PREPAIDEXPRESSPOSTSATCHEL5KG,self::VALUE_AU_PREPAIDPARCELPOSTSATCHELS500G,self::VALUE_AU_PREPAIDPARCELPOSTSATCHELS3KG,self::VALUE_AU_PREPAIDEXPRESSPOSTSATCHEL500G,self::VALUE_AU_PREPAIDEXPRESSPOSTSATCHEL3KG,self::VALUE_AU_PREPAIDEXPRESSPOSTPLATINUM500G,self::VALUE_AU_PREPAIDEXPRESSPOSTPLATINUM3KG,self::VALUE_AU_EXPRESSCOURIERINTERNATIONAL,self::VALUE_AU_EXPRESSPOSTINTERNATIONAL,self::VALUE_AU_PREPAIDEXPRESSPOSTINTERNATIONALENVELOPEC5,self::VALUE_AU_PREPAIDEXPRESSPOSTINTERNATIONALENVELOPEB4,self::VALUE_AU_PREPAIDEXPRESSPOSTINTERNATIONALSATCHELS2KG,self::VALUE_AU_PREPAIDEXPRESSPOSTINTERNATIONALSATCHELS3KG,self::VALUE_AU_PREPAIDEXPRESSPOSTINTERNATIONALBOX5KG,self::VALUE_AU_PREPAIDEXPRESSPOSTINTERNATIONALBOX10KG,self::VALUE_AU_PREPAIDEXPRESSPOSTINTERNATIONALBOX20KG,self::VALUE_AU_REGISTEREDPARCELPOST,self::VALUE_AU_REGISTEREDSMALLPARCEL,self::VALUE_AU_REGISTEREDPARCELPOSTPREPAIDSATCHEL500G,self::VALUE_AU_REGISTEREDPARCELPOSTPREPAIDSATCHEL3KG,self::VALUE_FR_PICKUP,self::VALUE_AT_PICKUP,self::VALUE_BENL_PICKUP,self::VALUE_BEFR_PICKUP,self::VALUE_CH_PICKUP,self::VALUE_IT_PICKUP,self::VALUE_NL_PICKUP,self::VALUE_PL_PICKUP,self::VALUE_ES_PICKUP,self::VALUE_SG_DELIVERY,self::VALUE_UK_OTHERCOURIER24,self::VALUE_UK_OTHERCOURIER48,self::VALUE_UK_OTHERCOURIER3DAYS,self::VALUE_UK_OTHERCOURIER5DAYS,self::VALUE_COURIER,self::VALUE_FEDEXPRIORITYOVERNIGHT,self::VALUE_FEDEXSTANDARDOVERNIGHT,self::VALUE_FEDEX2DAY,self::VALUE_FEDEXGROUND,self::VALUE_FEDEXHOMEDELIVERY,self::VALUE_FEDEXEXPRESSSAVER,self::VALUE_FEDEXINTERNATIONALFIRST,self::VALUE_FEDEXINTERNATIONALPRIORITY,self::VALUE_FEDEXINTERNATIONALECONOMY,self::VALUE_FEDEXINTERNATIONALGROUND,self::VALUE_ECONOMYSHIPPINGFROMOUTSIDEUS,self::VALUE_EXPEDITEDSHIPPINGFROMOUTSIDEUS,self::VALUE_STANDARDSHIPPINGFROMOUTSIDEUS,self::VALUE_UK_ECONOMYSHIPPINGFROMOUTSIDE,self::VALUE_UK_EXPEDITEDSHIPPINGFROMOUTSIDE,self::VALUE_UK_STANDARDSHIPPINGFROMOUTSIDE,self::VALUE_DE_SPARVERSANDAUSDEMAUSLAND,self::VALUE_DE_STANDARDVERSANDAUSDEMAUSLAND,self::VALUE_DE_EXPRESSVERSANDAUSDEMAUSLAND,self::VALUE_DE_DHL2KGPAKET,self::VALUE_INTERNATIONALPRIORITYSHIPPING));
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