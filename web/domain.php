<?php
//
// Copyright (c) ZeroC, Inc. All rights reserved.
//
//
// Ice version 3.7.4
//
// <auto-generated>
//
// Generated from file `domain.ice'
//
// Warning: do not edit this file.
//
// </auto-generated>
//


namespace model
{
    global $model__t_Genero;
    class Genero
    {
        const MASCULINO = 0;
        const FEMENINO = 1;
        const OTRO = 2;
    }

    $model__t_Genero = IcePHP_defineEnum('::model::Genero', array('MASCULINO', 0, 'FEMENINO', 1, 'OTRO', 2));
}

namespace model
{
    global $model__t_Rol;
    class Rol
    {
        const ESTUDIANTE = 0;
        const ACADEMICO = 1;
        const FUNCIONARIO = 2;
    }

    $model__t_Rol = IcePHP_defineEnum('::model::Rol', array('ESTUDIANTE', 0, 'ACADEMICO', 1, 'FUNCIONARIO', 2));
}

namespace model
{
    global $model__t_Persona;
    class Persona extends \Ice\Value
    {
        public function __construct($rut='', $nombre='', $genero=\model\Genero::MASCULINO, $email='', $fono='', $movil='', $unidadAcademica='', $rol=\model\Rol::ESTUDIANTE)
        {
            $this->rut = $rut;
            $this->nombre = $nombre;
            $this->genero = $genero;
            $this->email = $email;
            $this->fono = $fono;
            $this->movil = $movil;
            $this->unidadAcademica = $unidadAcademica;
            $this->rol = $rol;
        }

        public function ice_id()
        {
            return '::model::Persona';
        }

        public static function ice_staticId()
        {
            return '::model::Persona';
        }

        public function __toString()
        {
            global $model__t_Persona;
            return IcePHP_stringify($this, $model__t_Persona);
        }

        public $rut;
        public $nombre;
        public $genero;
        public $email;
        public $fono;
        public $movil;
        public $unidadAcademica;
        public $rol;
    }

    global $Ice__t_Value;
    global $IcePHP__t_string;
    global $model__t_Genero;
    global $model__t_Rol;
    $model__t_Persona = IcePHP_defineClass('::model::Persona', '\\model\\Persona', -1, false, false, $Ice__t_Value, array(
        array('rut', $IcePHP__t_string, false, 0),
        array('nombre', $IcePHP__t_string, false, 0),
        array('genero', $model__t_Genero, false, 0),
        array('email', $IcePHP__t_string, false, 0),
        array('fono', $IcePHP__t_string, false, 0),
        array('movil', $IcePHP__t_string, false, 0),
        array('unidadAcademica', $IcePHP__t_string, false, 0),
        array('rol', $model__t_Rol, false, 0)));
}

namespace model
{
    global $model__t_Vehiculo;
    class Vehiculo extends \Ice\Value
    {
        public function __construct($rut='', $patente='', $marca='', $modelo='', $anio=0, $observacion='', $color='')
        {
            $this->rut = $rut;
            $this->patente = $patente;
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->anio = $anio;
            $this->observacion = $observacion;
            $this->color = $color;
        }

        public function ice_id()
        {
            return '::model::Vehiculo';
        }

        public static function ice_staticId()
        {
            return '::model::Vehiculo';
        }

        public function __toString()
        {
            global $model__t_Vehiculo;
            return IcePHP_stringify($this, $model__t_Vehiculo);
        }

        public $rut;
        public $patente;
        public $marca;
        public $modelo;
        public $anio;
        public $observacion;
        public $color;
    }

    global $Ice__t_Value;
    global $IcePHP__t_string;
    global $IcePHP__t_int;
    $model__t_Vehiculo = IcePHP_defineClass('::model::Vehiculo', '\\model\\Vehiculo', -1, false, false, $Ice__t_Value, array(
        array('rut', $IcePHP__t_string, false, 0),
        array('patente', $IcePHP__t_string, false, 0),
        array('marca', $IcePHP__t_string, false, 0),
        array('modelo', $IcePHP__t_string, false, 0),
        array('anio', $IcePHP__t_int, false, 0),
        array('observacion', $IcePHP__t_string, false, 0),
        array('color', $IcePHP__t_string, false, 0)));
}

namespace model
{
    global $model__t_Porteria;
    class Porteria
    {
        const SANGRA = 0;
        const SUR = 1;
        const CERRO = 2;
    }

    $model__t_Porteria = IcePHP_defineEnum('::model::Porteria', array('SANGRA', 0, 'SUR', 1, 'CERRO', 2));
}

namespace model
{
    global $model__t_Acceso;
    class Acceso extends \Ice\Value
    {
        public function __construct($uid=0, $horaEntrada='', $patente='', $porteria=\model\Porteria::SANGRA)
        {
            $this->uid = $uid;
            $this->horaEntrada = $horaEntrada;
            $this->patente = $patente;
            $this->porteria = $porteria;
        }

        public function ice_id()
        {
            return '::model::Acceso';
        }

        public static function ice_staticId()
        {
            return '::model::Acceso';
        }

        public function __toString()
        {
            global $model__t_Acceso;
            return IcePHP_stringify($this, $model__t_Acceso);
        }

        public $uid;
        public $horaEntrada;
        public $patente;
        public $porteria;
    }

    global $Ice__t_Value;
    global $IcePHP__t_int;
    global $IcePHP__t_string;
    global $model__t_Porteria;
    $model__t_Acceso = IcePHP_defineClass('::model::Acceso', '\\model\\Acceso', -1, false, false, $Ice__t_Value, array(
        array('uid', $IcePHP__t_int, false, 0),
        array('horaEntrada', $IcePHP__t_string, false, 0),
        array('patente', $IcePHP__t_string, false, 0),
        array('porteria', $model__t_Porteria, false, 0)));
}

namespace model
{
    global $model__t_Personas;

    if(!isset($model__t_Personas))
    {
        global $model__t_Persona;
        $model__t_Personas = IcePHP_defineSequence('::model::Personas', $model__t_Persona);
    }
}

namespace model
{
    global $model__t_Vehiculos;

    if(!isset($model__t_Vehiculos))
    {
        global $model__t_Vehiculo;
        $model__t_Vehiculos = IcePHP_defineSequence('::model::Vehiculos', $model__t_Vehiculo);
    }
}

namespace model
{
    global $model__t_Accesos;

    if(!isset($model__t_Accesos))
    {
        global $model__t_Acceso;
        $model__t_Accesos = IcePHP_defineSequence('::model::Accesos', $model__t_Acceso);
    }
}

namespace model
{
    global $model__t_PersonaException;
    class PersonaException extends \Ice\UserException
    {
        public function __construct($msg='')
        {
            $this->msg = $msg;
        }

        public function ice_id()
        {
            return '::model::PersonaException';
        }

        public function __toString()
        {
            global $model__t_PersonaException;
            return IcePHP_stringifyException($this, $model__t_PersonaException);
        }

        public $msg;
    }
    global $IcePHP__t_string;

    $model__t_PersonaException = IcePHP_defineException('::model::PersonaException', '\\model\\PersonaException', false, null, array(
        array('msg', $IcePHP__t_string, false, 0)));
}

namespace model
{
    global $model__t_VehicleException;
    class VehicleException extends \Ice\UserException
    {
        public function __construct($msg='')
        {
            $this->msg = $msg;
        }

        public function ice_id()
        {
            return '::model::VehicleException';
        }

        public function __toString()
        {
            global $model__t_VehicleException;
            return IcePHP_stringifyException($this, $model__t_VehicleException);
        }

        public $msg;
    }
    global $IcePHP__t_string;

    $model__t_VehicleException = IcePHP_defineException('::model::VehicleException', '\\model\\VehicleException', false, null, array(
        array('msg', $IcePHP__t_string, false, 0)));
}

namespace model
{
    global $model__t_Contratos;
    global $model__t_ContratosPrx;

    class ContratosPrxHelper
    {
        public static function checkedCast($proxy, $facetOrContext=null, $context=null)
        {
            return $proxy->ice_checkedCast('::model::Contratos', $facetOrContext, $context);
        }

        public static function uncheckedCast($proxy, $facet=null)
        {
            return $proxy->ice_uncheckedCast('::model::Contratos', $facet);
        }

        public static function ice_staticId()
        {
            return '::model::Contratos';
        }
    }
    $model__t_Contratos = IcePHP_defineClass('::model::Contratos', '\\model\\Contratos', -1, false, true, null, null);

    global $Ice__t_ObjectPrx;
    $model__t_ContratosPrx = IcePHP_defineProxy('::model::Contratos', $Ice__t_ObjectPrx, null);

    global $IcePHP__t_string;
    global $model__t_Porteria;
    global $model__t_Acceso;
    global $model__t_Persona;
    global $model__t_Vehiculo;
    IcePHP_defineOperation($model__t_ContratosPrx, 'registrarAcceso', 0, 0, 0, array(array($IcePHP__t_string), array($model__t_Porteria)), null, array($model__t_Acceso), array($model__t_VehicleException));
    IcePHP_defineOperation($model__t_ContratosPrx, 'registrarPersona', 0, 0, 0, array(array($model__t_Persona)), null, null, array($model__t_PersonaException));
    IcePHP_defineOperation($model__t_ContratosPrx, 'registrarVehiculo', 0, 0, 0, array(array($model__t_Vehiculo)), null, null, array($model__t_VehicleException));
}

namespace model
{
    global $model__t_Sistema;
    global $model__t_SistemaPrx;

    class SistemaPrxHelper
    {
        public static function checkedCast($proxy, $facetOrContext=null, $context=null)
        {
            return $proxy->ice_checkedCast('::model::Sistema', $facetOrContext, $context);
        }

        public static function uncheckedCast($proxy, $facet=null)
        {
            return $proxy->ice_uncheckedCast('::model::Sistema', $facet);
        }

        public static function ice_staticId()
        {
            return '::model::Sistema';
        }
    }
    $model__t_Sistema = IcePHP_defineClass('::model::Sistema', '\\model\\Sistema', -1, false, true, null, null);

    global $Ice__t_ObjectPrx;
    $model__t_SistemaPrx = IcePHP_defineProxy('::model::Sistema', $Ice__t_ObjectPrx, null);

    global $model__t_Personas;
    global $model__t_Vehiculos;
    global $model__t_Accesos;
    global $IcePHP__t_long;
    IcePHP_defineOperation($model__t_SistemaPrx, 'getPersonas', 0, 0, 0, null, null, array($model__t_Personas), null);
    IcePHP_defineOperation($model__t_SistemaPrx, 'getVehiculos', 0, 0, 0, null, null, array($model__t_Vehiculos), null);
    IcePHP_defineOperation($model__t_SistemaPrx, 'getAcccesos', 0, 0, 0, null, null, array($model__t_Accesos), null);
    IcePHP_defineOperation($model__t_SistemaPrx, 'getDelay', 0, 0, 0, array(array($IcePHP__t_long)), null, array($IcePHP__t_long), null);
}
?>
