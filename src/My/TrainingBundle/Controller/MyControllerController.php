<?php

namespace My\TrainingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class MyControllerController extends Controller
{
    public function indexAction()
    {
      $content = "<html>
  <body>
    <h1>My Title</h1>
    <p>
    Mauris id nunc feugiat, fermentum velit ut, placerat nibh.
    Integer vehicula orci neque, a pulvinar arcu blandit sed.
    Morbi magna quam, dapibus eget elementum at, tincidunt in velit.
    Vestibulum dignissim ante vel ex cursus, sit amet pellentesque lectus volutpat?
    Sed neque enim, hendrerit ut feugiat quis; cursus sed neque.
    Morbi ac mi eget mauris iaculis fermentum sed sit amet quam.
    Curabitur id elementum lectus, ac cursus turpis. Cras vel congue mi.
    Sed ullamcorper et lorem nec finibus. Vivamus interdum vehicula dignissim.
    Nunc ac pretium ante? Etiam eu velit eleifend, tincidunt velit sed, interdum arcu.
    Ut id nulla leo. Curabitur eu dolor eget dolor semper sagittis vel finibus dui?
    Aliquam tempor convallis rhoncus.
    </p>
  </body>
</html>";
      $response = new Response($content, 200, ['X-Controller'=> 'MyController']);
      return $response;
    }

    public function getAction($param1, $param2)
    {
      $response = new Response('', 200, ['X-Controller'=> 'MyController']);
      return $this->render('MyTrainingBundle:MyController:index.html.twig',
                            ['param1' => $param1, 'param2' => $param2 ],
                            $response);
    }

}
