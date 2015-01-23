<?php


class Controller_Portfolio extends Controller
{
    function __construct()
    {
        $this->model = new Model_Portfolio();
        $this->view = new View();
    }

    function action_index()
    {
        $this->view->generate('main_view.php', 'template_view.php');
    }

    function id($id)
    {
        $data = $this->model->get_data();
        $this->view->generate('sites/id_view.php', 'template_view.php', $data, $id);
    }
}

?>