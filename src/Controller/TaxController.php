<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TaxController extends AbstractController
{
    /**
     *  @Route("/taxas", name="tax")
     */
    public function index()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/TaxController.php',
        ]);
    }

        /**
     *  @Route("/taxas/salario-liquido", name="tax-salario-liquido")
     */
    public function salario_liquido()
    {
        return $this->json([
            'nome' => 'Salário líquido',
            'valor' => '1200,00',
        ]);
    }
}
