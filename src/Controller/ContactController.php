<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class ContactController extends AbstractController
{
    // /**
    //  * @Route("/contact", name="contact")
    //  */
    // public function contactForm(Request $request, MailerInterface $mailer): Response
    // {
    //     if ($request->isMethod('POST')) {
    //         // Récupérer les données du formulaire
    //         $nom = $request->request->get('nom');
    //         $email = $request->request->get('email');
    //         $objet = $request->request->get('objet');
    //         $message = $request->request->get('message');

    //         // Envoyer l'e-mail
    //         $email = (new Email())
    //             ->from($email)
    //             ->to('aissata001@hotmail.fr') // Remplacez par votre adresse e-mail
    //             ->subject($objet)
    //             ->text($message);

    //         $mailer->send($email);

    //         // Rediriger après l'envoi du formulaire
    //         return $this->redirectToRoute('confirmation');
    //     }

    //     $this->addFlash(
    //         'success',
    //         'Votre message a été evoyé avec succès !'
    //     );

    //     // Afficher le formulaire
    //     return $this->render('home');
    // }
}
