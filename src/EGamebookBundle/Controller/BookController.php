<?php

namespace EGamebookBundle\Controller;

use EGamebookBundle\Entity\Book;
use EGamebookBundle\Entity\Fichier;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Book controller.
 *
 */
class BookController extends Controller
{
    /**
     * Lists all book entities.
     *
     */
    public function indexAction()
    {

        $em = $this->getDoctrine()->getManager();

        $books = $em->getRepository('EGamebookBundle:Book')->findByUser($this->getUser()->getId());


        return $this->render('@EGamebook/book/index.html.twig', array(
            'books' => $books,
        ));
    }

    /**
     * Creates a new book entity.
     *
     */
    public function newAction(Request $request)
    {
        $book = new Book();

        $form = $this->createForm('EGamebookBundle\Form\BookType', $book);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();

            $book->setUser($this->getUser());

            $book->getFichiers()->upload($book->getFichiers()->files);

            $em->persist($book);

            $em->flush();

            return $this->redirectToRoute('book_show', array('id' => $book->getId()));
        }

        return $this->render('@EGamebook/book/new.html.twig', array(
            'book' => $book,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a book entity.
     *
     */
    public function showAction(Book $book)
    {

        $em = $this->getDoctrine()->getManager();
        $deleteForm = $this->createDeleteForm($book);
        $chapters = $em->getRepository('EGamebookBundle:Chapters')->findByBook($book);


        return $this->render('@EGamebook/book/show.html.twig', array(
            'chapters' => $chapters,
            'book' => $book,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing book entity.
     *
     */
    public function editAction(Request $request, Book $book)
    {
        $deleteForm = $this->createDeleteForm($book);

        $editForm = $this->createForm('EGamebookBundle\Form\BookType', $book);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('book_edit', array('id' => $book->getId()));
        }

        return $this->render('@EGamebook/book/edit.html.twig', array(
            'book' => $book,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a book entity.
     *
     */
    public function deleteAction(Request $request, Book $book)
    {
        $form = $this->createDeleteForm($book);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($book);
            $em->flush();
        }

        return $this->redirectToRoute('book_index');
    }

    /**
     * Creates a form to delete a book entity.
     *
     * @param Book $book The book entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Book $book)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('book_delete', array('id' => $book->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
