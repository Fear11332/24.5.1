<?php
class Controller_Portfolio extends Controller{
    public function action_index(){
        $this->model = new Model_Portfolio();
        $this->view->generate('view_portfolio.php','template_view.php',$this->model->get_data());
    }
}
?>