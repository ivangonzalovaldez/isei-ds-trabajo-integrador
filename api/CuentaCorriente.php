<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

require_once 'modelo/CuentaCorriente.php';
require_once 'modelo/Proveedor.php';

$p1 = new Proveedor();
$p1->RazonSocial= "Adidas";
$p1->Cuit= "12-6875369-8";
$p1->Email= "adidas@gmail.com";

$cc1 = new CuentaCorriente();
$cc1->NroCuentaCorriente= 1;
$cc1->Saldo= "1500000";
$cc1->Proveedor = $p1;

$p2 = new Proveedor();
$p2->RazonSocial= "Nike";
$p2->Cuit= "59-4876259-8";
$p2->Email= "nike@gmail.com";

$cc2 = new CuentaCorriente();
$cc2->NroCuentaCorriente= 2;
$cc2->Saldo= "500000";
$cc2->Proveedor = $p2;

$p3 = new Proveedor();
$p3->RazonSocial= "Puma";
$p3->Cuit= "54-5875698-2";
$p3->Email= "puma@gmail.com";

$cc3 = new CuentaCorriente();
$cc3->NroCuentaCorriente= 3;
$cc3->Saldo= "120000";
$cc3->Proveedor = $p3;

$p4 = new Proveedor();
$p4->RazonSocial= "Fila";
$p4->Cuit= "14-5632871-5";
$p4->Email= "fila@gmail.com";

$cc4 = new CuentaCorriente();
$cc4->NroCuentaCorriente= 4;
$cc4->Saldo= "400000";
$cc4->Proveedor = $p4;

$array = array();
$array[]=$cc1;
$array[]=$cc2;
$array[]=$cc3;
$array[]=$cc4;

echo json_encode($array);
