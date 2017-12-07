

INSERT INTO `users` (`id`, `idUnidad`, `nombres`, `primerAp`, `segundoAp`, `email`, `password`, `numFiscal`, `nivel`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 40, 'OSCAR', 'PEREZ', 'DOMINGEZ', 'SDGOJSADF@6A4SF.COM', 'ASOJFKASOJFAÑSKDSADILGJASLDFJAMDSF', 2, '1', NULL, NULL, NULL, NULL),
(2, 47, 'JANA', 'ALARCON', 'MARTINEZ', '865A4SF@ASF4.COM', '5A41SF3A1S3DA8S4F3AS1D3EA8F43SADF4EDG', 5, '2', NULL, NULL, NULL, NULL);



INSERT INTO `carpeta` (`id`, `idUnidad`, `idFiscal`, `numCarpeta`, `fechaInicio`, `conDetenido`, `esRelevante`, `estadoCarpeta`, `horaIntervencion`, `descripcionHechos`, `npd`, `numIph`, `fechaIph`, `narracionIph`, `idTipoDeterminacion`, `fechaDeterminacion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 54, 1, 0, '2017-11-20', 0, 0, 'INICIO', '12:28:00', 'LA DETUBO Y PASO', 'SIN INFORMACION', 'SIN INFORMACION', NULL, 'SIN INFORMACION', 5, NULL, NULL, NULL, NULL),
(2, 44, 2, 48, '2017-11-29', 0, 1, 'DETERMINADA', '14:16:00', 'PASO ALGO Y SOLO ESO', 'SIN INFORMACION', 'SIN INFORMACION', NULL, 'SIN INFORMACION', 2, '2017-11-30', NULL, NULL, NULL);



INSERT INTO `cat_arma` (`id`, `idTipoArma`, `nombre`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 'CUCHILLO', NULL, NULL, NULL),
(2, 1, 'AK-47', NULL, NULL, NULL),
(3, 3, 'PALO CON CLAVOS', NULL, NULL, NULL),
(4, 4, 'MANOS Y PIES', NULL, NULL, NULL),
(5, 1, 'REVOLVER', NULL, NULL, NULL),
(6, 1, 'PISTOLA SEMI-AUTOMATICA', NULL, NULL, NULL),
(7, 2, 'CUTTER', NULL, NULL, NULL),
(8, 2, 'CUCHILLO DE COCINA', NULL, NULL, NULL);



INSERT INTO `cat_posible_causa` (`id`, `nombre`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'NECESISDAD', NULL, NULL, NULL),
(2, 'CODICIA', NULL, NULL, NULL),
(3, 'DROGAS', NULL, NULL, NULL),
(4, 'POR QUE QUISO', NULL, NULL, NULL);



INSERT INTO `domicilio` (`id`, `idMunicipio`, `idLocalidad`, `idColonia`, `calle`, `numExterno`, `numInterno`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 718, 27592, 972, 'SIN calle es privada', '156', 'S/N', NULL, NULL, NULL),
(3, 78, 275, 72, 'reserva territorial', '16', 'S/N', NULL, NULL, NULL),
(4, 337, 16443, 8711, 'glorieta', '58', '58A', NULL, NULL, NULL),
(6, 37, 163, 811, 'araucaria', '100', '9A', NULL, NULL, NULL),
(7, 71, 2759, 97, 'privada', '15', 'S/N', NULL, NULL, NULL);


INSERT INTO `notificacion` (`id`, `idDomicilio`, `correo`, `telefono`, `fax`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 6, '6A5FDSGA6DSG@DSAGFAS.COM', '6858144168', 'A1SFV6ASA16FS', NULL, NULL, NULL),
(3, 4, '6AG@DAS.COM', '864165168', 'A1LHILH13IL1', NULL, NULL, NULL),
(4, 3, '6A6HFDS1G@DAS.COM', '89874168', 'A6S85DH3IL1', NULL, NULL, NULL),
(5, 2, '6A61HG1G@DAS.COM', '86851468', '6A854HA', NULL, NULL, NULL);


INSERT INTO `persona` (`id`, `nombres`, `primerAp`, `segundoAp`, `fechaNacimiento`, `rfc`, `curp`, `sexo`, `idNacionalidad`, `idEtnia`, `idLengua`, `idMunicipioOrigen`, `esEmpresa`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'Juan', 'Perez', 'Perez', '2011-11-05 00:00:00', 'a4gfsas1da3ws4f1a3s', '4a5w4f3aw4dafs34dda', 'HOMBRE', 89, 13, 69, 336, 0, NULL, NULL, NULL),
(4, 'Maria', 'Gonzalez', 'Rodrigez', '1955-05-05 00:00:00', 'a4gfsas1da3ws4f1a3s', '4aFASFASFSAF34dda', 'MUJER', 8, 1, 6, 33, 0, NULL, NULL, NULL),
(5, 'Pancho', 'Lopez', 'Martinez', '1997-11-21 00:00:00', '5saf64afs46sfa', '64dsafa64sfd54dg41gn', 'HOMBRE', 132, 13, 69, 2330, 0, NULL, NULL, NULL),
(6, 'Juana', 'Cruz', 'Rebolledo', '1992-09-23 00:00:00', '46s1dg8s4dgfafsfa', 'fjsgtharg512ad3fh4', 'MUJER', 51, 13, 69, 2497, 0, NULL, NULL, NULL),
(7, 'Gonzalo', 'Cruz', 'Hernandez', '1995-01-13 00:00:00', '4asASDGASDFAsgsfasa', 'fjsgtSDGASDGASDh4', 'HOMBRE', 100, 13, 69, 2497, 0, NULL, NULL, NULL);


INSERT INTO `variables_persona` (`id`,`idCarpeta`, `idPersona`, `edad`, `telefono`, `motivoEstancia`, `idOcupacion`, `idEstadoCivil`, `idEscolaridad`, `idReligion`, `idDomicilio`, `docIdentificacion`, `numDocIdentificacion`, `lugarTrabajo`, `idDomicilioTrabajo`, `telefonoTrabajo`, `representanteLegal`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 5, 15, '952874168', 'PANCHO VIVE AQUI', 1816, 7, 5, 21, 2, 'INE', '1A6SGF4ASF1A6SF', 'UNA OFICINA ESTANDAR', 2, '885214972', 'SIN INFORMACION', NULL, NULL, NULL),
(2, 1, 5, 19, '952874168', 'PANCHO VIVE AQUI', 1816, 7, 5, 21, 2, 'INE', '1A6SGF4ASF1A6SF', 'UNA OFICINA ESTANDAR', 2, '885214972', 'SIN INFORMACION', NULL, NULL, NULL),
(3, 2, 5, 25, '952874168', 'PANCHO VIVE AQUI', 1816, 7, 5, 21, 2, 'INE', '1A6SGF4ASF1A6SF', 'UNA OFICINA ESTANDAR', 2, '885214972', 'SIN INFORMACION', NULL, NULL, NULL),
(4, 2, 5, 32, '952874168', 'PANCHO VIVE AQUI', 1816, 7, 5, 21, 2, 'INE', '1A6SGF4ASF1A6SF', 'UNA OFICINA ESTANDAR', 2, '885214972', 'SIN INFORMACION', NULL, NULL, NULL),
(5, 1, 7, 25, '7573453', 'SIN INFORMACION', 2472, 2, 8, 10, 3, 'IFE', '6A8S4F1A8S4FA6SFDASF', 'DESPACHO DE ABOGADOS', 3, '68546141835', 'SIN INFORMACION', NULL, NULL, NULL),
(6, 2, 4, 40, 'SIN INFORMACION', 'SIN INFORMACION', 1039, 7, 10, 22, 4, 'SIN INFORMACION', 'SIN INFORMACION', 'SIN INFORMACION', 1, 'SIN INFORMACION', 'SIN INFORMACION', NULL, NULL, NULL);

INSERT INTO `extra_denunciante` (`id`, `idVariablesPersona`, `idNotificacion`, `idAbogado`, `conoceAlDenunciado`, `narracion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 4, NULL, 0, 'EL ME ATACO', NULL, NULL, NULL),
(2, 3, 4, NULL, 0, 'EL ME ATACO', NULL, NULL, NULL),
(3, 6, 5, NULL, 0, 'EL SABOTEO MI COCHE', NULL, NULL, NULL);

INSERT INTO `extra_denunciado` (`id`, `idVariablesPersona`, `idNotificacion`, `idPuesto`, `alias`, `senasPartic`, `ingreso`, `periodoIngreso`, `residenciaAnterior`, `idAbogado`, `personasBajoSuGuarda`, `perseguidoPenalmente`, `vestimenta`, `narracion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 4, 1, 8, 'EL CAPO', 'ESTA LOCO', 0, 'NINGUNO', 'NINGUNA', NULL, 0, 0, 'PANTALON MILITAR', 'PASABA POR AHI', NULL, NULL, NULL),
(2, 2, 1, 8, 'EL CAPO', 'ESTA LOCO', 0, 'NINGUNO', 'NINGUNA', NULL, 0, 0, 'PANTALON MILITAR', 'PASABA POR AHI', NULL, NULL, NULL),
(3, 5, 1, 8, 'CHAPARRO', 'ESTA DEMENTE Y LOCO', 0, 'NINGUNO', 'NINGUNA', NULL, 0, 0, 'ZAPATOS Y PANTALON', 'PASABA POR AHI', NULL, NULL, NULL);



INSERT INTO `tipif_delito` (`id`, `idCarpeta`, `idDelito`, `conViolencia`, `idArma`, `idPosibleCausa`, `idModalidad`, `formaComision`, `consumacion`, `fecha`, `hora`, `idZona`, `idLugar`, `idDomicilio`, `entreCalle`, `yCalle`, `calleTrasera`, `puntoReferencia`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 2, 0, 6, 2, 1, 'CULPOSO', 'INSTANTANEA', '2017-11-07', '11:22:00', 4, 15, 7, 'SIN INFORMACION', 'SIN INFORMACION', 'SIN INFORMACION', 'SIN INFORMACION', NULL, NULL, NULL),
(2, 1, 9, 1, 4, 3, 2, 'CULPOSO', 'INSTANTANEA', '2017-11-29', '17:40:00', 1, 20, 4, 'SIN INFORMACION', 'SIN INFORMACION', 'SIN INFORMACION', 'SIN INFORMACION', NULL, NULL, NULL),
(3, 2, 134, 0, 5, 4, 2, 'DOLOSO', 'PERMANENTE', '2017-11-30', '12:00:00', 3, 24, 2, 'SIN INFORMACION', 'SIN INFORMACION', 'SIN INFORMACION', 'SIN INFORMACION', NULL, NULL, NULL);


INSERT INTO `vehiculo` (`id`, `idTipifDelito`, `status`, `placas`, `idEstado`, `idSubmarca`, `modelo`, `nrpv`, `idColor`, `permiso`, `numSerie`, `numMotor`, `idTipoVehiculo`, `idTipoUso`, `senasPartic`, `idProcedencia`, `idAseguradora`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, 'ROBADO', 'A4S1GF', 22, 2433, 2010, 'A5S1FAS1FD3AS1D', 20, 'SIN INFORMACION', 'AF13ASF3AS1D3SA1D', 'F14A3F1A3S5FD1A3S5F1A3S15FA3S1D', 21, 3, '6AS4FD6AS1DASFASDAS4FAS1DA', 3, 19, NULL, NULL, NULL),
(2, 1, 'INVOLUCRADO', 'A6SD5G1', 24, 1649, 2017, 'SINASF14ASF41A', 10, 'SIN PERMISO', '5A85S41FASDF41AFEDSA', 'S54D1GFSADF1A3SFA3SFD', 20, 14, 'NINGUNA', 2, 12, NULL, NULL, NULL);


INSERT INTO `acusacion` (`id`, `idCarpeta`, `idDenunciante`, `idTipifDelito`, `idDenunciado`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 1, 3, NULL, NULL, NULL),
(2, 1, 2, 2, 1, NULL, NULL, NULL),
(3, 2, 3, 3, 2, NULL, NULL, NULL);


