@extends('layouts.app')


@section('content')


    <div class="container">

        <table class="table table-condensed">
        <thead>
        <tr>
            <td>Nombre</td>
            <td>Descripción</td>
        </tr>
        </thead>
        <tbody>


        <tr><td>@BCENOTE 			</td><td>Selection Tree Leaf Notes      </td></tr>
        <tr><td>@BCESETT 			</td><td>Copy Express Standard Setting	</td></tr>
        <tr><td>@BFEXTDBVERSION 	</td><td>Extension DB versions          </td></tr>
        <tr><td>@BOEMAIL BO: 		</td><td>Default Email Setttings        </td></tr>
        <tr><td>@BOEXCEL BO: 		</td><td>Default Excel Setttings        </td></tr>
        <tr><td>@BOOADM BO: 		</td><td>Outlook Company Settings       </td></tr>
        <tr><td>@BOODFS BO: 		</td><td>Default Setttings              </td></tr>
        <tr><td>@BOOSTP BO: 		</td><td>Snapshot Templates             </td></tr>
        <tr><td>@BOQUOT BO: 		</td><td>Info for Quot/Setttings        </td></tr>
        <tr><td>@BOSETTINGS BO: 	</td><td>Info for Sync Settings         </td></tr>
        <tr><td>@BOSTP1 BO: 		</td><td>Snapshot Template Queries      </td></tr>
        <tr><td>@BOSYNCLOG BO: 		</td><td>Info for Sync Log/History      </td></tr>
        <tr><td>@BOWORD BO: 		</td><td>Default Word Setttings         </td></tr>
        <tr><td>@FAMILAS 			</td><td>Familas                        </td></tr>
        <tr><td>@MARCA 				</td><td>Marca                          </td></tr>
        <tr><td>@SECTOR 			</td><td>Sector                         </td></tr>
        <tr><td>@SUBGRUPO 			</td><td>Sub Grupo Clientes             </td></tr>
        <tr><td>XRDBV XLR 			</td><td>company DB version             </td></tr>
        <tr><td>XROBJ XLR: 			</td><td>Objetos informe empresarial	</td></tr>
        <tr><td>XRREL XLR: 			</td><td>Objetos informe empresarial    </td></tr>
        <tr><td>XRUDF XLR 			</td><td>company UDF                    </td></tr>
        <tr><td>XRXLS XLR 			</td><td>company XLS                    </td></tr>
        <tr><td>XRXML XLR 			</td><td>company XML                    </td></tr>
        <tr><td>AACP 	</td><td>Períodos log categoría																			                                </td></tr>
        <tr><td>AACT 	</td><td>Cuenta de mayor – Historial                                                                                                    </td></tr>
        <tr><td>AAD1 	</td><td>Log extensión administración                                                                                                   </td></tr>
        <tr><td>AADM 	</td><td>Administración: Log                                                                                                            </td></tr>
        <tr><td>ABO1 	</td><td>Código operación banco externo: Líneas – Log                                                                                   </td></tr>
        <tr><td>ABOC 	</td><td>Código operación banco externo: Log                                                                                            </td></tr>
        <tr><td>ABT1 	</td><td>Código interno de operación bancaria: Cuentas – Log                                                                            </td></tr>
        <tr><td>ABTC 	</td><td>Códigos internos de operación bancaria: Log                                                                                    </td></tr>
        <tr><td>ACH1 	</td><td>Cheques para pago – Líneas – Historial                                                                                         </td></tr>
        <tr><td>ACHO 	</td><td>Cheques para pago – Historial                                                                                                  </td></tr>
        <tr><td>ACPR 	</td><td>Personas de contacto – Historial                                                                                               </td></tr>
        <tr><td>ACR1 	</td><td>Direcciones de socios de negocios – Historial                                                                                  </td></tr>
        <tr><td>ACR2 	</td><td>Bussiness Partners – Payment Methods-History                                                                                   </td></tr>
        <tr><td>ACR3 	</td><td>Cuentas asociadas de socio de negocios – Historial                                                                             </td></tr>
        <tr><td>ACR4 	</td><td>Indicadores de retención permitidos para interlocutor comercial – Historial                                                    </td></tr>
        <tr><td>ACR5 	</td><td>BP Payment Dates                                                                                                               </td></tr>
        <tr><td>ACRB 	</td><td>Cuentas bancarias de socio de negocios – Historial                                                                             </td></tr>
        <tr><td>ACRD 	</td><td>Socios de negocios – Historial                                                                                                 </td></tr>
        <tr><td>ADM1 	</td><td>Extensión administración                                                                                                       </td></tr>
        <tr><td>ADO1 	</td><td>Factura de deudor (líneas) – Historial                                                                                         </td></tr>
        <tr><td>ADO10 	</td><td>Factura de deudores – Estructura de fila – Historial                                                                           </td></tr>
        <tr><td>ADO11 	</td><td>Ampliación de pagos efectuados                                                                                                 </td></tr>
        <tr><td>ADO2 	</td><td>Factura de deudor – Portes – Líneas                                                                                            </td></tr>
        <tr><td>ADO3 	</td><td>Factura de deudor – Portes – Historial                                                                                         </td></tr>
        <tr><td>ADO4 	</td><td>Documentos – Impuesto – Historial                                                                                              </td></tr>
        <tr><td>ADO5 	</td><td>Retención de impuestos: Historial                                                                                              </td></tr>
        <tr><td>ADO6 	</td><td>Historial de documentos – Plazos                                                                                               </td></tr>
        <tr><td>ADO7 	</td><td>Paquetes de entrega – Historial                                                                                                </td></tr>
        <tr><td>ADO8 	</td><td>Artículos en paquete – Historial                                                                                               </td></tr>
        <tr><td>ADO9 	</td><td>Factura de deudor (líneas) – Historial                                                                                         </td></tr>
        <tr><td>ADOC 	</td><td>Factura: Historial                                                                                                             </td></tr>
        <tr><td>AFPR 	</td><td>Log de período de contabilización                                                                                              </td></tr>
        <tr><td>AINS 	</td><td>Tarjeta de equipo de cliente – Historial                                                                                       </td></tr>
        <tr><td>AIT1 	</td><td>Artículo – Precios – Historial                                                                                                 </td></tr>
        <tr><td>AITB 	</td><td>Grupos artículo: Historial                                                                                                     </td></tr>
        <tr><td>AITM 	</td><td>Artículos – Historial                                                                                                          </td></tr>
        <tr><td>AITT 	</td><td>Árbol producto: Historial                                                                                                      </td></tr>
        <tr><td>AITW 	</td><td>Artículos – Almacén: Historial                                                                                                 </td></tr>
        <tr><td>AJD1 	</td><td>Registros en diario – Historial – Líneas                                                                                       </td></tr>
        <tr><td>AJD2 	</td><td>Asiento: Información de retención de impuestos                                                                                 </td></tr>
        <tr><td>AJDT 	</td><td>Registro en el diario – Historial                                                                                              </td></tr>
        <tr><td>AKL1 	</td><td>Lista de picking – Filas – Historial                                                                                           </td></tr>
        <tr><td>ALR2 	</td><td>Línea de datos de mensaje dinámica                                                                                             </td></tr>
        <tr><td>ALR3 	</td><td>Línea de datos de mensaje dinámica                                                                                             </td></tr>
        <tr><td>AMD1 	</td><td>Líneas de informe de diferencias de importe                                                                                    </td></tr>
        <tr><td>AMR1 	</td><td>Revaloración de stocks – Historial – Filas                                                                                     </td></tr>
        <tr><td>AMR2 	</td><td>Filas FIFO de revalorización de stock (archivo)                                                                                </td></tr>
        <tr><td>AMRV 	</td><td>Revaloración de stocks – Historial                                                                                             </td></tr>
        <tr><td>APKL 	</td><td>Lista de picking – Historial                                                                                                   </td></tr>
        <tr><td>ARC1 	</td><td>Pago recibido – Cheques – Historial                                                                                            </td></tr>
        <tr><td>ARC2 	</td><td>Pago recibido – Facturas – Historial                                                                                           </td></tr>
        <tr><td>ARC3 	</td><td>Historial de documentos de tarjeta                                                                                             </td></tr>
        <tr><td>ARC4 	</td><td>Pago recibido – Lista de cuentas – Historial                                                                                   </td></tr>
        <tr><td>ARC5 	</td><td>Reciept log vat adjustment-History                                                                                             </td></tr>
        <tr><td>ARC6 	</td><td>Pagos: Filas de retención de impuestos – Historial                                                                             </td></tr>
        <tr><td>ARC7 	</td><td>Pagos: Importe del impuesto por documento – Historial                                                                          </td></tr>
        <tr><td>ARCT 	</td><td>Pago recibido – Historial                                                                                                      </td></tr>
        <tr><td>ARI1 	</td><td>Add-on                                                                                                                         </td></tr>
        <tr><td>ASC1 	</td><td>Soluciones de llamada de servicio – Historial                                                                                  </td></tr>
        <tr><td>ASC2 	</td><td>Gastos de inventario de llamada de servicio – Historial                                                                        </td></tr>
        <tr><td>ASC3 	</td><td>Desplazamiento de llamada de servicio/Gastos de trabajo – Historial                                                            </td></tr>
        <tr><td>ASC4 	</td><td>Desplazamiento de llamada de servicio/Gastos de trabajo – Historial                                                            </td></tr>
        <tr><td>ASC5 	</td><td>Actividades de llamada de servicio – Historial                                                                                 </td></tr>
        <tr><td>ASCL 	</td><td>Historial                                                                                                                      </td></tr>
        <tr><td>ATC1 	</td><td>Anexos: Filas                                                                                                                  </td></tr>
        <tr><td>ATT1 	</td><td>Lista de materiales: Artículos subordinados – Historial                                                                        </td></tr>
        <tr><td>ATX1 	</td><td>Factura de impuestos de ventas – Filas1                                                                                        </td></tr>
        <tr><td>ATXI 	</td><td>Factura de impuestos – Historial                                                                                               </td></tr>
        <tr><td>AUSR 	</td><td>Usuarios de archivo – Historial                                                                                                </td></tr>
        <tr><td>AWHS 	</td><td>Almacenes – Historial                                                                                                          </td></tr>
        <tr><td>BGT1 	</td><td>Presupuesto – Líneas                                                                                                           </td></tr>
        <tr><td>BNK1 	</td><td>Extracto bancario – Lista de documentos                                                                                        </td></tr>
        <tr><td>BNK2 	</td><td>Extracto bancario – Lista de recomendaciones                                                                                   </td></tr>
        <tr><td>BOC1 	</td><td>Código de operación bancaria externa: Líneas                                                                                   </td></tr>
        <tr><td>BOE1 	</td><td>Efecto para pago – Líneas                                                                                                      </td></tr>
        <tr><td>BOT1 	</td><td>Operaciones de letras                                                                                                          </td></tr>
        <tr><td>BOX1 	</td><td>Definición casilla: Filas                                                                                                      </td></tr>
        <tr><td>BOX2 	</td><td>Casilla de definición: Cuentas                                                                                                 </td></tr>
        <tr><td>BOX3 	</td><td>Casilla de definición: Elección                                                                                                </td></tr>
        <tr><td>BTC1 	</td><td>Códigos internos de operación bancaria – Cuentas                                                                               </td></tr>
        <tr><td>BTF1 	</td><td>Documento preliminar: Líneas                                                                                                   </td></tr>
        <tr><td>BTF2 	</td><td>Documento preliminar: Info.retención de impuestos                                                                              </td></tr>
        <tr><td>CASE 	</td><td>Recon.interna upgrade 2007A                                                                                                    </td></tr>
        <tr><td>CASE1 	</td><td>Recon.interna upgrade 2007A                                                                                                    </td></tr>
        <tr><td>CASEX 	</td><td>Recon.interna upgrade 2007A                                                                                                    </td></tr>
        <tr><td>CCPD 	</td><td>Cierre del período                                                                                                             </td></tr>
        <tr><td>CCRC 	</td><td>Crear sociedad nueva                                                                                                           </td></tr>
        <tr><td>CDC1 	</td><td>Descuento por pronto pago – Filas                                                                                              </td></tr>
        <tr><td>CFH1 	</td><td>Informe del estado de flujo de caja: Historial – Filas                                                                         </td></tr>
        <tr><td>CHD1 	</td><td>Cheque para borrador de pago: Líneas                                                                                           </td></tr>
        <tr><td>CHO1 	</td><td>Cheques para pago – Líneas                                                                                                     </td></tr>
        <tr><td>CHO2 	</td><td>Cheques para pago: Imprimir status                                                                                             </td></tr>
        <tr><td>CIFV 	</td><td>Revalorización inventario FIFO                                                                                                 </td></tr>
        <tr><td>CIN1 	</td><td>Factura de corrección – Líneas                                                                                                 </td></tr>
        <tr><td>CIN10 	</td><td>Factura corrección: Estructura filas                                                                                           </td></tr>
        <tr><td>CIN2 	</td><td>Líneas de factura de corrección: Portes – Filas                                                                                </td></tr>
        <tr><td>CIN3 	</td><td>Factura de corrección de deudores: Portes                                                                                      </td></tr>
        <tr><td>CIN4 	</td><td>Factura de corrección – Importe del impuesto por documento                                                                     </td></tr>
        <tr><td>CIN5 	</td><td>Factura de corrección de deudores: Retención de impuestos                                                                      </td></tr>
        <tr><td>CIN6 	</td><td>Factura de corrección – Plazos                                                                                                 </td></tr>
        <tr><td>CIN7 	</td><td>Paquetes de entrega – Factura de corrección                                                                                    </td></tr>
        <tr><td>CIN8 	</td><td>Artículos en paquete – Factura de corrección                                                                                   </td></tr>
        <tr><td>CIN9 	</td><td>Factura de corrección – Líneas                                                                                                 </td></tr>
        <tr><td>CLND 	</td><td>Opciones de diario                                                                                                             </td></tr>
        <tr><td>CLNU 	</td><td>Visualizar definiciones – Diario                                                                                               </td></tr>
        <tr><td>CPI1 	</td><td>Factura de corrección de acreedores – Líneas                                                                                   </td></tr>
        <tr><td>CPI10 	</td><td>Factura de corrección de acreedores: Estructura de fila                                                                        </td></tr>
        <tr><td>CPI12 	</td><td>Factura de corrección acreedores: Extensión de impuestos                                                                       </td></tr>
        <tr><td>CPI2 	</td><td>Líneas de la factura de corrección de acreedores: Portes – Filas                                                               </td></tr>
        <tr><td>CPI3 	</td><td>Factura de corrección de acreedores: Portes                                                                                    </td></tr>
        <tr><td>CPI4 	</td><td>Factura de corrección de acreedores – Importe del impuesto por documento                                                       </td></tr>
        <tr><td>CPI5 	</td><td>Datos de retención de impuestos                                                                                                </td></tr>
        <tr><td>CPI6 	</td><td>Historial de documentos – Plazos                                                                                               </td></tr>
        <tr><td>CPI7 	</td><td>Factura de corrección acreedores: Entregar paquete                                                                             </td></tr>
        <tr><td>CPI8 	</td><td>Factura de corrección acreedores: Artículos en paquete                                                                         </td></tr>
        <tr><td>CPI9 	</td><td>Factura de corrección acreedores: Detalles de documento base                                                                   </td></tr>
        <tr><td>CPV1 	</td><td>Anulación de la factura de acreedores de corrección: Filas                                                                     </td></tr>
        <tr><td>CPV10 	</td><td>Factura de deudores – Estructura de fila                                                                                       </td></tr>
        <tr><td>CPV12 	</td><td>Factura de corrección acreedores: Extensión de impuestos                                                                       </td></tr>
        <tr><td>CPV2 	</td><td>Factura de corrección de deudores – Porte – Filas                                                                              </td></tr>
        <tr><td>CPV3 	</td><td>Factura de corrección de deudores: Portes                                                                                      </td></tr>
        <tr><td>CPV4 	</td><td>Anulación de factura de corrección de acreedores – Importe del impuesto por documento                                          </td></tr>
        <tr><td>CPV5 	</td><td>Anulación de factura de corrección de acreedores – Retención de impuestos                                                      </td></tr>
        <tr><td>CPV6 	</td><td>Historial de documentos – Plazos                                                                                               </td></tr>
        <tr><td>CPV7 	</td><td>Factura deudores: Entrega de paquetes                                                                                          </td></tr>
        <tr><td>CPV8 	</td><td>Anulación de factura de corrección acreedores: Artículos en paquete                                                            </td></tr>
        <tr><td>CPV9 	</td><td>Documentos base: Factura acreedores                                                                                            </td></tr>
        <tr><td>CRD1 	</td><td>Socios de negocios – Direcciones                                                                                               </td></tr>
        <tr><td>CRD2 	</td><td>Bussiness Partners – Payment Methods                                                                                           </td></tr>
        <tr><td>CRD3 	</td><td>Cuenta asociada SN                                                                                                             </td></tr>
        <tr><td>CRD4 	</td><td>Indicadores de retención permitidos para IC                                                                                    </td></tr>
        <tr><td>CRD5 	</td><td>BP Payment Dates                                                                                                               </td></tr>
        <tr><td>CRD6 	</td><td>Nombre de pagador SN                                                                                                           </td></tr>
        <tr><td>CRD7 	</td><td>ID fiscal para datos maestros de SN                                                                                            </td></tr>
        <tr><td>CSI1 	</td><td>Factura de corrección de deudores – Líneas                                                                                     </td></tr>
        <tr><td>CSI10 	</td><td>Factura de corrección deudores: Estructura de filas                                                                            </td></tr>
        <tr><td>CSI12 	</td><td>Factura de corrección deudores: Extensión de impuestos                                                                         </td></tr>
        <tr><td>CSI2 	</td><td>Factura de corrección de deudores: Portes                                                                                      </td></tr>
        <tr><td>CSI3 	</td><td>Factura de corrección de deudores: Portes                                                                                      </td></tr>
        <tr><td>CSI4 	</td><td>Importe del impuesto por documento                                                                                             </td></tr>
        <tr><td>CSI5 	</td><td>Factura de corrección de deudores: Retención de impuestos                                                                      </td></tr>
        <tr><td>CSI6 	</td><td>Historial de documentos – Plazos                                                                                               </td></tr>
        <tr><td>CSI7 	</td><td>Paquetes de entrega – Factura de deudores                                                                                      </td></tr>
        <tr><td>CSI8 	</td><td>Factura de deudores – Artículos en paquete                                                                                     </td></tr>
        <tr><td>CSI9 	</td><td>Factura de corrección de deudores: Documentos base                                                                             </td></tr>
        <tr><td>CSTN 	</td><td>ID de estación de trabajo                                                                                                      </td></tr>
        <tr><td>CSV1 	</td><td>Anulación de factura de corrección de deudores – Filas                                                                         </td></tr>
        <tr><td>CSV10 	</td><td>Anulación de la factura de corrección deudores: Estructura de fila                                                             </td></tr>
        <tr><td>CSV12 	</td><td>Anulación de la factura de corrección deudores: Extensión de impuestos                                                         </td></tr>
        <tr><td>CSV2 	</td><td>Anulación de factura de corrección de deudores: Portes                                                                         </td></tr>
        <tr><td>CSV3 	</td><td>Anulación de factura de corrección de deudores: Portes                                                                         </td></tr>
        <tr><td>CSV4 	</td><td>Importe del impuesto por documento                                                                                             </td></tr>
        <tr><td>CSV5 	</td><td>Anulación de factura de corrección de deudores – Retención de impuestos                                                        </td></tr>
        <tr><td>CSV6 	</td><td>Historial de documentos – Plazos                                                                                               </td></tr>
        <tr><td>CSV7 	</td><td>Anulación de factura de corrección deudores: Paquetes de entrega                                                               </td></tr>
        <tr><td>CSV8 	</td><td>Anulación de la factura de corrección deudores: Artículos en paquete                                                           </td></tr>
        <tr><td>CSV9 	</td><td>Anulación de la factura de corrección deudores: Documentos base                                                                </td></tr>
        <tr><td>CTG1 	</td><td>Plazo layout                                                                                                                   </td></tr>
        <tr><td>CTR1 	</td><td>Contrato de servicios – Partidas                                                                                               </td></tr>
        <tr><td>CUMF 	</td><td>Carpeta                                                                                                                        </td></tr>
        <tr><td>CUMI 	</td><td>Mis artículos de menú                                                                                                          </td></tr>
        <tr><td>DBCN 	</td><td>Parámetros conexión base de datos                                                                                              </td></tr>
        <tr><td>DDT1 	</td><td>Jerarquía de deducción de retención de impuestos – Filas                                                                       </td></tr>
        <tr><td>DGP1 	</td><td>Lista de clientes                                                                                                              </td></tr>
        <tr><td>DGP2 	</td><td>Criterios selección ampliados                                                                                                  </td></tr>
        <tr><td>DGP3 	</td><td>Opciones de consolidación expandidas                                                                                           </td></tr>
        <tr><td>DLN1 	</td><td>Entrega – Líneas                                                                                                               </td></tr>
        <tr><td>DLN10 	</td><td>Entrega: Estructura filas                                                                                                      </td></tr>
        <tr><td>DLN12 	</td><td>Entrega: Extensión de impuestos                                                                                                </td></tr>
        <tr><td>DLN2 	</td><td>Notas de entrega: Portes – Filas                                                                                               </td></tr>
        <tr><td>DLN3 	</td><td>Notas de entrega: Portes                                                                                                       </td></tr>
        <tr><td>DLN4 	</td><td>Entrega – Importe del impuesto por documento                                                                                   </td></tr>
        <tr><td>DLN5 	</td><td>Entrega – Retención de impuestos                                                                                               </td></tr>
        <tr><td>DLN6 	</td><td>Entrega – Plazos                                                                                                               </td></tr>
        <tr><td>DLN7 	</td><td>Paquetes de entrega                                                                                                            </td></tr>
        <tr><td>DLN8 	</td><td>Artículos en paquete – Entrega                                                                                                 </td></tr>
        <tr><td>DLN9 	</td><td>Entrega – Documentos base                                                                                                      </td></tr>
        <tr><td>DMW1 	</td><td>Lista de consultas                                                                                                             </td></tr>
        <tr><td>DPI1 	</td><td>Anticipo de deudores – Filas                                                                                                   </td></tr>
        <tr><td>DPI10 	</td><td>Anticipo de deudores – Estructura de fila                                                                                      </td></tr>
        <tr><td>DPI11 	</td><td>Anticipo cuenta deudor: Anticipos efectuados                                                                                   </td></tr>
        <tr><td>DPI2 	</td><td>Anticipo de deudores: Fila – Portes                                                                                            </td></tr>
        <tr><td>DPI3 	</td><td>Anticipo de deudores: Portes                                                                                                   </td></tr>
        <tr><td>DPI4 	</td><td>Anticipo de deudores – Importe del impuesto por documento                                                                      </td></tr>
        <tr><td>DPI5 	</td><td>Anticipo de deudores – Retención de impuestos                                                                                  </td></tr>
        <tr><td>DPI6 	</td><td>Anticipo de deudores – Plazos                                                                                                  </td></tr>
        <tr><td>DPI7 	</td><td>Paquetes de entrega: Anticipo de deudores                                                                                      </td></tr>
        <tr><td>DPI8 	</td><td>Artículos en paquete – Anticipo de deudores                                                                                    </td></tr>
        <tr><td>DPI9 	</td><td>Anticipo, entrante – Documentos base                                                                                           </td></tr>
        <tr><td>DPICK 	</td><td>Fecha del responsable de picking                                                                                               </td></tr>
        <tr><td>DPO1 	</td><td>Anticipo de acreedores – Filas                                                                                                 </td></tr>
        <tr><td>DPO10 	</td><td>Anticipo de acreedores – Estructura de fila                                                                                    </td></tr>
        <tr><td>DPO2 	</td><td>Anticipo de acreedores: Portes – Filas                                                                                         </td></tr>
        <tr><td>DPO3 	</td><td>Anticipo de acreedores: Portes                                                                                                 </td></tr>
        <tr><td>DPO4 	</td><td>Anticipo de acreedores – Importe del impuesto por documento                                                                    </td></tr>
        <tr><td>DPO5 	</td><td>Anticipo de proveedores: Retención de impuestos                                                                                </td></tr>
        <tr><td>DPO6 	</td><td>Anticipo: Plazos                                                                                                               </td></tr>
        <tr><td>DPO7 	</td><td>Paquetes de entrega: Anticipo de acreedores                                                                                    </td></tr>
        <tr><td>DPO8 	</td><td>Artículos en paquete – Anticipo de acreedores                                                                                  </td></tr>
        <tr><td>DPO9 	</td><td>Anticipo, saliente – Documentos base                                                                                           </td></tr>
        <tr><td>DPS1 	</td><td>Depósito – Filas                                                                                                               </td></tr>
        <tr><td>DRF1 	</td><td>Borrador – Líneas                                                                                                              </td></tr>
        <tr><td>DRF10 	</td><td>Documento preliminar: Estructura filas                                                                                         </td></tr>
        <tr><td>DRF12 	</td><td>Documento preliminar: Extensión de impuestos                                                                                   </td></tr>
        <tr><td>DRF2 	</td><td>Líneas de borrador: Portes – Filas                                                                                             </td></tr>
        <tr><td>DRF3 	</td><td>Borrador: Portes                                                                                                               </td></tr>
        <tr><td>DRF4 	</td><td>Documentos preliminares – Impuesto                                                                                             </td></tr>
        <tr><td>DRF5 	</td><td>Documentos preliminares: Retención de impuestos                                                                                </td></tr>
        <tr><td>DRF6 	</td><td>Borradores de documento – Plazos                                                                                               </td></tr>
        <tr><td>DRF7 	</td><td>Paquetes de entrega – Documentos preliminares                                                                                  </td></tr>
        <tr><td>DRF8 	</td><td>Artículos en paquete – Documento preliminar                                                                                    </td></tr>
        <tr><td>DRF9 	</td><td>Documentos preliminares: Detalles doc.base                                                                                     </td></tr>
        <tr><td>DSC1 	</td><td>Cuentas de banco propio                                                                                                        </td></tr>
        <tr><td>DUT1 	</td><td>Dunning Term Array1                                                                                                            </td></tr>
        <tr><td>DWZ1 	</td><td>Asistente reclamaciones Array1: Filtro SN                                                                                      </td></tr>
        <tr><td>DWZ2 	</td><td>Dunning Wizard Array 2-Invoice Filter                                                                                          </td></tr>
        <tr><td>E874 	</td><td>Informe 835874 – Registro final                                                                                                </td></tr>
        <tr><td>EJB1 	</td><td>JAb-ERV asistente de personas firmantes                                                                                        </td></tr>
        <tr><td>EJB2 	</td><td>Lista docs.p.asistente ERV-JAb                                                                                                 </td></tr>
        <tr><td>EJD1 	</td><td>Lista de personas firmantes ERV-JAb                                                                                            </td></tr>
        <tr><td>EOY1 	</td><td>UDOs de fin de año                                                                                                             </td></tr>
        <tr><td>FCT1 	</td><td>Previsión de ventas: Filas                                                                                                     </td></tr>
        <tr><td>FLT1 	</td><td>Report 856 – Criterios de selección                                                                                            </td></tr>
        <tr><td>FML1 	</td><td>Declaración del parámetro de la fórmula de impuestos                                                                           </td></tr>
        <tr><td>FRC1 	</td><td>Ampliar categorías para informe financiero                                                                                     </td></tr>
        <tr><td>GFL1 	</td><td>Reglas filtro trama                                                                                                            </td></tr>
        <tr><td>GFL2 	</td><td>Nombre filtro trama                                                                                                            </td></tr>
        <tr><td>H856 	</td><td>Informe 857 – Registro 70                                                                                                      </td></tr>
        <tr><td>H874 	</td><td>Informe 835874 – Registro inicial                                                                                              </td></tr>
        <tr><td>HEM1 	</td><td>Información de absentismo                                                                                                      </td></tr>
        <tr><td>HEM2 	</td><td>Formación                                                                                                                      </td></tr>
        <tr><td>HEM3 	</td><td>Revisión de empleado                                                                                                           </td></tr>
        <tr><td>HEM4 	</td><td>Empleo anterior                                                                                                                </td></tr>
        <tr><td>HEM5 	</td><td>Autorización de propiedad de datos de empleado                                                                                 </td></tr>
        <tr><td>HEM6 	</td><td>Roles empleado                                                                                                                 </td></tr>
        <tr><td>HLD1 	</td><td>Fechas de vacaciones                                                                                                           </td></tr>
        <tr><td>HTM1 	</td><td>Miembros equipo                                                                                                                </td></tr>
        <tr><td>I874 	</td><td>Informe 835874 – Registro de facturas                                                                                          </td></tr>
        <tr><td>IBT1 	</td><td>Operaciones de número de lote                                                                                                  </td></tr>
        <tr><td>IGE1 	</td><td>Salida de mercancías – Líneas                                                                                                  </td></tr>
        <tr><td>IGE10 	</td><td>Salida de mercancías – Estructura de fila                                                                                      </td></tr>
        <tr><td>IGE12 	</td><td>Salida de mercancías: Extensión de impuestos                                                                                   </td></tr>
        <tr><td>IGE2 	</td><td>Líneas de salida de mercancías: Portes – Filas                                                                                 </td></tr>
        <tr><td>IGE3 	</td><td>Salida de mercancías: Portes                                                                                                   </td></tr>
        <tr><td>IGE4 	</td><td>Salida de mercancías – Importe del impuesto por documento                                                                      </td></tr>
        <tr><td>IGE5 	</td><td>Salida de mercancías: Retención de impuestos                                                                                   </td></tr>
        <tr><td>IGE6 	</td><td>Salida de mercancías – Plazos                                                                                                  </td></tr>
        <tr><td>IGE7 	</td><td>Paquetes de entrega – Salida de mercancías                                                                                     </td></tr>
        <tr><td>IGE8 	</td><td>Artículos en paquete – Salida de mercancías                                                                                    </td></tr>
        <tr><td>IGE9 	</td><td>Salida de mercancías – Documentos base                                                                                         </td></tr>
        <tr><td>IGN1 	</td><td>Entrada de mercancías: Líneas                                                                                                  </td></tr>
        <tr><td>IGN10 	</td><td>Entrada de mercancías – Estructura de fila                                                                                     </td></tr>
        <tr><td>IGN12 	</td><td>Entrada de mercancías: Extensión de impuestos                                                                                  </td></tr>
        <tr><td>IGN2 	</td><td>Entrada de mercancías: Portes – Filas                                                                                          </td></tr>
        <tr><td>IGN3 	</td><td>Entrada mercancías: Portes                                                                                                     </td></tr>
        <tr><td>IGN4 	</td><td>Entrada de mercancías – Importe del impuesto por documento                                                                     </td></tr>
        <tr><td>IGN5 	</td><td>Entrada de mercancías: Retención de impuestos                                                                                  </td></tr>
        <tr><td>IGN6 	</td><td>Entrada de mercancías: Plazos                                                                                                  </td></tr>
        <tr><td>IGN7 	</td><td>Entrada de mercancías – Paquetes de entrega                                                                                    </td></tr>
        <tr><td>IGN8 	</td><td>Entrada de mercancías: Artículos en el paquete                                                                                 </td></tr>
        <tr><td>IGN9 	</td><td>Entrada de mercancías – Documentos base                                                                                        </td></tr>
        <tr><td>INV1 	</td><td>Factura de deudores – Líneas                                                                                                   </td></tr>
        <tr><td>INV10 	</td><td>Factura de deudores – Estructura de fila                                                                                       </td></tr>
        <tr><td>INV11 	</td><td>Factura deudores: Extensión de anticipos                                                                                       </td></tr>
        <tr><td>INV12 	</td><td>Factura deudores: Extensión de impuestos                                                                                       </td></tr>
        <tr><td>INV2 	</td><td>Factura de deudor – Portes – Historial – Líneas                                                                                </td></tr>
        <tr><td>INV3 	</td><td>Factura de deudores – Líneas                                                                                                   </td></tr>
        <tr><td>INV4 	</td><td>Factura de deudores – Importe del impuesto por documento                                                                       </td></tr>
        <tr><td>INV5 	</td><td>Factura de deudores: Retención de impuestos                                                                                    </td></tr>
        <tr><td>INV6 	</td><td>Factura de deudores – Plazos                                                                                                   </td></tr>
        <tr><td>INV7 	</td><td>Paquetes de entrega – Factura de deudores                                                                                      </td></tr>
        <tr><td>INV8 	</td><td>Factura de deudores – Artículos en paquete                                                                                     </td></tr>
        <tr><td>INV9 	</td><td>Factura deudores: Documentos base                                                                                              </td></tr>
        <tr><td>IPF1 	</td><td>Precios de entrega – Líneas                                                                                                    </td></tr>
        <tr><td>IPF2 	</td><td>Precios de entrega – Costos                                                                                                    </td></tr>
        <tr><td>ITM1 	</td><td>Artículos: Precios                                                                                                             </td></tr>
        <tr><td>ITR1 	</td><td>Reconciliación interna: Líneas                                                                                                 </td></tr>
        <tr><td>ITT1 	</td><td>Lista de materiales: Artículos subordinados                                                                                    </td></tr>
        <tr><td>ITW1 	</td><td>Alarma de recuento de artículos                                                                                                </td></tr>
        <tr><td>IVRU 	</td><td>Herramienta de valoración de stocks                                                                                            </td></tr>
        <tr><td>IWZ1 	</td><td>Historial revalor.ctas.                                                                                                        </td></tr>
        <tr><td>IWZ2 	</td><td>Inflación filtro almacén                                                                                                       </td></tr>
        <tr><td>IWZ3 	</td><td>Artículos última fecha reval.                                                                                                  </td></tr>
        <tr><td>JDT1 	</td><td>Asiento: Filas                                                                                                                 </td></tr>
        <tr><td>JDT2 	</td><td>Partida individual: Info.retención impuestos                                                                                   </td></tr>
        <tr><td>K874 	</td><td>Informe 835874: Caja/VAR                                                                                                       </td></tr>
        <tr><td>L856 	</td><td>Informe 856: Registro 60                                                                                                       </td></tr>
        <tr><td>MIN1 	</td><td>Información del documento de informe de la factura mensual                                                                     </td></tr>
        <tr><td>MIN2 	</td><td>Información de artículo de empleado                                                                                            </td></tr>
        <tr><td>MLS1 	</td><td>Listas de distribución: Destinatarios                                                                                          </td></tr>
        <tr><td>MLT1 	</td><td>Traducciones en idioma de usuario                                                                                              </td></tr>
        <tr><td>MRV1 	</td><td>Array de información de revalorización de inventario                                                                           </td></tr>
        <tr><td>MRV2 	</td><td>Filas FIFO de revalorización de stock                                                                                          </td></tr>
        <tr><td>MSN1 	</td><td>Escenarios de planificación de necesidades – Área de almacenamiento                                                            </td></tr>
        <tr><td>MSN2 	</td><td>Resultados ejecución MRP                                                                                                       </td></tr>
        <tr><td>MSN3 	</td><td>Información pegging MRP                                                                                                        </td></tr>
        <tr><td>NFN1 	</td><td>No es una secuencia fiscal                                                                                                     </td></tr>
        <tr><td>NNM1 	</td><td>Numeración de documento: Series                                                                                                </td></tr>
        <tr><td>OACG 	</td><td>Categoría de cuenta                                                                                                            </td></tr>
        <tr><td>OACP 	</td><td>Categoría de período                                                                                                           </td></tr>
        <tr><td>OACT 	</td><td>Cuentas de mayor                                                                                                               </td></tr>
        <tr><td>OADF 	</td><td>Address Formats                                                                                                                </td></tr>
        <tr><td>OADM 	</td><td>Gestión                                                                                                                        </td></tr>
        <tr><td>OAGP 	</td><td>Nombre de agente                                                                                                               </td></tr>
        <tr><td>OALC 	</td><td>Gastos de carga                                                                                                                </td></tr>
        <tr><td>OALI 	</td><td>Artículos alternativos 2                                                                                                       </td></tr>
        <tr><td>OAMD 	</td><td>Informe de diferencias del importe                                                                                             </td></tr>
        <tr><td>OARG 	</td><td>Grupos de aduanas                                                                                                              </td></tr>
        <tr><td>OARI 	</td><td>Add-on – Definiciones de sociedad                                                                                              </td></tr>
        <tr><td>OASC 	</td><td>Categorías de segmentación de cuentas                                                                                          </td></tr>
        <tr><td>OASG 	</td><td>Segmentación de cuenta                                                                                                         </td></tr>
        <tr><td>OATC 	</td><td>Anexos                                                                                                                         </td></tr>
        <tr><td>OBCA 	</td><td>Códigos de asignación de gastos bancarios                                                                                      </td></tr>
        <tr><td>OBCG 	</td><td>Gastos bancarios de transferencias bancarias                                                                                   </td></tr>
        <tr><td>OBDC 	</td><td>Configuración B1i DI                                                                                                           </td></tr>
        <tr><td>OBGD 	</td><td>Método de subreparto de costes de presupuesto                                                                                  </td></tr>
        <tr><td>OBGS 	</td><td>Escenario de presupuesto                                                                                                       </td></tr>
        <tr><td>OBGT 	</td><td>Presupuesto                                                                                                                    </td></tr>
        <tr><td>OBNH 	</td><td>Cabecera del estracto bancario                                                                                                 </td></tr>
        <tr><td>OBNK 	</td><td>Extracto bancario externo recibido                                                                                             </td></tr>
        <tr><td>OBOC 	</td><td>Categoría del código de la operación bancaria externa                                                                          </td></tr>
        <tr><td>OBOE 	</td><td>Efecto para pagos                                                                                                              </td></tr>
        <tr><td>OBOT 	</td><td>Bill Of Exchang Transaction                                                                                                    </td></tr>
        <tr><td>OBOX 	</td><td>Definición casilla                                                                                                             </td></tr>
        <tr><td>OBPL 	</td><td>Lugar comercial                                                                                                                </td></tr>
        <tr><td>OBPP 	</td><td>Prioridades del socio de negocios                                                                                              </td></tr>
        <tr><td>OBTC 	</td><td>Códigos internos de operación bancaria                                                                                         </td></tr>
        <tr><td>OBTD 	</td><td>Lista de comprobantes de diario                                                                                                </td></tr>
        <tr><td>OBTF 	</td><td>Entrada documentos diarios                                                                                                     </td></tr>
        <tr><td>OCBI 	</td><td>Indicador banco central                                                                                                        </td></tr>
        <tr><td>OCCD 	</td><td>Número de declaración de aduana de portes                                                                                      </td></tr>
        <tr><td>OCDC 	</td><td>Descuento por pronto pago                                                                                                      </td></tr>
        <tr><td>OCDP 	</td><td>Procedimiento de fecha de cierre                                                                                               </td></tr>
        <tr><td>OCDT 	</td><td>Pago con tarjeta de crédito                                                                                                    </td></tr>
        <tr><td>OCFH 	</td><td>Estado de flujo de capitales – Historial                                                                                       </td></tr>
        <tr><td>OCFP 	</td><td>CFOP para Nota fiscal                                                                                                          </td></tr>
        <tr><td>OCFT 	</td><td>Operaciones de flujo de caja – Filas                                                                                           </td></tr>
        <tr><td>OCFW 	</td><td>Posición de documento de flujo de caja                                                                                         </td></tr>
        <tr><td>OCHD 	</td><td>Cheques p.pago                                                                                                                 </td></tr>
        <tr><td>OCHF 	</td><td>312                                                                                                                            </td></tr>
        <tr><td>OCHH 	</td><td>Registro de cheques                                                                                                            </td></tr>
        <tr><td>OCHO 	</td><td>Cheques para el pago                                                                                                           </td></tr>
        <tr><td>OCIN 	</td><td>Factura de corrección de clientes                                                                                              </td></tr>
        <tr><td>OCLA 	</td><td>Status actividad                                                                                                               </td></tr>
        <tr><td>OCLG 	</td><td>Operaciones                                                                                                                    </td></tr>
        <tr><td>OCLO 	</td><td>Lugar de reuniones                                                                                                             </td></tr>
        <tr><td>OCLS 	</td><td>Temas de actividad                                                                                                             </td></tr>
        <tr><td>OCLT 	</td><td>Clases de actividad                                                                                                            </td></tr>
        <tr><td>OCMT 	</td><td>Competidores                                                                                                                   </td></tr>
        <tr><td>OCNA 	</td><td>Código CNAE                                                                                                                    </td></tr>
        <tr><td>OCNT 	</td><td>Condados                                                                                                                       </td></tr>
        <tr><td>OCOG 	</td><td>Grupos de comisiones                                                                                                           </td></tr>
        <tr><td>OCPI 	</td><td>Factura de corrección de acreedores                                                                                            </td></tr>
        <tr><td>OCPR 	</td><td>Personas de contacto                                                                                                           </td></tr>
        <tr><td>OCPV 	</td><td>Anulación de factura de corrección de acreedores                                                                               </td></tr>
        <tr><td>OCQG 	</td><td>Propiedades tarjeta                                                                                                            </td></tr>
        <tr><td>OCR1 	</td><td>Factores de carga – Centro de beneficio                                                                                        </td></tr>
        <tr><td>OCRB 	</td><td>Socio de negocios – Cuenta bancaria                                                                                            </td></tr>
        <tr><td>OCRC 	</td><td>Tarjetas de crédito                                                                                                            </td></tr>
        <tr><td>OCRD 	</td><td>Socio de negocios                                                                                                              </td></tr>
        <tr><td>OCRG 	</td><td>Grupos de tarjetas                                                                                                             </td></tr>
        <tr><td>OCRH 	</td><td>Gestión de tarjetas crédito                                                                                                    </td></tr>
        <tr><td>OCRN 	</td><td>Códigos de moneda                                                                                                              </td></tr>
        <tr><td>OCRP 	</td><td>Vías de pago                                                                                                                   </td></tr>
        <tr><td>OCRV 	</td><td>Pagos de crédito                                                                                                               </td></tr>
        <tr><td>OCRY 	</td><td>Países                                                                                                                         </td></tr>
        <tr><td>OCSI 	</td><td>Factura de corrección de clientes                                                                                              </td></tr>
        <tr><td>OCST 	</td><td>Estados                                                                                                                        </td></tr>
        <tr><td>OCSV 	</td><td>Anulación de factura de deudores de corrección                                                                                 </td></tr>
        <tr><td>OCTG 	</td><td>Condiciones de pago                                                                                                            </td></tr>
        <tr><td>OCTR 	</td><td>Contratos de servicio                                                                                                          </td></tr>
        <tr><td>OCTT 	</td><td>Modelo de contrato                                                                                                             </td></tr>
        <tr><td>OCYC 	</td><td>Ciclo                                                                                                                          </td></tr>
        <tr><td>ODDG 	</td><td>Grupos de deducción de retención de impuestos                                                                                  </td></tr>
        <tr><td>ODDT 	</td><td>Jerarquía de deducción de retención de impuestos                                                                               </td></tr>
        <tr><td>ODGP 	</td><td>Sets de parámetros de generación de documentos                                                                                 </td></tr>
        <tr><td>ODIB 	</td><td>Número de lote para artículo                                                                                                   </td></tr>
        <tr><td>ODLL 	</td><td>Fila del algoritmo del código de barras                                                                                        </td></tr>
        <tr><td>ODLN 	</td><td>Entrega                                                                                                                        </td></tr>
        <tr><td>ODMW 	</td><td>Migración de datos                                                                                                             </td></tr>
        <tr><td>ODOR 	</td><td>Clientes dudosos                                                                                                               </td></tr>
        <tr><td>ODOW 	</td><td>Propiedad de datos: Objetos                                                                                                    </td></tr>
        <tr><td>ODOX 	</td><td>Propiedad datos: Excepciones                                                                                                   </td></tr>
        <tr><td>ODPI 	</td><td>Anticipo de clientes                                                                                                           </td></tr>
        <tr><td>ODPO 	</td><td>Anticipo de proveedores                                                                                                        </td></tr>
        <tr><td>ODPS 	</td><td>Depósito                                                                                                                       </td></tr>
        <tr><td>ODPT 	</td><td>Depósito postdatado                                                                                                            </td></tr>
        <tr><td>ODRF 	</td><td>Documentos preliminares                                                                                                        </td></tr>
        <tr><td>ODSC 	</td><td>Códigos bancarios                                                                                                              </td></tr>
        <tr><td>ODSR 	</td><td>Números de serie del documento preliminar para los artículos                                                                   </td></tr>
        <tr><td>ODTY 	</td><td>Tipo de documento del efecto                                                                                                   </td></tr>
        <tr><td>ODUN 	</td><td>Reclamaciones                                                                                                                  </td></tr>
        <tr><td>ODUT 	</td><td>Plazos reclamación                                                                                                             </td></tr>
        <tr><td>ODWZ 	</td><td>Asistente reclamación                                                                                                          </td></tr>
        <tr><td>OEJB 	</td><td>Asistente ejecuta detalles p.ERV-JAb                                                                                           </td></tr>
        <tr><td>OEJD 	</td><td>Detalles de la sociedad p.ERV-JAb                                                                                              </td></tr>
        <tr><td>OENC 	</td><td>Clases de codificación                                                                                                         </td></tr>
        <tr><td>OEXD 	</td><td>Definir porte                                                                                                                  </td></tr>
        <tr><td>OFCT 	</td><td>Previsión ventas                                                                                                               </td></tr>
        <tr><td>OFML 	</td><td>Tabla maestra de fórmula de impuestos                                                                                          </td></tr>
        <tr><td>OFPR 	</td><td>Período contable                                                                                                               </td></tr>
        <tr><td>OFRC 	</td><td>Categorías de informes financieros                                                                                             </td></tr>
        <tr><td>OFRM 	</td><td>Formato de fichero                                                                                                             </td></tr>
        <tr><td>OFRT 	</td><td>Modelos informe financiero                                                                                                     </td></tr>
        <tr><td>OGFL 	</td><td>Filtro de trama                                                                                                                </td></tr>
        <tr><td>OGSP 	</td><td>Transporte de mercancías                                                                                                       </td></tr>
        <tr><td>OHED 	</td><td>Clases de formación                                                                                                            </td></tr>
        <tr><td>OHEM 	</td><td>Empleados                                                                                                                      </td></tr>
        <tr><td>OHLD 	</td><td>Tabla de festivos                                                                                                              </td></tr>
        <tr><td>OHPS 	</td><td>Posición empleado                                                                                                              </td></tr>
        <tr><td>OHST 	</td><td>Status de empleado                                                                                                             </td></tr>
        <tr><td>OHTM 	</td><td>Equipos empleado                                                                                                               </td></tr>
        <tr><td>OHTR 	</td><td>Motivo de rescisión del contrato                                                                                               </td></tr>
        <tr><td>OHTY 	</td><td>Tipos de empleado                                                                                                              </td></tr>
        <tr><td>OIBT 	</td><td>Número de lote para artículo                                                                                                   </td></tr>
        <tr><td>OIDC 	</td><td>Indicador                                                                                                                      </td></tr>
        <tr><td>OIDX 	</td><td>Códigos de CPI                                                                                                                 </td></tr>
        <tr class="warning"><td >OIGE 	</td><td>Salida de mercancías                                                                                                           </td></tr>
        <tr class="warning"><td>OIGN 	</td><td>Entrada de mercancías                                                                                                          </td></tr>
        <tr><td>OIND 	</td><td>Operación triangular                                                                                                           </td></tr>
        <tr class="danger" ><td>OINM 	</td><td>Diario de almacén                                                                                                              </td></tr>
        <tr><td>OINS 	</td><td>Tarjeta del equipo del cliente                                                                                                 </td></tr>
        <tr><td>OINV 	</td><td>Factura de deudores                                                                                                            </td></tr>
        <tr><td>OIPF 	</td><td>Costos de importación                                                                                                          </td></tr>
        <tr><td>OIRT 	</td><td>Precios de interés                                                                                                             </td></tr>
        <tr><td>OIST 	</td><td>Instrucción efecto                                                                                                             </td></tr>
        <tr><td>OITB 	</td><td>Grupos de artículos                                                                                                            </td></tr>
        <tr><td>OITG 	</td><td>Propiedades del artículo                                                                                                       </td></tr>
        <tr><td>OITM 	</td><td>Artículos                                                                                                                      </td></tr>
        <tr><td>OITR 	</td><td>Reconciliación interna                                                                                                         </td></tr>
        <tr><td>OITT 	</td><td>Árbol de productos                                                                                                             </td></tr>
        <tr><td>OITW 	</td><td>Artículos: Almacén                                                                                                             </td></tr>
        <tr><td>OIWZ 	</td><td>Asistente inflación                                                                                                            </td></tr>
        <tr><td>OJDT 	</td><td>Asiento                                                                                                                        </td></tr>
        <tr><td>OJPE 	</td><td>Calendario de era local                                                                                                        </td></tr>
        <tr><td>OLCT 	</td><td>Localidad                                                                                                                      </td></tr>
        <tr><td>OLGT 	</td><td>Unidades de longitud                                                                                                           </td></tr>
        <tr><td>OLNG 	</td><td>Tabla idioma usuario                                                                                                           </td></tr>
        <tr><td>OMGP 	</td><td>Grupo de material                                                                                                              </td></tr>
        <tr><td>OMIN 	</td><td>Factura mensual de deudor                                                                                                      </td></tr>
        <tr><td>OMLS 	</td><td>Lista de distribución                                                                                                          </td></tr>
        <tr><td>OMLT 	</td><td>Traducción de varios idiomas                                                                                                   </td></tr>
        <tr><td>OMRC 	</td><td>Fabricante                                                                                                                     </td></tr>
        <tr><td>OMRL 	</td><td>Revaloriz.avanzada invent.                                                                                                     </td></tr>
        <tr><td>OMRV 	</td><td>Revaloración de inventario                                                                                                     </td></tr>
        <tr><td>OMSG 	</td><td>Opciones de servicio de mensajes                                                                                               </td></tr>
        <tr><td>OMSN 	</td><td>Escenarios de planificación de necesidades                                                                                     </td></tr>
        <tr><td>OMTC 	</td><td>Extracto bancario: Criterios coincidentes                                                                                      </td></tr>
        <tr><td>OMTH 	</td><td>Historial de reconciliación                                                                                                    </td></tr>
        <tr><td>ONCM 	</td><td>Código NCM                                                                                                                     </td></tr>
        <tr><td>ONFT 	</td><td>Categoría fiscal de Nota Fiscal (Brasil)                                                                                       </td></tr>
        <tr class="warning"><td>OOCR 	</td><td>Factores de carga                                                                                                              </td></tr>
        <tr><td>OOFR 	</td><td>Causas del defecto                                                                                                             </td></tr>
        <tr><td>OOIN 	</td><td>Interés                                                                                                                        </td></tr>
        <tr><td>OOIR 	</td><td>Nivel del tipo de interés                                                                                                      </td></tr>
        <tr><td>OOND 	</td><td>Industrias                                                                                                                     </td></tr>
        <tr><td>OOPR 	</td><td>Oportunidades                                                                                                                  </td></tr>
        <tr><td>OORL 	</td><td>Relaciones                                                                                                                     </td></tr>
        <tr><td>OOSR 	</td><td>Fuente de información                                                                                                          </td></tr>
        <tr><td>OOST 	</td><td>Niveles de venta                                                                                                               </td></tr>
        <tr><td>OPCH 	</td><td>Factura de proveedores                                                                                                         </td></tr>
        <tr><td>OPDF 	</td><td>Propuesta de pago                                                                                                              </td></tr>
        <tr><td>OPDN 	</td><td>Entrada de mercancías OP                                                                                                       </td></tr>
        <tr><td>OPDT 	</td><td>Texto predefinido                                                                                                              </td></tr>
        <tr><td>OPEX 	</td><td>Tabla de resultados de pagos                                                                                                   </td></tr>
        <tr><td>OPFT 	</td><td>Definiciones de portafolio                                                                                                     </td></tr>
        <tr><td>OPID 	</td><td>Indicador de período                                                                                                           </td></tr>
        <tr><td>OPKG 	</td><td>Clases paquete                                                                                                                 </td></tr>
        <tr><td>OPKL 	</td><td>Lista de picking                                                                                                               </td></tr>
        <tr><td>OPLN 	</td><td>Listas de precios                                                                                                              </td></tr>
        <tr><td>OPOR 	</td><td>Orden de Compra                                                                                                                </td></tr>
        <tr><td>OPPA 	</td><td>Gestión de la clave de acceso                                                                                                  </td></tr>
        <tr><td>OPR1 	</td><td>Oportunidad de ventas – Filas                                                                                                  </td></tr>
        <tr><td>OPR2 	</td><td>Oportunidad de ventas – Socios                                                                                                 </td></tr>
        <tr><td>OPR3 	</td><td>Oportunidad de ventas – Competidores                                                                                           </td></tr>
        <tr><td>OPR4 	</td><td>Oportunidad ventas: Intereses                                                                                                  </td></tr>
        <tr><td>OPR5 	</td><td>Oportunidad de ventas – Motivos                                                                                                </td></tr>
        <tr><td>OPRC 	</td><td>Centro de beneficio                                                                                                            </td></tr>
        <tr><td>OPRJ 	</td><td>Códigos de proyecto                                                                                                            </td></tr>
        <tr><td>OPRT 	</td><td>Socios de negocios                                                                                                             </td></tr>
        <tr><td>OPTF 	</td><td>Portafolio efecto                                                                                                              </td></tr>
        <tr><td>OPVL 	</td><td>Acreedor – Pelecard                                                                                                            </td></tr>
        <tr><td>OPWZ 	</td><td>Asistente de pago                                                                                                              </td></tr>
        <tr><td>OPYB 	</td><td>Payment Block                                                                                                                  </td></tr>
        <tr><td>OPYD 	</td><td>Ejecución de pago                                                                                                              </td></tr>
        <tr><td>OPYM 	</td><td>Vías de pago para asistente de pagos                                                                                           </td></tr>
        <tr><td>OQUE 	</td><td>Cola                                                                                                                           </td></tr>
        <tr><td>OQUT 	</td><td>Oferta de ventas                                                                                                               </td></tr>
        <tr><td>OQWZ 	</td><td>Asistente de consulta                                                                                                          </td></tr>
        <tr><td>ORCM 	</td><td>Fecha recomendación                                                                                                            </td></tr>
        <tr><td>ORCN 	</td><td>Cadenas de comercio al por menor                                                                                               </td></tr>
        <tr><td>ORCR 	</td><td>Contabilizaciones periódicas                                                                                                   </td></tr>
        <tr><td>ORCT 	</td><td>Entrada de pagos                                                                                                               </td></tr>
        <tr><td>ORDN 	</td><td>Devoluciones                                                                                                                   </td></tr>
        <tr><td>ORDR 	</td><td>Pedido de cliente                                                                                                              </td></tr>
        <tr><td>OREQ 	</td><td>Solicitud de llamada de sistema externo                                                                                        </td></tr>
        <tr><td>ORFL 	</td><td>Reports 347, 349 e IR ya visualizados                                                                                          </td></tr>
        <tr><td>ORIN 	</td><td>Nota de crédito de clientes                                                                                                    </td></tr>
        <tr><td>ORIT 	</td><td>Tipo de interés de reclamación                                                                                                 </td></tr>
        <tr><td>ORPC 	</td><td>Nota de crédito clientes                                                                                                       </td></tr>
        <tr><td>ORPD 	</td><td>Devolución de mercancías                                                                                                       </td></tr>
        <tr><td>ORTM 	</td><td>Diferencias de cambio                                                                                                          </td></tr>
        <tr><td>ORTS 	</td><td>Tasas IPC y ME                                                                                                                 </td></tr>
        <tr><td>ORTT 	</td><td>Tasas IPC y ME                                                                                                                 </td></tr>
        <tr><td>OSCD 	</td><td>Tabla del código de servicio                                                                                                   </td></tr>
        <tr><td>OSCL 	</td><td>Llamadas de servicio                                                                                                           </td></tr>
        <tr><td>OSCM 	</td><td>Ledger especial: Reglas de configuración de contabilidad analítica – Material                                                  </td></tr>
        <tr><td>OSCN 	</td><td>Nº catálogo de deudor/acreedor                                                                                                 </td></tr>
        <tr><td>OSCO 	</td><td>Orígenes de llamada de servicio                                                                                                </td></tr>
        <tr><td>OSCP 	</td><td>Tipos de problema de llamada de servicio                                                                                       </td></tr>
        <tr><td>OSCR 	</td><td>Ledger especial: Reglas de configuración de contabilidad analítica: Ganancias y costos                                         </td></tr>
        <tr><td>OSCS 	</td><td>Status de llamada de servicio                                                                                                  </td></tr>
        <tr><td>OSCT 	</td><td>Clases de llamada de servicio                                                                                                  </td></tr>
        <tr><td>OSGP 	</td><td>Grupo de servicio para Brasil                                                                                                  </td></tr>
        <tr><td>OSHP 	</td><td>Clases de entrega                                                                                                              </td></tr>
        <tr><td>OSIX 	</td><td>Fecha para formulario 6111                                                                                                     </td></tr>
        <tr><td>OSLM 	</td><td>Ledger especial: Informe de contabilidad analítica: Material                                                                   </td></tr>
        <tr><td>OSLP 	</td><td>Empleado del departamento de ventas                                                                                            </td></tr>
        <tr><td>OSLR 	</td><td>Ledger especial: Informe de contabilidad analítica: Beneficios y costos                                                        </td></tr>
        <tr><td>OSLT 	</td><td>Soluciones de llamada de servicio                                                                                              </td></tr>
        <tr><td>OSPG 	</td><td>Precios especiales para grupos                                                                                                 </td></tr>
        <tr><td>OSPP 	</td><td>Precios especiales                                                                                                             </td></tr>
        <tr><td>OSRD 	</td><td>Lotes y números de serie                                                                                                       </td></tr>
        <tr><td>OSRI 	</td><td>Números de serie para artículos                                                                                                </td></tr>
        <tr><td>OSRL 	</td><td>Números de serie                                                                                                               </td></tr>
        <tr><td>OSRT 	</td><td>Informe de totales de Corea                                                                                                    </td></tr>
        <tr><td>OSST 	</td><td>Status de solución de llamada de servicio                                                                                      </td></tr>
        <tr><td>OSTA 	</td><td>Autoridades de impuestos sobre ventas                                                                                          </td></tr>
        <tr><td>OSTC 	</td><td>Indicadores de IVA                                                                                                             </td></tr>
        <tr><td>OSTT 	</td><td>Clase de autoridades de impuestos sobre ventas                                                                                 </td></tr>
        <tr><td>OSVR 	</td><td>Reconciliaciones grabadas                                                                                                      </td></tr>
        <tr><td>OTAX 	</td><td>Transacciones de IVA                                                                                                           </td></tr>
        <tr><td>OTCD 	</td><td>Determinación de indicador de impuestos                                                                                        </td></tr>
        <tr><td>OTER 	</td><td>Territorios                                                                                                                    </td></tr>
        <tr><td>OTFC 	</td><td>Combinación del tipo fiscal                                                                                                    </td></tr>
        <tr><td>OTNC 	</td><td>Categoría de transacción                                                                                                       </td></tr>
        <tr><td>OTNN 	</td><td>Formularios 1099                                                                                                               </td></tr>
        <tr><td>OTOB 	</td><td>1099 Balance apertura                                                                                                          </td></tr>
        <tr><td>OTPA 	</td><td>Atributos de parámetros fiscales                                                                                               </td></tr>
        <tr><td>OTPI 	</td><td>Factura de impuestos de compras                                                                                                </td></tr>
        <tr><td>OTPR 	</td><td>Valores de devolución de impuestos                                                                                             </td></tr>
        <tr><td>OTPS 	</td><td>Parámetro fiscal                                                                                                               </td></tr>
        <tr><td>OTRC 	</td><td>Códigos de registro en el diario                                                                                               </td></tr>
        <tr><td>OTRS 	</td><td>Objeto de grabación del report fiscal                                                                                          </td></tr>
        <tr><td>OTRT 	</td><td>Plantillas de contabilización                                                                                                  </td></tr>
        <tr><td>OTRX 	</td><td>Documentos de transformación                                                                                                   </td></tr>
        <tr><td>OTSC 	</td><td>Código CST de nota fiscal                                                                                                      </td></tr>
        <tr><td>OTSI 	</td><td>Factura de impuestos de ventas                                                                                                 </td></tr>
        <tr><td>OTXD 	</td><td>Documentos preliminares de la factura de impuestos                                                                             </td></tr>
        <tr><td>OUBR 	</td><td>Sucursales                                                                                                                     </td></tr>
        <tr><td>OUDG 	</td><td>Opciones de usuario                                                                                                            </td></tr>
        <tr><td>OUDO 	</td><td>Objeto definido por el usuario                                                                                                 </td></tr>
        <tr><td>OUDP 	</td><td>Departamentos                                                                                                                  </td></tr>
        <tr><td>OUPT 	</td><td>Árbol de autorización de usuario                                                                                               </td></tr>
        <tr><td>OUSG 	</td><td>Utilización de nota fiscal                                                                                                     </td></tr>
        <tr><td>OUSR 	</td><td>Usuarios                                                                                                                       </td></tr>
        <tr><td>OUTB 	</td><td>Tablas de usuario                                                                                                              </td></tr>
        <tr><td>OUTX 	</td><td>Transacciones de IVA no reportadas                                                                                             </td></tr>
        <tr><td>OVNM 	</td><td>Numeración de declaración fiscal                                                                                               </td></tr>
        <tr><td>OVPM 	</td><td>Pagos efectuados                                                                                                               </td></tr>
        <tr><td>OVRT 	</td><td>Informe de factura de impuestos                                                                                                </td></tr>
        <tr><td>OVTG 	</td><td>Definición del impuesto                                                                                                        </td></tr>
        <tr><td>OVTR 	</td><td>Informe fiscal                                                                                                                 </td></tr>
        <tr><td>OWDD 	</td><td>Documentos de confirmación                                                                                                     </td></tr>
        <tr><td>OWGT 	</td><td>Unidades de peso                                                                                                               </td></tr>
        <tr><td>OWHS 	</td><td>Almacenes                                                                                                                      </td></tr>
        <tr><td>OWHT 	</td><td>Retención de impuestos                                                                                                         </td></tr>
        <tr><td>OWKO 	</td><td>Instrucciones de fabricación                                                                                                   </td></tr>
        <tr><td>OWOR 	</td><td>Orden de fabricación                                                                                                           </td></tr>
        <tr><td>OWST 	</td><td>Nivel de confirmación                                                                                                          </td></tr>
        <tr><td>OWTM 	</td><td>Modelos de autorización                                                                                                        </td></tr>
        <tr><td>OWTR 	</td><td>Traslado de stocks                                                                                                             </td></tr>
        <tr><td>OWTT 	</td><td>Tipo de retención de impuestos                                                                                                 </td></tr>
        <tr><td>PCH1 	</td><td>Factura de acreedor: Líneas                                                                                                    </td></tr>
        <tr><td>PCH10	</td><td>Factura de acreedores – Estructura de fila                                                                                     </td></tr>
        <tr><td>PCH12	</td><td>Factura acreedores: Extensión de impuestos                                                                                     </td></tr>
        <tr><td>PCH2 	</td><td>Factura de acreedores: Portes – Filas                                                                                          </td></tr>
        <tr><td>PCH3 	</td><td>Factura de acreedores: Portes                                                                                                  </td></tr>
        <tr><td>PCH4 	</td><td>Factura de acreedores – Importe del impuesto por documento                                                                     </td></tr>
        <tr><td>PCH5 	</td><td>Factura de acreedores: Datos de retención de impuestos                                                                         </td></tr>
        <tr><td>PCH6 	</td><td>Factura de acreedor – Plazos                                                                                                   </td></tr>
        <tr><td>PCH7 	</td><td>Paquetes de entrega – Factura de acreedores                                                                                    </td></tr>
        <tr><td>PCH8 	</td><td>Factura de acreedores: Artículos en paquete                                                                                    </td></tr>
        <tr><td>PCH9 	</td><td>Documentos base: Factura acreedores                                                                                            </td></tr>
        <tr><td>PDF1 	</td><td>Entrada preliminar de pagos: Cheques                                                                                           </td></tr>
        <tr><td>PDF2 	</td><td>Entrada preliminar de pagos: Facturas                                                                                          </td></tr>
        <tr><td>PDF3 	</td><td>Documento preliminar de pago – Documentos de tarjeta                                                                           </td></tr>
        <tr><td>PDF4 	</td><td>Entrada preliminar de pagos: Lista de cuentas                                                                                  </td></tr>
        <tr><td>PDF6 	</td><td>Documentos preliminares de pago – Retención de impuestos – Filas                                                               </td></tr>
        <tr><td>PDF7 	</td><td>Documento preliminar de pago – Importe del impuesto por documento                                                              </td></tr>
        <tr><td>PDN1 	</td><td>Pedido de entrada de mercancías – Filas                                                                                        </td></tr>
        <tr><td>PDN10 	</td><td>Pedido entrada mercancías: Estructura fila                                                                                     </td></tr>
        <tr><td>PDN12 	</td><td>Entrada de mercancías del pedido: Extensión de impuestos                                                                       </td></tr>
        <tr><td>PDN2 	</td><td>Pedido de entrada de mercancías: Portes – Filas                                                                                </td></tr>
        <tr><td>PDN3 	</td><td>Entrada de mercancías pedido: Portes                                                                                           </td></tr>
        <tr><td>PDN4 	</td><td>Pedido de entrada de mercancías – Importe del impuesto por documento                                                           </td></tr>
        <tr><td>PDN5 	</td><td>Pedido de entrada de mercancía: Retención de impuestos                                                                         </td></tr>
        <tr><td>PDN6 	</td><td>Pedido de entrada de mercancías – Plazos                                                                                       </td></tr>
        <tr><td>PDN7 	</td><td>Pedido de entrada de mercancías – Paquetes de entrega                                                                          </td></tr>
        <tr><td>PDN8 	</td><td>Pedido de entrada de mercancías – Artículos en paquete                                                                         </td></tr>
        <tr><td>PDN9 	</td><td>Pedido de entrada de mercancías – Documentos base                                                                              </td></tr>
        <tr><td>PEX1 	</td><td>Tabla de resultados de pago: Líneas                                                                                            </td></tr>
        <tr><td>PKL1 	</td><td>Lista de picking – Filas                                                                                                       </td></tr>
        <tr><td>POR1 	</td><td>Pedido: Líneas                                                                                                                 </td></tr>
        <tr><td>POR10 	</td><td>Pedido: Estructura fila                                                                                                        </td></tr>
        <tr><td>POR12 	</td><td>Pedido: Extensión de impuestos                                                                                                 </td></tr>
        <tr><td>POR2 	</td><td>Pedido: Portes – Filas                                                                                                         </td></tr>
        <tr><td>POR3 	</td><td>Pedido: Portes                                                                                                                 </td></tr>
        <tr><td>POR4 	</td><td>Pedido – Importe del impuesto por documento                                                                                    </td></tr>
        <tr><td>POR5 	</td><td>Pedido: Retención de impuestos                                                                                                 </td></tr>
        <tr><td>POR6 	</td><td>Pedido – Plazos                                                                                                                </td></tr>
        <tr><td>POR7 	</td><td>Paquetes de entrega – Pedido                                                                                                   </td></tr>
        <tr><td>POR8 	</td><td>Artículos en paquete – Pedido                                                                                                  </td></tr>
        <tr><td>POR9 	</td><td>Pedido – Documentos base                                                                                                       </td></tr>
        <tr><td>PSAR 	</td><td>Marco p.informe análisis ventas                                                                                                </td></tr>
        <tr><td>PWZ2 	</td><td>Asistente de pagos: Línea 2                                                                                                    </td></tr>
        <tr><td>PWZ3 	</td><td>Asistente de pagos: Líneas 3                                                                                                   </td></tr>
        <tr><td>PWZ4 	</td><td>Asistente de pagos – Filas 4                                                                                                   </td></tr>
        <tr><td>PWZ5 	</td><td>Asistente de pagos: Líneas 5                                                                                                   </td></tr>
        <tr><td>PYD1 	</td><td>Condiciones de pago permitidas en la ejeccuión de pago                                                                         </td></tr>
        <tr><td>PYM1 	</td><td>Selección de moneda                                                                                                            </td></tr>
        <tr><td>QUE1 	</td><td>Miembros cola                                                                                                                  </td></tr>
        <tr><td>QUE2 	</td><td>Elementos cola                                                                                                                 </td></tr>
        <tr><td>QUT1 	</td><td>Oferta a un cliente: Filas                                                                                                     </td></tr>
        <tr><td>QUT10 	</td><td>Oferta – Estructura de fila                                                                                                    </td></tr>
        <tr><td>QUT12 	</td><td>Oferta de ventas: Extensión de impuestos                                                                                       </td></tr>
        <tr><td>QUT2 	</td><td>Oferta de ventas: Portes – Filas                                                                                               </td></tr>
        <tr><td>QUT3 	</td><td>Oferta de ventas: Portes                                                                                                       </td></tr>
        <tr><td>QUT4 	</td><td>Oferta – Importe del impuesto por documento                                                                                    </td></tr>
        <tr><td>QUT5 	</td><td>Oferta: Impuesto                                                                                                               </td></tr>
        <tr><td>QUT6 	</td><td>Oferta a cliente: Plazos                                                                                                       </td></tr>
        <tr><td>QUT7 	</td><td>Paquetes de entrega – Oferta a un cliente                                                                                      </td></tr>
        <tr><td>QUT8 	</td><td>Oferta – Artículos en paquete                                                                                                  </td></tr>
        <tr><td>QUT9 	</td><td>Oferta – Documentos base                                                                                                       </td></tr>
        <tr><td>QWZ1 	</td><td>Tablas de consulta                                                                                                             </td></tr>
        <tr><td>QWZ2 	</td><td>Campos de consulta                                                                                                             </td></tr>
        <tr><td>QWZ3 	</td><td>Campos de consulta                                                                                                             </td></tr>
        <tr><td>R874 	</td><td>Report 835874: Registro log importación                                                                                        </td></tr>
        <tr><td>RBOX 	</td><td>Informe casilla declaración impuestos                                                                                          </td></tr>
        <tr><td>RCC4 	</td><td>Pago recibido – Documentos de tarjeta                                                                                          </td></tr>
        <tr><td>RCR1 	</td><td>Contabilizaciones periódicas: Líneas                                                                                           </td></tr>
        <tr><td>RCT1 	</td><td>Pago recibido – Cheques                                                                                                        </td></tr>
        <tr><td>RCT2 	</td><td>Pagos recibidos – Facturas                                                                                                     </td></tr>
        <tr><td>RCT3 	</td><td>Pago recibido – Documentos de tarjeta                                                                                          </td></tr>
        <tr><td>RCT4 	</td><td>Pago recibido – Lista de cuentas                                                                                               </td></tr>
        <tr><td>RCT6 	</td><td>Pagos recibidos: Filas de retención de impuestos                                                                               </td></tr>
        <tr><td>RCT7 	</td><td>Pago recibido – Importe del impuesto por documento                                                                             </td></tr>
        <tr><td>RDN1 	</td><td>Devoluciones – Líneas                                                                                                          </td></tr>
        <tr><td>RDN10 	</td><td>Devoluciones: Estructura fila                                                                                                  </td></tr>
        <tr><td>RDN12 	</td><td>Devoluciones – Ampliación de plazo de pago de impuesto                                                                         </td></tr>
        <tr><td>RDN2 	</td><td>Devolución – Porte – Filas                                                                                                     </td></tr>
        <tr><td>RDN3 	</td><td>Devolución – Porte                                                                                                             </td></tr>
        <tr><td>RDN4 	</td><td>Devoluciones – Importe del impuesto por documento                                                                              </td></tr>
        <tr><td>RDN5 	</td><td>Devoluciones: Retención de impuestos                                                                                           </td></tr>
        <tr><td>RDN6 	</td><td>Devoluciones – Plazos                                                                                                          </td></tr>
        <tr><td>RDN7 	</td><td>Paquetes de entrega – Devoluciones                                                                                             </td></tr>
        <tr><td>RDN8 	</td><td>Devoluciones: Artículos en paquete                                                                                             </td></tr>
        <tr><td>RDN9 	</td><td>Devoluciones: Detalles documentos base                                                                                         </td></tr>
        <tr><td>RDOC 	</td><td>Documento                                                                                                                      </td></tr>
        <tr><td>RDR1 	</td><td>Pedido de cliente – Filas                                                                                                      </td></tr>
        <tr><td>RDR10 	</td><td>Pedido de cliente – Estructura de fila                                                                                         </td></tr>
        <tr><td>RDR12 	</td><td>Pedido de cliente – Ampliación de plazo de pago de impuesto                                                                    </td></tr>
        <tr><td>RDR2 	</td><td>Pedido de cliente – Porte – Filas                                                                                              </td></tr>
        <tr><td>RDR3 	</td><td>Pedido de cliente – Porte                                                                                                      </td></tr>
        <tr><td>RDR4 	</td><td>Pedido de cliente – Importe del impuesto por documento                                                                         </td></tr>
        <tr><td>RDR5 	</td><td>Pedido de cliente: Retención de impuestos                                                                                      </td></tr>
        <tr><td>RDR6 	</td><td>Pedido de cliente – Plazos                                                                                                     </td></tr>
        <tr><td>RDR7 	</td><td>Paquetes de entrega – Pedido de cliente                                                                                        </td></tr>
        <tr><td>RDR8 	</td><td>Pedido de cliente – Artículos en paquete                                                                                       </td></tr>
        <tr><td>RDR9 	</td><td>Pedido: Detalles documentos base                                                                                               </td></tr>
        <tr><td>REQ1 	</td><td>Solicitud llamada externa sistema – Lista mensajes                                                                             </td></tr>
        <tr><td>REQ2 	</td><td>Solicitud llamada externa sistema – Lista de argumentos                                                                        </td></tr>
        <tr><td>REQ3 	</td><td>Solicitud llamada externa sistema – Lista argumentos mensajes                                                                  </td></tr>
        <tr><td>RIN1 	</td><td>Abono de deudor – Líneas                                                                                                       </td></tr>
        <tr><td>RIN10 	</td><td>Abono deudores: Estructura fila                                                                                                </td></tr>
        <tr><td>RIN12 	</td><td>Nota de crédito de deudor – Ampliación de plazo de pago de impuesto                                                            </td></tr>
        <tr><td>RIN2 	</td><td>Nota de crédito de deudor – Porte – Filas                                                                                      </td></tr>
        <tr><td>RIN3 	</td><td>Nota de crédito de deudor: Porte                                                                                               </td></tr>
        <tr><td>RIN4 	</td><td>Nota de crédito de deudores – Importe del impuesto por documento                                                               </td></tr>
        <tr><td>RIN5 	</td><td>Datos de retención de impuestos: Nota de crédito de deudores                                                                   </td></tr>
        <tr><td>RIN6 	</td><td>Abono de deudor – Plazos                                                                                                       </td></tr>
        <tr><td>RIN7 	</td><td>Nota de crédito de deudores: Paquetes de entrega                                                                               </td></tr>
        <tr><td>RIN8 	</td><td>Artículos en paquete – Nota de crédito de deudores                                                                             </td></tr>
        <tr><td>RIN9 	</td><td>Abono deudores: Documentos base                                                                                                </td></tr>
        <tr><td>RIT1 	</td><td>Tipos de interés                                                                                                               </td></tr>
        <tr><td>RITM 	</td><td>Elemento de informe                                                                                                            </td></tr>
        <tr><td>RPC1 	</td><td>Abono de acreedor – Líneas                                                                                                     </td></tr>
        <tr><td>RPC10 	</td><td>Abono acreedores: Estructura fila                                                                                              </td></tr>
        <tr><td>RPC12 	</td><td>Nota de crédito de acreedor – Ampliación de plazo de pago de impuesto                                                          </td></tr>
        <tr><td>RPC2 	</td><td>Líneas de abono de acreedor – Gastos                                                                                           </td></tr>
        <tr><td>RPC3 	</td><td>Nota de crédito de acreedor: Porte                                                                                             </td></tr>
        <tr><td>RPC4 	</td><td>Nota de crédito de acreedores – Importe del impuesto por documento                                                             </td></tr>
        <tr><td>RPC5 	</td><td>Nota de crédito de proveedores: Retención de impuestos                                                                         </td></tr>
        <tr><td>RPC6 	</td><td>Abono de acreedor – Plazos                                                                                                     </td></tr>
        <tr><td>RPC7 	</td><td>Paquetes de entrega – Nota de crédito de acreedores                                                                            </td></tr>
        <tr><td>RPC8 	</td><td>Artículos en paquete – Nota de crédito de acreedores                                                                           </td></tr>
        <tr><td>RPC9 	</td><td>Abono acreedores: Documentos base                                                                                              </td></tr>
        <tr><td>RPD1 	</td><td>Devoluciones: Filas                                                                                                            </td></tr>
        <tr><td>RPD10 	</td><td>Devoluciones: Estructura fila                                                                                                  </td></tr>
        <tr><td>RPD12 	</td><td>Devolución de mercancías: Ampliación de plazo de pago de impuesto                                                              </td></tr>
        <tr><td>RPD2 	</td><td>Devolución de mercancías – Porte – Filas                                                                                       </td></tr>
        <tr><td>RPD3 	</td><td>Devolución de mercancías: Porte                                                                                                </td></tr>
        <tr><td>RPD4 	</td><td>Devolución de mercancías – Importe del impuesto por documento                                                                  </td></tr>
        <tr><td>RPD5 	</td><td>Devolución de mercancías – Datos de retención de impuestos                                                                     </td></tr>
        <tr><td>RPD6 	</td><td>Devoluciones: Plazos                                                                                                           </td></tr>
        <tr><td>RPD7 	</td><td>Devoluciones: Paquetes de entrega                                                                                              </td></tr>
        <tr><td>RPD8 	</td><td>Devolución: Artículos en paquete                                                                                               </td></tr>
        <tr><td>RPD9 	</td><td>Devoluciones: Documentos base                                                                                                  </td></tr>
        <tr><td>RTM1 	</td><td>Diferencias de tipo de cambio – Filas                                                                                          </td></tr>
        <tr><td>RTYP 	</td><td>Lista de clases de documento                                                                                                   </td></tr>
        <tr><td>SCL1 	</td><td>Soluciones de llamada de servicio – Filas                                                                                      </td></tr>
        <tr><td>SCL2 	</td><td>Gastos de inventario de llamada de servicio                                                                                    </td></tr>
        <tr><td>SCL3 	</td><td>Desplazamiento de llamada de servicio/Gastos de trabajo                                                                        </td></tr>
        <tr><td>SCL4 	</td><td>Documentos de gastos                                                                                                           </td></tr>
        <tr><td>SCL5 	</td><td>Actividades de llamada de servicio                                                                                             </td></tr>
        <tr><td>SCM1 	</td><td>Ledger especial – Condiciones de regla de configuración de contabilidad financiera analítica: Material                         </td></tr>
        <tr><td>SCM2 	</td><td>Ledger especial – Objetivos de regla de configuración de contabilidad financiera analítica: Material                           </td></tr>
        <tr><td>SCM3 	</td><td>Ledger especial – Cálculos adicionales de regla de configuración de contabilidad financiera analítica: Material                </td></tr>
        <tr><td>SCR1 	</td><td>Ledger especial – Condiciones de regla de configuración de contabilidad financiera analítica: Ingresos y gastos                </td></tr>
        <tr><td>SCR2 	</td><td>Ledger especial – Objetivos de regla de configuración de contabilidad financiera analítica: Ingresos y gastos                  </td></tr>
        <tr><td>SCR3 	</td><td>Ledger especial – Condiciones adicionales de regla de configuración de contabilidad financiera analítica: Ingresos y gastos	</td></tr>
        <tr><td>SLM1 	</td><td>Ledger especial – Líneas de informe de contabilidad financiera analítica: Material                                             </td></tr>
        <tr><td>SLR1 	</td><td>Ledger especial – Líneas de informe de contabilidad financiera analítica: Ingresos y gastos                                    </td></tr>
        <tr><td>SPP1 	</td><td>Precios especiales: Áreas de datos                                                                                             </td></tr>
        <tr><td>SPP2 	</td><td>Precios especiales: Áreas de cantidad                                                                                          </td></tr>
        <tr><td>SQR1 	</td><td>Consultas sistema                                                                                                              </td></tr>
        <tr><td>SRI1 	</td><td>Transacción de número de serie para posición                                                                                   </td></tr>
        <tr><td>SRT1 	</td><td>Informe de totales de Corea – Filas1                                                                                           </td></tr>
        <tr><td>SRT2 	</td><td>Informe de totales de Corea – Filas2                                                                                           </td></tr>
        <tr><td>STA1 	</td><td>Definición del impuesto                                                                                                        </td></tr>
        <tr><td>STC1 	</td><td>Indicadores de IVA: Líneas                                                                                                     </td></tr>
        <tr><td>SVR1 	</td><td>Reconciliaciones grabadas: Lista de transacción                                                                                </td></tr>
        <tr><td>TAX1 	</td><td>Operaciones de IVA – Líneas                                                                                                    </td></tr>
        <tr><td>TCD1 	</td><td>Campos clave para determinación                                                                                                </td></tr>
        <tr><td>TCD2 	</td><td>Valores de campo clave                                                                                                         </td></tr>
        <tr><td>TCD3 	</td><td>Determinación de indicador de impuestos                                                                                        </td></tr>
        <tr><td>TCD4 	</td><td>Determinación de indicador de retención                                                                                        </td></tr>
        <tr><td>TCD5 	</td><td>Indicador de impuestos por utilización                                                                                         </td></tr>
        <tr><td>TFC1 	</td><td>Combinación de clase de impuestos: Filas                                                                                       </td></tr>
        <tr><td>TNN1 	</td><td>1099 Casillas                                                                                                                  </td></tr>
        <tr><td>TPI1 	</td><td>Factura de impuesto de compras – Filas 1                                                                                       </td></tr>
        <tr><td>TPS1 	</td><td>Atributos de parámetros fiscales                                                                                               </td></tr>
        <tr><td>TPS2 	</td><td>Parámetro fiscal – Valores de retorno                                                                                          </td></tr>
        <tr><td>TRS1 	</td><td>Objeto de grabación del report fiscal: Documentos aprobados                                                                    </td></tr>
        <tr><td>TRS2 	</td><td>Impto.rpt.grab.obj.man.mod.val.                                                                                                </td></tr>
        <tr><td>TRT1 	</td><td>Modelos de contabilización: Líneas                                                                                             </td></tr>
        <tr><td>TSI1 	</td><td>Factura de impuestos de ventas – Filas1                                                                                        </td></tr>
        <tr><td>TXD1 	</td><td>Documentos preliminares de factura de impuestos – Filas                                                                        </td></tr>
        <tr><td>UDG1 	</td><td>Valores prefijados – Documentos                                                                                                </td></tr>
        <tr><td>UDG2 	</td><td>Valores prefijados – Tarjetas de crédito                                                                                       </td></tr>
        <tr><td>UDO1 	</td><td>Objetos opcionales – Nodo subordinado                                                                                          </td></tr>
        <tr><td>UDO2 	</td><td>Objetos opcionales – Buscar columnas                                                                                           </td></tr>
        <tr><td>UDO3 	</td><td>Objetos opcionales – Columnas encontradas                                                                                      </td></tr>
        <tr><td>UPT1 	</td><td>Árbol de autorizaciones de usuario – Autorización ampliada                                                                     </td></tr>
        <tr><td>UQR1 	</td><td>Consultas                                                                                                                      </td></tr>
        <tr><td>UTX1 	</td><td>Operaciones de IVA no declaradas – Líneas                                                                                      </td></tr>
        <tr><td>VLG1 	</td><td>Validación de recálculo Desde Hasta                                                                                            </td></tr>
        <tr><td>VPM1 	</td><td>Pagos efectuados – Filas de cheque                                                                                             </td></tr>
        <tr><td>VPM2 	</td><td>Pagos efectuados – Facturas                                                                                                    </td></tr>
        <tr><td>VPM3 	</td><td>Pagos efectuados – Documentos de tarjeta                                                                                       </td></tr>
        <tr><td>VPM4 	</td><td>Pagos efectuados – Cuentas                                                                                                     </td></tr>
        <tr><td>VPM6 	</td><td>Pagos efectuados: Filas de retención de impuestos                                                                              </td></tr>
        <tr><td>VPM7 	</td><td>Pagos efectuados – Importe del impuesto por documento                                                                          </td></tr>
        <tr><td>VRT1 	</td><td>Informe de factura de impuestos – Filas                                                                                        </td></tr>
        <tr><td>VRT2 	</td><td>Info de trama de informe de factura de impuestos                                                                               </td></tr>
        <tr><td>VTG1 	</td><td>Definición del impuesto                                                                                                        </td></tr>
        <tr><td>VTR1 	</td><td>Grupos impuesto                                                                                                                </td></tr>
        <tr><td>VTR2 	</td><td>Filtro del tipo de documento                                                                                                   </td></tr>
        <tr><td>VTR3 	</td><td>Filtro de series                                                                                                               </td></tr>
        <tr><td>VTR4 	</td><td>Grupos impuesto                                                                                                                </td></tr>
        <tr><td>VTR5 	</td><td>Grupos impuesto                                                                                                                </td></tr>
        <tr><td>WDD1 	</td><td>Documentos a autorizar: Autorizadores                                                                                          </td></tr>
        <tr><td>WDD2 	</td><td>Documentos a autorizar: Condiciones                                                                                            </td></tr>
        <tr><td>WHT1 	</td><td>Definición del impuesto                                                                                                        </td></tr>
        <tr><td>WHT2 	</td><td>Definición de retención de impuestos – Filas2                                                                                  </td></tr>
        <tr><td>WHT3 	</td><td>Ámbito de valores                                                                                                              </td></tr>
        <tr><td>WKO1 	</td><td>Instrucciones de fabricación – Filas                                                                                           </td></tr>
        <tr><td>WOR1 	</td><td>Orden de fabricación – Filas                                                                                                   </td></tr>
        <tr><td>WST1 	</td><td>Nivel de confirmación: Líneas                                                                                                  </td></tr>
        <tr><td>WTM1 	</td><td>Modelos de autorización – Fabricantes                                                                                          </td></tr>
        <tr><td>WTM2 	</td><td>Modelos de confirmación: Etapas                                                                                                </td></tr>
        <tr><td>WTM3 	</td><td>Modelos de autorización – Documentos                                                                                           </td></tr>
        <tr><td>WTM4 	</td><td>Modelos de autorización – Condiciones                                                                                          </td></tr>
        <tr><td>WTM5 	</td><td>Modelos autorización: Queries                                                                                                  </td></tr>
        <tr><td>WTR1 	</td><td>Traslado de stocks – Filas                                                                                                     </td></tr>
        <tr><td>WTR10 	</td><td>Traslado de stocks – Estructura de fila                                                                                        </td></tr>
        <tr><td>WTR12 	</td><td>Traslado de inventario – Ampliación de plazo de pago de impuesto                                                               </td></tr>
        <tr><td>WTR2 	</td><td>Traslado de inventario – Porte – Filas                                                                                         </td></tr>
        <tr><td>WTR3 	</td><td>Traslado de inventario – Porte                                                                                                 </td></tr>
        <tr><td>WTR4 	</td><td>Traslado de stocks – Importe del impuesto por documento                                                                        </td></tr>
        <tr><td>WTR5 	</td><td>Traslado de stocks: Retención de impuestos                                                                                     </td></tr>
        <tr><td>WTR6 	</td><td>Traslado de stocks: Plazos                                                                                                     </td></tr>
        <tr><td>WTR7 	</td><td>Traslado de stocks – Paquetes de entrega                                                                                       </td></tr>
        <tr><td>WTR8 	</td><td>Traslado de stocks – Artículos en paquete                                                                                      </td></tr>
        <tr><td>WTR9 	</td><td>Traslado de stocks – Documentos base                                                                                           </td></tr>



        </tbody>


    </table>

    </div>

@endsection