<?php

namespace EGamebookBundle\Controller;

use EGamebookBundle\Entity\Book;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EGamebookBundle\Entity\Chapters;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ViewController extends Controller
{

    public function listBooksAction()
    {
        return $this->render('@EGamebook/nonUsers/index.html.twig');
    }
    public function introBookAction()
    {


        return $this->render('@EGamebook/nonUsers/introBook.html.twig');
    }


    public function readBookAction($number, $id)
    {

        $em = $this->getDoctrine()->getManager();
        $chapter = $em->getRepository('EGamebookBundle:Chapters')->getChaptersNumber($number, $id);
//        dump($chapter);die();
        $chaptera = $chapter[0];

        return $this->render('@EGamebook/nonUsers/readBook.html.twig', array(
            'chapter' => $chaptera,
            'idB' => $id
        ));
    }
    public function aboutAction()
    {
        return $this->render('@EGamebook/user/index.html.twig');
    }
    public function firstPageAction()
    {
        return $this->render('@EGamebook/nonUsers/firstPage.html.twig');
    }
    public function introPresAction()
    {
        return $this->render('@EGamebook/nonUsers/introBook.html.twig');
    }
    public function unAction()
    {
        return $this->render('@EGamebook/user/chap_1.html.twig');
    }
    public function deuxunAction()
    {
        return $this->render('@EGamebook/user/chap_2_1.html.twig');
    }
    public function deuxdeuxAction()
    {
        return $this->render('@EGamebook/user/chap_2_2.html.twig');
    }
    public function troisunAction()
    {
        return $this->render('@EGamebook/user/chap_3_1.html.twig');
    }
    public function troisdeuxAction()
    {
        return $this->render('@EGamebook/user/chap_3_2.html.twig');
    }
    public function troistroisAction()
    {
        return $this->render('@EGamebook/user/chap_3_3.html.twig');
    }
    public function troisquatreAction()
    {
        return $this->render('@EGamebook/user/chap_3_4.html.twig');
    }
    public function quatreunAction()
    {
        return $this->render('@EGamebook/user/chap_4_1.html.twig');
    }
    public function quatredeuxAction()
    {
        return $this->render('@EGamebook/user/chap_4_2.html.twig');
    }
    public function quatretroisAction()
    {
        return $this->render('@EGamebook/user/chap_4_3.html.twig');
    }
    public function quatrequatreAction()
    {
        return $this->render('@EGamebook/user/chap_4_4.html.twig');
    }public function quatrecinqAction()
{
    return $this->render('@EGamebook/user/chap_4_5.html.twig');
}   public function quatresixAction()
{
    return $this->render('@EGamebook/user/chap_4_6.html.twig');
}
    public function quatreseptAction()
    {
        return $this->render('@EGamebook/user/chap_4_7.html.twig');
    }
    public function quatrehuitAction()
    {
        return $this->render('@EGamebook/user/chap_4_8.html.twig');
    }

}

