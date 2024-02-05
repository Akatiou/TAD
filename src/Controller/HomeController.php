<?php

namespace App\Controller;

use App\Entity\Contact;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home", methods={"GET","POST"})
     */
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        // Si le formulaire est soumis
        if ($request->isMethod('POST')) {
            // Récupérer les données du formulaire
            $nom = $request->request->get('nom');
            $email = $request->request->get('email');
            $objet = $request->request->get('objet');
            $message = $request->request->get('message');

            // Créer une nouvelle instance de l'entité Contact
            $contact = new Contact();
            $contact->setNom($nom);
            $contact->setEmail($email);
            $contact->setObjet($objet);
            $contact->setMessage($message);

            // Persister l'entité dans la base de données
            $entityManager->persist($contact);

            $entityManager->flush();

            // Vous pouvez également ajouter un message de succès ou rediriger vers une autre page ici

            $this->addFlash('success', "Merci de nous avoir contacté $nom. Votre message a été envoyé avec succès !");
        }

        return $this->render('home/home.html.twig', [
            'controller_name' => 'HomeController',
            // 'contact' => $contact,
        ]);
    }
}
