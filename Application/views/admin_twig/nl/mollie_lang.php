<?php

$sLangName = "Dutch";
// -------------------------------
// RESOURCE IDENTITFIER = STRING
// -------------------------------
$aLang = array(
    'charset'                                           => 'UTF-8',

    /* SETTINGS */
    'SHOP_MODULE_GROUP_MOLLIE_GENERAL'                  => 'Basisconfiguratie',
    'SHOP_MODULE_sMollieMode'                           => 'Mode',
    'SHOP_MODULE_sMollieMode_live'                      => 'Live',
    'SHOP_MODULE_sMollieMode_test'                      => 'Test',
    'SHOP_MODULE_sMollieTestToken'                      => 'Test API Key',
    'SHOP_MODULE_sMollieLiveToken'                      => 'Live API Key',
    'SHOP_MODULE_blMollieShowIcons'                     => 'Toon iconen',
    'SHOP_MODULE_blMollieLogTransactionInfo'            => 'Logresultaten van transactieverwerking',
    'SHOP_MODULE_GROUP_MOLLIE_STATUS_MAPPING'           => 'Status In kaart brengen',
    'SHOP_MODULE_sMollieStatusPending'                  => 'Status In behandeling',
    'SHOP_MODULE_sMollieStatusProcessing'               => 'Status Verwerken',
    'SHOP_MODULE_sMollieStatusCancelled'                => 'Status Geannuleerd',
    'SHOP_MODULE_GROUP_MOLLIE_CRONJOBS'                 => 'Cronjobs',
    'SHOP_MODULE_sMollieCronOrderExpiryActive'          => 'Cronjob "Annuleer onbetaalde bestellingen automatisch" acief',
    'SHOP_MODULE_sMollieCronFinishOrdersActive'         => 'Cronjob "Voltooiing van betaalde maar niet-afgeronde bestellingen" actief',
    'SHOP_MODULE_sMollieCronSecondChanceActive'         => 'Cronjob "Verzending van betalingsherinnering per e-mail" actief',
    'SHOP_MODULE_iMollieCronSecondChanceTimeDiff'       => 'Termijn waarna de betalingsherinnerings per e-mail wordt verzonden',
    'SHOP_MODULE_sMollieCronOrderShipmentActive'        => 'Cronjob "Cronjob 2Overdragen van verzendstatus naar Mollie2 actief',
    'SHOP_MODULE_sMollieCronCaptureOrdersActive'        => 'Cronjob "Innen van betalingen" actief',
    'SHOP_MODULE_GROUP_MOLLIE_PAYMENTLOGOS'             => 'Alternatief betalingslogo',
    'SHOP_MODULE_GROUP_MOLLIE_APPLEPAY'                 => 'Apple Pay',
    'SHOP_MODULE_blMollieApplePayButtonOnBasket'        => 'Toon Apple Pay button op pagina winkelmandje',
    'SHOP_MODULE_blMollieApplePayButtonOnDetails'       => 'Toon Apple Pay button op pagina productdetails',

    'HELP_SHOP_MODULE_blMollieShowIcons'                => 'Toon betaaliconen tijdens checkout',
    'HELP_SHOP_MODULE_blMollieLogTransactionInfo'       => 'Log file hier te vinden: SHOPROOT/log/MollieTransactions.log',
    'HELP_SHOP_MODULE_sMollieStatusPending'             => 'Stel de bestelstatus in voordat de klant wordt doorgestuurd naar Payment Gateway',
    'HELP_SHOP_MODULE_sMollieStatusProcessing'          => 'Stel de bestelstatus in voor Completed Payments',
    'HELP_SHOP_MODULE_sMollieStatusCancelled'           => 'Stel de bestelstatus in voor geannuleerde bestellingen',
    'HELP_SHOP_MODULE_sMollieCronOrderExpiryActive'     => 'Om deze cronjob te laten werken, moet je er in aanvulling op deze checkbox voor zorgen dat de Mollie cronjob goed is ingesteld. Informatie over het instellen van de cronjob vind je in de README.md van deze module.',
    'HELP_SHOP_MODULE_sMollieCronFinishOrdersActive'    => 'Deze cronjob heeft de taak om bestellingen af te ronden waarbij de klant met succes heeft betaald, maar schijnbaar niet naar de winkel is teruggekeerd om het bestelproces te voltooien. De cronjob voltooit alleen bestellingen van de laatste 24 uur, om bestellingen die waarschijnlijk handmatig zijn afgehandeld niet te wijzigen. <br> <br> Om deze cronjob te laten werken, moet je er in aanvulling op deze checkbox voor zorgen dat de Mollie cronjob goed is ingesteld. Informatie over het instellen van de cronjob vind je in de README.md van deze module.',
    'HELP_SHOP_MODULE_sMollieCronSecondChanceActive'    => 'Om deze cronjob te laten werken, moet je er in aanvulling op deze checkbox / dit selectievakje voor zorgen dat de Mollie cronjob goed is ingesteld. Informatie over het instellen van de cronjob vind je in de README.md van deze module.',
    'HELP_SHOP_MODULE_sMollieCronOrderShipmentActive'   => 'Deze cronjob is alleen nodig als de verzendstatus in je winkel is ingesteld door een externe service en NIET door de knop / button ‘Nu verzenden’. Om deze cronjob te laten werken, moet je er in aanvulling op deze checkbox / dit selectievakje voor zorgen dat de Mollie cronjob goed is ingesteld. Informatie over het instellen van de cronjob vind je in de README.md van deze module.',

    'MOLLIE_YES'                                        => 'Ja',
    'MOLLIE_NO'                                         => 'Nee',
    'MOLLIE_DAY'                                        => 'Dag',
    'MOLLIE_DAYS'                                       => 'Dagen',
    'MOLLIE_IS_MOLLIE'                                  => 'Dit is een Mollie betaalmethode',
    'MOLLIE_IS_METHOD_ACTIVATED'                        => 'Deze betaalmethode is niet geactiveerd in je Mollie account',
    'MOLLIE_TOKEN_NOT_CONFIGURED'                       => 'Je Mollie token is nog niet geconfigureerd',
    'MOLLIE_CONFIG_METHOD'                              => 'API-methode',
    'MOLLIE_DUE_DATE'                                   => 'Vervaldagen',
    'MOLLIE_BANKTRANSFER_PENDING'                       => 'Status In behandeling',
    'MOLLIE_LIST_STYLE'                                 => 'Issuer List Style',
    'MOLLIE_LIST_STYLE_DROPDOWN'                        => 'Dropdown',
    'MOLLIE_LIST_STYLE_IMAGES'                          => 'Lijst met afbeeldingen',
    'MOLLIE_LIST_STYLE_DONT_SHOW'                       => 'Toon issuer list niet',
    'MOLLIE_ADD_QR'                                     => 'Voeg QR-code als optie toe in issuer list',
    'MOLLIE_ORDER_REFUND'                               => 'Mollie terugbetaling',
    'MOLLIE_REFUND_SUCCESSFUL'                          => 'Mollie terugbetaling was succesvol',
    'MOLLIE_NO_MOLLIE_PAYMENT'                          => 'Deze bestelling was niet betaald met Mollie',
    'MOLLIE_REFUND_QUANTITY'                            => 'Terugbetaling hoeveelheid',
    'MOLLIE_REFUND_AMOUNT'                              => 'Restitutiebedrag',
    'MOLLIE_TYPE_SELECT_LABEL'                          => 'Restitutie door',
    'MOLLIE_QUANTITY'                                   => 'Hoeveelheid',
    'MOLLIE_NOTICE'                                     => 'Bericht',
    'MOLLIE_AMOUNT'                                     => 'Bedrag',
    'MOLLIE_HEADER_ORDERED'                             => 'Besteld',
    'MOLLIE_HEADER_REFUNDED'                            => 'Terugbetaald',
    'MOLLIE_HEADER_SINGLE_PRICE'                        => 'Stuksprijs',
    'MOLLIE_SHIPPINGCOST'                               => "Verzendkosten",
    'MOLLIE_PAYMENTTYPESURCHARGE'                       => "Betalingstoeslag",
    'MOLLIE_WRAPPING'                                   => "Geschenkverpakking",
    'MOLLIE_GIFTCARD'                                   => "Wenskaart",
    'MOLLIE_VOUCHER'                                    => 'Voucher',
    'MOLLIE_DISCOUNT'                                   => 'Korting',
    'MOLLIE_REFUND_SUBMIT'                              => 'Voer een restitutie uit',
    'MOLLIE_FULL_REFUND'                                => 'Volledige restitutie',
    'MOLLIE_PARTIAL_REFUND'                             => 'Gedeeltelijke restitutie',
    'MOLLIE_FULL_REFUND_TEXT'                           => 'Voer een volledige restitutie uit met het bedrag van',
    'MOLLIE_FULL_REFUND_NOT_AVAILABLE'                  => 'Volledige restitutie is niet meer beschikbaar voor deze bestelling, er zijn al gedeeltelijke terugbetalingen gedaan',
    'MOLLIE_REFUND_DESCRIPTION'                         => 'Restitutiebericht',
    'MOLLIE_REFUND_DESCRIPTION_PLACEHOLDER'             => 'optioneel - max. 140 tekens',
    'MOLLIE_REFUND_FREE_AMOUNT'                         => 'Vrije restitutiebedrag',
    'MOLLIE_REFUND_FREE_1'                              => 'Van de totale prijs van',
    'MOLLIE_REFUND_FREE_2'                              => 'zijn al',
    'MOLLIE_REFUND_FREE_3'                              => 'terugbetaald. Resterend restitueerbaar bedrag',
    'MOLLIE_ORDER_NOT_REFUNDABLE'                       => 'Deze bestelling is al volledig terugbetaald',
    'MOLLIE_REFUND_REMAINING'                           => 'Betaal resterend bedrag terug',
    'MOLLIE_VOUCHERS_EXISTING'                          => 'Deze bestelling is inclusief vouchers of korting. Die kunnen niet gedeeltelijk worden terugbetaald. Ze moeten worden afgehandeld met de volledige of resterende terugbetaling',
    'MOLLIE_CREDITCARD_DATA_INPUT'                      => 'Creditcard data',
    'MOLLIE_CREDITCARD_DATA_INPUT_HELP'                 => 'Deze optie bepaalt waar de klant de creditcardgegevens moet invoeren.<br>De aanbevolen methode is "Invoer in shop checkout met iframe-formulierinvoer".',
    'MOLLIE_CC_HOSTED_CHECKOUT'                         => 'Input op externe Mollie website',
    'MOLLIE_CC_CHECKOUT_INTEGRATION'                    => 'Invoer in shop checkout met iframe-formulierinvoer',
    'MOLLIE_APPLE_PAY_BUTTON_ONLY_LIVE_MODE'            => 'Let op: betaling met de Apple Pay button is alleen beschikbaar in live-modus',
    'MOLLIE_APIKEY_CONNECTED'                           => 'Connectie succesvol',
    'MOLLIE_APIKEY_DISCONNECTED'                        => 'Connectie niet succesvol',
    'MOLLIE_ORDER_EXPIRY'                               => 'Automatische annulering na',
    'MOLLIE_ORDER_EXPIRY_DAYS'                          => 'dagen',
    'MOLLIE_DEACTIVATED'                                => 'Gedeactiveerd',
    'MOLLIE_ORDER_EXPIRY_HELP'                          => 'De Mollie-module heeft een functie om bestellingen automatisch te annuleren na de termijn die je hier hebt geconfigureerd. Dit is van toepassing op bestellingen in de ‘Status In behandeling’ die je hebt geconfigureerd. Om dit te laten werken, moet de cronjob van Mollie zijn ingesteld. Informatie over het instellen van de cronjob vind je in de README.md van deze module.',
    'MOLLIE_ALTLOGO_ERROR'                              => 'Er is een fout opgetreden tijdens het uploaden van het bestand. Controleer de toestemming van de map SHOPROOT/vendor/mollie/mollie-oxid7/assets/img/',
    'MOLLIE_ALTLOGO_LABEL'                              => 'Alternatief logo',
    'MOLLIE_ALTLOGO_FILENAME'                           => 'Bestandsnaam',
    'MOLLIE_ALTLOGO_DELETE'                             => 'Wis logo',
    'MOLLIE_SINGLE_CLICK'                               => 'Single Click-betalingen geactiveerd',
    'MOLLIE_SINGLE_CLICK_HELP'                          => 'Bij een Single Click betaling worden de betaalgegevens van de klant bij Mollie opgeslagen, zodat de klant deze bij een volgende bestelling met creditcard niet opnieuw hoeft in te voeren. Dit moet tijdens de checkout expliciet door de klant worden bevestigd. Dit heeft alleen effect als de creditcarddata-modus is ingesteld op ‘Invoer op externe Mollie-website’"',
    'MOLLIE_PAYMENT_API_LINK_1'                         => 'Voor meer informatie over de Payment-API klik',
    'MOLLIE_PAYMENT_API_LINK_2'                         => 'hier',
    'MOLLIE_ORDER_API_LINK_1'                           => 'Voor meer informatie over de Order-API klik',
    'MOLLIE_ORDER_API_LINK_2'                           => 'here',
    'MOLLIE_CONNECTION_DATA'                            => 'Bekijk je toegangsgegevens hier:',
    'MOLLIE_ORDER_PAYMENT_URL'                          => 'Link naar betaling afronden',
    'MOLLIE_SEND_SECOND_CHANCE_MAIL'                    => 'Verzend een tweede kans e-mail',
    'MOLLIE_SECOND_CHANCE_MAIL_ALREADY_SENT'            => 'Deze mail is al verstuurd.',
    'MOLLIE_SUBSEQUENT_ORDER_COMPLETION'                => 'Nagekomen voltooiing van de bestelling',
    'MOLLIE_PAYMENT_DESCRIPTION'                        => 'Betalingsomschrijving',
    'MOLLIE_PAYMENT_DESCRIPTION_HELP'                   => 'Indien mogelijk wordt dit aan je klant getoond op zijn kaart- of bankafschrift. <br> <br> Je kunt de volgende parameters gebruiken: <br> {orderId} <br> {orderNumber} <br> {storeName} <br> {customer.firstname} <br> {customer.lastname} <br> {customer.company}',
    'MOLLIE_MODULE_VERSION_OUTDATED'                    => 'Caution! The current module version is',
    'MOLLIE_SUPPORT_HEADER'                             => 'Contact Us - Technical Support',
    'MOLLIE_SUPPORT_REQUIRED_FIELDS'                    => 'Please fill in all required fields.',
    'MOLLIE_SUPPORT_FORM_NAME'                          => 'Name',
    'MOLLIE_SUPPORT_FORM_EMAIL'                         => 'E-mail',
    'MOLLIE_SUPPORT_FORM_SUBJECT'                       => 'Subject',
    'MOLLIE_SUPPORT_FORM_ENQUIRY'                       => 'Enquiry',
    'MOLLIE_SUPPORT_FORM_ENQUIRY_PLACEHOLDER'           => 'How can we help you?',
    'MOLLIE_SUPPORT_FORM_SUBMIT'                        => 'Submit',
    'MOLLIE_SUPPORT_EMAIL_SENT'                         => 'Your support enquiry has been sent. You will receive a copy of the email.',
    'MOLLIE_PAYMENT_LIMITATION'                         => 'Mollie limitation',
    'MOLLIE_PAYMENT_LIMITATION_FROM'                    => 'From',
    'MOLLIE_PAYMENT_LIMITATION_TO'                      => 'to',
    'MOLLIE_PAYMENT_LIMITATION_UNLIMITED'               => 'unlimited',
    'MOLLIE_PAYMENT_DISABLED_ACTIVATION'                => 'Deze Mollie-betaalmethode kan niet langer worden geactiveerd omdat deze binnenkort wordt verwijderd!',
    'MOLLIE_PAYMENT_DETAILS'                            => 'Betalingsgegevens',
    'MOLLIE_PAYMENT_TYPE'                               => 'Type betaling',
    'MOLLIE_TRANSACTION_ID'                             => 'Mollie Transactie ID',
    'MOLLIE_EXTERNAL_TRANSACTION_ID'                    => 'Externe transactie ID',
    'MOLLIE_CAPTURE_TITLE'                              => 'Betalingen innen (Capture)',
    'MOLLIE_CAPTURE_STATUS'                             => 'Status',
    'MOLLIE_CAPTURE_DESCRIPTION'                        => 'Bedrag om te innen',
    'MOLLIE_CAPTURE_AMOUNT'                             => 'Te innen bedrag',
    'MOLLIE_CC_CAPTURE_DIRECT'                          => 'Creditcardbedragen meteen innen',
    'MOLLIE_CC_CAPTURE_AUTH'                            => 'Creditcardbedragen autoriseren voor de inning',
    'MOLLIE_CC_CAPTURE_AUTOMATIC'                       => 'Creditcardbedragen automatisch innen',
    'MOLLIE_CAPTURE_DAYS'                               => 'CAutomatisch innen na',
    'MOLLIE_CAPTURE_ID'                                 => 'Mollie Capture ID',
    'MOLLIE_CAPTURE_SUCCESSFUL'                         => 'Bedrag succesvol geïnd',
    'MOLLIE_CREDITCARD_CAPTURE'                         => 'In methode',
    'MOLLIE_CREDITCARD_CAPTURE_METHOD_HELP'             => 'Deze optie bepaalt welke betaalmethode wordt gebruikt.<br><strong>Creditcardbedragen autoriseren voor de inning</strong>:Het bedrag wordt geautoriseerd en u moet het bedrag handmatig vastleggen via het mollie tabblat in de bestelling sectie of via de bijbehorende cronjob.<br><strong>Creditcardbedragen direct innen:</strong> Het bedrag wordt direct geïnd.<br><strong>Creditcardbedragen automatisch innen:</strong> Het bedrag wordt na X dagen automatisch door mollie geïnd.',
    'HELP_SHOP_MODULE_sMollieCronCaptureOrdersActive'   => 'Deze optie werkt alleen als je <strong>Creditcardbedragen autoriseren voor de inning</strong> als methode hebt geselecteerd. Deze cronjob legt orders vast die zijn uitgevoerd en die je normaal gesproken handmatig zou moeten vastleggen.',
    'MOLLIE_PAYMENT_HISTORY'                            => 'Betalingsgeschiedenis',
    'MOLLIE_PAYMENT_HISTORY_TYPE'                       => 'Type',
    'MOLLIE_PAYMENT_HISTORY_STATUS'                     => 'Status',
    'MOLLIE_PAYMENT_HISTORY_TIMESTAMP'                  => 'Timestamp',
    'MOLLIE_PAYMENT_HISTORY_TYPE_IS_PAYMENT'            => 'payment',
);
