<?php

namespace App\Controller;

use App\Entity\Soutient;
use App\Form\SoutientType;
use App\Repository\SoutientRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/soutient')]
final class SoutientController extends AbstractController
{
    #[Route(name: 'app_soutient_index', methods: ['GET'])]
    public function index(SoutientRepository $soutientRepository): Response
    {
        return $this->render('soutient/index.html.twig', [
            'soutients' => $soutientRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_soutient_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $soutient = new Soutient();
        $form = $this->createForm(SoutientType::class, $soutient);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($soutient);
            $entityManager->flush();

            return $this->redirectToRoute('app_soutient_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('soutient/new.html.twig', [
            'soutient' => $soutient,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_soutient_show', methods: ['GET'])]
    public function show(Soutient $soutient): Response
    {
        return $this->render('soutient/show.html.twig', [
            'soutient' => $soutient,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_soutient_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Soutient $soutient, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(SoutientType::class, $soutient);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_soutient_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('soutient/edit.html.twig', [
            'soutient' => $soutient,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_soutient_delete', methods: ['POST'])]
    public function delete(Request $request, Soutient $soutient, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$soutient->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($soutient);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_soutient_index', [], Response::HTTP_SEE_OTHER);
    }
}
