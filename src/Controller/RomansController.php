<?php

namespace App\Controller;

use App\Entity\Roman;
use App\Form\RomanType;
use App\Repository\RomanRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/romans")
 */
class RomansController extends AbstractController
{
    /**
     * @Route("/index", name="romans_index", methods={"GET"})
     */
    public function index(RomanRepository $romanRepository): Response
    {
        return $this->render('romans/index.html.twig', [
            'roman' => $romanRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="romans_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $roman = new Roman();
        $form = $this->createForm(RomanType::class, $roman);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($roman);
            $entityManager->flush();

            return $this->redirectToRoute('romans_index');
        }

        return $this->render('romans/new.html.twig', [
            'roman' => $roman,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="romans_show", methods={"GET"})
     */
    public function show(Roman $roman): Response
    {
        return $this->render('romans/show.html.twig', [
            'roman' => $roman,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="romans_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Roman $roman): Response
    {
        $form = $this->createForm(RomanType::class, $roman);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash(
                'info',
                'Modification enregistrée avec succès !'
            );
            return $this->redirectToRoute('romans_index');
        }

        return $this->render('romans/edit.html.twig', [
            'roman' => $roman,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="romans_delete", methods={"POST"})
     */
    public function delete(Request $request, Roman $roman): Response
    {
        if ($this->isCsrfTokenValid('delete'.$roman->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($roman);
            $entityManager->flush();
        }

        return $this->redirectToRoute('romans_index');
    }
}
