<?php
namespace App\Controller;


use App\Entity\Contact;
use App\Form\ContactType;
use App\Repository\DepartementRepository;
use App\Repository\LieuRepository;
use App\Repository\VilleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    public function index(): Response
    {
    return $this->render('pages/home.html.twig');
    }

    /**
     * @Route("/departement-{id}", requirements={"id": "\d+"})
     */
    public function departement(
        int $id,
        VilleRepository $repository_ville,
        DepartementRepository $repository_departement
    ): Response

    {
        $departement = $repository_departement->findOneBy(
            ['id' => $id]);
        $villes = $repository_ville->findBy(
            ['code_postal' => $id]
        );
        return $this->render('pages/departement.html.twig',[
            'villes' => $villes,
            'departement' => $departement
            ]);
    }




    /**
     * @Route("/departement-{id}/{ville}")
     */
    public function ville(
        int $id,
        string $ville,
        VilleRepository $repository_ville,
        LieuRepository $repository_lieu
    ): Response
    {
        $villeHome = $repository_ville->findOneBy(
            ['nom' => $ville]);
        $lieux = $repository_lieu->findBy(
            ['VilleReferente' => $ville ,'code_postal' => $id]
        );
        return $this->render('pages/ville.html.twig',[
            'lieux' => $lieux,
            'villeHome' => $villeHome
        ]);
    }




    /**
     * @Route("/departement-{id}/{ville}/{lieu}")
     */
    public function lieu(
        int $id,
        string $ville,
        string $lieu,
        LieuRepository $repository_lieu): Response
    {
        $lieuEntier = $repository_lieu->findOneBy(
            ['VilleReferente' => $ville, 'nom' => $lieu]);

        return $this->render('pages/lieu.html.twig',[
            'lieuEntier' => $lieuEntier
        ]);
    }




    /**
     * @Route("/notre-selection")
     */
    public function selection(LieuRepository $repository_lieu): Response
    {
        $lieux = $repository_lieu->findBy(
            ['notre_selection' => '1']
        );
        return $this->render('pages/notre-selection.html.twig',[
            'lieux' => $lieux
        ]);
    }




    /**
     * @Route("/les-plus-visites")
     */
    public function visite(LieuRepository $repository_lieu): Response
    {
        $lieux = $repository_lieu->findBy(
            ['plus_visite' => '1']
        );
        return $this->render('pages/les-plus-visite.html.twig',[
            'lieux' => $lieux
        ]);
    }




    /**
     * @Route("/notre-equipe")
     */
    public function nous(): Response
    {
        return $this->render('pages/notre-equipe.html.twig');
    }




    /**
     * @Route("/contact")
     */
    public function contact(Request $request,EntityManagerInterface $manager): Response
    {
        $contact = New Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $manager->persist($contact);
            $manager->flush();
            $this->addFlash('success','Nous avons bien pris en compte vos informations. Notre équipe est sur le coup et vous répondra au plus vite!');
            return $this->render('pages/contact.html.twig',[
                'form' => $form->createView()
            ]);
        }

        return $this->render('pages/contact.html.twig',[
            'form' => $form->createView()
        ]);
    }
}

