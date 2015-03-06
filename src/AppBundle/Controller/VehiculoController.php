<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class VehiculoController extends Controller
{
    /**
     * @Route("/vehiculo/tipos", name="tipo_vehiculo_listar")
     */
    public function listarTipos()
    {
        $em = $this->getDoctrine()->getManager();
        $tipos = $em->getRepository('AppBundle:TipoVehiculo')
            ->findAll();
        dump($tipos);
        return $this->render('AppBundle:Default:listar_tipos.html.twig', [
            'tipos_vehiculos' => $tipos
        ]);
    }
}
