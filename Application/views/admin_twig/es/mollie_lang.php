<?php

$sLangName = "Spanish";
// -------------------------------
// RESOURCE IDENTITFIER = STRING
// -------------------------------
$aLang = array(
    'charset'                                           => 'UTF-8',

    /* SETTINGS */
    'SHOP_MODULE_GROUP_MOLLIE_GENERAL'                  => 'Configuración básica',
    'SHOP_MODULE_sMollieMode'                           => 'Modo',
    'SHOP_MODULE_sMollieMode_live'                      => 'Activa',
    'SHOP_MODULE_sMollieMode_test'                      => 'Prueba',
    'SHOP_MODULE_sMollieTestToken'                      => 'Clave de API de prueba',
    'SHOP_MODULE_sMollieLiveToken'                      => 'Clave de API activa',
    'SHOP_MODULE_blMollieShowIcons'                     => 'Mostrar iconos',
    'SHOP_MODULE_blMollieLogTransactionInfo'            => 'Registrar resultado de la gestión de la transacción',
    'SHOP_MODULE_blMollieRemoveDeactivatedMethods'      => 'Eliminar tipos de pago desactivados',
    'SHOP_MODULE_blMollieRemoveByBillingCountry'        => 'Remove not supported payment types by billing country',
    'SHOP_MODULE_GROUP_MOLLIE_STATUS_MAPPING'           => 'Estado asignación',
    'SHOP_MODULE_sMollieStatusPending'                  => 'Estado pendiente',
    'SHOP_MODULE_sMollieStatusProcessing'               => 'Estado procesando',
    'SHOP_MODULE_sMollieStatusCancelled'                => 'Estado cancelado',
    'SHOP_MODULE_GROUP_MOLLIE_CRONJOBS'                 => 'Cronjobs',
    'SHOP_MODULE_sMollieCronOrderExpiryActive'          => 'Cronjob «Cancelar automáticamente pedidos no pagados» activo',
    'SHOP_MODULE_sMollieCronFinishOrdersActive'         => 'Cronjob «Finalización de pedidos pagados pero no terminados» activo',
    'SHOP_MODULE_sMollieCronSecondChanceActive'         => 'Cronjob «Envío de correo electrónico de recordatorio de pago» activo',
    'SHOP_MODULE_iMollieCronSecondChanceTimeDiff'       => 'Plazo después del cual se envía el correo electrónico de recordatorio de pago',
    'SHOP_MODULE_sMollieCronOrderShipmentActive'        => 'Cronjob «Transmisión del estado del envío a Mollie» activo',
    'SHOP_MODULE_GROUP_MOLLIE_PAYMENTLOGOS'             => 'Logotipos de pago alternativo',
    'SHOP_MODULE_GROUP_MOLLIE_APPLEPAY'                 => 'Apple Pay',
    'SHOP_MODULE_blMollieApplePayButtonOnBasket'        => 'Mostrar el botón de Apple Pay en la página de la cesta',
    'SHOP_MODULE_blMollieApplePayButtonOnDetails'       => 'Mostrar el botón de Apple Pay en la página de detalles del producto',

    'HELP_SHOP_MODULE_blMollieShowIcons'                => 'Mostrar iconos de pago en la finalización de la compra',
    'HELP_SHOP_MODULE_blMollieLogTransactionInfo'       => 'El archivo de registro se encuentra aquí: SHOPROOT/log/MollieTransactions.log',
    'HELP_SHOP_MODULE_blMollieRemoveDeactivatedMethods' => 'Elimina los tipos de pago de la selección de pagos del frontend que no están activados en el panel de control de Mollie y que, por tanto, darían lugar a un error.',
    'HELP_SHOP_MODULE_blMollieRemoveByBillingCountry'   => 'Removes the payment types from the frontend payment selection which are not supported for the billing country given by the customer and thus would result in an error.',
    'HELP_SHOP_MODULE_sMollieStatusPending'             => 'Establecer el estado del pedido antes de que el cliente sea redirigido a la pasarela de pago',
    'HELP_SHOP_MODULE_sMollieStatusProcessing'          => 'Establecer el estado del pedido para los pagos completados',
    'HELP_SHOP_MODULE_sMollieStatusCancelled'           => 'Establecer el estado del pedido para los pedidos cancelados',
    'HELP_SHOP_MODULE_sMollieCronOrderExpiryActive'     => 'Para que este cronjob funcione, además de esta casilla hay que asegurarse de que el cronjob de Mollie está configurado correctamente. Puede encontrar información sobre cómo configurar el cronjob en el README.md de este módulo.',
    'HELP_SHOP_MODULE_sMollieCronFinishOrdersActive'    => 'Este cronjob tiene la función de finalizar los pedidos en los que el cliente ha pagado correctamente pero supuestamente no ha vuelto a la tienda para completar el proceso de pedido. El cronjob solo finaliza los pedidos de las últimas 24 horas, para no modificar los pedidos que probablemente hayan sido gestionados manualmente.<br><br>Para que este cronjob funcione, además de esta casilla hay que asegurarse de que el cronjob de Mollie está configurado correctamente. Puede encontrar información sobre cómo configurar el cronjob en el README.md de este módulo.',
    'HELP_SHOP_MODULE_sMollieCronSecondChanceActive'    => 'Para que este cronjob funcione, además de esta casilla hay que asegurarse de que el cronjob de Mollie está configurado correctamente. Puede encontrar información sobre cómo configurar el cronjob en el README.md de este módulo.',
    'HELP_SHOP_MODULE_sMollieCronOrderShipmentActive'   => 'Este cronjob solo es necesario si el estado del envío en su tienda es establecido por un servicio externo y NO por el botón «Enviar ahora». Para que este cronjob funcione, además de esta casilla hay que asegurarse de que el cronjob de Mollie está configurado correctamente. Puede encontrar información sobre cómo configurar el cronjob en el README.md de este módulo.',

    'MOLLIE_YES'                                        => 'Sí',
    'MOLLIE_NO'                                         => 'No',
    'MOLLIE_DAY'                                        => 'día',
    'MOLLIE_DAYS'                                       => 'días',
    'MOLLIE_IS_MOLLIE'                                  => 'Este es un tipo de pago de Mollie',
    'MOLLIE_IS_METHOD_ACTIVATED'                        => '¡Este tipo de pago no está activado en su cuenta Mollie!',
    'MOLLIE_TOKEN_NOT_CONFIGURED'                       => '¡Su token de Mollie todavía no está configurado!',
    'MOLLIE_CONFIG_METHOD'                              => 'Método API',
    'MOLLIE_DUE_DATE'                                   => 'Días de vencimiento',
    'MOLLIE_BANKTRANSFER_PENDING'                       => 'Estado pendiente',
    'MOLLIE_LIST_STYLE'                                 => 'Estilo de la lista de entidades emisoras',
    'MOLLIE_LIST_STYLE_DROPDOWN'                        => 'Desplegable',
    'MOLLIE_LIST_STYLE_IMAGES'                          => 'Lista con imágenes',
    'MOLLIE_LIST_STYLE_DONT_SHOW'                       => 'No mostrar lista de entidades emisoras',
    'MOLLIE_ADD_QR'                                     => 'Añadir opción de código QR en la lista de entidades emisoras',
    'MOLLIE_ORDER_REFUND'                               => 'Mollie',
    'MOLLIE_ADMIN'                                      => 'Mollie',
    'MOLLIE_ADMIN_API_LOGS'                             => 'Registros API',
    'MOLLIE_ADMIN_API_LOGS_MAIN'                        => 'Registros',
    'MOLLIE_ADMIN_API_LOGS_SELECT_ENTRY'                => 'Seleccione un artículo de la lista anterior.',
    'MOLLIE_REFUND_SUCCESSFUL'                          => 'El reembolso se ha realizado con éxito.',
    'MOLLIE_NO_MOLLIE_PAYMENT'                          => 'Este pedido no fue pagado con Mollie.',
    'MOLLIE_REFUND_QUANTITY'                            => 'Cantidad de reembolso',
    'MOLLIE_REFUND_AMOUNT'                              => 'Importe del reembolso',
    'MOLLIE_TYPE_SELECT_LABEL'                          => 'Reembolsado por',
    'MOLLIE_QUANTITY'                                   => 'Cantidad',
    'MOLLIE_NOTICE'                                     => 'Aviso',
    'MOLLIE_AMOUNT'                                     => 'Importe',
    'MOLLIE_HEADER_ORDERED'                             => 'Pedido',
    'MOLLIE_HEADER_REFUNDED'                            => 'Reembolsado',
    'MOLLIE_HEADER_SINGLE_PRICE'                        => 'Precio unitario',
    'MOLLIE_SHIPPINGCOST'                               => "Gastos de envío",
    'MOLLIE_PAYMENTTYPESURCHARGE'                       => "Recargo de pago",
    'MOLLIE_WRAPPING'                                   => "Envoltura para regalo",
    'MOLLIE_GIFTCARD'                                   => "Tarjeta de felicitación",
    'MOLLIE_VOUCHER'                                    => 'Vale',
    'MOLLIE_DISCOUNT'                                   => 'Descuento',
    'MOLLIE_REFUND_SUBMIT'                              => 'Ejecutar reembolso',
    'MOLLIE_FULL_REFUND'                                => 'Reembolso total',
    'MOLLIE_PARTIAL_REFUND'                             => 'Reembolso parcial',
    'MOLLIE_FULL_REFUND_TEXT'                           => 'Ejecutar reembolso total con el importe de',
    'MOLLIE_FULL_REFUND_NOT_AVAILABLE'                  => 'Ya no es posible hacer un reembolso total de este pedido, ya hubo reembolsos parciales.',
    'MOLLIE_REFUND_DESCRIPTION'                         => 'Notificación de reembolso',
    'MOLLIE_REFUND_DESCRIPTION_PLACEHOLDER'             => 'opcional - máx. 140 caracteres',
    'MOLLIE_REFUND_FREE_AMOUNT'                         => 'Importe del reembolso gratuito',
    'MOLLIE_REFUND_FREE_1'                              => 'Del precio total de',
    'MOLLIE_REFUND_FREE_2'                              => ',',
    'MOLLIE_REFUND_FREE_3'                              => 'ya han sido reembolsados. Importe reembolsable restante',
    'MOLLIE_ORDER_NOT_REFUNDABLE'                       => 'Este pedido ya ha sido reembolsado por completo.',
    'MOLLIE_REFUND_REMAINING'                           => 'Reembolso de la suma restante',
    'MOLLIE_VOUCHERS_EXISTING'                          => 'Este pedido incluye vales o descuentos. Estos no pueden ser reembolsados parcialmente, sino que deben ser gestionados con el reembolso total o restante.',
    'MOLLIE_CREDITCARD_DATA_INPUT'                      => 'Datos de la tarjeta de crédito',
    'MOLLIE_CREDITCARD_DATA_INPUT_HELP'                 => 'Esta opción define dónde el cliente debe introducir los datos de la tarjeta de crédito.<br>El método recomendado es "Entrada en el checkout de la tienda con entradas de formulario iframe".',
    'MOLLIE_CC_HOSTED_CHECKOUT'                         => 'Entrada en sitio web externo de Mollie',
    'MOLLIE_CC_CHECKOUT_INTEGRATION'                    => 'Entrada en el checkout de la tienda con entradas de formulario iframe',
    'MOLLIE_APPLE_PAY_BUTTON_ONLY_LIVE_MODE'            => 'Nota: el pago con el botón de Apple Pay solo está disponible en el modo live.',
    'MOLLIE_APIKEY_CONNECTED'                           => 'Conexión correcta',
    'MOLLIE_APIKEY_DISCONNECTED'                        => 'Conexión incorrecta',
    'MOLLIE_ORDER_EXPIRY'                               => 'Cancelación automática al cabo de',
    'MOLLIE_ORDER_EXPIRY_DAYS'                          => 'días',
    'MOLLIE_DEACTIVATED'                                => 'Desactivada',
    'MOLLIE_ORDER_EXPIRY_HELP'                          => 'El módulo de Mollie tiene la función de cancelar los pedidos automáticamente después del plazo que usted haya configurado aquí. Esto se aplica a los pedidos en el «Estado pendiente» configurado por usted. El cronjob de Mollie tiene que estar configurado para que esto funcione. Puede encontrar información sobre cómo configurar el cronjob en el README.md de este módulo.',
    'MOLLIE_ALTLOGO_ERROR'                              => 'Se ha producido un error durante la carga del archivo. Por favor, compruebe el permiso de la carpeta SHOPROOT/vendor/mollie/mollie-oxid7/assets/img/',
    'MOLLIE_ALTLOGO_LABEL'                              => 'Logotipo alternativo',
    'MOLLIE_ALTLOGO_FILENAME'                           => 'Nombre del archivo',
    'MOLLIE_ALTLOGO_DELETE'                             => 'Eliminar logotipo',
    'MOLLIE_SINGLE_CLICK'                               => 'Pagos con un solo clic activados',
    'MOLLIE_SINGLE_CLICK_HELP'                          => 'En un pago con un solo clic, los datos de pago del cliente se guardan en Mollie, de modo que el cliente no tiene que volver a introducirlos la próxima vez que haga un pedido con tarjeta de crédito. Esto tiene que ser confirmado explícitamente por el cliente al finalizar la compra. Esto solo tiene efecto si el modo de datos de la tarjeta de crédito está configurado como «Entrada en sitio web externo de Mollie»',
    'MOLLIE_PAYMENT_API_LINK_1'                         => 'Para más información sobre la API de pagos haga clic',
    'MOLLIE_PAYMENT_API_LINK_2'                         => 'aquí',
    'MOLLIE_ORDER_API_LINK_1'                           => 'Para más información sobre la API de pedidos haga clic',
    'MOLLIE_ORDER_API_LINK_2'                           => 'aquí',
    'MOLLIE_CONNECTION_DATA'                            => 'Acceda aquí a sus datos de conexión:',
    'MOLLIE_ORDER_PAYMENT_URL'                          => 'Enlace a la finalización del pago',
    'MOLLIE_SEND_SECOND_CHANCE_MAIL'                    => 'Enviar correo electrónico de segunda oportunidad',
    'MOLLIE_SECOND_CHANCE_MAIL_ALREADY_SENT'            => 'El correo electrónico ya ha sido enviado.',
    'MOLLIE_SUBSEQUENT_ORDER_COMPLETION'                => 'Posterior finalización del pedido',
    'MOLLIE_PAYMENT_DESCRIPTION'                        => 'Descripción del pago',
    'MOLLIE_PAYMENT_DESCRIPTION_HELP'                   => 'Esto se mostrará a su cliente en su tarjeta o extracto bancario cuando sea posible.<br><br>Puede utilizar los siguientes parámetros:<br>{orderId}<br>{orderNumber}<br>{storeName}<br>{customer.firstname}<br>{customer.lastname}<br>{customer.company}',
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
    'MOLLIE_PAYMENT_DETAILS'                            => 'Payment details',
    'MOLLIE_PAYMENT_TYPE'                               => 'Payment type',
    'MOLLIE_TRANSACTION_ID'                             => 'Mollie Transaction ID',
    'MOLLIE_EXTERNAL_TRANSACTION_ID'                    => 'External Transaction ID',
    'MOLLIE_PAYMENT_DISABLED_ACTIVATION'                => 'Este método de pago Mollie ya no se puede activar, ya que se eliminará en breve!',
);
