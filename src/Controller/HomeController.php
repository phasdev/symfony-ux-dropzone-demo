<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\UX\Dropzone\Form\DropzoneType;

class HomeController extends AbstractController
{
    #[Route('/')]
    public function home(): Response
    {
        $form = $this->createFormBuilder()
            ->add('files', DropzoneType::class, [
                'multiple' => true,
                'preview' => [
                    'style' => 'block',
                    'can_toggle_placeholder' => true,
                    'can_open_file_picker' => true,
                ]
            ])
            ->getForm();

        return $this->render('base.html.twig', [
            'form' => $form,
        ]);
    }
}