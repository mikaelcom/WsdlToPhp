<?php
/**
 * AutoloadFile 
 * @date 02/08/2012
 */
/**
 * AutoloadFile
 * @date 02/08/2012
 */
require_once dirname(__FILE__) . '/BarCodeSoftWsdlClass.php';
require_once dirname(__FILE__) . '/BOOKLAND/BarCodeSoftTypeBOOKLAND.php';
require_once dirname(__FILE__) . '/EAN/Response/BarCodeSoftTypeEAN8Response.php';
require_once dirname(__FILE__) . '/BOOKLANDR/Esponse/BarCodeSoftTypeBOOKLANDResponse.php';
require_once dirname(__FILE__) . '/Datamatrix/BarCodeSoftTypeDatamatrix.php';
require_once dirname(__FILE__) . '/Datamatrix/Response/BarCodeSoftTypeDatamatrixResponse.php';
require_once dirname(__FILE__) . '/EAN/8/BarCodeSoftTypeEAN8.php';
require_once dirname(__FILE__) . '/EAN/Response/BarCodeSoftTypeEAN13Response.php';
require_once dirname(__FILE__) . '/UPCAR/Esponse/BarCodeSoftTypeUPCAResponse.php';
require_once dirname(__FILE__) . '/UPCE/BarCodeSoftTypeUPCE.php';
require_once dirname(__FILE__) . '/UPCER/Esponse/BarCodeSoftTypeUPCEResponse.php';
require_once dirname(__FILE__) . '/EAN/3/BarCodeSoftTypeEAN13.php';
require_once dirname(__FILE__) . '/QRC/Ode/BarCodeSoftTypeQRCode.php';
require_once dirname(__FILE__) . '/QRC/Response/BarCodeSoftTypeQRCodeResponse.php';
require_once dirname(__FILE__) . '/Qrcode/Lvl/BarCodeSoftTypeQrcodeErrorLvl.php';
require_once dirname(__FILE__) . '/Data/Format/BarCodeSoftTypeDataMatrixFormat.php';
require_once dirname(__FILE__) . '/Qrcode/Format/BarCodeSoftTypeQrcodeFormat.php';
require_once dirname(__FILE__) . '/Aztec/Size/BarCodeSoftTypeAztecTargetSize.php';
require_once dirname(__FILE__) . '/Aztec/Level/BarCodeSoftTypeAztecErrorLevel.php';
require_once dirname(__FILE__) . '/Bcs/Orientation/BarCodeSoftTypeBcsOrientation.php';
require_once dirname(__FILE__) . '/Bcs/Format/BarCodeSoftTypeBcsImageFormat.php';
require_once dirname(__FILE__) . '/Pdf417/BarCodeSoftTypePdf417.php';
require_once dirname(__FILE__) . '/Pdf417/Response/BarCodeSoftTypePdf417Response.php';
require_once dirname(__FILE__) . '/Aztec/BarCodeSoftTypeAztec.php';
require_once dirname(__FILE__) . '/Aztec/Response/BarCodeSoftTypeAztecResponse.php';
require_once dirname(__FILE__) . '/UPCA/BarCodeSoftTypeUPCA.php';
require_once dirname(__FILE__) . '/MSIR/Esponse/BarCodeSoftTypeMSIResponse.php';
require_once dirname(__FILE__) . '/Code93/BarCodeSoftTypeCode93.php';
require_once dirname(__FILE__) . '/I25/Response/BarCodeSoftTypeI25Response.php';
require_once dirname(__FILE__) . '/Code93/Response/BarCodeSoftTypeCode93Response.php';
require_once dirname(__FILE__) . '/Code128/A/BarCodeSoftTypeCode128A.php';
require_once dirname(__FILE__) . '/Code128/Response/BarCodeSoftTypeCode128AResponse.php';
require_once dirname(__FILE__) . '/I25/BarCodeSoftTypeI25.php';
require_once dirname(__FILE__) . '/Codabar/Response/BarCodeSoftTypeCodabarResponse.php';
require_once dirname(__FILE__) . '/Code39/Response/BarCodeSoftTypeCode39Response.php';
require_once dirname(__FILE__) . '/Code39/Ext/BarCodeSoftTypeCode39Ext.php';
require_once dirname(__FILE__) . '/Code39/Response/BarCodeSoftTypeCode39ExtResponse.php';
require_once dirname(__FILE__) . '/Codabar/BarCodeSoftTypeCodabar.php';
require_once dirname(__FILE__) . '/Code128/B/BarCodeSoftTypeCode128B.php';
require_once dirname(__FILE__) . '/Code128/Response/BarCodeSoftTypeCode128BResponse.php';
require_once dirname(__FILE__) . '/Code11/Response/BarCodeSoftTypeCode11Response.php';
require_once dirname(__FILE__) . '/Code11/BarCodeSoftTypeCode11.php';
require_once dirname(__FILE__) . '/Telepen/BarCodeSoftTypeTelepen.php';
require_once dirname(__FILE__) . '/Telepen/Response/BarCodeSoftTypeTelepenResponse.php';
require_once dirname(__FILE__) . '/MSI/BarCodeSoftTypeMSI.php';
require_once dirname(__FILE__) . '/Code25/Response/BarCodeSoftTypeCode25Response.php';
require_once dirname(__FILE__) . '/Code25/BarCodeSoftTypeCode25.php';
require_once dirname(__FILE__) . '/Code128/C/BarCodeSoftTypeCode128C.php';
require_once dirname(__FILE__) . '/Code128/Response/BarCodeSoftTypeCode128CResponse.php';
require_once dirname(__FILE__) . '/GS/8/BarCodeSoftTypeGS1128.php';
require_once dirname(__FILE__) . '/GS/Response/BarCodeSoftTypeGS1128Response.php';
require_once dirname(__FILE__) . '/Code39/BarCodeSoftTypeCode39.php';
require_once dirname(__FILE__) . '/Code39/BarCodeSoftServiceCode39.php';
require_once dirname(__FILE__) . '/Codabar/BarCodeSoftServiceCodabar.php';
require_once dirname(__FILE__) . '/I25/BarCodeSoftServiceI25.php';
require_once dirname(__FILE__) . '/Code93/BarCodeSoftServiceCode93.php';
require_once dirname(__FILE__) . '/Code128/BarCodeSoftServiceCode128.php';
require_once dirname(__FILE__) . '/GS/BarCodeSoftServiceGS.php';
require_once dirname(__FILE__) . '/Code25/BarCodeSoftServiceCode25.php';
require_once dirname(__FILE__) . '/Code11/BarCodeSoftServiceCode11.php';
require_once dirname(__FILE__) . '/Telepen/BarCodeSoftServiceTelepen.php';
require_once dirname(__FILE__) . '/MSI/BarCodeSoftServiceMSI.php';
require_once dirname(__FILE__) . '/UPCA/BarCodeSoftServiceUPCA.php';
require_once dirname(__FILE__) . '/UPCE/BarCodeSoftServiceUPCE.php';
require_once dirname(__FILE__) . '/EAN/BarCodeSoftServiceEAN.php';
require_once dirname(__FILE__) . '/BOOKLAND/BarCodeSoftServiceBOOKLAND.php';
require_once dirname(__FILE__) . '/Datamatrix/BarCodeSoftServiceDatamatrix.php';
require_once dirname(__FILE__) . '/QRC/BarCodeSoftServiceQRC.php';
require_once dirname(__FILE__) . '/Pdf417/BarCodeSoftServicePdf417.php';
require_once dirname(__FILE__) . '/Aztec/BarCodeSoftServiceAztec.php';
require_once dirname(__FILE__) . '/BarCodeSoftClassMap.php';
?>