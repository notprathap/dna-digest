<?php

namespace API\Bundle\RestBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

class DefaultController extends FOSRestController
{
    public function indexAction($name)
    {
        return $this->render('APIRestBundle:Default:index.html.twig', array('name' => $name));
    }

    /**
     * This is the documentation description of your method, it will appear
     * on a specific pane. It will read all the text until the first
     * annotation.
     *
     * @ApiDoc(
     *  resource=true,
     *  description="Get all dataset descriptions",
     *  filters={
     *      {"name"="search-term", "dataType"="string"}
     *  },
     * output="API\Bundle\RestBundle\Entity\Item"
     * )
     */
    public function getItemsAction()
    {
        $view = $this->view(['item1', 'item2'], 200);

        return $this->handleView($view);
    }
}
